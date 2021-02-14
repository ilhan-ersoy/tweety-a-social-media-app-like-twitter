<ul class="mt-5">
    <li>
        <a href="{{route('home')}}" style="font-size: 23px" class="transform hover:scale-110 motion-reduce:transform-none font-bold text-lg mb-5 block underline">Anasayfa</a>
    </li>
    <li>
        <a href="/explore" style="font-size: 23px" class="transform hover:scale-110 motion-reduce:transform-none font-bold text-lg mb-5 block underline">Keşfet</a>
    </li>
    <li>
        <a href="#" style="font-size: 23px" class="transform hover:scale-110 motion-reduce:transform-none font-bold text-lg mb-5 block underline">Bildirimler</a>
    </li>
    <li>
        <a href="#" style="font-size: 23px" class="transform hover:scale-110 motion-reduce:transform-none font-bold text-lg mb-5 block underline">Listeler</a>
    </li>
    <li>
        <a href="{{route('profile',auth()->user())}}" style="font-size: 23px" class="transform hover:scale-110 motion-reduce:transform-none font-bold text-lg mb-5 block underline">Profil</a>
    </li>

    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="transform hover:scale-110 motion-reduce:transform-none font-bold underline   " style="font-size: x-large">Çıkış</button>
        </form>
    </li>

</ul>
