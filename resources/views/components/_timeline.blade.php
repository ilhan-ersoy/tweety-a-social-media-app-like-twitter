<!-- TIMELINE -->
<div class="border border-gray-400 rounded-lg ">

    <div class="my-2">
        @forelse ($tweets as $tweet)
            @include('components._tweet',['loop'=>$loop])
        @empty
            <p class="p-4">No tweets yet.</p>
        @endforelse

    </div>
    <div class="flex">
        <div class="flex-1">
            {{$tweets->links()}}
        </div>

    </div>
</div>
