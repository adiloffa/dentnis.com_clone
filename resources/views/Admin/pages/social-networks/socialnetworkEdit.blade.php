@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Social Media</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('social-networks-update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($social->image)
                    <img style="width: 100px" src="{{Storage::url($social->image)}}" alt="">
                    @endif
                    <div class="form-group py-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="summernote">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ old('url', $social->url) }}" class="form-control" id="summernote">
                        @error('url')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="social_network_id" value="{{$social->id}}">
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
