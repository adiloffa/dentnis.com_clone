@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>TV Programs</h1>
            <a class="add-button" href="{{route('tv-program-add')}}">
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
                <th>Title</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($TVPrograms as $TVProgram)
                <tr>
                    <td>{{$TVProgram->id}}</td>
                    <td>{{ Str::limit($TVProgram->title, 30, '...') }}</td>
                    <td><a href="{{$TVProgram->url}}">{{ Str::limit($TVProgram->url, 50, '...') }}</a></td>
                    <td class="edit-delete">
                        <a href="{{route('tv-program-edit', ['tv'=>$TVProgram->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                        <form action="{{ route('tv-programs-delete', ['id' => $TVProgram->id]) }}" method="post" class="d-inline">
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
