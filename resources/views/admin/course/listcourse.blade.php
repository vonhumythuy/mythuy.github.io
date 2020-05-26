@extends("admin.layouts.master")
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Danh Sách Khóa Học</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Chi Tiết</th>
                      <th>Ngày Bắt Đầu</th>
                      <th>Ngày Kết Thúc</th>
                      <th>Kéo Dài</th>
                      <th>Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($classes as $class)
                      <tr>
                        <td>{{$class -> id}}</td>
                        <td>{{$class -> Name}}</td>
                        <td>{{$class -> description}}</td>
                        <td>{{$class -> StartDate}}</td>
                        <td>{{$class -> EndDate}}</td>
                        <td>{{$class -> keodai}}</td>
                        <td>
                          <a href="{{Route("editcourse",$class -> id)}}">
                            <i class="fas fa-eye">
                            </i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
@endsection