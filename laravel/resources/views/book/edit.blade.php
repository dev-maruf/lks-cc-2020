@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Book</div>

                <div class="card-body">
                    <form action="{{route('book.update', ['id'=>$book->id])}}" method="post">
                        {{csrf_field()}}
                        <input type="text" required name="isbn" id="isbn" placeholder="ISBN" value="{{$book->isbn}}">
                        <input type="text" required name="title" id="title" placeholder="Title" value="{{$book->title}}">
                        <input type="text" required name="description" id="description" placeholder="Description" value="{{$book->description}}">
                        <input type="submit" value="Edit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection