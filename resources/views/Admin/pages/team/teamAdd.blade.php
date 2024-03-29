@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Add Team Member</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('teamAdd')}}" method="POST" enctype="multipart/form-data">
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
                                    <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="tab-{{$language}}"
                                         role="tabpanel"
                                         aria-labelledby="custom-tabs-one-home-tab">


                                        <div class="form-group">
                                            <label for="{{$language}}-position">Position</label>
                                            <input type="text" placeholder="Position" name="{{$language}}[position]"
                                                   value="{{old($language.'.position')}}"
                                                   class="form-control" id="{{$language}}-position">
                                            @error("$language.position")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group py-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" id="summernote">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="summernote">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-success">Save</button>
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
