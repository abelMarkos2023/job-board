<x-app-layout>
    <x-hero />
    <!-- 3. BRAND INDEX LOGO BAND (Social Proof validation) -->
    <x-brands />
    <!-- 4. THE HIGH-PERFORMANCE FEATURE BENTO GRID -->
    <x-featured />
    <form action="{{ route('jobs.index') }}" method="get"
        class="bg-[#090d16]/40 backdrop-blur-md rounded-2xl border border-slate-800/80 p-6 shadow-2xl space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Column 1: Search & Salary -->
            <div class="space-y-4">
                <div>
                    <label
                        class="text-xs font-mono uppercase tracking-wider text-slate-400 font-semibold mb-2 block">Keywords</label>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Title, skills, keywords..."
                        :hasIcon="true" />
                </div>
                <div>
                    <label
                        class="text-xs font-mono uppercase tracking-wider text-slate-400 font-semibold mb-2 block">Salary
                        Range</label>
                    <div class="flex items-center gap-3">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="Min"
                            :hasIcon="false" />
                        <span class="text-slate-600 font-mono text-xs">to</span>
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="Max"
                            :hasIcon="false" />
                    </div>
                </div>
            </div>

            <!-- Column 2: Job Type & Experience -->
            <div class="space-y-6">
                <x-radio-group name="type" :options="\App\Models\Occupation::$types" />
                <x-radio-group name="experience" :options="\App\Models\Occupation::$experiences" />
            </div>

            <!-- Column 3: Category -->
            <div>
                <x-radio-group name="category" :options="\App\Models\Occupation::$categories" />
            </div>

        </div>

        <!-- Action Panel -->
        <div class="flex items-center gap-3 pt-4 border-t border-slate-800/60">
            <button type="submit"
                class="flex-1 px-6 py-3 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl transition duration-150 shadow-lg shadow-indigo-600/10 active:scale-[0.99] text-center">
                Apply Filter Engine
            </button>
            @if(request('search') || request('min_salary') || request('max_salary') || request('type') || request('experience') || request('category'))
                <a href="{{ route('jobs.index') }}"
                    class="px-6 py-3 bg-slate-900 border border-slate-800 hover:border-slate-700 text-slate-400 hover:text-slate-200 text-sm font-semibold rounded-xl transition duration-150 text-center">
                    Clear Filters
                </a>
            @endif
        </div>
    </form>
    @forelse ($jobs as $job)
        <x-job-card :job="$job" />
    @empty
        <p class="text-center text-xl text-red-400">
            No Jobs available
        </p>
    @endforelse
    <!-- 7. SPLIT RETENTION CALL-TO-ACTION (CTA) CONVERSION MODULE -->
    <x-call-to-action />
    <x-social-proof />
</x-app-layout>