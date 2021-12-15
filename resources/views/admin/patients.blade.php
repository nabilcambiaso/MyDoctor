
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>myDoctor Admin</title>
    {{-- css files --}}
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        {{-- side bar --}}
      @include('admin.sidebar')

      <div class="container-fluid page-body-wrapper">
       {{-- navbar --}}
         @include('admin.navbar')

         {{-- content --}}
         <div class="main-panel">
            <div class="content-wrapper">
                <div class="row ">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Order Status</h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="form-check form-check-muted m-0">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                      </label>
                                    </div>
                                  </th>
                                  <th> Patient Name </th>
                                  <th> email </th>
                                  <th> Product Cost </th>
                                  <th> Project </th>
                                  <th> Payment Mode </th>
                                  <th> Start Date </th>
                                  <th> Action </th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($data as $data)
                                      
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input">
                                        </label>
                                      </div>
                                    </td>
                                    <td>
                                      <img src="admin/assets/images/faces/face1.jpg" alt="image" />
                                      <span class="pl-2">{{$data->name}}</span>
                                    </td>
                                    <td> {{$data->email}} </td>
                                    <td> $14,500 </td>
                                    <td> Dashboard </td>
                                    <td> Credit card </td>
                                    <td> 04 Dec 2019 </td>
                                    <td>
                                      <div class="badge badge-outline-success">Approved</div>
                                    </td>
                                  </tr>

                                  @endforeach
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
         </div>     
      </div>
    </div>
    {{-- scripts --}}
    @include('admin.adminscripts')
  </body>
</html>