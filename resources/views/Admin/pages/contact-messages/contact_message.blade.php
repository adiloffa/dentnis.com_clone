@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Contact messages</h1>
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
                <th>Full name</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->full_name}}</td>
                    <td>{{$message->phone}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->message}}</td>
                    <td class="edit-delete" style="text-align: center">
                        <form action="{{ route('comment-delete', ['id' => $message->id]) }}" method="post" class="d-inline">
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
