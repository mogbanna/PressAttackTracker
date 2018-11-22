@extends('layouts.app')

@section('body-class', 'contact-page sidebar-collapse')


@section('content')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('img/bg10.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">A Whole Lotta Reports</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
        <div class="section">
        
        {{-- <div class="row">
          <div class="col-md-6">
            <div class="card card-raised card-background" style="background-image: url('{{ asset('img/examples/office2.jpg') }}')">
              <div class="card-body">
                <h6 class="card-category text-info">Worlds</h6>
                <a href="#pablo">
                  <h3 class="card-title">The Best Productivity Apps on Market</h3>
                </a>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
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
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
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
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="#pablo" class="btn btn-warning btn-round">
                  <i class="material-icons">subject</i> Read Case Study
                </a>
                <a href="#pablo" class="btn btn-white btn-just-icon btn-link" title="" rel="tooltip" data-original-title="Save to Pocket">
                  <i class="fa fa-get-pocket"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="section">
        <div class="row justify-content-center">
            <nav aria-label="page navigation">
                <ul class="pagination ">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div>
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
                  <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                </h4>
                <p class="card-description">
                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
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
                  <a href="#pablo">Lyft launching cross-platform service this week</a>
                </h4>
                <p class="card-description">
                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
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
                  Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                  <a href="#pablo"> Read More </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
                <nav aria-label="page navigation">
                    <ul class="pagination ">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                    </nav>
            </div>
      </div>
    </div>
    </div>
    </div>
  </div>

  @endsection