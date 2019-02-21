@extends('layouts.app')



@section('body-class', 'contact-page sidebar-collapse')


@section('content')
    

<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('img/bg9.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">What We Do</h1>
          <h4>Take A Look Behind The Scenes!</h4>
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
                      <i class="material-icons">question_answer</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">What is PAT?</h4>
                      <p>PAT is an ancronym for Press Attack Tracker. As the name implies, PAT is a platform used to track
                         and report attacks on the press.<br>
                         The platform will provide a map of threats and attacks on the press thus improving data for periodic review.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mr-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-success">
                      <i class="material-icons">question_answer</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Who is involved in the site?</h4>
                      <p>PAT is led by the <a href="https://ptcij.org" target="_blank"> Premium Times Center for Investigative 
                        Journalism</a> with the sole responsibility of collecting
                       and inputting data of harrassed and attacked Journalists.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-success">
                      <i class="material-icons">question_answer</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">What is the information used for?</h4>
                      <p>The tracker is the innovative outcome of Premium Times Center for Investigative Jounalism with the support
                         of <a href="https://isupportfreepress.pressattack.ng/" target="_blank">Free Press Unlimited</a> to serve as 
                         an advocacy tool for Press Freedom in the wider Nigerian society.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mr-auto">
                  <div class="info info-horizontal">
                      <div class="icon icon-success">
                        <i class="material-icons">question_answer</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Who funds PAT?</h4>
                        <p>The platform is funded by the <a href="https://isupportfreepress.pressattack.ng/" target="_blank">Free Press Unlimited</a>.</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto">
                  <div class="info info-horizontal">
                    <div class="icon icon-rose">
                      <i class="material-icons">question_answer</i>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Who does PAT count as a Journalist?</h4>
                      <p>PAT adopts a functional definition of who is considered a Journalist. It doesn't matter whether the individual
                        has a press pass or went to journalism school, whether they work for print, broadcast, multimedia, online or as a freelancer.<br>
                        What matters is whether the person was performing an act of journalism. The tracker will count journalists whose rights 
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mr-auto mt-5">
                  <div class="info info-horizontal">
                    <div class="icon icon-rose">
                      {{-- <i class="material-icons">question_answer</i> --}}
                    </div>
                    <div class="description">
                      <p>to gather and disseminate information were violated in the course of their work or as a result of their work.<br>
                          While we recognize the importance and the rights of the private citizen who snaps a photo or video of an arrest,
                          this site will only cover individuals who self-identify as journalists and have some previous track record
                            of journalistic work.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection