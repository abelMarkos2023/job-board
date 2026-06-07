<!DOCTYPE html>
<html lang="en" class="h-full bg-[#020617] scroll-smooth">


<x-head />

<body class="h-full bg-[#020617] text-slate-300 antialiased selection:bg-indigo-500/30 selection:text-white">

    <!-- 1. STICKY GLASSMORPHIC HEAD NAVIGATION -->
    <x-navbar />

    <main class="relative">

        <!-- GLOBAL GRAPHIC GRID BACKDROP -->
        <div class="absolute inset-0 bg-grid-pattern opacity-100 pointer-events-none z-0"></div>
        <div
            class="absolute top-20 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[600px] bg-indigo-600/5 blur-[160px] rounded-full pointer-events-none z-0 animate-subtle-glow">
        </div>

        <!-- 2. HIGH-IMPACT HERO & CONSOLE CONTEXT SECTION -->





        {{-- MARQUEE --}}
        <div class="border-b-2 border-[#0a0a0a] overflow-hidden bg-[#0a0a0a]" style="padding:0">
            @php $cos = ['Stripe', 'Figma', 'Linear', 'Vercel', 'Notion', 'Anthropic', 'Shopify', 'Retool', 'Cloudflare', 'Loom']; @endphp
            <div class="inline-flex whitespace-nowrap" style="animation:marquee 28s linear infinite">
                @foreach(array_merge($cos, $cos) as $c)
                    <span
                        class="inline-flex items-center px-8 border-r border-[#333] py-3.5 text-[14px] font-medium text-[#888]">
                        <span class="text-white mr-1.5">{{ $c }}</span> is hiring
                    </span>
                @endforeach
            </div>
        </div>

        <!-- 5. INTERACTIVE LIVE EXPERIMENTAL LIVE JOB FEED -->
        <section class="py-24 border-t border-slate-900/60 bg-[#040812]/50 backdrop-blur-sm relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Filtering Control Head -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                    <div>
                        <h2 class="text-2xl font-bold text-white sm:text-3xl tracking-tight">Active Opportunities</h2>
                        <p class="mt-1 text-sm text-slate-400">Hand-reviewed premium engineering positions available
                            right now.</p>
                    </div>
                    <!-- Feed Control Knobs -->
                    <div class="flex items-center gap-2 self-start font-mono text-xs">
                        <button
                            class="px-3 py-1.5 rounded-lg bg-indigo-600 border border-indigo-500/20 text-white font-medium shadow-sm">All
                            Matches</button>
                        <button
                            class="px-3 py-1.5 rounded-lg bg-slate-900 border border-slate-800 text-slate-400 hover:text-slate-200 transition">100%
                            Remote</button>
                        <button
                            class="px-3 py-1.5 rounded-lg bg-slate-900 border border-slate-800 text-slate-400 hover:text-slate-200 transition">Contracts</button>
                    </div>
                </div>

                <!-- Job Entry Cards Main Stack -->
                {{-- <div class="space-y-4">

                    <!-- FEED ENTRY CARD 1 -->


                    <!-- FEED ENTRY CARD 2 -->
                    <div
                        class="bg-[#090d16]/40 rounded-xl border border-slate-800/80 p-5 sm:p-6 hover:bg-[#090d16]/80 hover:border-slate-700/80 hover:shadow-xl transition-all duration-200 flex flex-col sm:flex-row sm:items-center justify-between gap-6 group">
                        <div class="flex items-start gap-4">
                            <div
                                class="size-12 rounded-xl bg-gradient-to-br from-slate-900 to-slate-950 flex-shrink-0 flex items-center justify-center font-mono font-black text-sky-400 text-base border border-slate-800 shadow-inner group-hover:border-sky-500/30 transition-all">
                                TL
                            </div>
                            <div>
                                <div class="flex items-center gap-2.5 flex-wrap">
                                    <h3
                                        class="text-base font-bold text-white group-hover:text-sky-400 transition cursor-pointer leading-snug">
                                        Senior Core UI Component Designer</h3>
                                    <span
                                        class="px-2 py-0.5 rounded bg-amber-500/10 text-amber-400 text-[10px] font-mono border border-amber-500/20">Contract</span>
                                    <span
                                        class="px-2 py-0.5 rounded bg-purple-500/10 text-purple-400 text-[10px] font-mono border border-purple-500/20">Hybrid</span>
                                </div>
                                <p class="text-sm font-medium text-slate-400 mt-1">TailwindLabs • Austin, TX</p>
                                <div
                                    class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-slate-500 mt-3 font-mono">
                                    <span class="flex items-center gap-1"><span
                                            class="size-1.5 rounded-full bg-slate-700"></span> Rate: $90 –
                                        $115/hr</span>
                                    <span class="flex items-center gap-1"><span
                                            class="size-1.5 rounded-full bg-slate-700"></span> Stack: Tailwind CSS,
                                        Blade, Vue3</span>
                                    <span class="flex items-center gap-1 text-slate-600"><svg class="size-3.5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v6l4 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg> 1 day ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 sm:self-center self-end w-full sm:w-auto shrink-0">
                            <button
                                class="p-2.5 rounded-lg border border-slate-800 hover:border-rose-500/40 text-slate-500 hover:text-rose-400 hover:bg-rose-500/5 transition duration-150">
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <a href="#"
                                class="flex-1 sm:flex-none text-center px-4 py-2 bg-slate-900 group-hover:bg-sky-600 text-slate-300 group-hover:text-white text-xs font-semibold rounded-lg border border-slate-800 group-hover:border-sky-500/40 shadow-sm transition-all duration-200">
                                View Specification
                            </a>
                        </div>
                    </div>

                </div> --}}

                <div class="space-y-4">
                    {{ $slot }}
                </div>
                <!-- End Stack -->

                <!-- Pagination Loop Link placeholder -->
                <div class="mt-12 text-center">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-slate-950 hover:bg-slate-900 text-slate-300 hover:text-white text-xs font-mono border border-slate-800 transition">
                        <span>Fetch Remaining Records From DB</span> <span class="text-indigo-400">→</span>
                    </a>
                </div>

            </div>
        </section>





    </main>

    <!-- 8. MINIMALIST CONSOLE FOOTER SYSTEM -->
    <x-footer />

</body>

</html>