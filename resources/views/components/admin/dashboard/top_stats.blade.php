@php
    $report = App\Report::select()->orderBY('views','desc')->first();
    $story = App\Story::select()->orderBY('views','desc')->first();
    $user = App\User::withCount('stories')->orderBY('stories_count', 'desc')->first();

    $storyDesc = $story->story;
          $len = strLen($storyDesc);
          
          if($len > 100){
            $storyDesc = substr($story->story, 0, 100).'...' ;
          }

    $reportDesc = $report->description;
      $len = strLen($reportDesc);
      
      if($len > 100){
        $reportDesc = substr($report->description, 0, 100).'...' ;
      }

@endphp

        <ul class="timeline timeline-simple">
          <li class="timeline-inverted">
            <div class="timeline-badge danger">
              <i class="material-icons">description</i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <span class="badge badge-pill badge-rose">Trending Report</span>
              </div>
              <div class="timeline-body">
                  <h4 class="card-title text-center"><b>{{ $report->title }} </b></h4>
              <p>{!! $reportDesc !!}</p>
              <br>
              <b>Victim:</b> {{ $report->victim }}, 
              <b>Assailant:</b> {{ $report->assailant }}

              <hr>
              <h6 class="pull-left">
                  <i class="ti-time"></i> {{ $report->views }} views
                </h6>
              <div class="dropdown pull-right">
                  <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li>
                      <a href="{{ route('showReport', ['id'=>$report->id]) }}">View</a>
                    </li>
                    <li>
                      @can('update', $report)
                      <a href="{{ route('admin/report/edit', ['id'=>$report->id]) }}">Edit</a>
                      @endcan
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge info">
              <i class="material-icons">insert_comment</i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <span class="badge badge-pill badge-info align-content-center">Trending Story</span>
              </div>
              <div class="timeline-body">
                <h4 class="card-title"><b>{{ $story->title }} </b></h4>
                <p>{!! $storyDesc !!}</p>
                <hr>
                <h6 class="pull-left">
                    <i class="ti-time"></i> {{ $story->views }} views
                </h6>
                <div class="dropdown pull-right">
                    <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                      <li>
                        <a href="{{ route('showReport', ['id'=>$report->id]) }}">View</a>
                      </li>
                      <li>
                        @can('update', $report)
                        <a href="{{ route('admin/report/edit', ['id'=>$report->id]) }}">Edit</a>
                        @endcan
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge danger">
              <i class="material-icons">face</i>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <span class="badge badge-pill badge-danger">Trending Journalist</span>
              </div>
              <div class="timeline-body">
                  <h4 class="card-title"><b>{{ $user->name }} </b></h4> 
                  <hr>
                  <h6 class="pull-left">
                  {{ $user->stories_count }} total stories
                  </h6>
              </div>
            </div>
          </li>
        </ul>