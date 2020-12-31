<!-- TIMELINE -->
<div class="border border-gray-400 rounded-lg ">

    <div class="my-5">
        @forelse ($tweets as $tweet)
            @include('components._tweet')
        @empty
            <p class="p-4">No tweets yet.</p>
        @endforelse

    </div>
</div>
