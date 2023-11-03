@extends ('template.master')

@section ('container')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Latest Members</h3>

      <div class="card-tools">
        <span class="badge badge-danger">10 New Members</span>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
       <ul class="users-list clearfix grid-container">
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/avatar4.png" alt="User Image">
          <a class="users-list-name" href="#">Alex</a>
          <span class="users-list-date">Today</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/user8-128x128.jpg" alt="User Image">
          <a class="users-list-name" href="#">Norman</a>
          <span class="users-list-date">Yesterday</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/user7-128x128.jpg" alt="User Image">
          <a class="users-list-name" href="#">Jane</a>
          <span class="users-list-date">12 Jan</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/user6-128x128.jpg" alt="User Image">
          <a class="users-list-name" href="#">John</a>
          <span class="users-list-date">12 Jan</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/avatar5.png" alt="User Image">
          <a class="users-list-name" href="#">Xander</a>
          <span class="users-list-date">13 Jan</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/user5-128x128.jpg" alt="User Image">
          <a class="users-list-name" href="#">Sarah</a>
          <span class="users-list-date">14 Jan</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/user4-128x128.jpg" alt="User Image">
          <a class="users-list-name" href="#">Nora</a>
          <span class="users-list-date">15 Jan</span>
        </li>
        <li class="user-item">
          <img src="{{asset('adminLTE')}}/dist/img/user3-128x128.jpg" alt="User Image">
          <a class="users-list-name" href="#">Nadia</a>
          <span class="users-list-date">15 Jan</span>
        </li>
      </ul>
      <!-- /.users-list -->
    </div>
   
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="javascript:">View All Users</a>
    </div>
    <!-- /.card-footer -->
  </div>
@endsection