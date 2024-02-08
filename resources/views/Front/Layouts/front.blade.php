<!DOCTYPE html>
<html lang="en">

@include('Front.partials.head')
<body>
    @include('Front.partials.navbar')
    @yield('content')

    @include('Front.partials.footer')

    @include('Front.partials.bottom')
    <div class="socialMedia">
        <ul>
            @foreach($socialNetworks as $socialNetwork)
            <li><a href=""><img src="{{Storage::url($socialNetwork->image)}}" alt=""></a></li>
            @endforeach
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/front/js/mainJs.js')}}"></script>
</body>
</html>

