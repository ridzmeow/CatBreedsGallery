@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4>Cat Breeds Gallery</h4>
        <a class="add btn btn-primary btn-sm" href="/cats/create">Add new breed</a><br />
        <div>
            <p style="color:green;">{{ session('mssg') }}</p>
        </div>
        <div class="table-response">
            <table class="table table-bordered table-striped" id="cat_list">
                <thead>
                    <tr>
                        <th width="25%">Breed</th>
                        <th width="25%">Type</th>
                        <th width="25%">Coat Length</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->breed}}</td>
                        <td>
                        @foreach($cat->type as $t)
                            <p>{{$t}}</p>
                        @endforeach
                        </td>
                        <td>{{$cat->coatLength}}</td>
                        <td>
                            <a href="/cats/{{ $cat->id }}" class="edit btn btn-primary btn-sm">Edit</a>
                            &nbsp;&nbsp;
                            <a href="/cats/delete/{{ $cat->id }}" class="delete btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr >
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
