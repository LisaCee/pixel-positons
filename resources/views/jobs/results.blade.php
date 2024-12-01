<x-layout>
    <x-page-heading>Results</x-page-heading>
    <p class="mb-3">{{trans_choice('{0} No jobs found|{1} :count job found|{2,*} :count jobs found', count($jobs), ['count' => count($jobs)])}}</p>
    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-row :$job/>
        @endforeach
    </div>
</x-layout>
