@extends('layouts.app')

@section('content')


        <form method="POST" action="{{current_user()->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')  {{--Güncelleme İşlemi--}}

        <div class="mb-6">
            <label for="" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                İsim :
            </label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required value="{{$user->name}}">

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                Avatar :
            </label>
            <div class="flex"> {{-- File UPLOAD İŞLEMİ --}}

                <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar" >

                <img src="{{asset($user->avatar)}}" alt="your avatar" width="50" height="300" >

            </div>

            <div>
                @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

        </div>
            <div class="mb-6">
                <label for="" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                    Arka Plan Resmi :
                </label>
                <div class="flex"> {{-- File UPLOAD İŞLEMİ --}}

                    <input type="file" name="bgImg" id="bgImg" class="border border-gray-400 p-2 w-full"  >
                    <img src="{{asset($user->bgImg)}}" alt="your bgImage" width="50" height="300" >

                </div>

                <div>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

            </div>
        <div class="mb-6">
            <label for="" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                Kullanıcı Adı :
            </label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required value="{{$user->username}}">

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                Email Adresi :
            </label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" required value="{{$user->email}}">

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                Şifre :
            </label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 text-uppercase font-bold text-xl text-gray-700">
                Şifre Tekrar :
            </label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Güncelle
            </button>
            <a href="{{current_user()->path()}}"  class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500">
                İptal
            </a>
        </div>


    </form>

@endsection
