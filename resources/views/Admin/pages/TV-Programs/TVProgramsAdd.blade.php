@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Add TV Program</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('tv-program-add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group py-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" id="summernote">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>URL</label>
                        <input type="text" name="url" class="form-control" id="summernote">
                        @error('url')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
