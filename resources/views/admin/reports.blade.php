@extends('layouts.admin.app')

@section('content')
    
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">DataTables.net</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatables_length"><label>Show <select name="datatables_length" aria-controls="datatables" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatables_filter" class="dataTables_filter"><label><span class="bmd-form-group bmd-form-group-sm"><input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="datatables"></span></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 237px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 347px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 179px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 66px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 154px;" aria-label="Date: activate to sort column ascending">Date</th><th class="disabled-sorting text-right sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 277px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                      </thead>
                      <tfoot>
                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th class="text-right" rowspan="1" colspan="1">Actions</th></tr>
                      </tfoot>
                      <tbody>
                        
                        
                      <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1" tabindex="0">Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1" tabindex="0">Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="even">
                          <td tabindex="0" class="sorting_1">Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1" tabindex="0">Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="even">
                          <td tabindex="0" class="sorting_1">Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1" tabindex="0">Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr><tr role="row" class="even">
                          <td tabindex="0" class="sorting_1">Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr></tbody>
                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 40 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="datatables_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="datatables_first"><a href="#" aria-controls="datatables" data-dt-idx="0" tabindex="0" class="page-link">First</a></li><li class="paginate_button page-item previous disabled" id="datatables_previous"><a href="#" aria-controls="datatables" data-dt-idx="1" tabindex="0" class="page-link">Prev</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatables" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables" data-dt-idx="4" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables" data-dt-idx="5" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="datatables_next"><a href="#" aria-controls="datatables" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li><li class="paginate_button page-item last" id="datatables_last"><a href="#" aria-controls="datatables" data-dt-idx="7" tabindex="0" class="page-link">Last</a></li></ul></div></div></div></div>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->


@endsection
