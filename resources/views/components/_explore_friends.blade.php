<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

        <article class="overflow-hidden rounded-lg shadow-lg">

            <a href="{{route('profile',$user->username)}}">
                <img alt="Placeholder" class="block h-auto w-full w-max" src="{{$user->getProfileImages('avatar')}}" style="width: 261px;height: 138px;">
            </a>

            <header class="flex items-center justify-between leading-tight p-2 md:p-4" style="max-width: 265px;max-height: 60px;">
                <h1 class="text-lg">
                    <a class="no-underline hover:underline text-black" href="#" style="    font-family: fantasy;">
                        {{$user->name}}
                    </a>
                </h1>
                <p class="text-grey-darker text-sm" style="font-family: monospace;font-size: larger">
                    {{'@'.$user->username}}
                </p>
            </header>


        </article>

</div>



