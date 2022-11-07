@extends('auth.master')
@section('title')
    <title>AdminLTE 3 | Register page</title>
@endsection
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body" id="register">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{route('users.register')}}" method="post">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Tên">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        @error('name')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone')}}" placeholder="Số điện thoại">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        @error('phone')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <select class="form-control select2" style="width: 100%;" name="gender">
                            <option  @if(old('gender')=='') selected @endif>Lựa chọn giới tính</option>
                            <option value="0" @if(old('gender')==0) selected @endif>Nam</option>
                            <option value="1"  @if(old('gender')==1) selected @endif>Nữ</option>
                        </select>
                    </div>
{{--                    <div class="input-group">--}}
{{--                        <select style="width: 100%;">--}}
{{--                            <option  @if(old('gender')=='') selected @endif  >Lựa chọn giới tính</option>--}}
{{--                            <option value="0" @if(old('gender')==0) selected @endif>Nam</option>--}}
{{--                            <option value="1"  @if(old('gender')==1) selected @endif>Nữ</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div>
                        @error('gender')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" value="{{ old('email')}}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        @error('email')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control"
                               name="password" id="password"
                               value="{{ old('password')}}"
                               placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        @error('password')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection
@push('script')
    <script>
        // document.getElementById('register').addEventListener('click', (e) => {
        //     // console.log(1);
        //     e.preventDefault();
        //     document.getElementById('password').setCustomValidity('password must contain at least 10 characters in length, at least one lowercase letter,at least uppercase letter,at least one digit, at least special character');
        //     // document.getElementById('password').reportValidity();
        // });
    </script>
    @endpush


