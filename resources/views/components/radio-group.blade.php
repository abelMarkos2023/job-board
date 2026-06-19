<div class="flex flex-col gap-2">
    <div class="text-xs font-mono uppercase tracking-wider text-slate-400 font-semibold mb-2">
        {{ $name }}
    </div>
    <div class="flex flex-wrap gap-2">
        {{-- All Option --}}
        <label class="relative cursor-pointer">
            <input type="radio" name="{{ $name }}" id="{{ $name }}-all" value="" class="peer sr-only" 
                {{ !request($name) ? 'checked' : '' }}>
            <div class="px-3 py-1.5 rounded-lg border text-xs font-mono transition duration-150 
                        bg-slate-950/60 border-slate-800/80 text-slate-400 hover:text-slate-200 hover:border-slate-700
                        peer-checked:bg-indigo-600/10 peer-checked:border-indigo-500 peer-checked:text-indigo-400">
                All
            </div>
        </label>
        
        {{-- Specific Options --}}
        @foreach ($options as $option)
            <label class="relative cursor-pointer">
                <input type="radio" name="{{ $name }}" id="{{ $name }}-{{ Str::slug($option) }}" 
                    @checked($option == old($name, request($name)))
                    value="{{ $option }}" class="peer sr-only">
                <div class="px-3 py-1.5 rounded-lg border text-xs font-mono transition duration-150 
                            bg-slate-950/60 border-slate-800/80 text-slate-400 hover:text-slate-200 hover:border-slate-700
                            peer-checked:bg-indigo-600/10 peer-checked:border-indigo-500 peer-checked:text-indigo-400">
                    {{ Str::ucfirst($option) }}
                </div>
            </label>
        @endforeach
    </div>
</div>