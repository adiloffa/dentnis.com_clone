@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Quote</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('quoteUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                @foreach(config('app.languages') as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link {{$loop->first ? 'active show' : ''}} @error("$lang.title") text-danger @enderror"
                                           id="custom-tabs-one-home-tab" data-bs-toggle="pill" href="#tab-{{$lang}}"
                                           role="tab"
                                           aria-controls="custom-tabs-one-home" aria-selected="true">{{$lang}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">

                                @foreach(config('app.languages') as $index => $language)
                                    @php
                                        $translation = $quote->translations
                                            ->where('language.lang', $language)->first();
                                    @endphp
                                    <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="tab-{{$language}}"
                                         role="tabpanel"
                                         aria-labelledby="custom-tabs-one-home-tab">


                                        <div class="form-group">
                                            <label for="{{$language}}-title">Title</label>
                                            <input type="text" name="{{$language}}[title]"
                                                   value="{{$translation ? $translation->title : ' '}}"
                                                   class="form-control" id="{{$language}}-title">
                                            @error("$language.title")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="{{$language}}-description">Description</label>
                                            <input type="text" name="{{$language}}[description]"
                                                   value="{{$translation ? $translation->description : ' '}}"
                                                   class="form-control" id="{{$language}}-description">
                                            @error("$language.description")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @if($quote->image)
                        <img style="width: 100px" src="{{Storage::url($quote->image)}}" alt="">
                    @endif
                    <div class="form-group py-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="summernote">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="hidden" name="quote_id" value="{{$quote->id}}">

                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var tabs = new bootstrap.Tab(document.querySelector('#custom-tabs-one-home-tab'));
                tabs.show();

                @foreach(config('app.languages') as $index => $lang)
                new Summernote($('#summernote{{$index}}'), {
                    placeholder: 'desc{{$lang}}',
                    height: 200,
                });
                @endforeach
            });
        </script>
    </div>
@endsection
