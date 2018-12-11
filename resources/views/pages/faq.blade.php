@extends('layouts.app')



@section('body-class', 'contact-page sidebar-collapse')


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
              
            <hr>
            <div class="features-2">
              <div class="text-center">
                <h3 class="title">Frequently Asked Questions</h3>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-info">
                      <i class="material-icons">card_membership</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">How does the tracker work?</h4>
                      <p>Yes, you can cancel and perform other actions on your subscriptions via the My Account page. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mr-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-success">
                      <i class="material-icons">card_membership</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">How can the tracker help me?</h4>
                      <p>Yes, we offer a 40% discount if you choose annual subscription for any plan.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-success">
                      <i class="material-icons">card_membership</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Why should I care about the tracker?</h4>
                      <p>WooCommerce comes bundled with PayPal (for accepting credit card and PayPal account payments), BACS, and cash on delivery for accepting payments. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mr-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-rose">
                      <i class="material-icons">question_answer</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Don't see your question?</h4>
                      <p>We are happy to help you. <a href="contact">Contact us.</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection