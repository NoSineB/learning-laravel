<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
           <li class="text-blue-500 hover:underline">
               <a href="/jobs/{{$job['id']}}">
                   <strong>{{$job['title']}}</strong> - Salary '{{$job['salary']}}'
               </a>
           </li>
        @endforeach
    </ul>
</x-layout>

