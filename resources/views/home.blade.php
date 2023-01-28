<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@section('content')
    <div class="row">
        <img src="" alt="">
        <div class="col-md-12">
            <div class="panel panel-default">
                {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
                    <script>
                        @if(Session::has('success'))
                        Toastify({ text: "{{ Session::get('alert-success') }}", duration: 3000,style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
                        }).showToast();
                    @endif
                    /script> --}}
                    
                <div class="panel-heading" style="font-size: 18px;">Build Bright University
                    <span class="title" style="float: right">User Login :{{ Auth::user()->name }}</span>
                	{{-- <i class="fa fa-user" style="float: right"></i> --}}
                </div>
                
                <div class="panel-body">
                    {{-- <h3 style="color: rgb(19, 185, 19)">Hello: {{ Auth::user()->name }} </h3> --}}
                    <h1 style="color: rgb(0, 183, 255)">Walcome To Files Management System</h1>
                      
                </div>
            </div>
        </div>
        <script>
            @if (Session::has('success'))
                toastr.success("{{ session('success') }}")
            @endif
        </script>
    </div>
    
@endsection
