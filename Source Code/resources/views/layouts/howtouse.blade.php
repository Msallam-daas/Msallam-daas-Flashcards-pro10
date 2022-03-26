@extends('layouts.app')

@section('content')
<style>
    .item1 {
  grid-area: myArea;
  

}

.grid-container {
  display: grid;
  grid-template-areas: 'myArea myArea  ' 'myArea myArea  ';


 
  margin-top:1rem;
 
}
.grid-container img{
    width:75%;
    border-radius: 25px;

}

.grid-container > div {

  text-align: center;
  padding:0 0;
  font-size: 18px;
  
}

@media (max-width: 765px){
    .grid-container {

grid-template-areas: 'myArea''myArea''myArea''myArea';

}
    footer{
  margin-top:575px;
 
}


}


</style>
<!-- Header Section -->
<div style="width:100vw" class="row justify-content-center">
    <div class="p-5 text-center text-white " style="background-color:#000000">
    <h1 class="mb-5">FLASH CARDS</h1>
    <h4 class="mb-5">"Help you focus on what you dont know"</h4>
  </div>   
</div>
<!-- End Header Section -->

<!-- Flashcards Concept Section -->
<h2 class="mb-3 mt-5 text-center" style="font-weight:bold">Start Create Your Flashcards</h2>

<div class="grid-container mb-5">

  <div class="item2" >
   <img src="{{asset('images/1.png')}}"   alt="logo" />
  </div>
  <div class="item3" >      <img src="{{asset('images/2.png')}}"   alt="logo" /></div>  
  <div class="item4" >      <img src="{{asset('images/3.png')}}"   alt="logo" /></div>
  <div class="item5" style="margin-right:0.5rem;">     <img src="{{asset('images/4.png')}}"   alt="logo" /></div>

</div>
<!--End Flashcards Concept Section -->

<!-- Footer Section -->
<footer class=" text-center text-whit "  style="background-color:#000000">
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
