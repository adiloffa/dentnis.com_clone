@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Slider</h1>
            <a class="add-button" href="{{route('sliderAdd')}}">
                <i class="fa-solid fa-plus"></i>
                <span>Add new</span>
            </a>
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
                    <tr>
                        <td>{{$slider->id}}</td>
                        <td><img src="{{Storage::url($slider->image)}}" alt=""></td>
                        <td class="edit-delete" style="text-align: center">
                            <a href="{{route('sliderEdit', ['slider'=>$slider->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                            <form action="{{ route('sliderDelete', ['id' => $slider->id]) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>Delete</button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
