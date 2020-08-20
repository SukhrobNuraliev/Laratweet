<ul>

    <li><a 
    href="{{ route('home') }}"
        class="font-bold text-lg mb-4 block"
    >Home</a></li>
    <li><a 
        href="/explore"
        class="font-bold text-lg mb-4 block"
    >Explore</a></li>
    <li><a 
    href="{{ route('profile', auth()->user()) }}"
        class="font-bold text-lg mb-4 block"
    >Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button  class="font-bold text-lg mb-4 block">
                Logout</button>
        </form>
    </li>

</ul>