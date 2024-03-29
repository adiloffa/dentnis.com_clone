@php use Illuminate\Support\Facades\Storage; @endphp
@extends('Front.Layouts.front')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <div class="single-page">
        @if ($blog->translations)
            <div class="top">
                <div>
                    <p>{{__("Makaleler")}}</p>
                        <h1>{{$blog->translations->first()->title}}</h1>
                </div>

                <img src="{{Storage::url($blog->image)}}" alt="">
            </div>

            <div class="container-singlepage">
                    <p>{!! $blog->translations->first()->description!!}</p>
            </div>
        @endif

        <div class="others-section">
            <h1>{{__("Diğer makaleler")}}</h1>
            <div class="cols">
                @foreach($blogs->shuffle()->take(3) as $blog)
                    <a href="{{route('singlePage', ['slug'=>$blog->slug])}}">
                        <div class="col-1">
                            <img src="{{Storage::url($blog->image)}}" alt="">
                            @if ($blog->translations)
                                <p class="article-title">{{$blog->translations->first()->title}}</p>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/front/css/singlepage.css')}}">
@endpush
