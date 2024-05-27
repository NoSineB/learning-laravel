<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form action="/jobs" method="post">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">You can create a job listing through this form</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title" >Job Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Eg. Graphics Designer" required/>

                            <x-form-error error="title"/>
                        </div>
                    </div>
                </div>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$50,000 USD" required/>

                            <x-form-error error="salary"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-submit-btn>Save</x-form-submit-btn>
        </div>
    </form>

</x-layout>

