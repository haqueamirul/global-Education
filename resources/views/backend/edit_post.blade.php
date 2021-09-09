@extends('layouts.backend_app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Post</h1>

  </div>

  <div class="row">
  	<div class="col-lg-3"></div>
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('updatePost')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$editpost->id}}" name="id">
            <div class="form-group">
              <label for="yourName">Title</label>
              <input type="text" class="form-control" id="yourName" name="title" aria-describedby="emailHelp" value="{{$editpost->title}}"> 
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$editpost->description}}</textarea>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" value="{{$editpost->post_image}}" id="customFile">
                <label class="custom-file-label" for="customFile">Upload Post Image</label>
                <img src="{{asset('images')}}/{{$editpost->post_image}}" style="max-width: 100px;">
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
