@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Youtube Link</h1>
            @if($rowCount < 1)
                <a class="add-button" href="{{route('youtubeAdd')}}">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add new</span>
                </a>
            @else
                <button class="btn btn-danger disabled">You can only add 1 youtube link</button>
            @endif
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
                <th>URL</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($yt_links as $yt_link)
                <tr>
                    <td>{{$yt_link->id}}</td>
                    <td><a href="{{$yt_link->url}}">{{ Str::limit($yt_link->url, 50, '...') }}</a></td>
                    <td class="edit-delete" >
                        <a href="{{route('youtubeEdit', ['link'=>$yt_link->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                        <form action="{{ route('youtubeDelete', ['id' => $yt_link->id]) }}" method="post" class="d-inline">
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
