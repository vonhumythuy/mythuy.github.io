@extends("admin.layouts.master")
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Danh Sách Người Dùng</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Account</th>
                      <th>Tên</th>
                      <th>SDT</th>
                      <th>Email</th>
                      <th>Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    	<tr>
	                      <td>{{$user -> id}}</td>
	                      <td>{{$user -> Account}}</td>
	                      <td>{{$user -> Name}}</td>
	                      <td>{{$user -> Phone}}</td>
	                      <td>{{$user -> Email}}</td>
	                      <td>
	                      	<a href="{{Route("edituser",$user -> id)}}">
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