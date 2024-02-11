@php use Illuminate\Support\Facades\Storage; @endphp
@extends('Front.Layouts.front')

@section('content')

{{--SLIDER--}}
<div class="slider">
    <div id="image-container">
        @foreach($sliders as $slider)
            <img class="mySlides" src="{{Storage::url($slider->image)}}">
        @endforeach
    </div>
    <div class="buttons">
        <button id="prevBtn" onclick="prevImage()"><</button>
        <button id="nextBtn" onclick="nextImage()"> ></button>
    </div>
</div>

{{--QUOTES--}}
<div class="section1">
        <h1>{{__("Estetik Diş Hekimliği")}}</h1>
        <div class="row">
            @foreach($quotes as $quote)
                <div class="col">
                    <img style="width: 100px" src={{Storage::url($quote->image)}} alt="">
                    @foreach($quote->translations as $item)
                        <p class="title">{{$item->title}}</p>
                        <p>{{$item->description}}</p>
                    @endforeach
{{--                                    @dd($quote->translations->title)--}}
                </div>
            @endforeach
        </div>
</div>

{{--SPONSORS--}}
<div class="containerSponsor">
        <div class="swiper mySwiper my">
            <div class="swiper-wrapper">
                @foreach($sponsors as $sponsor)
                    <div class="swiper-slide">
                        <div class="ust-padding">
                            <div class="for-padding">
                                <img src="{{Storage::url($sponsor->image)}}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
</div>

{{--YOUTUBE--}}
<div class="youtube">
        @foreach($youtube as $link)
            <iframe width="918" height="450" src="{{$link->url}}"
                    title="Dentnis İmplantoloji ve Estetik Diş Kliniği" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        @endforeach
</div>

{{--TEAM--}}
<div class="team-container">
    <h1>{{__("Ekibimiz")}}</h1>
    <div class="swiper-2 mySwiper my2">
        <div class="swiper-wrapper">
            @foreach($teams as $team)
                <div class="swiper-slide mz">
                    <div class="top-section">
                        <img src="{{Storage::url($team->image)}}" alt="...">
                    </div>
                    <div class="bottom-section">
                        <h3 class="doctor-name">
                            {{$team->title}}
                        </h3>
                        <div class="team-line"></div>
                        @foreach($team->translations as $item)
                            <h5 class="doctor-position">
                                {{$item->position}}
                            </h5>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{--ESTETIK DIS HEKIMLIGI--}}
@if ($blogs->isNotEmpty())
    <div class="section2">
        <h2>{{__("Estetik Diş Hekimliği")}}</h2>
        <div class="container1">
            @foreach($blogs->shuffle()->take(3) as $blog)
                <a href="{{route('singlePage', ['slug'=>$blog->slug])}}">
                    <div class="image-container">
                        <img src="{{Storage::url($blog->image)}}" alt="Image" style="width: 100%; height: 100%;">
                        <div class="image-overlay"></div>
                        @if ($blog->translations)
                            <div class="image-title">{{$blog->translations->first()->title}}</div>
                        @endif
                        <div class="underline"></div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif

{{--ARTICLES--}}
@if ($blogs->isNotEmpty())
    <div class="articles">
        <h2>{{__("Makaleler")}}</h2>
        <div class="container1">
            @foreach($blogs->take(3) as $blog)
            <div class="col">
                <a href="{{route('singlePage', ['slug'=>$blog->slug])}}">
                    <div class="image">
                        <img src="{{Storage::url($blog->image)}}" alt="">
                    </div>
                </a>
                @if ($blog->translations)
                <div class="content">
                    <h2>{{$blog->translations->first()->title}}</h2>
                    <p>{!! Str::limit(strip_tags($blog->translations->first()->description), 200) !!}</p>
                    <a href="{{route('singlePage', ['slug'=>$blog->slug])}}"><button>{{__("Devamını oku")}}</button></a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        <div class="view-all">
            <a href="{{route('articles')}}"><button>{{__("Tümünü görüntüle")}}</button></a>
        </div>
    </div>
@endif


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
@endsection
