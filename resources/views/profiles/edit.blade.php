<x-app>
    
<form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PATCH')

    <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-sm text-gray-700">Name</label>
        <input value="{{ $user->name }}" class="border border-gray-400 p-2 w-full" name="name" id="name" type="text" required>
        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-6">
        <label for="username" class="block mb-2 uppercase font-bold text-sm text-gray-700">Userame</label>
        <input value="{{ $user->username }}" class="border border-gray-400 p-2 w-full" name="username" id="username" type="text" required>
        @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-6">
        <label for="avatar" class="block mb-2 uppercase font-bold text-sm text-gray-700">Avatar</label>
        <div class="flex">
            <input  class="border border-gray-400 p-2 w-full" name="avatar" id="avatar" type="file" >
            <img src="{{ $user->avatar }}" width="40" alt="">
        </div>
            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-6">
        <label for="email" class="block mb-2 uppercase font-bold text-sm text-gray-700">Email</label>
        <input value="{{ $user->email }}" class="border border-gray-400 p-2 w-full" name="email" id="email" type="email" required>
        @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-6">
        <label for="password" class="block mb-2 uppercase font-bold text-sm text-gray-700">Password</label>
        <input class="border border-gray-400 p-2 w-full" name="password" id="password" type="password" required>
        @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-6">
        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-sm text-gray-700">Password Confirmation</label>
        <input class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation" type="password" required>
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-6">
        <button type="submit" class=" mr-4 bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>

        <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
    </div>

</form>

</x-app>