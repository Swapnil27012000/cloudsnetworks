'use server'

export type FormState = {
    success: boolean;
    message: string;
    timestamp?: number;
}

export async function subscribeToNewsletter(prevState: FormState, formData: FormData): Promise<FormState> {
    const email = formData.get('email') as string;
    const botToken = process.env.TELEGRAM_BOT_TOKEN;
    const chatId = process.env.TELEGRAM_CHAT_ID;

    // 1. Basic Validation
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        return {
            success: false,
            message: 'Please enter a valid email address.',
        };
    }

    if (!botToken || !chatId) {
        console.error('Telegram credentials invalid or missing.');
        return {
            success: false,
            message: 'Server configuration error. Please try again later.',
        };
    }

    try {
        // 2. Prepare the message
        const timestamp = new Date().toLocaleString();
        const text = `🚀 *New Subscriber Registered*\n\n📧 *Email Address:* \`${email}\`\n🕒 *Timestamp:* \`${timestamp}\`\n*Subscription Type:* Coming Soon Website\n`;
                
            

        // 3. Send to Telegram
        const response = await fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                chat_id: chatId,
                text: text,
                parse_mode: 'Markdown',
            }),
        });

        const data = await response.json();

        if (!response.ok) {
            console.error('Telegram API Error:', data);
            return {
                success: false,
                message: 'Failed to subscribe. Please try again later.',
            };
        }

        return {
            success: true,
            message: 'Thank you! We will notify you when we launch.',
            timestamp: Date.now(),
        };

    } catch (error) {
        console.error('Submission Error:', error);
        return {
            success: false,
            message: 'An unexpected error occurred.',
        };
    }
}
