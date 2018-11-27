{{-- <footer class="footer">
  <div class="container">
      <nav class="float-left">
          <ul>
              <li>
              <a href="https://www.creative-tim.com">
                  Creative Tim
              </a>
              </li>
              <li>
              <a href="https://creative-tim.com/presentation">
                  About Us
              </a>
              </li>
              <li>
              <a href="http://blog.creative-tim.com">
                  Blog
              </a>
              </li>
              <li>
              <a href="https://www.creative-tim.com/license">
                  Licenses
              </a>
              </li>
          </ul>
      </nav>
          <div class="copyright float-right">
          &copy;
          <script>
              document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
      </div>
</footer> --}}


{{-- SOCIAL MEDIA LINKS
<div class="social-line social-line-big-icons social-line-black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-4">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-white">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-white">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-white">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-white">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-white">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </div>
                <div class="col-md-2 col-4">
                    <a href="#pablo" class="btn btn-link btn-just-icon btn-white">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
     --}}


<footer class="footer @yield('footer-class')">
        <div class="container">

            <div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About Us</h5>
                        <p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
                    </div>

                    <div class="col-md-4">
                        <h5>Social Feed</h5>
                        <div class="social-feed">
                            <div class="feed-line">
                                <i class="fa fa-twitter"></i>
                                <p>How to handle ethical disagreements with your clients.</p>
                            </div>
                            <div class="feed-line">
                                <i class="fa fa-twitter"></i>
                                <p>The tangible benefits of designing at 1x pixel density.</p>
                            </div>
                            <div class="feed-line">
                                <i class="fa fa-facebook-square"></i>
                                <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h5>Instagram Feed</h5>
                        <div class="gallery-feed">
                            <img src="./assets/img/faces/card-profile6-square.jpg" class="img img-raised rounded" alt="">
                            <img src="./assets/img/faces/christian.jpg" class="img img-raised rounded" alt="">
                            <img src="./assets/img/faces/card-profile4-square.jpg" class="img img-raised rounded" alt="">
                            <img src="./assets/img/faces/card-profile1-square.jpg" class="img img-raised rounded" alt="">

                            <img src="./assets/img/faces/marc.jpg" class="img img-raised rounded" alt="">
                            <img src="./assets/img/faces/kendall.jpg" class="img img-raised rounded" alt="">
                            <img src="./assets/img/faces/card-profile5-square.jpg" class="img img-raised rounded" alt="">
                            <img src="./assets/img/faces/card-profile2-square.jpg" class="img img-raised rounded" alt="">
                        </div>

                    </div>
                </div>
            </div>


            <hr>

            <ul class="float-left">
                <li>
                <a href="{{ route('posts') }}">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                       Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq') }}">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}}">
                        Login
                    </a>
                </li>
            </ul>

            <div class="copyright float-right">
                Copyright © <script>document.write(new Date().getFullYear())</script>2018 Anna and Faruk
            </div>
        </div>
    </footer>