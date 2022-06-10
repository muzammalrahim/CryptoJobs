<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;
      }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')

      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div class="container text-center pt-5">
        @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
        </div>
        @endif
          <form action="{{url('upload_jobs')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-3">
              <label>Title </label>
              <input type="text" class="text-black w-25" name="name" placeholder="title" required="">
            </div>
            <div class="p-3">
              <label>Description </label>
              <textarea type="text" class="text-black w-25" name="description" placeholder="Description" required=""></textarea>
            </div>
            <div class="p-3">
              <label>Image</label>
              <input type="file" class="text-black w-25" name="file" placeholder="Write the room number" required="">
            </div>
            <div class="p-3">
              <input type="submit" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>  

    @include('admin.script')

  </body>
</html>