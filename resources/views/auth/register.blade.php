<x-master>

<div class="container mx-auto justify-center mt-20">
    <div class="mx-40 px-16 py-8 bg-gray-200 rounded-lg border border-gray-300">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="username" class="block mb-2 uppercase font-bold text-sm text-gray-700">Username</label>

                            <input id="username" type="text" class="border border-gray-400 p-2 w-full @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="name" class="block mb-2 uppercase font-bold text-sm text-gray-700">{{ __('Name') }}</label>

                                <input id="name" type="text" class="border border-gray-400 p-2 w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-sm text-gray-700">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="border border-gray-400 p-2 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-sm text-gray-700">{{ __('Password') }}</label>

                                <input id="password" type="password" class="border border-gray-400 p-2 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password-confirm" class="block mb-2 uppercase font-bold text-sm text-gray-700">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6 mb-4">
                                <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="px-6 py-4 rounded text-sm uppercase bg-blue-400 text-white">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>

</x-master>
