@extends('layouts.app')

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    @endpush

@section('content')
    <div class="container">
        <div class="row">
            {{--left sidebar--}}
            <div class="col">
               @include('dashboard.company.components.sidebar')
            </div>
            {{--main content--}}
            <div class="col-9">
                {{--Form Job Post--}}
                @include('dashboard.company.jobs.forms.form-job-create')
                {{--End Form Job Post--}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('.js-example-basic-multiple').select2();
    </script>
@endpush