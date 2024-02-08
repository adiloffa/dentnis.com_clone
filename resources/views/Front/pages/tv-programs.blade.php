@php use Illuminate\Support\Facades\Storage; @endphp
@extends('Front.Layouts.front')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <div class="article-container">
        <div class="top">
            <div class="top-title">
                {{__("TV Programları")}}
            </div>
            <div class="bottom-title">
                <div class="bottom-text"><a href="{{route('front.main')}}">{{__("Anasayfa")}}</a></div>
                <div class="icon"> ></div>
                <div class="bottom-text"><a href="">{{__("TV Programları")}}</a></div>
            </div>
        </div>
        <div class="container-article">
            <div class="all-article">
                @foreach($TVPrograms as $TVProgram)
                    <div class="card" style="width: 18rem;">
                        <iframe width="400" height="228" src="{{$TVProgram->url}}" title="Ollie - perfect timing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="video-title">
                            <b>{{$TVProgram->title}}</b>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('styles')
{{--    <link rel="stylesheet" href="{{ asset('assets/front/css/articles.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('assets/front/css/tvPrograms.css')}}">
@endpush

