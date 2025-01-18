@extends('admin.layouts.master')
@section('content')
<!--begin::App Content Header-->
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Posts</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Posts</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->

        <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header category-header">
                    <h3 class="card-title">Post List</h3>
                    <a href="{{ URL::to('admin/posts/create')}}" type="button" class="btn btn-primary btn-right">Add New</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    
                @if (session('success'))
                  <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">Sl</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->img }}</td>
                            <td>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                <a href="" type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection