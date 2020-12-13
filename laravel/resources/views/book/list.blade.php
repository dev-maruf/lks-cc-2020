@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book List</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="{{route('book.add')}}">Add new book</a>

                    <table border="1">
                        <tr>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($books as $book)
                        <tr>
                            <td>{{$book->isbn}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->description}}</td>
                            <td>
                                <img src="/{{$book->image}}" width="100px" alt="Book Image">
                            </td>
                            <td>
                                <a href="{{route('book.edit', ['id' => $book->id])}}">Edit</a>
                                <a href="{{route('book.delete', ['id' => $book->id])}}">Remove</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection