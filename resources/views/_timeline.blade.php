<div class="border border-gray-300 rounded-lg mb-5 ">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">no tweets yet</p>
    @endforelse

    {{ $tweets->links() }}
</div>