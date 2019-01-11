@extends('layouts.app')

@section('body-class', 'contact-page sidebar-collapse')

@section('nav-class', 'navbar bg-light fixed-top navbar-expand-lg')


@section('content')
  {{-- <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('img/bg10.jpg') }}');">
  </div> --}}
  <div class="main main-raised" style="min-height: 100vh">
    <div class="container">
        <div class="section">
        </div> 
      <div class="section">
       <div class="row justify-content-center">
        <div class="col-md-12">
          <ul class="nav nav-pills nav-pills-icons justify-content-center mb-4" role="tablist">
            <!--
                            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                        -->
            <li class="nav-item">
              <a class="nav-link active show" href="#dashboard-1" role="tab" data-toggle="tab" aria-selected="true">
                <i class="material-icons">map</i> Map View
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule-1" role="tab" data-toggle="tab" aria-selected="false">
                <i class="material-icons">schedule</i> Table View
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div style="border: 1px solid;" class="tab-pane active show" id="dashboard-1">
                <div id="reportsMap" style="width: 100%; height: 600px;"></div>
            </div>
{{-- being datatables tab --}}
            <div class="tab-pane" id="schedule-1">
                <div class="toolbar">
                    <!-- Here you can write extra buttons/actions for the toolbar -->
                  </div>
                <div class="material-datatables">
                  <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
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
                                aria-label="View: activate to sort column ascending">
                                View
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
                                View
                              </th>
                            </tr>
                          </tfoot>
                          <tbody>
                            @for ($i = 0; $i < count($reports); $i++)
                              @php
                                $report = $reports[$i];
        
                                if($report->status_id == 4) {
                                  $statusColor = 'badge-danger';
                                } else if($report->status_id == 5) {
                                  $statusColor = 'badge-success';
                                }
                              @endphp
        
                              <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">
                                  {{ $i + 1 }}
                                </td>
                                @php
                                $fish = $report->title;
                                $len = strLen($fish);
                                
                                if($len > 30){
                                  $fish = substr($report->title, 0, 30).'...' ;
                                }
                              @endphp
                                <td>{{ $fish }}</td>
                                <td>{{ App\ReportType::select('name')->where('id', $report->report_type_id)->first()->name }}</td>
                                <td>
                                  <label for="" class="badge {{ $statusColor }}">
                                    {{ App\Status::select('name')->where('id', $report->status_id)->first()->name }}
                                  </label>
                                </td>
                                <td>{{ $report->date }}</td>
                                <td class="text-right">
                                  {{-- @can('update', $report)
                                  <a href="{{ route('admin/report/edit', ['id'=>$report->id]) }}" class="btn btn-link btn-info btn-just-icon like">
                                    <i class="material-icons">edit</i>
                                  </a>
                                  @endcan --}}
                                  <a href="{{ route('report', ['id'=>$report->id]) }}" class="btn btn-link btn-warning btn-just-icon edit">
                                    <i class="material-icons">dvr</i>
                                  </a>
                                  {{-- @can('delete', $report)
                                  <a href="{{ route('adminDeleteReport', ['id'=>$report->id]) }}" class="btn btn-link btn-danger btn-just-icon remove">
                                    <i class="material-icons">close</i>
                                  </a>
                                  @endcan --}}
                                </td>
                              </tr>
                            @endfor
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- end content-->
                  </div>
                  <!--  end card  -->
                </div>
              
{{-- end datatables tab --}}
            </div>
          </div>
        </div>
      </div>
{{-- End Nav-Tabs --}}
        </div>
       
{{-- End Section --}}
      </div>
    </div>
    </div>
    </div>
    </div>
  </div>

  @endsection

  @section('scripts')
  <script>
      $(document).ready(function() {
        nonBelievers.reportMap(
          "reportsMap", 
          9.060892, 
          7.4637899, 
          15, 
          "PTCIJ Main Office"
        );
        
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
              [5, 10, 20, -1],
              [5, 10, 20, "All"]
            ],
            responsive: true,
            language: {
              search: "_INPUT_",
              searchPlaceholder: "Search records",
            }
        });

      });

  </script>


@endsection