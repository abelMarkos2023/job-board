<x-app-layout>
    <x-bread-crumbs :links="['jobs' => route('jobs.index'), 'title' => $occupation->title]" />
    <x-job-detail :job="$occupation" />

</x-app-layout>