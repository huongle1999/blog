@extends('layout.master')
@section('content')
    <section class="content">
        <div class="row">
            <form action="{{route('users.update',$user->id)}}" method="post">
                @method('patch')
                <div class="col-sm-12 col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Cập nhật người dùng</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Giới tính</label>
                                <select id="gender" name="gender" class="form-control custom-select" value="{{$user->gender}}">
                                    <option>Giới tính</option>
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </form>
        </div>
    </section>
@endsection
