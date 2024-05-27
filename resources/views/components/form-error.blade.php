@props(['error'])

@error($error)
    <p class="text-red-500 text-sm mt-1 italic">{{ $message  }}</p>
@enderror
