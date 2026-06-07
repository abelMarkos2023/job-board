<x-app-layout>
    <x-hero />
    <!-- 3. BRAND INDEX LOGO BAND (Social Proof validation) -->
    <x-brands />
    <!-- 4. THE HIGH-PERFORMANCE FEATURE BENTO GRID -->
    <x-featured />
    <form action="{{ route('jobs.index') }}" method="get"
        class="border border-slate-200 dark:border-slate-700 p-3 rounded-lg shadow-xl">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <div class="mb-2 font-semibold">Search</div>
                <x-text-input name="search" value="{{ request('search') }}" placeholder="Type to search"
                    :hasIcon="true" />
            </div>
            <div>
                <div class="mb-2 font-semibold">Salary</div>
                <div class="flex gap-2 justify-between items-center">
                    <div class="flex gap-2 items-center">
                        <div class="mb-2 font-semibold"> from</div>
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="Type to search"
                            :hasIcon="false" />
                    </div>
                    <div class="flex gap-2 items-center">
                        <div> to</div>
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="Type to search"
                            :hasIcon="false" />
                    </div>
                </div>

            </div>
            <div></div>
            <div></div>
        </div>
        <button class="px-4 py-2 bg-indigo-500 text-white rounded-lg w-full" type="submit">Filter</button>
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