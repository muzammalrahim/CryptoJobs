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
            <div style="padding: 100px 0px; text-align: center;">
                <table>
                    <tr style="background-color: black;">
                    <th style="padding: 20px">Title</th>
                    <th style="padding: 20px">Desceiption</th>
                    <th style="padding: 20px">Created At</th>
                    <th style="padding: 20px">Image</th>
                    <th style="padding: 20px">Delete</th>
                    <th style="padding: 20px">Update</th>
                    </tr>

                    @foreach ($job as $jobs)
                    <tr>
                        <td style="padding: 0px 20px">{{ $jobs->name }}</td>
                        <td style="padding: 0px 20px">{{ $jobs->description }}</td>
                        <td style="padding: 0px 20px">{{ $jobs->created_at }}</td>
                        <td style="padding: 5px 20px">
                            <img src="jobsimages/{{ $jobs->image }}" width="100" height="100">
                        </td>
                        <td style="padding: 5px 20px"><a onclick="return confirm('Are You Sure To Delete This?')" href="{{url('job_delete', $jobs->id)}}" class="btn btn-danger">Delete</a></td>
                        <td style="padding: 5px 20px"><a href="{{url('job_update', $jobs->id)}}" class="btn btn-primary">update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>  

    @include('admin.script')

  </body>
</html>