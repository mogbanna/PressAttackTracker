@extends('layouts.app')





@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/bg3.jpg')}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1 class="title">Press Attack Tracker</h1>
            <h3 class="description text-center">
  
              A record database of journalists in Nigeria who have been attacked or harassed.
              {{-- ● To track abuses on the rights of the press.
              ● To ensure that journalists whose rights are abused get prompt response once the team has
              been contacted.
              ● To have a catalogue of evidence for litigating cases of attacks. --}}
            </h3>
          </div>
        </div>
      </div>



      <div class="row text-center my-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-text card-header-info">
                  <div class="card-text">
                    <h4 class="card-title">TOTAL REPORTS</h4>
                  </div>
                </div>
                <div class="display-4 card-body text-center">
                  1077
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                  <div class="card-text">
                    <h4 class="card-title">CONFIRMED REPORTS</h4>
                  </div>
                </div>
                <div class="display-4 card-body text-center">
                  1077
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-header card-header-text card-header-danger">
                <div class="card-text">
                  <h4 class="card-title">VIOLENT REPORTS</h4>
                </div>
              </div>
              <div class="display-4 card-body text-center">
                77
              </div>
          </div>
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            
          </div>
          <div class="col-md-auto">
          <a href="{{ route('reports') }}" class="btn btn-lg btn-info justify-content-end mr-4">
                  <i class="material-icons pr-2">search</i>
                  Browse Reports
          </a>
              <a href="{{ route('addReportPage') }}" class="btn btn-lg btn-danger justify-content-end">
                  <i class="material-icons pr-2">create</i>
                  Submit Reports
              </a>
          </div>
          <div class="col col-lg-2">
            
          </div>



        {{-- <div class="col lg-4">
            
        </div>
        <div class="col lg-4 justify-content-start">
          <button class="btn btn-danger">
            Submit Report
          </button>
        </div> --}}
    </div>
    <br>
  </div>
  </div>


{{-- BLOG POSTS ETC... --}}
<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <div class="container">
        <div class="section">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-raised card-background" style="background-image: url('{{ asset('img/examples/office2.jpg') }}')">
                <div class="card-body">
                  <h6 class="card-category text-info">Worlds</h6>
                  <a href="#pablo">
                    <h3 class="card-title">The Best Productivity Apps on Market</h3>
                  </a>
                  <p class="card-description">
                      Don't be scared of the truth because 
                      we need to restart the human foundation 
                      in truth And I love you like Kanye loves 
                      Kanye I love Rick Owens’ bed design but 
                      the back is...
                  </p>
                  <a href="#pablo" class="btn btn-danger btn-round">
                    <i class="material-icons">format_align_left</i> Read Article
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-raised card-background" style="background-image: url('{{ asset('img/examples/blog8.jpg') }}')">
                <div class="card-body">
                  <h6 class="card-category text-info">Business</h6>
                  <h3 class="card-title">Working on Wallstreet is Not So Easy</h3>
                  <p class="card-description">
                      Don't be scared of the truth because we 
                      need to restart the human foundation in 
                      truth And I love you like Kanye loves Kanye 
                      I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">
                    <i class="material-icons">format_align_left</i> Read Article
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-raised card-background" style="background-image: url('{{ asset('img/examples/card-project6.jpg') }}')">
                <div class="card-body">
                  <h6 class="card-category text-info">Marketing</h6>
                  <h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
                  <p class="card-description">
                      Don't be scared of the truth because we need 
                      to restart the human foundation in truth And 
                      I love you like Kanye loves Kanye I love Rick
                      Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-warning btn-round">
                    <i class="material-icons">subject</i> Read Case Study
                  </a>
                  <a href="#pablo" class="btn btn-white btn-just-icon btn-link" 
                    title="" rel="tooltip" data-original-title="Save to Pocket">
                    <i class="fa fa-get-pocket"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="section">
            <h3 class="title text-center">Check out the Latest Posts</h3>

            <br>

            <div class="row">
              <div class="col-md-4">
                <div class="card card-plain card-blog">
                  <div class="card-header card-header-image">
                    <a href="#pablo">
                      <img class="img img-raised" src="{{ asset('img/bg5.jpg') }}">
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-info">Enterprise</h6>
                    <h4 class="card-title">
                      <a href="#pablo">
                        Autodesk looks to future of 3D printing with Project Escher
                      </a>
                    </h4>
                    <p class="card-description">
                      Like so many organizations these days, 
                      Autodesk is a company in transition. It 
                      was until recently a traditional boxed 
                      software company selling licenses.
                      <a href="#pablo"> Read More </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-plain card-blog">
                  <div class="card-header card-header-image">
                    <a href="#pablo">
                      <img class="img img-raised" src="{{ asset('img/examples/blog5.jpg') }}">
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-success">
                      Startups
                    </h6>
                    <h4 class="card-title">
                      <a href="#pablo">
                        Lyft launching cross-platform service this week
                      </a>
                    </h4>
                    <p class="card-description">
                      Like so many organizations these days, 
                      Autodesk is a company in transition. It 
                      was until recently a traditional boxed 
                      software company selling licenses.
                      <a href="#pablo"> Read More </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-plain card-blog">
                  <div class="card-header card-header-image">
                    <a href="#pablo">
                      <img class="img img-raised" src="{{ asset('img/examples/blog6.jpg') }}">
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-danger">
                      <i class="material-icons">trending_up</i> Enterprise
                    </h6>
                    <h4 class="card-title">
                      <a href="#pablo">6 insights into the French Fashion landscape</a>
                    </h4>
                    <p class="card-description">
                        Like so many organizations these days, 
                        Autodesk is a company in transition. 
                        It was until recently a traditional 
                        boxed software company selling licenses.
                        <a href="#pablo"> Read More </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<hr>

<div class="subscribe-line subscribe-line-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="title">
          Get Tips &amp; Tricks every Week!
        </h3>
        <p class="description">
          Join our newsletter and get news in your 
          inbox every week! We hate spam too, 
          so no worries about this.
        </p>
      </div>
      <div class="col-md-6">
        <div class="card card-plain card-form-horizontal">
          <div class="card-body ">
            <form method="" action="">
              <div class="row">
                  <div class="col-lg-8 col-md-6 ">
                      <span class="bmd-form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">mail</i>
                            </span>
                          </div>
                          <input type="email" value="" placeholder="Your Email..." class="form-control">
                        </div>
                      </span>
                  </div>
                  <div class="col-lg-4 col-md-6 ">
                      <button type="button" class="btn btn-rose btn-round btn-block">Subscribe</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr> 
  
{{-- SOCIAL MEDIA LINKS --}}
<div class="social-line social-line-big-icons social-line-white ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2 col-4">
                <a href="https://twitter.com/PremiumTimesng" class="btn btn-link btn-just-icon btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
            <div class="col-md-2 col-4">
                <a href="https://www.facebook.com/Premiumtimes/" class="btn btn-link btn-just-icon btn-facebook">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </div>
            {{-- <div class="col-md-2 col-4">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-google">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <div class="col-md-2 col-4">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </div> --}}
            <div class="col-md-2 col-4">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-youtube">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
            <div class="col-md-2 col-4">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>
  
 {{-- SUBSCRIBE TO US SECTINO --}}
  {{-- <div class="subscribe-line subscribe-line-image" style="background-image: url('{{ asset('img/bg7.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="text-center">
                    <h3 class="title">Subscribe to our Newsletter</h3>
                    <p class="description">
                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                    </p>
                </div>
                <div class="card card-raised card-form-horizontal">
                    <div class="card-body ">
                        <form method="" action="">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 ">
                                    <span class="bmd-form-group"><div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                      </div>
                                        <input type="email" value="" placeholder="Your Email..." class="form-control">
                                    </div></span>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <button type="button" class="btn btn-primary btn-block">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> --}}
@endsection
