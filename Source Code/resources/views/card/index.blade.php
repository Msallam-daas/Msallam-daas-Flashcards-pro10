@extends('layouts.app')

@section('content')
<Style>
  .item1 {
  grid-area: myArea;
  

}

.grid-container {
  display: grid;
  grid-template-areas: 'myArea myArea myArea myArea ';
  grid-gap: 10px;

  padding: 10px;
  margin-top:1rem;
 
}

.grid-container > div {
 
  text-align: center;
  padding: 20px 0;
  font-size: 18px;
  
}

.flex-container {
  display: flex;
justify-content: center

}

.flex-container > div {
  font-size: 30px;
}
@media (max-width: 1024px){
    .grid-container {

grid-template-areas: 'myArea myArea myArea';


}
}
@media (max-width: 775px){
    .grid-container {

grid-template-areas: 'myArea myArea';
 margin-left:5rem;

}
}
  @media (max-width: 765px){
    .grid-container {

grid-template-areas: 'myArea';
margin-left:0rem;

}


footer{
  margin-top:575px;
 
}

}
</Style>


    <div class="  mt-5">
    <h1 class="mb-3 mt-5 text-center" >Flash Cards</h1>
<a class="btn btn-link float-end  " href="{{route('card.create')}}">Create Card</a>
@if (session('success'))
<div class="alert alert-success " >
    {{session('success')}}
</div>
@endif



<div class="grid-container mb-5">

@foreach($cards as $card)
<div class="card-all">
<div class="flip-card" >
            <div class="flip-card-inner" style="background:{{$card['color']}}" >
              <div class="flip-card-front ">
                <p class="card-title">{{$card['front']}}</p>
              </div>
              <div class="flip-card-back ">
                <p class="card-context">{{$card['back']}}</p>
              </div>
            </div>
           
          </div>
          <div class="flex-container">
          <div >
          <a  style="margin:0.5em" class="btn btn-dark" href="{{route('card.edit', $card->id)}}"><i class="fas fa-edit"></i></a>
          </div >
          <div >
          <form action="{{route('card.destroy', $card->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-dark" type="submit"><i class="fas fa-trash"></i></button>

</form>
</div >
</div >     
</div >       
@endforeach
</>

</div>
<!-- Footer Section -->
<footer class=" text-center text-whit mt-5"  style="background-color:#000000">
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