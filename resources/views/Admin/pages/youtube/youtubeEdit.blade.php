@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Youtube Link</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('youtubeUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group py-3">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ old('url', $link->url) }}" class="form-control" id="summernote">
                        @error('url')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="youtube_id" value="{{$link->id}}">
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
