@php use Illuminate\Support\Facades\Storage; @endphp
@extends('Front.Layouts.front')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <div class="article-container">
        <div class="top">
            <div class="top-title">
                @if ($count === 0)
                    {{ __('Arama sonucu bulunamadı') }}
                @else
                    {{__('Arama sonucu: ') . $count}}
                @endif
            </div>
            <div class="bottom-title">
            </div>
        </div>
        <div class="container-article">
            <div class="all-article">
                @foreach($results as $result)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body" style="margin-bottom: 30px">
                            <h3 class="card-title">{{$result->title}}</h3>
                            <p>{{ __('Arama sonucu: ') }}</p>
                            <p class="card-text"><span>{!! Str::limit(strip_tags($result->description, 200)) !!}</span></p>
                            <a href="{{route('singlePage', ['slug'=>$result->blog->slug])}}" class="btn btn-primary">{{__("Devamını oku")}}</a>
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

