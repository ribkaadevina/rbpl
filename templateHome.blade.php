@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateHome.css')}}">
<body>
    <header>
        <nav class="navbar navbar-expand-sm fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand px-1" href="#">
                <img src="{{ asset('images/logo_studnest.png') }}" alt="StudNest" width="20%" height="20%" class="d-inline-block align-text-top">
                <b>StudNest</b>
              </a>
              <div class="navbar-nav ms-auto pr-5">
                <a>
                    <i class="fas fa-user mr-3"></i>
                    Nama
                </a>
              </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
        <div class="row mt-1">
            <div class="sidebar position-sticky sidebar-sticky col-md-2">
                @yield('sidebar')
            </div>
            <div class="content col-md-10">
                @yield('isi')
            </div>
        </div>
</body>

