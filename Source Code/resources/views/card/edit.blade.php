@extends('layouts.app')

@section('content')
<Style>
  @media (max-width: 765px){

footer{
  margin-top:575px;
 
}
}
</Style>
<h1 class="mb-3 mt-5 text-center">Card Update</h1>



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach

    </ul>
</div>
@endif

<form action="{{route('card.update', $card->id)}}" method="post" class="m-5">
        @csrf
        @method('put')
        <!-- <input type="text" name="icon" class="form-control mb-3" placeholder="card icon" value="{{$card['icon']}}"/> -->
        <input type="text" name="front" class="form-control mb-3" placeholder="card name" value="{{$card['front']}}"/>
        <input type="text" name="back" class="form-control mb-3" placeholder="card description" value="{{$card['back']}}"/>
        <input type="text" name="color" class="form-control mb-3" placeholder="card color" value="{{$card['color']}}"/>
        <input type="hidden" name="category_id" class="form-control mb-3" placeholder="card color" value="{{$card['category_id']}}"/>

        <button class="btn btn-dark float-end px-5" type="submit" >Submit</button>

</form>



<!-- Footer Section -->
<footer class=" text-center text-whit "  style="background-color:#000000;margin-top:150px">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3"  style="background-color:#000000">
    <a class="text-white" href="https://mdbootstrap.com/" style="text-decoration: none;">  © 2020 Copyright:FlashCards.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--End Footer Section -->

@endsection