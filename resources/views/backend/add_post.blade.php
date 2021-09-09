@extends('layouts.backend_app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Post</h1>

  </div>

  <div class="row">
  	<div class="col-lg-3"></div>
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Post</h6>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('savePost')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="yourName">Title</label>
              <input type="text" class="form-control" id="yourName" name="title" aria-describedby="emailHelp"
                placeholder="Write tiele here"> 
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="customFile">
                <label class="custom-file-label" for="customFile">Upload Post Image</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
  </div>
  <div class="col-lg-3"></div>
</div>

@endsection
