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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Posts</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
<div class="app-content">
    <div class="container-fluid">
            <!--begin::Row-->
        <div class="row g-4">
            <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Create Post</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->



                <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <!--begin::Body-->
                    <div class="card-body">
                    <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                             <select name="category_id" class="form-control">
                                <option>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $post->category_id===$category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea rows="15" name="description" id="description" class="form-control post-description" >{{ $post->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ $post->img}}" />
                        </div>
                        <div class="mb-3">
                            <img class=" edit-image" src="{{ asset('uploads/images/'.$post->img) }}" alt="Post Images">
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('post.list') }}"  class="btn btn-danger">Cancel</a>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
                <!--end::Quick Example-->
        </div>
    </div>
</div>

@endsection