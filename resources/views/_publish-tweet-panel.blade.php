<div class="border border-blue-40 rounded-lg px-8 py-6 mb-6">
    <form action="/tweets" method="POST">
        @csrf
        <textarea autofocus required name="body" class="w-full" placeholder="What's up doc?"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
        <img src="{{ auth()->user()->avatar }}" 
            alt="" 
            width="50"
            height="50"
            class="rounded-full mr-2">

            <x-button></x-button>
        </footer>
    </form>

    @error('body')
       <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>