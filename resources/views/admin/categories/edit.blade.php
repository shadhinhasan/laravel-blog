@extends('admin.layouts.master')
@section('content')
<!--begin::App Content Header-->
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Categories</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                    <div class="card-title">Create Category</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->


                <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
    
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input
                                type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
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