@extends('layouts.app')


@section('body-class', 'contact-page sidebar-collapse')

@section('content')

<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('img/bg5.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Report Title?</h1>
          <h4>A short description of this post?</h4>
          <br>
          {{-- <a href="#pablo" class="btn btn-rose btn-round btn-lg">
            <i class="material-icons">format_align_left</i> Related Reports
          </a> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section section-text">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h3 class="title">Another Title about nothing really..</h3>
            <p>I'd say this paragraph is useless, but then you'd be questioning ->
              <br>
              <br> The usefulness of this paragraph as well....</p>
            <div class="blockquote undefined">
              <p>
                &#x201C;But to really bust your head, lets add more useless paragraph space :)&#x201D;
              </p>
              <small>
                I Suggest, Some-Name-Here
              </small>
            </div>
          </div>
          <div class="section col-md-10 ml-auto mr-auto">
            <div class="row">
              <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/examples/blog4.jpg') }}">
              </div>
              <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/examples/blog3.jpg') }}">
              </div>
              <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/examples/blog1.jpg') }}">
              </div>
            </div>
          </div>
          <div class="col-md-8 ml-auto mr-auto">
            <h3 class="title">Now the Juicy Story Title (again?):</h3>
            <p>We are here to make life better. And now I look and look around and there&#x2019;s so many Kanyes I&apos;ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.
              <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife&#x2019;s family Thank you for so much inspiration. </p>
            <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I&apos;ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife&#x2019;s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I&apos;m so proud of the nr #1 song in the country. Panda! Good music 2016!</p>
            <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I&apos;m so proud of the nr #1 song in the country. Panda! Good music 2016!</p>
          </div>
        </div>
      </div>
      <div class="section section-blog-info">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="row">
              <div class="col-md-6">
                <div class="blog-tags">
                  Tags:
                  <span class="badge badge-primary badge-pill">Photography</span>
                  <span class="badge badge-primary badge-pill">Stories</span>
                  <span class="badge badge-primary badge-pill">Castle</span>
                </div>
              </div>
              <div class="col-md-6">
                <a href="#pablo" class="btn btn-twitter btn-round float-right">
                  <i class="fa fa-twitter"></i> 910
                </a>
                <a href="#pablo" class="btn btn-facebook btn-round float-right">
                  <i class="fa fa-facebook-square"></i> 872
                </a>
              </div>
            </div>
            <hr>
            {{-- <div class="card card-profile card-plain">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-avatar">
                    <a href="#pablo">"
                      <img class="img" src={{ asset('img/faces/card-profile1-square.jpg') }} "/>
                    </a>
                    <div class="ripple-container"></div>
                  </div>
                </div>
                <div class="col-md-8">
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="description">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-default pull-right btn-round">Follow</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-comments">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="media-area">
              <h3 class="title text-center">3 Comments</h3>
              <div class="media">
                <a class="float-left" href="#pablo">
                  <div class="avatar">
                    <img class="media-object" src="{{ asset('img/faces/card-profile4-square.jpg') }}" alt="...">
                  </div>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Tina Andrew
                    <small>&#xB7; 7 minutes ago</small>
                  </h4>
                  <h6 class="text-muted"></h6>
                  <p>Chance too good. God level bars. I&apos;m so proud of @LifeOfDesiigner #1 song in the country. Panda! Don&apos;t be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                  <div class="media-footer">
                    <a href="#pablo" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                      <i class="material-icons">reply</i> Reply
                    </a>
                    <a href="#pablo" class="btn btn-danger btn-link float-right">
                      <i class="material-icons">favorite</i> 243
                    </a>
                  </div>
                </div>
              </div>
              <div class="media">
                <a class="float-left" href="#pablo">
                  <div class="avatar">
                    <img class="media-object" alt="Tim Picture" src="{{ asset('img/faces/card-profile1-square.jpg') }}">
                  </div>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">John Camber
                    <small>&#xB7; Yesterday</small>
                  </h4>
                  <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                  <p> Don&apos;t forget, You&apos;re Awesome!</p>
                  <div class="media-footer">
                    <a href="#pablo" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                      <i class="material-icons">reply</i> Reply
                    </a>
                    <a href="#pablo" class="btn btn-link float-right">
                      <i class="material-icons">favorite</i> 25
                    </a>
                  </div>
                  <div class="media">
                    <a class="float-left" href="#pablo">
                      <div class="avatar">
                        <img class="media-object" alt="64x64" src="{{ asset('img/faces/card-profile4-square.jpg') }}">
                      </div>
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Tina Andrew
                        <small>&#xB7; 12 Hours Ago</small>
                      </h4>
                      <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                      <p> Don&apos;t forget, You&apos;re Awesome!</p>
                      <div class="media-footer">
                        <a href="#pablo" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                          <i class="material-icons">reply</i> Reply
                        </a>
                        <a href="#pablo" class="btn btn-link btn-secondary float-right">
                          <i class="material-icons">favorite</i> 2
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="title text-center">Post your comment</h3>
            <div class="media media-post">
              <a class="author float-left" href="#pablo">
                <div class="avatar">
                  <img class="media-object" alt="64x64" src="{{ asset('img/faces/card-profile6-square.jpg') }}">
                </div>
              </a>
              <div class="media-body">
                <div class="form-group label-floating bmd-form-group">
                  <label class="form-control-label bmd-label-floating" for="exampleBlogPost"> Write some nice stuff or nothing...</label>
                  <textarea class="form-control" rows="5" id="exampleBlogPost"></textarea>
                </div>
                <div class="media-footer">
                  <a href="#pablo" class="btn btn-primary btn-round btn-wd float-right">Post Comment</a>
                </div>
              </div>
            </div> --}}
            <!-- end media-post -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Stories Related to this Report:</h2>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-header card-header-image">
                  <a href="#pablo">
                    <img class="img img-raised" src="{{ asset('img/examples/blog6.jpg') }}">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="category text-info">Enterprise</h6>
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
              <div class="card card-blog">
                <div class="card-header card-header-image">
                  <a href="#pablo">
                    <img class="img img-raised" src="{{ asset('img/examples/blog8.jpg') }}">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="category text-success">
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
              <div class="card card-blog">
                <div class="card-header card-header-image">
                  <a href="#pablo">
                    <img class="img img-raised" src="{{ asset('img/examples/blog7.jpg') }}">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="category text-danger">
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
        </div>
      </div>
    </div>
  </div>

@endsection