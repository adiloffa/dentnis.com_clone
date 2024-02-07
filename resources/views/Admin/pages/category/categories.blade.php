@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Categories</h1>
            <a class="add-button" href="{{route('categoryAdd')}}">
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
                <th>#id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
{{--                    @foreach($category->translations as $item)--}}
{{--                        <td>{{$item->name}}</td>--}}
{{--                    @endforeach--}}
                    <td>{{$category->translations->first()->name}}</td>

                    <td class="edit-delete">
                        <a href="{{route('categoryEdit', ['category'=>$category->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                        <form action="{{ route('categoryDelete', ['id' => $category->id]) }}" method="post" class="d-inline">
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
