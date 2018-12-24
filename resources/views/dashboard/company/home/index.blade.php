@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           {{--left sidebar--}}
           <div class="col">
               @include('dashboard.company.components.sidebar')
           </div>
           {{--main content--}}
           <div class="col-9">

               @if(!empty($jobs)&& count($jobs))
                   {{--list of active jobs--}}
                   <div class="card">
                       <div class="card-header">
                           List of Active Jobs
                           <a href="{{route('company.jobs.create')}}" class="btn btn-primary float-right">Post New Job</a>
                       </div>
                       <div class="card-body">
                           <table class="table">
                               <thead>
                               <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Job Title</th>
                                   <th scope="col">Job Type</th>
                                   <th scope="col"></th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($jobs as $key => $job)
                                   <tr>
                                       <th scope="row">{{$key +1}}</th>
                                       <td>{{$job->title}}</td>
                                       <td>{{ $job->getJobType->name}}</td>
                                       <td>@mdo</td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
                   @else
                   {{--job not found--}}
                   <div class="card text-center">
                       <div class="card-body">
                           <h5 class="card-title">You do not have any active jobs</h5>
                           <p class="card-text">Your posted jobs will be right here.</p>
                           <a href="{{route('company.jobs.create')}}" class="btn btn-primary">Post New Job</a>
                       </div>
                   </div>
               @endif

           </div>
       </div>
   </div>
@endsection
