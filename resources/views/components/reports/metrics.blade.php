<div class="col-md-6 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">
                {{ $report->views }}
            </h3>
        </div>
        <div class="card-description mx-3">
            <h4 class="card-category card-category-social text-primary">
                <i class="material-icons">receipt</i> Views
            </h4>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">
                    {{ $report->evidence()->count() }}
            </h3>
        </div>
        <div class="card-description mx-3">
            <h4 class="card-category card-category-social text-primary">
                <i class="material-icons">receipt</i> Evidence
            </h4>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">
                    {{ $report->stories()->count() }}
            </h3>
        </div>
        <div class="card-description mx-3">
            <h4 class="card-category card-category-social text-primary">
                <i class="material-icons">receipt</i> Stories
            </h4>
        </div>
    </div>
</div>


   