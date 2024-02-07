@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Blogs</h1>
            <a class="add-button" href="{{route('blogAdd')}}">
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
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td><img src="{{Storage::url($blog->image)}}" style="width: 100px"  alt=""></td>
                    <td>{{$blog->translation->title}}</td>
                    <td>{!!  Str::limit(strip_tags($blog->translation->description), 100) !!}</td>
                    <td>{{$blog->category->translation->name ?? ''}}</td>
                    <td class="edit-delete">
                        <a href="{{route('blogEdit', ['blog'=>$blog->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                        <form action="{{route('blogDelete', ['id' => $blog->id])}}" method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
