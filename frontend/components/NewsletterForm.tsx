'use client';

import { useActionState } from 'react';
import { Mail, ArrowRight, Loader2, CheckCircle2 } from 'lucide-react';
import { subscribeToNewsletter } from '@/app/actions';

const initialState = {
    success: false,
    message: '',
};

export default function NewsletterForm() {
    const [state, formAction, isPending] = useActionState(subscribeToNewsletter, initialState);

    return (
        <div className="w-full max-w-md mx-auto">
            <form action={formAction} className="flex flex-col gap-4">
                {/* Success Message State */}
                {state.success ? (
                    <div className="p-4 bg-green-500/10 border border-green-500/20 rounded-xl flex items-center gap-3 text-green-400 animate-in fade-in slide-in-from-bottom-2">
                        <CheckCircle2 className="w-5 h-5 flex-shrink-0" />
                        <p className="font-medium text-sm">{state.message}</p>
                    </div>
                ) : (
                    <div className="flex flex-col sm:flex-row items-center gap-4">
                        <div className="relative w-full group">
                            <div className="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <Mail className="h-5 w-5 text-neutral-500 group-focus-within:text-blue-400 transition-colors" />
                            </div>
                            <input
                                type="email"
                                name="email"
                                required
                                disabled={isPending}
                                placeholder="Enter your email address"
                                className="w-full pl-11 pr-4 py-4 bg-white/5 border border-white/10 rounded-xl focus:outline-none focus:ring-1 focus:ring-blue-500/50 focus:border-blue-500/50 text-white placeholder-neutral-500 transition-all hover:bg-white/10 disabled:opacity-50 disabled:cursor-not-allowed"
                            />
                        </div>

                        <button
                            type="submit"
                            disabled={isPending}
                            className="w-full sm:w-auto px-8 py-4 bg-white text-black font-semibold rounded-xl transition-all hover:bg-neutral-200 hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center gap-2 group whitespace-nowrap cursor-pointer disabled:opacity-70 disabled:cursor-wait"
                        >
                            {isPending ? (
                                <>
                                    <Loader2 className="w-4 h-4 animate-spin" />
                                    Sending...
                                </>
                            ) : (
                                <>
                                    Notify Me
                                    <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                                </>
                            )}
                        </button>
                    </div>
                )}

                {/* Error Message */}
                {!state.success && state.message && (
                    <p className="text-red-400 text-sm text-center animate-in fade-in">{state.message}</p>
                )}
            </form>
        </div>
    );
}
