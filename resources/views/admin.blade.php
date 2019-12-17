@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Admin Dashboard</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in as <strong>Admin</strong> !
                </div>
                <div class="card-body"> 
                    <a href="/admin/feedback" > <img src="../View Feedback.png" alt="" width="150px" height="35px" ></a>  
                    <a href="/calendars/approval" > <img src="../approval events.png" alt="" width="150px" height="35px" ></a>  
                </div>
            </div>
            <div class="card">
                <div class="card-header" >
                    <h4>Statistic</h4>
                </div>
                <div class="card-body">
                    Total Event Applied
                    <br>
                    {{$maxevent}}
                </div>
                <div class="card-body">
                    Today application submitted
                    <br>
                    {{$counter}}                
                </div>
                <div class="card-body">
                    Total Pending Event
                    <br>
                    {{count($haventapprove)}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Each venue Statistic</h4> 

                </div>
            <div class="card">
                @foreach ($venue as $venuelist)
                <script>var countervenue=0;</script>
                    <div class="card-header">
                        <h5>
                            {{$venuelist->venue_name}}
                        </h5>
                    </div>
                    <div class="card-body">
                    @foreach ($todayvenue as $eachvenue)
                        @if ($eachvenue->venue_id == $venuelist->venue_id)
                            @php
                                $todayvenuecounter += 1
                            @endphp
                        @endif
                    @endforeach
                    @foreach ($date as $month)
                        @if ($month->venue_id == $venuelist->venue_id)
                            @php
                                $venuemonthcounter += 1;
                            @endphp
                        @endif
                    @endforeach
                    @php
                        $rate =  $todayvenuecounter - (count($yesterday))
                    @endphp
                    This month: {{$venuemonthcounter}}
                    <br>
                    Today: {{$todayvenuecounter}}
                    <br>
                    Rate:
                    @if ($todayvenuecounter > count($yesterday))
                            increase : {{$rate}}
                        @else
                            decrease : {{$rate}}
                    @endif
                    </div>
                    @php
                    $venuemonthcounter = 0;
                    $todayvenuecounter = 0;
                @endphp
                @endforeach
            </div>
            </div>
        </div>
    </div>

@endsection