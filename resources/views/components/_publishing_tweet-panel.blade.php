<div class="border border-blue-400 rounded-lg p-8 mb-7" id="app">
    <form action="{{route('setTweet')}} " method="POST">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="What's up doc?" required>

        </textarea>
        <hr class="m-4">
        <footer class="flex justify-between">
            <img src="{{current_user()->getProfileImages('avatar')}}"
                 alt=""
                 class="rounded-full m-2 flex-shrink-0"
                 width="75px;"
                 height="75px;"
            >
            <button type="submit" class="bg-blue-400 py-2 px-3 float-right text-white rounded-lg shadow text-lg hover:bg-blue-500 ">Tweet a roo!</button>
        </footer>
    </form>
</div>

