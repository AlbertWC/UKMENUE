@extends('layouts.app')

@section('content')
    @if (Auth::guard('admin')->check())
        <p><a href="/venues/create"><img src="../Create Venue.png" alt="" ></a></p>
    @endif

    @if(count($venue) > 0)
  
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




</style>

       <h2>Venues List</h2>
    <div class="card">

        @foreach ($venue as $venuelist)
            <div class="card-body">
                    <div class="row">
                            <div class="column" >
                                <div class="col align-self-center">
                <div class="card-text">
                       
                    <img src="/storage/venue_image/{{$venuelist->venue_image}}" alt="Venue Image" width="200px" height="200px">
                                 </div>
                            </div>
                        </div>
                {{-- user session --}}
                        <div class="column">
                <div class="card-text" >
                    @if (Auth::guard('web')->check())
                        <h3><a href="/venues/{{$venuelist->venue_id}}">{{$venuelist->venue_name}}</a></h3>
                    @endif


                {{-- admin session --}}
                @if (Auth::guard('admin')->check())
                <h3><a href="/venues/{{$venuelist->venue_id}}">{{$venuelist->venue_name}}</a></h3>                    
                {{-- old one --}}
                                   
                @endif
            
                    <small>Description : {{$venuelist->venue_description}}</small>
                </div>
               
            </div>
            <hr>
        @endforeach
    </div>
        {!! $venue->render()!!}
    @else
        <p>No Venue added</p>
    @endif
@endsection