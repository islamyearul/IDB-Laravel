@extends('layouts/front-layout')

@section('index')

<div class="container">

    {{-- Service --}}
    @include('frontsection/service')

     <!-- Portfolio Grid-->
     @include('frontsection/portfolio')
     <!-- About-->
     @include('frontsection/about')
     <!-- Team-->
     @include('frontsection/team')
     <!-- Clients-->
     @include('frontsection/client')
     <!-- Contact-->
     @include('frontsection/contact')

</div>


@endsection


      