@extends('layouts.app')

@section('content')

    <header class="mb-4 relative">
        <img src="{{$user->getProfileImages('bgImg')}}" style="width: 900px;height: 286px;" class="rounded-lg">

        <div class="flex justify-between mb-5 items-center">

            <div>
                <p class="font-bold text-xl m-2">{{$user->name}}</p>

                <h3 class="my-2">{{'@'.$user->username}}</h3>

                <p class="text-sm"> {{$user->created_at->format('Y-m-d')}} tarihinde katıldı ! </p>
            </div>

            <div class="p-3">
                <div class="inline-block">
                    <span style="font-family: inherit; font-size: large;" class="bg-yellow-500 hover:bg-yellow-600 px-2 rounded-lg mr-2 text-white p-2">Takipçi:{{$user->followerCount()}}</span>
                </div>
                <div class="inline-block">
                    <span style="font-family: inherit; font-size: large;" class="bg-yellow-500 hover:bg-yellow-600 px-2 rounded-lg mr-2 text-white p-2">Takip:{{$user->followingCount()}}</span>
                </div>
                <div class="inline-block" >
                    @can('edit',$user) {{--     authorize --}}
                    <a href="{{route('edit',$user->username)}}" class="border border-black hover:bg-red-500 hover:text-white px-2 rounded-lg mr-2 p-2" style="font-family: inherit; font-size: large;">Düzenle</a>
                    @endcan
                </div>

               <div class="inline-block">
                   @include('components.follow-button')
               </div>

            </div>

        </div>


        <img src="{{$user->getProfileImages('avatar')}}" alt="" class="rounded-full m-2 absolute" style="width: 180px; left: calc(50% - 75px); top: 210px;">
        <hr class="my-4">

    </header>

    <p class="text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aperiam assumenda cumque dolor doloribus ea eius in laborum, nostrum, odio odit omnis pariatur praesentium quibusdam ratione rem sequi voluptas!</p>


    @include('components._timeline',['tweets'=>$tweets])
@endsection
