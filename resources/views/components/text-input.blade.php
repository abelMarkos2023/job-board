<div class="relative group">
    {{-- Search Icon --}}
    @if($hasIcon)
        <span
            class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-500 group-focus-within:text-indigo-400 transition-colors duration-200">
            <svg class="size-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </span>
    @endif
    {{-- Input --}}
    <input type="text" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}" class="
            w-full
            {{ $hasIcon ? 'pl-10' : 'pl-4' }} pr-4 py-3
            bg-slate-900/60 backdrop-blur-md
            text-sm text-white placeholder-slate-500
            border border-slate-800/80
            rounded-xl
            shadow-sm
            outline-none
            ring-0
            transition-all duration-200 ease-out
            hover:border-slate-700
            focus:border-indigo-500/60
            focus:ring-4 focus:ring-indigo-500/10
            focus:shadow-lg focus:shadow-indigo-500/5
        " />
</div>