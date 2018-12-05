@extends('layouts.admin.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    @if (isset($_GET['success']) && $_GET['success'] == 1)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Report has been updated successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif


    <!-- Reports Metrics  -->
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">event_note</i>
                    </div>
                    <p class="card-category">R. Contents</p>
                    <h3 class="card-title">184</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">create</i>
                        Stories written related to report
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <p class="card-category">Views</p>
                    <h3 class="card-title">75,521</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> 
                        Tracked natively
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">folder_special</i>
                    </div>
                    <p class="card-category">Evidence</p>
                    <h3 class="card-title">4</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">
                            assignment
                        </i>
                    </div>
                    <h4 class="card-title">
                        {{ $report->title }}
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Toolbar -->
                    <div class="toolbar">
                        <a href="{{ route('admin/report/edit', ['id'=>$report->id]) }}" 
                            class="btn btn-info btn-sm">
                            <i class="material-icons">edit</i>
                            Edit
                        </a>
                        <a href="#" 
                            class="btn btn-info btn-sm">
                            <i class="material-icons">create</i>
                            Upload Evidence
                        </a>
                        <a href="#" 
                            class="btn btn-info btn-sm">
                            <i class="material-icons">create</i>
                            Write Story
                        </a>
                    </div>
                    <hr>

                    <!-- Report Description -->
                    <div class="content my-5">
                        {!! $report->description !!}
                    </div>
                    <hr>

                    <!-- Evidences -->

                    <div class="content">
                        <table class="table table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>the_file_name.pdf</td>
                                    <td>
                                        <i class="fa fa-file-pdf-o"></i>
                                        PDF
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>the_file_name.jpg</td>
                                    <td>
                                        <i class="fa fa-file-image-o"></i>
                                        JPG
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>the_file_name.pdf</td>
                                    <td>
                                        <i class="fa fa-file-sound-o"></i>
                                        MP3
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Report Details -->
            <div class="card">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">
                            list_alt
                        </i>
                    </div>
                    <h4 class="card-title">
                        Report Details
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <b>Report Type: </b>
                                </td>
                                <td>{{ App\ReportType::select('name')->where('id', $report->report_type_id)->first()->name }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Victim: </b>
                                </td>
                                <td>{{ $report->victim }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Affiliation: </b>
                                </td>
                                <td>{{ $report->affiliation }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Assailant: </b>
                                </td>
                                <td>{{ $report->assailant }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Status: </b>
                                </td>
                                <td>
                                    <label class="badge badge-danger">
                                        {{ App\Status::select('name')->where('id', $report->status_id)->first()->name }}
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Submitted By -->
            <div class="card card-testimonial">
                <div class="icon">
                    <i class="material-icons">person</i>
                </div>
                <div class="card-body">
                    <h5 class="card-description">
                        Reported By
                    </h5>
                </div>
                <div class="card-footer">
                    <h4 class="card-title">
                        Alec Thompson
                    </h4>
                </div>
            </div>
            <br><br>
        </div>
    </div>


    <h3 class="title">Related Posts</h3>

    <div class="row">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-md-4">
            <div class="card card-product" data-count="15">
                <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                        <img class="img" src="{{ asset('img/card-2.jpg') }}">
                    </a>
                </div>
                <div class="card-body">
                    <div class="card-actions text-center">
                        <button type="button" class="btn btn-danger btn-link fix-broken-card">
                            <i class="material-icons">build</i> Fix Header!
                        </button>
                        <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                            <i class="material-icons">art_track</i>
                        </button>
                        <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                            <i class="material-icons">edit</i>
                        </button>
                        <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <h4 class="card-title">
                        <a href="#pablo">Cozy 5 Stars Apartment</a>
                    </h4>
                    <div class="card-description">
                        The place is close to Barceloneta Beach 
                        and bus stop just 2 min by walk and near 
                        to "Naviglio" where you can enjoy the main 
                        night life in Barcelona.
                    </div>
                </div>
                <div class="card-footer">
                    <div class="price">
                        <h4>$899/night</h4>
                    </div>
                    <div class="stats">
                        <p class="card-category">
                            <i class="material-icons">place</i> 
                            Barcelona, Spain
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection

@section('scripts')

@endsection