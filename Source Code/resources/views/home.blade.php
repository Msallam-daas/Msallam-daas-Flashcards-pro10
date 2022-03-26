@extends('layouts.app')

@section('content')
<style>
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
  background-color: black;
  text-align: center;
  padding: 20px 0;
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
.home-testimonial {
    background-color: #231834;
    height: 450px
}

.home-testimonial-bottom {

    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: 20px;
    margin-bottom: 0px;
    position: relative;
    height: 130px;
    top: 190px
}

.home-testimonial h3 {
    color: var(--orange);
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase
}

.home-testimonial h2 {
    color: white;
    font-size: 28px;
    font-weight: 700
}

.testimonial-inner {
    position: relative;
    top: -174px
}

.testimonial-pos {
    position: relative;
    top: 24px
}

.testimonial-inner .tour-desc {
    border-radius: 5px;
    padding: 40px
}

.color-grey-3 {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.testimonial-inner img.tm-people {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none
}

.link-name {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.link-position {
    font-family: "Montserrat", Sans-serif;
    font-size: 12px;
    color: #6c83a2
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
<h2 class="mb-3 mt-5 text-center" style="font-weight:bold">Flashcards Concept</h2>
<div class="grid-container mb-5">

  <div class="item2" style="background-color:#f06e4b;color:white;border-radius: 15px;">
    <h3>1</h3>
    <p style="font-size:16px;margin:.2em">Flashcards are a study or memorisation tool, with 
information on one or both sides. Using flashcards is a versatile learning 
strategy that benefits 
students of all ages.</p>
  </div>
  <div class="item3" style="background-color:#7f5cb4;color:white;border-radius: 15px;">    <h3>2</h3>
    <p style="font-size:16px;margin:.2em">When used properly, 
flashcards can be 
effective at imprinting 
information into our short and long term memory.</p></div>  
  <div class="item4" style="background-color:#05d7a0;color:white;border-radius: 15px;">    <h3>3</h3>
    <p style="font-size:16px;margin:.2em">The effectiveness of 
learning sessions using flashcards relies on how frequently you revisit the information and revise what you’ve learned.</p></div>
  <div class="item5" style="background-color:#d26e96;color:white;margin-right:0.5rem;border-radius: 15px;">    <h3>4</h3>
    <p style="font-size:16px;margin:.2em">Spaced Practice is one of the strategies learners can use to prevent us from losing information we’ve learned and begin embedding it into our long term memory.</p></div>

</div>
<!--End Flashcards Concept Section -->

<!-- Testimonials Section -->

<section class="home-testimonial" style="background-color:#000000">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3 class="text-white">Testimonials</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Explore the students experience</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc mt-3" style="background-color:#5C91B4">
                                <div class="tour-text text-white text-center">“AWriting out carefully what to remember, and how to remember .”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6893889/pexels-photo-6893889.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                                <div class="link-name d-flex justify-content-center text-white">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center text-white">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc mt-3" style="background-color:#5C91B4">
                                <div class="tour-text text-white text-center">“Wow, I felt like I learned this in a flash!  Also, spaced repetition is far out!.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/842548/pexels-photo-842548.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                                <div class="link-name d-flex justify-content-center text-white">Yaser Khaled</div>
                                <div class="link-position d-flex justify-content-center text-white">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3" >
                        <div class="tour-item " >
                            <div class="tour-desc  mt-3" style="background-color:#5C91B4">
                                <div class="tour-text text-white text-center">“Amazing idea it really added value to me thank you .”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                                <div class="link-name d-flex justify-content-center text-white">Ali Ahmad</div>
                                <div class="link-position d-flex justify-content-center text-white">Student</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</section>
<!-- End Testimonials Section -->

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
