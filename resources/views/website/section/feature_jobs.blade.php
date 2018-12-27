<div class="container text-center">
    <h1>Featured Jobs</h1>
    <p>Leading Employers already using job and talent.</p>
    <br>
    <br>
</div>

<div class="container">
    <li>
        @foreach($feature_jobs as $feature_job)
            <ul>
                <div class="media">
                    <img src="https://via.placeholder.com/100" class="mr-3" alt="...">
                    <div class="media-body">
                        <a href="{{ route('candidate.show-job-details' , $feature_job->id) }}">
                            <h3 class="mt-0">{{ $feature_job->title }}</h3>
                        </a>

                        <p class="text-danger">{{ $feature_job->getUserInfo->name }}</p>
                        <p class="text-muted">{{ $feature_job->location }}</p>
                    </div>
                    <div class="text-left">
                        <a class="btn btn-primary" href="#" role="button"> {{ $feature_job->getJobType->name }}</a>
                        <p class="text-muted"> {{ $feature_job->created_at->diffforhumans()}} </p>
                    </div>
                </div>
            </ul>
        @endforeach
    </li>

</div>