@extends('layouts.app')

@section('content')

    <div>


        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">

            @foreach($users as $user)

                    @include('components._explore_friends')


            @endforeach
               <div class="mx-auto">
                   {{$users->links()}}
               </div>

            </div>
        </div>

    </div>

@endsection






