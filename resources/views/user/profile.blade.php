@extends('layouts.app')


@section('body-class', 'profile-page sidebar-collapse')


@section('content')
    
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('/img/city-profile.jpg') }}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{ asset('/img/faces/christian.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
              <h3 class="title">{{ $user->name }}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
            <a href="{{ route('addReportForm') }}" class="btn btn-lg btn-danger justify-content-end">
                <i class="material-icons pr-2">create</i>
                Submit Report
            </a>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#userEditProfile" role="tab" data-toggle="tab">
                    <i class="material-icons">edit</i> Edit Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#userProfileReports" role="tab" data-toggle="tab">
                    <i class="material-icons">palette</i> Submitted Reports
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="userEditProfile">
            {{-- <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="{{ asset('/img/examples/studio-1.jpg') }}" class="rounded">
                <img src="{{ asset('/img/examples/studio-2.jpg') }}" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="{{ asset('/img/examples/studio-5.jpg') }}" class="rounded">
                <img src="{{ asset('/img/examples/studio-4.jpg') }}" class="rounded">
              </div>
            </div> --}}
          </div>
          <div class="tab-pane text-center gallery" id="userProfileReports">
                  @component('components.user.reports', ['reports' => Auth::user()->reports])
                      
                  @endcomponent
              </div>
              {{-- <div class="col-md-3 mr-auto">
                <img src="{{ asset('/img/examples/mariya-georgieva.jpg') }}" class="rounded">
                <img src="{{ asset('/img/examples/clem-onojegaw.jpg') }}" class="rounded">
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection