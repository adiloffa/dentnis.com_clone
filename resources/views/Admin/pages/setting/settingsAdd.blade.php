@extends('Admin.front')

@section('content')
    <div class="content">
        <h2>Add Setting</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('settingsAdd')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group py-3">
                        <label>Top logo</label>
                        <input type="file" name="top_logo" class="form-control" id="summernote">
                        @error('top_logo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Bottom logo</label>
                        <input type="file" name="bottom_logo" class="form-control" id="summernote">
                        @error('bottom_logo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" id="summernote">
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" id="summernote">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group py-3">
                        <label>Phone number:</label>
                        <input type="tel" name="phone_number" class="form-control" id="summernote">
                        @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
