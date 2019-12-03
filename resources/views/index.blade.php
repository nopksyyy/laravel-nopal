@extends('template')
@section('index')
    <div class="site-blocks-cover overlay bg-light" id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="text-black">I'm Randrian Anaufal</h1>
                <p class="lead">I'm Travel Agent </p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

      <img src="images/me.jpg" alt="Image" class="img-face" data-aos="fade">

      
    </div>  

    

    
    <div class="site-section" id="services-section">
    <div class="container">
        <div class="row ">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center mb-5">My Services</h2>
            </div>

            @foreach($manages as $s)
            <div class="col-md-6 mb-4">
                <div class="service d-flex h-100">
                    <div class="service-number mr-4"><span><i class="{{$s->icon}}" style="font-size:33px;"></i></span></div>
                    <div class="service-about">
                        <h3>{{$s->title}}</h3>
                        <p>{{$s->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach

          

        </div>
    </div>
</div>
         
   

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
               <!-------- bagian isi About -------->  
            <h2 class="section-title">About Me</h2>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="bg-light pt-5">
            <img src="images/nopal.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 order-2 order-lg-1"> 
            <p>This is me.</p>
            <p></p>
          </div>
          <div class="col-lg-4 order-3 order-lg-3">
            <p></p>
            <p></p>
            <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
          </div>
          
        </div>
      </div>
    </div>

    </section>


    <section class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white">Testimonials</h2>
          </div>
        </div>
        <div class="owl-carousel slide-one-item">
          <div class="slide">
            <blockquote>
                <!--------Bagian slider --------------->
              <p>Liburan saya sangat menyenangkan, agent travel yang dapat dipercaya. </p>
              <p><cite>&mdash; Adinda Thomas</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Saya merekomendasikan anda berlibur dengan menggunakan travel agent ini.</p>
              <p><cite>&mdash; Dian Sastro</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Recommended! Good Job.</p>
              <p><cite>&mdash; Jennie</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Nice agent!</p>
              <p><cite>&mdash; Lisa</cite></p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section"  id="clients-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center">Clients</h2>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Adinda Thomas.jpg" alt="Image" class="img-fluid"> Adinda Thomas
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Dian Sastro.jpg" alt="Image" class="img-fluid">Dian Sastro
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Jennie.jpg" alt="Image" class="img-fluid">Jennie 
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Jisoo.jpg" alt="Image" class="img-fluid">Jisoo
          </div>      

          
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Lisa.jpg" alt="Image" class="img-fluid">Lisa
          </div> 
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Maudy Ayunda.jpg" alt="Image" class="img-fluid">Maudy Ayunda
          </div> 
        </div>
      </div>
    </section>

    

    <section class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Contact Form</h2>
          </div>
        </div>
        <form action="#" class="form">
          <div class="row mb-4">
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="email" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="text" class="form-control" placeholder="Subject of the message">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary" value="Send Message">
            </div>
          </div>
          
        </form>
      </div>
    </section>
@endsection