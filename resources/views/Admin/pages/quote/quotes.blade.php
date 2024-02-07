@extends('Admin.front')

@section('content')
    <div class="content">
        <div class="top">
            <h1>Quotes</h1>
            @if($rowCount < 3)
                <a class="add-button" href="{{route('quoteAdd')}}">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add new</span>
                </a>
            @else
                <button class="btn btn-danger disabled">There is no enough space</button>
            @endif
{{--            @else--}}
{{--                <span>no</span>--}}
{{--            @endif--}}
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
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($quotes as $quote)
                <tr>
                    <td>{{$quote->id}}</td>
                    <td><img src="{{Storage::url($quote->image)}}" style="width: 100px" alt=""></td>
                    {{--                    <td>{{$quote->translations->first()->title}}</td>--}}
                    @foreach($quote->translations as $item)
                        <td>{{$item->title}}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->description, 100, '...') }}</td>
                    @endforeach
                    <td class="edit-delete">
                        <a href="{{route('quoteEdit', ['quote'=>$quote->id])}}">
                            <button><i id="edit-icon" class="fa-solid fa-pen"></i><span>Edit</span></button>
                        </a>
                        <form action="{{ route('quoteDelete', ['id' => $quote->id]) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')"><i
                                    class="fa-solid fa-trash"></i>Delete
                            </button>
                        </form>
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
