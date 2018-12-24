@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        @if(auth()->user()->isAdmin())
                            You are an Admin
                        @elseif(auth()->user()->isCompany())
                            You are a Company
                        @elseif(auth()->user()->isCandidate())
                            You are a Candidate
                        @endif()
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
