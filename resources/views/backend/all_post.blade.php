@extends('layouts.backend_app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Blog Posts</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">All Blog Posts</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">All Blog Posts</h6>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Post Image</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Post Image</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($blogosts as $Blog)
              <tr>
                <td>{{$Blog->id}}</td>
                <td>{{$Blog->title}}</td>
                <td>{{ Str::limit($Blog->description, 20) }}</td>
                <td><img src="{{asset('images')}}/{{$Blog->post_image}}" style="max-width: 100px;"></td>
                <td>{{ $Blog->created_at }}</td>
                <td>
                  <a href="/edit-post/{{$Blog->id}}" class="btn btn-info">Edit</a>
                  <a href="/delete-post/{{$Blog->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->

@endsection
