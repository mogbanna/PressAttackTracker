@extends('layouts.admin.app')

@section('content')
    
<div class="row">
  <div class="col-md-12">
    @if (isset($delete_success) && $delete_success == 1)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Report has been deleted successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <div class="card">
      <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
          <i class="material-icons">
            assignment
          </i>
        </div>
        <h4 class="card-title">
          Reports
        </h4>
      </div>
      <div class="card-body">
        <div class="toolbar">
          <!-- Here you can write extra buttons/actions for the toolbar -->
        </div>
        <div class="material-datatables">
          <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="datatables_length">
                  <label>Show 
                    <select name="datatables_length" aria-controls="datatables" 
                      class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="-1">All</option>
                    </select> 
                    entries
                  </label>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div id="datatables_filter" class="dataTables_filter">
                  <label>
                    <span class="bmd-form-group bmd-form-group-sm">
                      <input type="search" class="form-control form-control-sm" 
                        placeholder="Search records" aria-controls="datatables">
                    </span>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table id="datatables" 
                  class="table table-striped table-no-bordered table-hover dataTable dtr-inline" 
                  cellspacing="0" width="100%" style="width: 100%;" 
                  role="grid" aria-describedby="datatables_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="datatables" 
                        rowspan="1" colspan="1" style="" 
                        aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        Id
                      </th>
                      <th class="sorting_asc" tabindex="0" aria-controls="datatables" 
                        rowspan="1" colspan="1" style="" 
                        aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        Title
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="datatables" 
                        rowspan="1" colspan="1" style="" 
                        aria-label="Position: activate to sort column ascending">
                        Report Type
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="datatables" 
                        rowspan="1" colspan="1" style="" 
                        aria-label="Office: activate to sort column ascending">
                        Status
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="datatables" 
                        rowspan="1" colspan="1" style="" 
                        aria-label="Date: activate to sort column ascending">
                        Date
                      </th>
                      <th class="disabled-sorting text-right sorting" 
                        tabindex="0" aria-controls="datatables" rowspan="1" 
                        colspan="1" style="" 
                        aria-label="Actions: activate to sort column ascending">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th rowspan="1" colspan="1">
                        Id
                      </th>
                      <th rowspan="1" colspan="1">
                        Title
                      </th>
                      <th rowspan="1" colspan="1">
                        Report Type
                      </th>
                      <th rowspan="1" colspan="1">
                        Status
                      </th>
                      <th rowspan="1" colspan="1">
                        Date
                      </th>
                      <th class="text-right" rowspan="1" colspan="1">
                        Actions
                      </th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php
                        $reports = App\Report::paginate(); 
                    @endphp
                    @for ($i = 0; $i < count($reports); $i++)
                      @php
                          $report = $reports[$i];
                      @endphp

                      <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">
                          {{ $i + 1 }}
                        </td>
                        <td>{{ $report->title }}</td>
                        <td>{{ App\ReportType::select('name')->where('id', $report->report_type_id)->first()->name }}</td>
                        <td>
                          <label for="" class="badge badge-danger">
                            {{ App\Status::select('name')->where('id', $report->status_id)->first()->name }}
                          </label>
                        </td>
                        <td>{{ $report->date }}</td>
                        <td class="text-right">
                          <a href="{{ route('admin/report/edit', ['id'=>$report->id]) }}" class="btn btn-link btn-info btn-just-icon like">
                            <i class="material-icons">edit</i>
                          </a>
                          <a href="{{ route('showReport', ['id'=>$report->id]) }}" class="btn btn-link btn-warning btn-just-icon edit">
                            <i class="material-icons">dvr</i>
                          </a>
                          <a href="{{ route('adminDeleteReport', ['id'=>$report->id]) }}" class="btn btn-link btn-danger btn-just-icon remove">
                            <i class="material-icons">close</i>
                          </a>
                        </td>
                      </tr>
                    @endfor
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="datatables_info" 
                  role="status" aria-live="polite">
                  Showing 1 to 10 of 40 entries
                </div>
              </div>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_full_numbers" 
                  id="datatables_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item first disabled" id="datatables_first">
                      <a href="#" aria-controls="datatables" data-dt-idx="0" 
                        tabindex="0" class="page-link">
                        First
                      </a>
                    </li>
                    <li class="paginate_button page-item previous disabled" id="datatables_previous">
                      <a href="#" aria-controls="datatables" data-dt-idx="1" 
                        tabindex="0" class="page-link">
                        Prev
                      </a>
                    </li>
                    <li class="paginate_button page-item active">
                      <a href="#" aria-controls="datatables" 
                        data-dt-idx="2" tabindex="0" class="page-link">
                        1
                      </a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="datatables" data-dt-idx="3" 
                        tabindex="0" class="page-link">
                        2
                      </a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="datatables" 
                        data-dt-idx="4" tabindex="0" class="page-link">
                        3
                      </a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="datatables" 
                        data-dt-idx="5" tabindex="0" class="page-link">
                        4
                      </a>
                    </li>
                    <li class="paginate_button page-item next" id="datatables_next">
                      <a href="#" aria-controls="datatables" data-dt-idx="6" 
                        tabindex="0" class="page-link">
                        Next
                      </a>
                    </li>
                    <li class="paginate_button page-item last" id="datatables_last">
                      <a href="#" aria-controls="datatables" data-dt-idx="7" 
                        tabindex="0" class="page-link">
                        Last
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end content-->
          </div>
          <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
      </div>
      <!-- end row -->
    </div>
  </div>
</div>


@endsection
