<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@extends('layouts.auth')

@section('content')
<div class="row h-100 w-100" style="justify-content:center;display:flex ; background-color: rgb(107, 107, 219)" id="login-box">
    <div class="col-md-4" style="color: green">
        <div class="panel panel-default">
            {{-- <div class="panel-heading">{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</div> --}}
            <div class="panel-heading" style="color: green">
                <h3>Files System Management Login</h3>
            </div>
            <div class="panel-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- <h1>Hii</h1> --}}
                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('login') }}">
                    <input type="hidden"
                           name="_token"
                           value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                        <div class="col-md-6">
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="name@email.com">
                        </div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div> --}}

                    <div class="form-group">
                        <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                        <div class="col-md-6">
                            <input type="password"
                                   class="form-control"
                                   name="password"
                                   placeholder="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="{{ route('auth.password.reset') }}" style="color: red">@lang('quickadmin.qa_forgot_password')</a>
                            <br>
                            <a href="{{ route('auth.register') }}">@lang('quickadmin.qa_registration')</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <label>
                                <input type="checkbox"
                                       name="remember"> @lang('quickadmin.qa_remember_me')
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit"
                                    class="btn btn-success"
                                    style="margin-right: 15px;">
                                @lang('quickadmin.qa_login')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    @if (Session::has('success'))
        toastr.success("{{ session('success') }}")
    @endif
</script>
@endsection