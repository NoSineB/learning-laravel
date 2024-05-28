<x-layout>
    <x-slot:heading>
        {{$job->title}}
    </x-slot:heading>
    <p class="mb-4">
        Gets the salary of amount - {{$job->salary}}
    </p>
    @can('edit', $job)
        <x-job-button href="/jobs/{{$job->id}}/edit">Edit Job</x-job-button>
    @endcan
</x-layout>
