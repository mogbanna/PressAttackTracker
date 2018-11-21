@extends('layouts.app')




@section('content')
  
    

<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('img/bg9.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">What We Do</h1>
          <h4>Take A Look Behind The Scenes</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="about-description text-center pt-3">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h5 class="description">In 2017, Premium Times Center for Investigative Journalism (PTCIJ) saw the need to create an independent media that can allow for free 
                    public participation in the development of the nation, as well as build the capacity of journalists on physical, psychological and digital safety</h5>
          </div>
        </div>
      </div>

      
      <div class="about-services features-2">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">How it works:</h2>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info info-horizontal">
              <div class="icon icon-rose">
                <i class="material-icons">gesture</i>
              </div>
              <div class="description">
                <h4 class="info-title">1. Design</h4>
                <p>The moment you use Material Kit, you know you&#x2019;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                <a href="#pablo">Find more...</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info info-horizontal">
              <div class="icon icon-rose">
                <i class="material-icons">build</i>
              </div>
              <div class="description">
                <h4 class="info-title">2. Develop</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                <a href="#pablo">Find more...</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info info-horizontal">
              <div class="icon icon-rose">
                <i class="material-icons">mode_edit</i>
              </div>
              <div class="description">
                <h4 class="info-title">3. Make Edits</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                <a href="#pablo">Find more...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about-office">
        <div class="row text-center">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">How Can I Use The Tracker?</h2>
            <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img class="img-raised rounded img-fluid m-2" alt="Raised Image" src="{{ asset('img/examples/office2.jpg') }}">
          </div>
          <div class="col-md-4">
            <img class="img-raised rounded img-fluid m-2" alt="Raised Image" src="{{ asset('img/examples/office4.jpg') }}">
          </div>
          <div class="col-md-4">
            <img class="img-raised rounded img-fluid m-2" alt="Raised Image" src="{{ asset('img/examples/office3.jpg') }}">
          </div>
          <div class="col-md-6">
            <img class="img-raised rounded img-fluid m-2" alt="Raised Image" src="{{ asset('img/examples/office5.jpg') }}">
          </div>
          <div class="col-md-6">
            <img class="img-raised rounded img-fluid m-2" alt="Raised Image" src="{{ asset('img/examples/office1.jpg') }}">
          </div>
        </div>
      </div>
      <hr>
      <div class="about-contact">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">How can you help out?</h2>
            <h4 class="text-center description">Simply leave your email and we'll make sure you never miss a beat when it comes to new information about us and to help us!</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name" class="bmd-label-floating">Your name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email" class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="form-group">
                    <select class="selectpicker " data-style="select-with-transition" data-size="7">
                        <option value="1" disabled>Speciality</option>>
                        <option value="2">I&apos;m a Designer</option>
                        <option value="3">I&apos;m a Developer</option>
                        <option value="4">I&apos;m a Hero</option>
                    </select>
                    </div>
                </div>
              </div> --}}
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-round">
                    Let&apos;s talk
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection