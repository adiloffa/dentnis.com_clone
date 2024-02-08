@php use Illuminate\Support\Facades\Storage; @endphp
@extends('Front.Layouts.front')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <div class="article-container">
        <div class="top">
            <div class="top-title">
                {{__("Makaleler")}}
            </div>
            <div class="bottom-title">
                <div class="bottom-text"><a href="{{route('front.main')}}">{{__("Anasayfa")}}</a></div>
                <div class="icon"> ></div>
                <div class="bottom-text"><a href="">{{__("Makaleler")}}</a></div>
            </div>
        </div>
        <div class="container-article">
            <div class="all-article">
                @foreach($blogs as $blog)
                    <div class="card" style="width: 18rem;">
                        <a href="{{route('singlePage', ['slug'=>$blog->slug])}}">
                            <img src="{{Storage::url($blog->image)}}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{$blog->translations->first()->title}}</h3>
                            <p class="card-text"><span>{!!  Str::limit(strip_tags($blog->translations->first()->description), 200) !!}</span></p>
                            <a href="{{route('singlePage', ['slug'=>$blog->slug])}}" class="btn btn-primary">{{__("Devamını oku")}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/front/css/articles.css')}}">
@endpush
