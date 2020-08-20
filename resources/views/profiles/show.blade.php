<x-app>

<header class="mb-6 relative">

    <div class="relative">
        <img 
        src="/images/bugss.jpg" 
        alt=""
        style="border-radius: 1.25rem; "
        class="mb-3"
        >
        <img 
        src="{{ $user->avatar }}" 
        alt=""
        class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
        width="150"
        style="left: 50%"
        >
    </div>
        

    <div class="flex justify-between items-center mb-6">
        <div>
             <h2 style="max-width: 270px " class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
             <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div class="flex">
                
            @can('edit', $user)
                <a 
                href="{{ $user->path('edit') }}"             
                class="rounded-full border border-gray-300  mr-2 py-2 px-2 text-black text-xs"
                >Edit Profile
                </a>
            @endcan
            
            <x-follow-button :user=$user></x-follow-button>

        </div>
    </div>
    
    <p class="text-sm">This is a test from a Laratweet. This is a test from a Laratweet.  This is a test from a Laratweet.  This is a test from a Laratweet.  This is a test from a Laratweet. This is a test from a Laratweet.</p>

</header>

    @include('_timeline', [
        'tweets' => $tweets
    ])

</x-app>
