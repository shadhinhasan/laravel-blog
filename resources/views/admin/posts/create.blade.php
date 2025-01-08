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


                <form action="{{ url('admin/posts/create') }}" method="POST">
                @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                    <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                             <select name="category_id" class="form-control">
                                <option>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Type Post Title" />
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Type Post Detils" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Seclete Post Image" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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