@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Main Doctor</h1>
{{--            <a class="add-button" href="{{route('main-doctor-add')}}">--}}
{{--                <i class="fa-solid fa-plus"></i>--}}
{{--                <span>Add new</span>--}}
{{--            </a>--}}
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <table>
            <thead>
            <tr>
                <th>#id</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($main_doctor as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>

                    <td>{!!  Str::limit(strip_tags($doctor->translation->description), 100) !!}</td>
                    <td class="edit-delete">
                        <a href="{{route('main-doctor-edit', ['dr'=>$doctor->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
{{--                        <form action="{{ route('main-doctor-delete', ['id' => $doctor->id]) }}" method="post" class="d-inline">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>Delete</button>--}}
{{--                        </form>--}}
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
