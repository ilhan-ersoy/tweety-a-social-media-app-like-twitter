
    <div class="flex py-5 px-3 border-b border-gray-300 ">

        <div class="mr-2 flex-shrink-0">

                <img src="{{$tweet->user->getAvatar()}}"
                     alt="user"
                     class="rounded-full m-2 flex-shrink-0"
                     width="80px;"
                     height="80px;"
                >


            <span class="float-right text-sm" style="font-family: .AppleSystemUIFont" >{{$tweet->created_at->diffForHumans()}}</span>

        </div>

        <div>

            <a href="{{route('profile',$tweet->user->name)}}"><h5 class="font-bold mb-4">{{$tweet->user->name}}</h5></a>
            <p class="text-sm">{{$tweet->body}}</p>

        </div>
    </div>

