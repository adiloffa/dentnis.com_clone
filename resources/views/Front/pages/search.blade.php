@extends('Front.Layouts.front')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
    {{--    @dd($blogs)--}}


    <div class="all">
        <div class="under-nav">
            <div class="content">
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
        </div>

        <div class="container-article">
            <div class="all-article">
                @foreach($results as $result)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">{{$result->title}}</h3>
{{--                            <p>{{ __('Arama sonucu: ') }}</p>--}}
                            <p class="card-text"><span>{!! Str::limit(strip_tags($result->description, 200)) !!}</span></p>
                            <a href="" class="btn btn-primary">{{__("Devamını Oku")}}</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/front/css/articles.css')}}">
@endpush
