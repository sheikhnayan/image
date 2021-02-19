@extends('admin.layout.layout')
@section('title', 'Create Category')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Create Category</h5>
        <form class="form" action="/admin/categories/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="name" class="">Name</label><input name="name" id="name" placeholder="Enter Category Name" type="text" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="image" class="">Category Image</label><input name="image" id="image" type="file" class="form-control"></div>
                </div>
            </div>
            <button class="mt-2 btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection