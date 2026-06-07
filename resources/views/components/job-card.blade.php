<div class="bg-[#090d16]/40 rounded-xl border border-slate-800/80 p-5 sm:p-6 hover:bg-[#090d16]/80 hover:border-slate-700/80
hover:shadow-xl transition-all duration-200 flex flex-col sm:flex-row sm:items-center justify-between gap-6 group">
    <div class="flex items-start gap-4">
        <!-- Logo Shield graphic component -->
        <div
            class="p-2 rounded-xl bg-gradient-to-br from-slate-900 to-slate-950 flex-shrink-0 flex items-center justify-center font-mono font-black text-indigo-400 text-base border border-slate-800 shadow-inner group-hover:border-indigo-500/30 transition-all">
            {{ $job->location }}
        </div>
        <div>
            <div class="flex items-center gap-2.5 flex-wrap">
                <h3
                    class="text-base font-bold text-white group-hover:text-indigo-400 transition cursor-pointer leading-snug">
                    {{ $job->title }}
                </h3>
                <span
                    class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 text-[10px] font-mono border border-emerald-500/20">{{ $job->type }}</span>
                <span
                    class="px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-400 text-[10px] font-mono border border-indigo-500/20">Remote
                    (Global)</span>
            </div>
            <p class="text-sm font-medium text-slate-400 mt-1">
                {{ $job->experience }} | {{ $job->company_name ?? '' }} | {{ $job->location }} | {{ $job->category}}
            </p>

            <!-- Meta Tags tracking dependencies -->
            <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-slate-500 mt-3 font-mono">
                <span class="flex items-center gap-1"><span class="size-1.5 rounded-full bg-slate-700"></span> TCO:
                    ${{ number_format($job->salary) }}</span>
                <span class="flex items-center gap-1"><span class="size-1.5 rounded-full bg-slate-700"></span> Stack:
                    TALL
                    Stack,
                    Docker</span>
                <span class="flex items-center gap-1 text-slate-600"><svg class="size-3.5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6l4 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> {{ $job->created_at->diffForHumans() }}</span>
            </div>
        </div>
    </div>
    <!-- Action node button components -->
    <div class="flex items-center gap-3 sm:self-center self-end w-full sm:w-auto shrink-0">
        <button
            class="p-2.5 rounded-lg border border-slate-800 hover:border-rose-500/40 text-slate-500 hover:text-rose-400 hover:bg-rose-500/5 transition duration-150">
            <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
        </button>
        <a href="{{ route('jobs.show', $job->id) }}"
            class="flex-1 sm:flex-none text-center px-4 py-2 bg-slate-900 group-hover:bg-indigo-600 text-slate-300 group-hover:text-white text-xs font-semibold rounded-lg border border-slate-800 group-hover:border-indigo-500/40 shadow-sm transition-all duration-200">
            View Specification
        </a>
    </div>
</div>