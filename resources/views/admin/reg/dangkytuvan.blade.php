@extends("admin.layouts.master")
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Danh Sách Đăng Ký Khóa Học</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>SĐT</th>
                      <th>Nội dung</th>
     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($potentials as $potential)
                      <tr>
                        <td>{{$potential -> id}}</td>
                        <td>{{$potential -> Name}}</td>
                        <td>{{$potential -> Email}}</td>
                        <td>{{$potential -> Phone}}</td>
                        <td>{{$potential -> Content}}</td>

                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection