@extends('admin.layout.layout')
@section('title', 'Edit Category')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Edit {{$fetch->name}}}</h5>
        <form class="form" action="/admin/categories/update/{{$fetch->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="name" class="">Name</label><input name="name" id="name" placeholder="Enter Category Name" type="text" class="form-control" value="{{$fetch->name}}"></div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset('storage/files/'.$fetch->img)}}" alt="">
                    <div class="position-relative form-group"><label for="image" class="">Category Image</label><input name="image" id="image" type="file" value="{{$fetch->img}}" class="form-control"></div>
                </div>
            </div>
            <button class="mt-2 btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection