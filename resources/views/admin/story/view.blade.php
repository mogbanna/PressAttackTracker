@extends('layouts.admin.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    @if (isset($_GET['success']) && $_GET['success'] == 1)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Story has been saved successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif


    <!-- storys Metrics  -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">event_note</i>
                    </div>
                    <p class="card-category">Report</p>
                    <h3 class="card-title">
                        {{ substr(App\Report::select('title')->where('id', $story->report_id)->first()->title, 0, 30) }}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">create</i>
                        Related Report
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <p class="card-category">Views</p>
                    <h3 class="card-title">{{ $story->views }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> 
                        Tracked natively
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
                        {{ $story->title }} by
                        <small>
                            {{ $story->author }}
                        </small>
                    </h4>
                </div>
                <div class="card-body">
                    <!-- Toolbar -->
                    <div class="toolbar">
                        <a href="{{ route('editStory', ['id'=>$story->id]) }}" 
                            class="btn btn-info btn-sm">
                            <i class="material-icons">edit</i>
                            Edit
                        </a>
                        <a href="#" 
                            class="btn btn-info btn-sm">
                            <i class="material-icons">edit</i>
                            Change Thumbnail
                        </a>
                        @if ($story->status_id == 1)
                        <a href="#" 
                            class="btn btn-info btn-sm">
                            <i class="material-icons">create</i>
                            Submit For Approval
                        </a>
                        @endif
                        @if ($story->status_id == 2)
                        <label class="badge badge-warning badge-lg">
                            Awaiting Approval
                        </label>
                        @endif
                    </div>
                    <hr>

                    <!-- story Description -->
                    <div class="content my-5">

                        <div class="card mb-3">
                            <img class="card-img-top" 
                            src="{{ asset('storage/'.$story->thumbnail) }}" alt="Card image cap">
                            
                        </div>

                        {!! $story->story !!}
                    </div>
                    <hr>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- story Details -->
            <div class="card">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">
                            list_alt
                        </i>
                    </div>
                    <h4 class="card-title">
                        story Details
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
                                    <b>Status: </b>
                                </td>
                                <td>{{ App\Status::select('name')->where('id', $story->status_id)->first()->name }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Tags: </b>
                                </td>
                                <td>
                                    <input type="text" value="{{ $story->tags }}" name="tags" class="form-control tagsinput" 
                                        data-role="tagsinput" data-color="danger" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Related Report: </b>
                                </td>
                                <td>
                                    <a href="{{ route('showReport', ['id'=>$story->report_id]) }}">
                                        {{ App\Report::select('title')->where('id', $story->report_id)->first()->title }}
                                    </a>
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
                        Created By
                    </h5>
                </div>
                <div class="card-footer">
                    <h4 class="card-title">
                        {{ $story->user->name }}
                    </h4>
                </div>
            </div>
            <br><br>


        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection