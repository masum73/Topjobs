<form action="{{route('company.jobs.store')}}" method="POST" id="form_job_create">
    {{csrf_field()}}

    {{--job title--}}
    <div class="form-group">
        <label>Job Title</label>
        <input type="text" name="job_title" class="form-control">
    </div>

    <div class="row">

        {{--location--}}
        <div class="col">
            <div class="form-group">
                <label>Location <small>(Optional)</small></label>
                <input type="text" name="location" class="form-control" placeholder="e.g London">
            </div>
        </div>
        {{--Job type--}}
        <div class="col">
            <div class="form-group">
                <label>Job Type</label>
                <select name="job_type" id="job_type" class="form-control">
                    {{--from database--}}
                    @foreach($job_types as $job_type)
                        <option value="{{$job_type-> id}}"> {{$job_type->name}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        {{--job category--}}
        <div class="col">
            <div class="form-group">
                <label>Job Category</label>
                <select class="js-example-basic-multiple form-control" name="job_categories[]" multiple="multiple">
                    {{--from database--}}
                    @foreach($job_categories as $job_category)
                        <option value="{{$job_category-> id}}"> {{$job_category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">

        {{--job salary--}}
        <div class="col">
            <div class="form-group">
                <label>Job Salary <small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="salary[]" multiple="multiple">
                    {{--from database--}}
                    @foreach($salaries as $salary)
                        <option value="{{$salary-> id}}"> {{$salary->salary_range}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{--Job career--}}
        <div class="col">
            <div class="form-group">
                <label>Job Career <small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_career[]" multiple="multiple">
                    {{--from database--}}
                    @foreach($career_levels as $career_level)
                        <option value="{{$career_level-> id}}"> {{$career_level->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{--job experience--}}
        <div class="col">
            <div class="form-group">
                <label>Job Experience <small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_experience[]" multiple="multiple">
                    {{--from database--}}
                    @foreach($experiences as $experience)
                        <option value="{{$experience-> id}}"> {{$experience->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">

        {{--Gender--}}
        <div class="col">
            <div class="form-group">
                <label>Gender <small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="gender" multiple="multiple">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
        {{--Job industry--}}
        <div class="col">
            <div class="form-group">
                <label>Job Industry <small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_industry[]" multiple="multiple">
                    {{--from database--}}
                    @foreach($industries as $industry)
                        <option value="{{$industry-> id}}"> {{$industry->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{--job qualification--}}
        <div class="col">
            <div class="form-group">
                <label>Job Qualification <small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_qualification[]" multiple="multiple">
                    {{--from database--}}
                    @foreach($qualifications as $qualification)
                        <option value="{{$qualification-> id}}"> {{$qualification->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    {{--description--}}
    <div class="form-group">
        <label>Description <small>(optional)</small></label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    {{--application--}}

    <div class="form-group">
        <label>Application email/URL</label>
        <input type="text" name="application_email_url" class="form-control">
    </div>

    {{--button--}}
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary" name="submit" value="submit">Submit</button>
    </div>
</form>

