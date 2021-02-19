@extends('admin.layout.layout')
@section('title', 'Categories')
@section('content')
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-puzzle-piece">
                        </i>
                    </div>
                    <div>Categories</div> @if(session()->has('message'))
                    <div class="alert alert-success" id="success-alert">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Success! </strong>
                      {{ session()->get('message') }}
                  </div>
              @endif
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="/admin/categories/create" class="btn-shadow btn btn-success" style="color: #fff; font-weight:bold">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-plus"></i>
                            </span>
                            Add
                        </a>
                    </div>
                </div>    
            </div>
        </div>   

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($cat as $category)
                                <tr>
                                    <td class="text-center text-muted">#345</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$category->name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="{{asset('storage/files/'.$category->img)}}" alt="Cat Image" style="width: 200px"></td>
                                    <td class="text-center">
                                        <a style="color: #fff; font-weight: bold" href="/admin/categories/edit/{{$category->id}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a style="color: #fff; font-weight: bold" href="/admin/categories/delete/{{$category->id}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
        <script>
            $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
            $("#success-alert").alert('close');
        });
        </script>
@endsection