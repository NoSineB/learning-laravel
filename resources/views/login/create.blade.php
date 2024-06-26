<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <form action="/login" method="post">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="email" >Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" placehoder="joe@example.com" type="email" required/>

                            <x-form-error error="email"/>
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required/>

                            <x-form-error error="password"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-submit-btn>Log In</x-form-submit-btn>
        </div>
    </form>

</x-layout>

