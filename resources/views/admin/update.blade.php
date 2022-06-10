<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        {{-- <base href="/public"> --}}
        @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')

      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding: 100px">
          <form action="{{ url('job_edit', $job->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-3">
                <label class="w-25">Title </label>
                <input type="text" class="text-black w-25" name="name" value="{{ $job->name }}">
              </div>
              <div class="p-3">
                <label class="w-25">Description </label>
                <textarea type="text" class="text-black w-25" name="description" value="{{ $job->description }}"></textarea>
              </div>
              <!-- <div class="p-3">
                <label>Old image</label>
                <img class="w-25" height="150" width="150" src="jobsimages/{{ $job->image }}" alt="old image">
              </div> -->
              <div class="p-3">
                <label>Change Image</label>
                <input type="file" name="file">
              </div>
              <div class="p-3">
                <input type="submit" class="btn btn-primary">
              </div>
          </form>
        </div>
      </div>
    </div>  

    @include('admin.script')

  </body>
</html>