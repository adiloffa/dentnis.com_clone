@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Social Media</h1>
            <a class="add-button" href="{{route('social-network-add')}}">
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
                <th>URL</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($socialNetworks as $socialNetwork)
                <tr>
                    <td>{{$socialNetwork->id}}</td>
                    <td><img src="{{Storage::url($socialNetwork->image)}}" alt=""></td>
                    <td><a href="{{$socialNetwork->url}}">{{ Str::limit($socialNetwork->url, 50, '...') }}</a></td>
                    <td class="edit-delete" style="text-align: center">
                        <a href="{{route('social-networks-edit', ['social'=>$socialNetwork->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                        <form action="{{ route('social-networks-delete', ['id' => $socialNetwork->id]) }}" method="post" class="d-inline">
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
