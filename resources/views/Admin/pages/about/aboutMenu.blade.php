@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>About Menu</h1>
{{--            <a class="add-button" href="{{route('aboutmenuAdd')}}">--}}
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
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($aboutMenu as $menu)
{{--                @dd($menu)--}}
                <tr>
                    <td>{{$menu->id}}</td>
                    {{--                    @foreach($category->translations as $item)--}}
                    {{--                        <td>{{$item->name}}</td>--}}
                    {{--                    @endforeach--}}
                    @if($menu->translations->isnotEmpty())
                    <td>{{$menu->translations->first()->title}}</td>
                    @endif
                    <td class="edit-delete">
                        <a href="{{route('aboutmenuEdit', ['aboutmenu'=>$menu->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
{{--                        <form action="{{ route('aboutmenuDelete', ['id' => $menu->id]) }}" method="post" class="d-inline">--}}
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
