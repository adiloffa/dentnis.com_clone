@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Add Blog</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('blogAdd')}}" method="POST" enctype="multipart/form-data">
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
                                @php
                                    $categoryTranslation =[];
                                       foreach ($categories as $category){
                                        $categoryTranslation[] = $category->translations
                                            ->where('language.lang', 'tr')->first();
                                        }
//                                        dd($categories);
                                @endphp

                                @foreach(config('app.languages') as $index => $language)
                                    <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="tab-{{$language}}"
                                         role="tabpanel"
                                         aria-labelledby="custom-tabs-one-home-tab">


                                        <div class="form-group">
                                            <label for="{{$language}}-title">Title</label>
                                            <input type="text" placeholder="Title" name="{{$language}}[title]"
                                                   value="{{old($language.'.title')}}"
                                                   class="form-control" id="{{$language}}-title">
                                            @error("$language.title")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="summernote">Description</label>
                                            <textarea type="text" name="{{$language}}[description]"
                                                      id="summernote"
                                                      class="form-control blogs">{{old($language.'.description')}}</textarea>
                                            @error("$language.description")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <label for="categorySelect">Category</label>
                        <select name="category" class="form-control" id="categorySelect">
                            <option value="">Select a category</option>
                            @foreach($categoryTranslation as $item)
                                @foreach($categories as $category)
                                    @if($category->id == $item->category_id)
                                        <option value="{{$category->id ?? ''}}">{{ $item->name ?? '' }}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                        @error('category')
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
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Initialize Bootstrap Tabs
                var tabs = new bootstrap.Tab(document.querySelector('#custom-tabs-one-home-tab'));
                tabs.show();

                // Initialize Summernote Editor
                @foreach(config('app.languages') as $index => $lang)
                new Summernote($('#summernote{{$index}}'), {
                    placeholder: 'desc{{$lang}}',
                    height: 200,
                    // Add other Summernote options as needed
                });
                @endforeach
            });
        </script>

@endsection
