@extends('site.layouts.default')
    @section('content')
       
    <div class="common_style">

        <!-- about section -->
        <section class="about_section">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="about_img-container">
                  <img src="{{ asset('images/site/about.png') }}" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="about_detail-box">
                  <h3>
                    About our School
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  </p>
                  <div class="">
                    <a href="" class="call_to-btn btn_white-border">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    
    
        <!-- end about section -->
    
        <!-- admission section -->
        <section class="admission_section">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="admission_detail-box">
                  <h3>
                    Admission open
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  </p>
                  <div class="">
                    <a href="" class="call_to-btn btn_white-border">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="admission_img-container">
                  <img src="{{ asset('images/site/admission.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
    
    
    
        <!-- end admission section -->
    
        <!-- why section -->
        <section class="why_section">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="why_img-container">
                  <img src="{{ asset('images/site/why.png') }}" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="why_detail-box">
                  <h3>
                    Why learn on Uloomy
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  </p>
                  <div class="">
                    <a href="" class="call_to-btn btn_white-border">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    
    
        <!-- end why section -->
    
        <!-- determine section -->
        <section class="determine_section">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="determine_detail-box">
                  <h3>
                    Datermine the right for you
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  </p>
                  <div class="">
                    <a href="" class="call_to-btn btn_white-border">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="determine_img-container">
                  <img src="{{ asset('images/site/determine.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
    
    
        <!-- end determine section -->
    
      </div>


       <!-- client section -->
  <section class="client_section layout_padding">
    <h2 class="">
      Testimonial
    </h2>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                            <img src="{{ asset('images/site/client.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                            <img src="{{ asset('images/site/client.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="{{ asset('images/site/client.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
     
    </div>
  </section>
   <!-- end client section -->

    <!-- contact section -->

    <section class="contact_section ">

        <div class="container">
         
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex justify-content-center d-md-block">
                <h2>
                  Contact Us
                </h2>
              </div>
              <form action="">
                <div class="contact_form-container">
                  <div>
                    <div>
                      <input type="text" placeholder="Name">
                    </div>
                    <div>
                      <input type="email" placeholder="Email">
                    </div>
                    <div>
                      <input type="text" placeholder="Phone Number">
                    </div>
                    <div class="mt-5">
                      <input type="text" placeholder="Message">
                    </div>
                    <div class="mt-5">
                      <button type="submit">
                        send
                      </button>
                    </div>
                  </div>
    
                </div>
    
              </form>
            </div>
            <div class="col-md-6">
              <div class="contact_img-box">
                <img src="{{ asset('images/site/students.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end contact section -->

      <section class="info_section layout_padding-top">
        <div class="info_logo-box">
          <h2>
              Uloomy
          </h2>
        </div>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-3">
                <h5>
                    About Us                                                                             
                </h5>
               <p>
                  dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r 
               </p>
              </div>
              <div class="col-md-3">
                <h5>
                    Useful Link 
                </h5>
                <ul>
                  <li>
                    <a href="">
                        Video games
                    </a>
                  </li>
                  <li>
                   <a href="">
                      Remote control
                   </a>
                  </li>
                  <li>
                    <a href="">
                        3d controller
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>
                    Contact Us
                </h5>
                <p>
                    dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e 
                </p>
              </div>
              <div class="col-md-3">
           
                <div class="subscribe_container">
                  <h5>
                      Newsletter
                  </h5>
                  <div class="form_container">
                    <form action="">
                      <input type="email" placeholder="Enter your email">
                      <button type="submit">
                        Subscribe
                      </button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="container">
              <div class="social_container">
                 
                  <div class="social-box">
                    <a href="">
                      <img src="{{ asset('images/site/fb.png') }}" alt="">
                    </a>
      
                    <a href="">
                      <img src="{{ asset('images/site/twitter.png') }}" alt="">
                    </a>
                    <a href="">
                      <img src="{{ asset('images/linkedin.png') }}" alt="">
                    </a>
                    <a href="">
                      <img src="{{ asset('images/instagram.png') }}" alt="">
                    </a>
                  </div>
                </div>
          </div>
        </section>



    @stop