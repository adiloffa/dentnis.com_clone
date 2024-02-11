@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Team</h1>
            <a class="add-button" href="{{route('teamAdd')}}">
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
                <th>#Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td><img src="{{Storage::url($team->image)}}" alt=""></td>
                    <td>{{$team->title}}</td>
                    <td>{{$team->translation->position}}</td>
                    <td class="edit-delete">
                        <a href="{{route('teamEdit', ['team'=>$team->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                        <form action="{{ route('teamDelete', ['id' => $team->id]) }}" method="post" class="d-inline">
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
