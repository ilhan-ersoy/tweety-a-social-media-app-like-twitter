@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center ">
    <div class="py-4 bg-gray-600 px-6 rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div class=" text- font-bold">{{ __('Giriş') }}</div>
                <div class="card-body">
                    <form method="POST"
                          action="{{ route('login') }}"
                    >
                        @csrf

                        <div class="mb-9">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="email"
                            >
                                <h1 class="text-white">E Mail</h1>
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                   type="text"
                                   name="email"
                                   id="email"
                                   autocomplete="email"
                                   value="{{ old('email') }}"
                                   required
                            >

                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="password"
                            >
                                <h1 class="text-white">Şifre:</h1>
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                   type="password"
                                   name="password"
                                   id="password"
                                   autocomplete="current-password"
                            >

                            @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <div>
                                <input class="mr-1"
                                       type="checkbox"
                                       name="remember"
                                       id="remember" {{ old('remember') ? ' checked' : '' }}
                                >

                                <label class="text-xs text-gray-700 font-bold uppercase"
                                       for="remember"
                                >
                                    <span class="text-white">Beni Hatırla</span>
                                </label>
                            </div>

                            @error('remember')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <button type="submit"
                                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                            >
                                Giriş
                            </button>

                            <a href="{{ route('password.request') }}" class="text-md  text-white">Şifrenizi mi Unuttunuz ? </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
