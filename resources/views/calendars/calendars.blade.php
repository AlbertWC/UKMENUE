{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>
<body>
    @include('inc.navbar')
    
    @include('inc.message')
    <h2>Full Event Calendar </h2>
    <div class="container">
            <div class="row">
                @if (!Auth::guest())
                    <a href="/venues" class="btn btn-success">Add Event</a>
                    <a href="/events/display" class="btn btn-primary">Edit/Delete my Events</a>
                    
                @endif
                    
                </div>
        <div class="jumbotron">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:#2e6da4; color:white;"> Full Calender Example</div>
    
                        <div class="panel-body">
                            @include('name')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}

@extends('layouts.app')
@section('content')

<style>
    
</style>
    
    <div class="a"><h2>My Events list</h2></div>
    <div class="row" id="calendarbutton">
            @if (!Auth::guest())
        
                <a href="/venues"><img src="../Create Event.png" alt="" ></a>
                <a href="/events/display"><img src="../edit.jpeg" alt="" ></a>
         
            @endif
                
            </div>
@endsection
@section('calendar')
    <div class="card" width="220px" height="500px" id="displaycalendar">
        <div class="card-body">
        {!! $calendar->calendar() !!}
        </div>
    </div>
@endsection

@section('script')
    {!! $calendar->script() !!}
    
@endsection