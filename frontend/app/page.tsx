import { Cloud } from "lucide-react";
import NewsletterForm from "@/components/NewsletterForm";

export default function Home() {
  return (
    <div className="relative min-h-screen flex flex-col items-center justify-center bg-black text-white overflow-hidden font-sans selection:bg-blue-500/30">
      {/* Background Gradients */}
      <div className="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-[radial-gradient(circle,rgba(147,51,234,0.2)_0%,transparent_70%)] pointer-events-none" />
      <div className="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-[radial-gradient(circle,rgba(37,99,235,0.2)_0%,transparent_70%)] pointer-events-none" />

      {/* Grid Pattern Overlay */}
      <div className="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none" />

      <div className="relative z-10 max-w-4xl px-6 text-center">
        <div className="flex items-center justify-center gap-3 mb-8 opacity-0 animate-fade-in-up">
          <div className="p-2 bg-white/5 rounded-lg border border-white/10 backdrop-blur-sm">
            <Cloud className="w-6 h-6 text-blue-400" />
          </div>
          <span className="text-xl font-semibold tracking-tight text-white/90">
            Clouds Networks
          </span>
        </div>

        <h1 className="opacity-0 animate-fade-in-up delay-100 text-5xl sm:text-7xl md:text-8xl font-bold tracking-tighter mb-8 bg-clip-text text-transparent bg-gradient-to-b from-white via-white to-white/40">
          Future <br /> Loading...
        </h1>

        <p className="opacity-0 animate-fade-in-up delay-200 text-lg sm:text-xl text-neutral-400 mb-12 max-w-2xl mx-auto leading-relaxed">
          We are architecting a new era of digital infrastructure. <br className="hidden sm:block" />
          Be the first to experience the revolution.
        </p>

        <div className="opacity-0 animate-fade-in-up delay-300 w-full animate-in fade-in slide-in-from-bottom-8 duration-1000 fill-mode-both delay-300">
          <NewsletterForm />
        </div>

        <div className="opacity-0 animate-fade-in-up delay-500 mt-20 flex items-center justify-center gap-6 text-neutral-600">
          <span className="text-sm uppercase tracking-widest">Constructing</span>
          <div className="w-px h-4 bg-neutral-800" />
          <span className="text-sm uppercase tracking-widest">Optimizing</span>
          <div className="w-px h-4 bg-neutral-800" />
          <span className="text-sm uppercase tracking-widest">Launching Soon</span>
        </div>
      </div>
    </div>
  );
}
