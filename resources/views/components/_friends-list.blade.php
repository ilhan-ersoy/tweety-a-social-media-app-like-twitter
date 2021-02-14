<div class=" bg-gray-100 rounded-lg py-4 px-6 border border-black">
    <h3 class="font-bold text-xl mb-4">Arkadaşlar</h3>

    <ul>
        @forelse (current_user()->follows as $user)
            <li class=" {{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ $user->path()}}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->getProfileImages('avatar') }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="80"
                            height="80"
                        >

                        {{ $user->name }}
                    </a>
                </div>
            </li>

        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>
</div>

