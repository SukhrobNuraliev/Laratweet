<x-app>

    <div>
        @foreach ($users as $user)
        <a href="{{ $user->path() }}">
            <div class="flex items-center mb-5">
                <img class="mr-4 rounded" src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar'" width="60">
                <div>
                    <h4>{{ '@' . $user->username }}</h4>
                </div>
            </div>
        </a> 
        @endforeach    

        {{$users->links()}}
    </div>   

</x-app>