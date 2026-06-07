<div class="grid border-b-2 border-[#0a0a0a]" style="grid-template-columns:1fr 1fr">
    <div class="px-16 py-20 bg-[#0a0a0a] text-[#fafaf7]">
        <h2 class="font-black tracking-[-2.5px] leading-none text-[52px] mb-5" style="font-family:'Syne',sans-serif">
            Your next<br>chapter starts<br>now.
        </h2>
        <p class="text-[#999] text-[16px] mb-9 leading-relaxed">
            Create a free profile in 2 minutes. Get discovered by top companies actively hiring right now.
        </p>
        <div class="flex gap-3 flex-wrap">
            <a href="#"
                class="bg-[#fafaf7] text-[#0a0a0a] text-[15px] font-semibold px-7 py-3.5 rounded-full hover:bg-[#d4f000] transition-colors">
                Create free profile
            </a>
            <a href="#"
                class="border-2 border-[#333] text-[#777] text-[15px] font-medium px-7 py-3.5 rounded-full hover:border-[#666] transition-colors">
                Browse all jobs
            </a>
        </div>
    </div>
    <div class="px-16 py-20 bg-[#5c5d4e]">
        <h3 class="font-black tracking-[-1.5px] text-[36px] mb-4" style="font-family:'Syne',sans-serif">
            Hiring? We've got you covered.
        </h3>
        <p class="text-[#fefafa] text-[15px] mb-8 leading-relaxed">
            Reach thousands of pre-vetted candidates. Average time-to-hire is under 3 weeks.
        </p>
        <div class="flex flex-col gap-3">
            @foreach(['Verified candidate profiles only', 'Direct inbox messaging', 'ATS integrations included', 'Analytics dashboard'] as $perk)
                <div class="flex items-center gap-3 text-[15px] font-medium">
                    <div class="w-6 h-6 bg-[#0a0a0a] rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-[#d4f000] text-[11px] font-bold">✓</span>
                    </div>
                    {{ $perk }}
                </div>
            @endforeach
        </div>
        <a href="#"
            class="inline-block mt-7 bg-[#0a0a0a] text-[#fafaf7] text-[15px] font-semibold px-7 py-3.5 rounded-full hover:bg-[#333] transition-colors">
            Post a job →
        </a>
    </div>
</div>

{{--
<section class="py-16 border-t border-slate-900 bg-[#020617] relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="grid grid-cols-1 md:grid-cols-2 gap-px rounded-2xl bg-slate-800 border border-slate-800 shadow-2xl overflow-hidden">

            <!-- Box Node Block: Candidates -->
            <div
                class="bg-gradient-to-b from-[#090d16] to-[#040812] p-8 sm:p-12 flex flex-col justify-between items-start">
                <div>
                    <div
                        class="px-2.5 py-1 text-[10px] font-mono text-indigo-400 bg-indigo-500/10 rounded border border-indigo-500/20 uppercase tracking-wider font-semibold">
                        For Engineers</div>
                    <h3 class="text-2xl font-extrabold text-white mt-4 tracking-tight">Ready to discover your
                        optimal architecture challenge?</h3>
                    <p class="mt-2 text-sm text-slate-400 leading-relaxed max-w-sm">Configure your pricing
                        limits, structure your tool profiles, and let authenticated companies come directly to
                        you.</p>
                </div>
                <div class="mt-8">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold rounded-lg shadow-md shadow-indigo-600/10 transition active:scale-[0.98]">
                        Sync GitHub Matrix Profile <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Box Node Block: Recruiters -->
            <div
                class="bg-gradient-to-b from-[#090d16] to-[#040812] p-8 sm:p-12 flex flex-col justify-between items-start">
                <div>
                    <div
                        class="px-2.5 py-1 text-[10px] font-mono text-emerald-400 bg-emerald-500/10 rounded border border-emerald-500/20 uppercase tracking-wider font-semibold">
                        For Teams</div>
                    <h3 class="text-2xl font-extrabold text-white mt-4 tracking-tight">Seeking technical
                        architects who ship crisp production web code?</h3>
                    <p class="mt-2 text-sm text-slate-400 leading-relaxed max-w-sm">Get immediate access to
                        highly specialized, framework-vetted engineers. Zero algorithmic automated scrapers
                        allowed.</p>
                </div>
                <div class="mt-8">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-slate-900 hover:bg-slate-800 text-slate-200 text-xs font-semibold rounded-lg border border-slate-800 transition shadow-inner">
                        Open Active Pipeline Listing <span>— $299</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section> --}}