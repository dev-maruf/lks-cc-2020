@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Book</div>

                <div class="card-body">
                    <form action="{{route('book.insert')}}" method="post">
                        {{csrf_field()}}
                        <input type="text" required name="isbn" id="isbn" placeholder="ISBN">
                        <input type="text" required name="title" id="title" placeholder="Title">
                        <input type="text" required name="description" id="description" placeholder="Description">
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection