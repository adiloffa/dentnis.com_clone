@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Main Doctor</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('main-doctor-update')}}" method="POST" enctype="multipart/form-data">
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
                                        $translation = $dr->translations
                                            ->where('language.lang', $language)->first();
                                    @endphp
                                    <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="tab-{{$language}}"
                                         role="tabpanel"
                                         aria-labelledby="custom-tabs-one-home-tab">


                                        <div class="form-group my-2">
                                            <label for="summernote">Description</label>
                                            <textarea type="text" name="{{$language}}[description]"
                                                      id="summernote"
                                                      class="form-control blogs">{!! $translation ?  $translation->description : ''!!}</textarea>
                                            @error("$language.description")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="main_doctor_id" value="{{$dr->id}}">

                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>

        <script>
            $('#summernote.blogs').summernote({
                placeholder: 'Description blogs',
                tabsize: 5,
                height: 700,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
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
