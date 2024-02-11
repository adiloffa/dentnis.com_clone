@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Doctor's Image</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('dr-images-update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($dr->image)
                        <img style="width: 100px" src="{{Storage::url($dr->image)}}" alt="">
                    @endif
                    <div class="form-group py-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="summernote">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="dr_image_id" value="{{$dr->id}}">
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
