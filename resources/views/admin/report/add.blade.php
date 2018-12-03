@extends('layouts.admin.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    <form id="RangeValidation" class="form-horizontal" action="" method="" novalidate="novalidate">
      <div class="card ">
        <div class="card-header card-header-default card-header-text">
          <div class="card-text">
            <h4 class="card-title">New Report</h4>
          </div>
        </div>
        <div class="card-body">

          <div class="row my-5">
            <div class="col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Title">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <select class="form-control selectpicker" data-style="" id="report-type">
                  <option value="-1">Report Type</option>
                  <option>Physical Attack</option>
                  <option>Arrest</option>
                  <option>Border Stop</option>
                  <option>Equipment Search Or Seizure</option>
                  <option>Equipment or Property Damage</option>
                  <option>Denial Of Access</option>
                  <option>Threat</option>
                  <option>Harassment</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group my-5">
            <label for="report-description">
              Report Description
            </label><br><br>
            <textarea class="form-control" id="report-description" rows="3"></textarea>
          </div>

          <div class="form-group my-5">
            <label for="report-description">
              Victim
            </label>
            <input type="text" name="victim" class="form-control" placeholder="Victim">
          </div>

          <div class="form-group my-5">
            <label for="report-description">
              Affiliation
            </label>
            <input type="text" name="affiliation" class="form-control" placeholder="Affiliation">
          </div>

          <div class="form-group my-5">
            <label for="report-description">
              Assailant
            </label>
            <input type="text" name="assailant" class="form-control" placeholder="Assailant">
          </div>

          <!-- input with datetimepicker -->
          <div class="form-group my-5">
            <label class="label-control">
              Datetime Picker
            </label>
            <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
          </div>

          
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-info">
            <i class="material-icons">add</i>
            Submit Report
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@section('scripts')
  <script>
      <!-- javascript for init -->
      $('.datetimepicker').datetimepicker({
        icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-screenshot',
          clear: 'fa fa-trash',
          close: 'fa fa-remove'
        }
      });

      <!-- classic ckeditor init -->
      ClassicEditor
				.create( document.querySelector( '#report-description' ) )
				.then( editor => {
					//console.log( editor );
				} )
				.catch( error => {
					//console.error( error );
				} );
  </script>
@endsection