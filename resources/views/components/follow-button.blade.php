@if(auth()->user()->isNot($user))
    <form action="{{route('follow',$user)}}" method="POST">
        @csrf
        <button
            type="submit"
            class="bg-blue-400 py-2 px-3 text-md float-right text-white rounded-full shadow border border-white-300">
            {{auth()->user()->following($user) ? 'Takipten Çık' : 'Takip Et'}}
        </button>
    </form>

@endif
