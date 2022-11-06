@extends('layout.master')
@section('content')
    <div class="input-group mb-3">
        <input class="form-control border-end-0 border rounded-pill" type="text" value="Tìm kếm người dùng... " id="example-search-input">
        <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
    </div>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr class="text-center">
            <th >STT</th>
            <th >Name</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0 ?>
            @foreach($users as $user)
                <tr class="text-center">
                    <td>
                        {{$i++}}
                    </td>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    @if($user->gender ==0)
                        <td>Nu</td>
                    @else
                        <td>
                           Nam
                        </td>
                    @endif
                    <td>
                        {{$user->phone}}
                    </td>
                    <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">
                            Sửa
                        </a>
                        <a href="{{route('users.delete',$user->id)}}"  class="btn btn-danger">
                            Xóa
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
    <!-- /.content -->

