@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Setting</h1>
            @if($rowCount < 1)
            <a class="add-button" href="{{route('settingsAdd')}}">
                <i class="fa-solid fa-plus"></i>
                <span>Add new</span>
            </a>
            @else
                <button class="btn btn-danger disabled">You can only add 1 setting info</button>
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
                <th>Top-logo</th>
                <th>Bottom-logo</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($settings as $setting)
                <tr>
                    <td>{{$setting->id}}</td>
                    <td><img src="{{Storage::url($setting->top_logo)}}" alt=""></td>
                    <td><img style="background-color: black" src="{{Storage::url($setting->bottom_logo)}}" alt=""></td>
                    <td>{{$setting->address}}</td>
                    <td>{{$setting->mail}}</td>
                    <td>{{$setting->phone}}</td>
                    <td class="edit-delete" style="text-align: center">
                        <a href="{{route('settingsEdit', ['setting'=>$setting->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
