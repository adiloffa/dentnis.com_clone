@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>About Us</h1>
{{--            <a class="add-button" href="{{route('about-us-add')}}">--}}
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
            @foreach($about_us as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{!!  Str::limit(strip_tags($item->translation->description), 100) !!}</td>
                    <td class="edit-delete">
                        <a href="{{route('about-us-edit', ['about'=>$item->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
{{--                        <form action="{{ route('about-us-delete', ['id' => $item->id]) }}" method="post" class="d-inline">--}}
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
