@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>About Menu</h1>
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
                    @if($menu->translations->isnotEmpty())
                    <td>{{$menu->translations->first()->title}}</td>
                    @endif
                    <td class="edit-delete">
                        <a href="{{route('aboutmenuEdit', ['aboutmenu'=>$menu->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
