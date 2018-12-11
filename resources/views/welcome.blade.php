@extends('layout.app')

@section('content')
 <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-dark-4" data-bg-img="http://placehold.it/1920x1280">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-100 pb-100">
            <div class="row">
              <div class="col-md-8 pt-50">
                <div class="home-content sm-text-center">
                  <h2 class="text-white text-uppercase font-72 font-weight-800 pl-10 mt-0 mb-20 line-height-1"><span class="text-theme-color-2">Study</span>press</h2>
                  <div class="col-sm-6 col-md-6">
                    <div class="icon-box p-10 pl-0 mb-20">
                     <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                      <i class="pe-7s-pen text-white"></i>
                     </a>
                     <div class="ml-70 ml-sm-0">
                      <p class="text-white font-18">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="icon-box p-10 pl-0 mb-20">
                     <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                      <i class="pe-7s-light text-white"></i>
                     </a>
                     <div class="ml-70 ml-sm-0">
                      <p class="text-white font-18">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="icon-box p-10 pl-0 mb-20">
                     <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                      <i class="pe-7s-phone text-white"></i>
                     </a>
                     <div class="ml-70 ml-sm-0">
                      <p class="text-white font-18">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="icon-box p-10 pl-0 mb-20">
                     <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                      <i class="pe-7s-vector text-white"></i>
                     </a>
                     <div class="ml-70 ml-sm-0">
                      <p class="text-white font-18">Lorem ipsum dolor sit amet, consectetur ipsum dolor sit.</p>
                     </div>
                    </div>
                  </div>
                  <a class="btn btn-theme-colored btn-default ml-15 mt-15" href="#">Read More</a>
                  <a class="btn btn-theme-color-2 text-white ml-15 mt-15" href="#">Contact Now</a>
                </div>
              </div>
              <div class="col-md-4 mt-sm-30">
              
                <!-- Appointment Form Starts -->
                <form id="home_appointment_form" name="home_appointment_form" class="booking-form form-home bg-white p-30" method="post" action="includes/appointment.php">
                  <h3 class="mt-0 mb-20">Request <span class="text-theme-color-2">Information</span></h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-10">
                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-10">
                        <input name="form_phone" class="form-control required" type="text" placeholder="Enter Phone" aria-required="true">
                      </div>
                    </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <div class="styled-select">
                        <select id="person_select" name="person_select" class="form-control" required="">
                          <option value="">Choose Subject</option>
                          <option value="1 Person">Software Engineering</option>
                          <option value="2 Person">Computer Science engineering</option>
                          <option value="3 Person">Accounting Technologies</option>
                          <option value="Family Pack">BACHELOR`S DEGREE</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input name="Date Of Birth" class="form-control required date-picker" type="text" placeholder="Date Of Birth" aria-required="true">
                    </div>
                  </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-10">
                        <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Select Date" aria-required="true">
                        <i class="fa fa-calendar form-control-feedback mt-15 mr-10 font-15 text-gray-lightgray"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-10">
                    <textarea name="form_message" class="form-control required"  placeholder="Enter Message" rows="3" aria-required="true"></textarea>
                  </div>
                  <div class="form-group mb-0 mt-20">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                  </div>
                </form>
  
                <!-- Appointment Form Validation-->
                <script type="text/javascript">
                  $("#home_appointment_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
                <!-- Appointment Form Ends -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Call To Action -->
    <section class="bg-theme-color-2">
      <div class="container pt-0 pb-15">
        <div class="row">
          <div class="call-to-action pt-20 pb-15">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
              <i class="fa fa-certificate text-white font-36 pull-left flip mt-15 mr-20"></i>
              <h4 class="text-white font-16 font-weight-600">Worldclass Service Provider</h4>
              <h6 class="text-white">Get Your Services Now From Us</h6>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
              <i class="fa fa-map-marker text-white font-36 pull-left flip mt-15 mr-20"></i>
              <h4 class="text-white font-16 font-weight-600">You can Find Us Our Location</h4>
              <h6 class="text-white">Your Trust is our achievement</h6>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <i class="fa fa-phone text-white font-36 pull-left flip mt-15 mr-20"></i>
              <h4 class="font-16 text-white font-weight-600">Contact Us : +262 695 2601</h4>
              <h6 class="text-white">121 king street west toronto</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about" class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <h2 class="text-uppercase line-height-1 font-weight-600 mt-0 font-28 line-bottom">World Best University</h2>
              <h4 class="text-theme-colored">Lorem ipsum dolor sit amet consectetur adipisicing elit Perferendis repudiandae nostrum quibusdam! elit Perferendis repudiandae</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
              <a href="#" class="btn btn-theme-colored btn-flat btn-lg mt-15 mr-15">Read more</a>
              <a href="#" class="btn btn-default btn-flat btn-lg mt-15">Contact Us</a>
            </div>
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="mt-sm-60">
                    <img src="http://placehold.it/220x270" class="img-fullwidth" alt="">
                  </div>
                  <h5 class="text-theme-color-2">Our Mission</h5>
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur.</p>
                  <a class="text-theme-colored font-13 font-weight-600" href="#">View Details →</a>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="mt-sm-40">
                    <img src="http://placehold.it/220x270" class="img-fullwidth" alt="">
                  </div>
                  <h5 class="text-theme-color-2">Our Approach</h5>
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur.</p>
                  <a class="text-theme-colored font-13 font-weight-600" href="#">View Details →</a>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="mt-sm-40">
                    <img src="http://placehold.it/220x270" class="img-fullwidth" alt="">
                  </div>
                  <h5 class="text-theme-color-2">Our vision</h5>
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur.</p>
                  <a class="text-theme-colored font-13 font-weight-600" href="#">View Details →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-lighter">
      <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span class="text-theme-color-2 font-weight-400">Courses</span></h2>
           </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col" data-dots="true">
              <div class="item">
                <div class="campaign bg-white maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="http://placehold.it/265x195" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">Subtitle place here</h5>
                    <h4 class="font-weight-700 mt-0"><a href="#">Accounting Technologie</a></h4>
                    <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing elit quossit <a class="text-theme-colored ml-5" href="#"> →</a></p>
                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">$890</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign bg-white maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="http://placehold.it/265x195" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">Subtitle place here</h5>
                    <h4 class="font-weight-700 mt-0"><a href="#">Modern Technologies</a></h4>
                    <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing elit quossit <a class="text-theme-colored ml-5" href="#"> →</a></p>
                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">$890</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign bg-white maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="http://placehold.it/265x195" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">Subtitle place here</h5>
                    <h4 class="font-weight-700 mt-0"><a href="#">Chemical Engineering</a></h4>
                    <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing elit quossit <a class="text-theme-colored ml-5" href="#"> →</a></p>
                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">$890</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign bg-white maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="http://placehold.it/265x195" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">Subtitle place here</h5>
                    <h4 class="font-weight-700 mt-0"><a href="#">Computer Technologies</a></h4>
                    <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing elit quossit <a class="text-theme-colored ml-5" href="#"> →</a></p>
                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">$890</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign bg-white maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="http://placehold.it/265x195" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15 pt-10 pb-10">
                    <h5 class="text-theme-colored font-weight-500 mb-0">Subtitle place here</h5>
                    <h4 class="font-weight-700 mt-0"><a href="#">Development Studies</a></h4>
                    <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing elit quossit <a class="text-theme-colored ml-5" href="#"> →</a></p>
                    <div class="campaign-bottom border-top clearfix mt-20">
                      <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                        <li class="text-theme-color-2 pr-0 mr-5">Couse Fee: <span class="text-theme-colored">$890</span></li>
                      </ul>
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="5248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Our Courses</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
            <div class="funfact text-center">
              <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Section: team -->
    <section id="teachers">
      <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span class="text-theme-color-2 font-weight-400">Teachers</span></h2>
           </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/262x300" alt=""></div>
                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                  <h4 class="name text-theme-color-2 mt-0">Andre Smith - <small>Teacher</small></h4>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                  <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <a class="btn btn-theme-colored btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/262x300" alt=""></div>
                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                  <h4 class="name mt-0 text-theme-color-2">Sakib Smith - <small>Teacher</small></h4>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                  <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <a class="btn btn-theme-colored btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/262x300" alt=""></div>
                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                  <h4 class="name mt-0 text-theme-color-2">David Zakaria - <small>Teacher</small></h4>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                  <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <a class="btn btn-theme-colored btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 sm-text-center">
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="http://placehold.it/262x300" alt=""></div>
                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                  <h4 class="name mt-0 text-theme-color-2">Ismail Jon - <small>Teacher</small></h4>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                  <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <a class="btn btn-theme-colored btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery" class="bg-lighter">
     <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">Our<span class="text-theme-color-2 font-weight-400"> Gllery</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Works Filter -->
              <div class="portfolio-filter font-alt align-center">
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#select1" class="" data-filter=".select1">Photos</a>
                <a href="#select2" class="" data-filter=".select2">Campus</a>
                <a href="#select3" class="" data-filter=".select3">Students</a>
              </div>
              <!-- End Works Filter -->
              
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
               
                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/1.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/1.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/2.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/2.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/3.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/3.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/4.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/4.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/5.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/5.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/6.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/6.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/7.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/7.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/8.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/8.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/9.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/9.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/10.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/10.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/11.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/11.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{asset('public/images/gallery/12.jpg')}}"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{asset('public/images/gallery/12.jpg')}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div >
    </section>

    <!-- Section: Why Choose Us -->
    <section id="event" class="">
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-color-2">Events</span></h3>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="http://placehold.it/120x120"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="http://placehold.it/120x120"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="http://placehold.it/120x120"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <h3 class="line-bottom mt-0 line-height-1">Why <span class="text-theme-color-2">Choose Us?</span></h3>
              <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p>
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Client Say -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="line-bottom-center text-gray-lightgray text-center mt-0 mb-30">Our Happy Students say</h2>
            <div class="owl-carousel-1col" data-dots="true">
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/100x100"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-color-2 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/100x100"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-color-2 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/100x100"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-color-2 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-lighter">
      <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Latest <span class="text-theme-color-2 font-weight-400">News</span></h2>
           </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda Pariatur iste.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda Pariatur iste.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              <article class="post clearfix">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda Pariatur iste.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-color-2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>
@endsection
