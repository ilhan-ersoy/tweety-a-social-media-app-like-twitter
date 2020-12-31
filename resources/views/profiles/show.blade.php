@extends('layouts.app')

@section('content')
    <header class="mb-4 relative">
        <img src="{{asset('images/default-profile-banner.jpg')}}">

        jajasjdajsdjasjdHASJDHASJDHAJSHDAJSHDJjhasjdhajsdhajsdhjhajshdajshdjashdjhajsdhjashdjashdjash
        <div class="flex justify-between mb-5 items-center">

            <div>
                <h2 class="font-bold text-xl m-2">{{$user->name}}</h2>
                <p class="text-sm"> {{$user->created_at->format('Y-m-d')}} tarihinde katıldı ! </p>
            </div>

            <div class="p-3 flex">

                @if(auth()->user()->is($user))
                    <a href="{{route('edit',$user->name)}}" class="py-2 px-3 float-right text-md text-dark rounded-full border border-gray-300 shadow mr-2 ">Profili Düzenle</a>
                @endif

                @include('components.follow-button')

            </div>

        </div>


        <img src="{{$user->getAvatar()}}" alt="" class="rounded-full m-2 absolute" style="width: 150px; left: calc(50% - 75px); top: 190px;">
        <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam assumenda cumque dolor doloribus ea eius in laborum, nostrum, odio odit omnis pariatur praesentium quibusdam ratione rem sequi voluptas!</p>
        <hr class="my-4">

    </header>

    @include('components._timeline',[ 'tweets'=>$user->tweets ])
@endsection
