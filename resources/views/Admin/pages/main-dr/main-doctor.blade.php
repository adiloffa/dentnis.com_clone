@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Main Doctor</h1>
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
            @foreach($main_doctor as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>

                    <td>{!!  Str::limit(strip_tags($doctor->translation->description), 100) !!}</td>
                    <td class="edit-delete">
                        <a href="{{route('main-doctor-edit', ['dr'=>$doctor->id])}}"><button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button></a>
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
