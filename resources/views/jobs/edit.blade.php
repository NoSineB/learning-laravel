<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>
    <form action="/jobs/{{$job->id}}" method="post">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title" >Job Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Eg. Graphics Designer" required value="{{$job->title}}"/>

                            <x-form-error error="title"/>
                        </div>
                    </div>
                </div>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$50,000 USD" required value="{{$job->salary}}"/>

                            <x-form-error error="salary"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button form="delete-form" class="font-sm font-semibold text-red-400">Delete</button>
            </div>
            <div class="flex items-center justify-end gap-x-6">
                <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-submit-btn>Update</x-form-submit-btn>
            </div>
        </div>

    </form>

    <form action="/jobs/{{$job->id}}" method="post" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>

