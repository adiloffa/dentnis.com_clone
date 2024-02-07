@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit TV Program</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('tv-programs-update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group py-3">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('url', $tv->title) }}" class="form-control" id="summernote">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ old('url', $tv->url) }}" class="form-control" id="summernote">
                        @error('url')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="tv_programs_id" value="{{$tv->id}}">
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
