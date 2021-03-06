@extends('layouts.app')

@section('content')
    
    {{-- <!-- Domain Modal -->
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
  
        <div class="modal-body">
          <div class="modal__content">
            <h2 class="logo"> <span class="fa fa-pie-chart"></span> Pizza Pan</h2>
            <!-- if logo is image enable this   
            <h2 class="logo">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </h2> -->
            <p class="mt-md-3 mt-2">Lorem ipsum dolor sit amet, elit. Eos expedita ipsam at fugiat ab.</p>
            <img src="{{ asset('images/p1.jpg') }}" alt="image" class="img-fluid radius-image mt-4">
            <div class="widget-social-icons mt-sm-5 mt-4">
              <h5 class="widget-title">Contact Us</h5>
              <ul class="icon-rounded address">
                <li>
                  <p> New York, NY-90814 Hill Station 4th Street</p>
                </li>
                <li class="mt-3">
                  <p><span class="fa fa-phone"></span> <a href="tel:+404-11-22-89">+1-2345-345-678-11</a></p>
                </li>
                <li class="mt-2">
                  <p><span class="fa fa-envelope"></span> <a
                      href="mailto:pizza@order.com">pizza@order.com</a></p>
                </li>
                <li class="top_li1 mt-2">
                  <p><span class="fa fa-clock-o"></span> <a href="#url">Mon - Fri : 09:00 am to 10:00 pm
                    </a></p>
                </li>
              </ul>
            </div>
            <div class="widget-social-icons mt-sm-5 mt-4">
              <h5 class="widget-title">Follow Us</h5>
              <ul class="icon-rounded">
                <li><a class="social-link twitter" href="#url" target="_blank"><span class="fa fa-twitter"></span></a></li>
                <li><a class="social-link linkedin" href="#url" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                <li><a class="social-link facebook" href="#url" target="_blank"><span class="fa fa-facebook"></span></a></li>
              </ul>
            </div>
  
  
          </div>
        </div>
      </div>
      <!-- //modal-content -->
    </div>
    <!-- //modal-dialog -->
  </div>
  <!-- //Domain modal --> --}}
  <section class="w3l-breadcrumb">
      <div class="container">
          <ul class="breadcrumbs-custom-path">
              <li><a href="#url">Home</a></li>
              <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Us</li>
          </ul>
      </div>
  </section>
  <!--  Intro video popup section -->
  <section class="w3l-about1 py-5" id="intro">
      <div class="new-block top-bottom py-lg-5 py-md-4">
          <div class="container">
              <div class="title-content text-center">
                  <h6 class="sub-title">who we are</h6>
                  <h3 class="title-big">About us</h3>
              </div>
              <div class="row mt-lg-5 mt-4">
                  <div class="col-md-3 left-section">
                  </div>
                  <div class="col-md-6 middle-section text-center align-self">
                      <div class="section-width mb-lg-4 py-4">
                          <h2>Best Pizza and burger ideas & traditions from the whole world</h2>
                          <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              possimus, non nam fugit autem ullam, soluta atque tenetur amet aliquam
                              sequi sunt architecto iure.</p>
                      </div>
                      <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center">
                          <span class="video-play-icon">
                              <span class="fa fa-play"></span>
                          </span>
                      </a>
  
                      <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                      <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                          <iframe src="https://www.youtube.com/embed/oWP9Riq-ZBg" allowfullscreen></iframe>
                      </div>
                  </div>
                  <div class="col-md-3 right-section mt-md-0 mt-4">
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--  //Intro video popup section -->
  <!--  form-12 -->
  <section class="w3l-form-12">
      <div class="form-12-content py-5" id="services">
          <div class="container py-lg-5 py-md-4">
              <div class="row">
                  <div class="col-lg-4 column1 align-self">
                      <h4>We make the Best Pizza's and Burger's in your town</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi suscipit hic, aut aperiam alias
                          corporis. Lorem ipsum dolor sit amet, elit. Quasi?</p>
                  </div>
                  <div class="col-lg-8 column2 mt-lg-0 mt-sm-5 mt-4">
                      <div class="row">
                          <div class="col-md-3 col-sm-6 col-6">
                              <a href="services.html">
                                  <div class="courses-item">
                                      <img src="{{ asset('images/pizza.png') }}" alt="">
                                      <p>Pizza</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6">
                              <a href="services.html">
                                  <div class="courses-item">
                                      <img src="{{ asset('images/burger.png') }}" alt="">
                                      <p>Burger</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-sm-4 mt-3">
                              <a href="services.html">
                                  <div class="courses-item">
                                      <img src="{{ asset('images/fries.png') }}" alt="">
                                      <p>French fries</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-sm-4 mt-3">
                              <a href="services.html">
                                  <div class="courses-item">
                                      <img src="{{ asset('images/drink.png') }}" alt="">
                                      <p>Cool drink</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6 mt-sm-4 mt-3">
                              <a href="services.html">
                                  <div class="courses-item mt-2">
                                      <img src="{{ asset('images/burger.png') }}" alt="">
                                      <p>Smoked burger</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6 mt-sm-4 mt-3">
                              <a href="services.html">
                                  <div class="courses-item mt-2">
                                      <img src="{{ asset('images/fries.png') }}" alt="">
                                      <p>Mozzarella</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6 mt-sm-4 mt-3">
                              <a href="services.html">
                                  <div class="courses-item mt-2">
                                      <img src="{{ asset('images/pizza.png') }}" alt="">
                                      <p>Pizza</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-3 col-sm-6 col-6 mt-sm-4 mt-3">
                              <a href="services.html">
                                  <div class="courses-item mt-2">
                                      <img src="{{ asset('images/drink.png') }}" alt="">
                                      <p>sandwich</p>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- // form-12 -->
  <!-- team -->
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
          <div class="title-content text-center">
              <h6 class="sub-title">Our team</h6>
              <h3 class="title-big">Behind the taste</h3>
          </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{ asset('images/team1.jpg') }}" alt="" class="img-fluid radius-image" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Alexander</a></h3>
                <span class="post">Master chef</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{ asset('images/team2.jpg') }}" alt="" class="img-fluid radius-image" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Victoria</a></h3>
                <span class="post">Master chef</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="{{ asset('images/team3.jpg') }}" alt="" class="img-fluid radius-image" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Smith roy</a></h3>
                <span class="post">Master chef</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-5">
            <div class="box16">
              <a href="#url"><img src="{{ asset('images/team4.jpg') }}" alt="" class="img-fluid radius-image" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Johnson</a></h3>
                <span class="post">Master chef</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team -->
  <!-- stats -->
      <section class="w3_stats py-5" id="stats">
          <div class="container py-lg-5 py-md-4" style="align-self: center">
              <div class="title-content text-center">
                  <h6 class="sub-title">Our facts</h6>
                  <h3 class="title-big">Why we are unique? Have a look.</h3>
              </div>
              <div class="w3-stats" style="margin-left: 17%;">
                  <div class="row">
                      <div class=" col-sm-4 col-4">
                          <div class="counter">
                              <span class="fa fa-smile-o"></span>
                              <div class="timer count-title count-number mt-3" data-to="5100" data-speed="1500"></div>
                              <p class="count-text ">happy customers</p>
                          </div>
                      </div>
                      <div class="col-sm-4 col-4">
                          <div class="counter">
                              <span class="fa fa-users"></span>
                              <div class="timer count-title count-number mt-3" data-to="971" data-speed="1500"></div>
                              <p class="count-text ">master chef's</p>
                          </div>
                      </div>
                      <div class="col-sm-4 col-4">
                          <div class="counter">
                              <span class="fa fa-database"></span>
                              <div class="timer count-title count-number mt-3" data-to="21" data-speed="1500"></div>
                              <p class="count-text ">branches</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- //stats -->
  <!-- features -->
  <section class="w3l-reasons py-5">
      <div class="main-w3 py-lg-5 py-md-4">
          <div class="container">
              <div class="title-content text-center">
                  <h6 class="sub-title">we are the best</h6>
                  <h3 class="title-big">4 reasons to Choose us</h3>
              </div>
              <div class="row main-cont-wthree-fea mt-5 text-center">
                  <div class="col-lg-3 col-sm-6 grids-feature">
                      <a href="#url" class="icon"><img src="{{ asset('images/pizza.png') }}" alt=""></a>
                      <h4><a href="#feature" class="title-head">Tasty Pizza</a></h4>
                      <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor.</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                      <a href="#url" class="icon"><img src="{{ asset('images/burger.png') }}" alt=""></a>
                      <h4><a href="#feature" class="title-head">Quality Products</a></h4>
                      <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor.</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                      <a href="#url" class="icon"><img src="{{ asset('images/drink.png') }}" alt=""></a>
                      <h4><a href="#feature" class="title-head">World's best Chef</a></h4>
                      <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor.</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                      <a href="#url" class="icon"><img src="{{ asset('images/fries.png') }}" alt=""></a>
                      <h4><a href="#feature" class="title-head">Fastest delivery</a></h4>
                      <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- //features -->



@endsection