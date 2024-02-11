@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Edit Setting</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('settingsUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($setting->first()->top_logo)
                        <img style="width: 100px" src="{{Storage::url($setting->first()->top_logo)}}" alt="">
                    @endif
                    <div class="form-group py-3">
                        <label>Top logo</label>
                        <input type="file" name="top_logo" class="form-control" id="summernote">
                        @error('top_logo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @if($setting->first()->bottom_logo)
                        <img style="width: 100px; background-color: black" src="{{Storage::url($setting->first()->bottom_logo)}}" alt="">
                    @endif
                    <div class="form-group py-3">
                        <label>Bottom logo</label>
                        <input type="file" name="bottom_logo" class="form-control" id="summernote">
                        @error('bottom_logo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Address</label>
                        <input value="{{$setting->first()->address}}" type="text" name="address" class="form-control" id="summernote">
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Email address</label>
                        <input value="{{$setting->first()->mail}}" type="email" name="email" class="form-control" id="summernote">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Phone number:</label>
                        <input value="{{$setting->first()->phone}}" type="tel" name="phone_number" class="form-control" id="summernote">
                        @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="setting_id" value="{{$setting->first()->id}}">
                    <button class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
