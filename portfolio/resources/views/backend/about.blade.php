@extends('layouts/admin-layout');

@section('about')

<nav aria-label="breadcrumb" class="">
    <h1 class="mt-4 text-center">{{ strtoupper(substr(strrchr(url()->current(),"/"),1)) }}</h1>
    <ol class="breadcrumb py-2 px-2">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Admin</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/admin/'.substr(strrchr(url()->current(),"/"),1)) }}">{{ ucfirst(substr(strrchr(url()->current(),"/"),1)) }}</a></li>
    </ol>
</nav>

    
@endsection