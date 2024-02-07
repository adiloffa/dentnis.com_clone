@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Add Youtube Link</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('youtubeAdd')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
