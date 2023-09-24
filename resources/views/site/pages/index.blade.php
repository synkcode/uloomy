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
                    About Us
                  </h3>
                  <p>
                    uloomy is a completely free tool that teachers can use to keep track of how well their students are doing.
                  
                       </p>
                  <div class="">
                    <a href="https://github.com/synkcode/uloomy" target="_blank" class="call_to-btn btn_white-border">
                      Download
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
                    Manage Student Progress
                  </h3>
                  <p>
                    Keep an eye on how your students are performing.
                  </p>
                 
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
                    Transparent for parents
                  </h3>
                  <p>
                    View your kid's progress and ask for clarification on the platform
                  </p>
                 
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
                    Pay online without hassle
                  </h3>
                  <p>
                    Your money paid directly to the tutor via easy to use payment channels
                  </p>
                 
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
                uloomy is open source platform that is free forever for everyone.
               </p>
              </div>
              <div class="col-md-3">
                </div>
              <div class="col-md-3">
                <h5>
                    Contact Us
                </h5>
                <p>
                  hello@uloomy.com
                </p>
              </div>
              <div class="col-md-3">
           
                <div class="subscribe_container">
                   
                 
                </div>
                
              </div>
            </div>
          </div>
          <div class="container">
              <div class="social_container">
                 
                 
                </div>
          </div>
        </section>



    @stop