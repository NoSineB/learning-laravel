<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
           <a href="/jobs/{{$job['id']}}" class="block border border-gray-200 rounded-lg px-2 py-4">
               <div class="text-blue-500 text-sm font-bold">
                   {{ $job->employer->name  }}
               </div>
               <div>
                   <strong>{{$job['title']}}</strong> - Salary '{{$job['salary']}}'
               </div>
           </a>
        @endforeach
    </div>
</x-layout>

