@include('layouts.app')

<div class="jumbotron text-center">
    <div class="container">
        <h1>{{ $job->title }}</h1>
        <br>
        <ul class="list-inline">
            <li class="list-inline-item">
                <button class="btn btn-outline-danger btn-block btn-sm">{{ $job->getJobType->name }}</button>
            </li>
            <li class="list-inline-item text-muted">
                {{ $job->location }}
            </li>
            <li class="list-inline-item text-muted">
                {{ $job->created_at->diffforhumans() }}
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-8">

            <div class="media">
                <img src="https://via.placeholder.com/100" class="mr-3 rounded"  alt="...">
                <div class="media-body">
                    <a href="#">
                        <h5 class="mt-0">{{ $job->getUserInfo->name }}</h5>
                    </a>
                    <br>
                    <ul class="list-inline">
                        <li class="list-inline-item text-muted">
                            http://www.guxoft.com
                        </li>
                        <li class="list-inline-item text-muted">
                            +41 237 264 839
                        </li>
                        <li class="list-inline-item text-muted">
                            guxoft@demo.com
                        </li>
                    </ul>
                </div>
            </div>

            <hr>

            <h3>Job Description</h3>
            <p>
                We are looking for a smart Frontend Engineer who can participate in building our next generation interface. You will get a chance to get your hands dirty with our core product working directly with the Leadership and Business. You will also participate in web security, compatibility and experience design.
            </p>
            <p>
                This involves a lot of collaboration with the engineering and R&D Teams to prioritise and launch new features. You will also play an important role in deployments, product roadmaps and data security.
            </p>

        </div>
        <div class="col-4">
            <div>
                <p>
                    <button class="btn btn-danger btn-block btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-target
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <p>To apply for this job email your details to Goxoft@demo.com</p>
                        <hr>
                        <p>You can apply to this job and others using your online resume. Click the link below to submit your online resume and email your application to this employer.</p>

                        <a href="{{ route('dashboard.candidate.show-job-apply-form' , $job->id) }}" class="btn btn-outline-primary btn-block btn-lg text-center"><h5 class="text-danger">Submit resume and Apply</h5></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>