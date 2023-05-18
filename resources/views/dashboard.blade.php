@extends('layouts.master')
@section('title', '| Edit Post')
@section('contents')
<div class="container"  style = "height: 70vh;">
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
    <h4 class="text-center">Welcome to the admin dashboard</h4>
  </div>
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim laudantium maxime asperiores obcaecati officiis similique.

        </p>
      </div>
    </div>
  </div>

  </div>
</div>

  @endsection()

  @section('footer')
     @parent()
  
  @endsection()