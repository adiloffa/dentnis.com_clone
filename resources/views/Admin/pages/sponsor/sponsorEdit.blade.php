@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Sponsor</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('sponsorUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($sponsor->image)
                        <img style="width: 200px" src="{{Storage::url($sponsor->image)}}" alt="">
                    @endif
                    <div class="form-group py-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="summernote">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="sponsor_id" value="{{$sponsor->id}}">
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
