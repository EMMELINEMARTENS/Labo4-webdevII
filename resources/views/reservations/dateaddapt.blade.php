@extends('layout')

@section('content')

<div class="row">

    <div class="medium-12 large-12 columns">
        <h4>

        </h4>
    <div class="medium-2  columns">Boeking voor:
        {{$reservation->client->firstname . ' ' . $reservation->client->lastname }}

    </div>
        <div class="medium-2  columns"><b></b></div>
        <form action="" method="get">
            <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
            <div class="medium-1  columns">Van:</div>
        <div class="medium-2  columns"><input name="dateFrom" value="{{ $dateFrom }}" type="date" class="datepicker"/></div>
            <div class="medium-1  columns">Tot:</div>
            <div class="medium-2  columns"><input name="dateTo" value="{{ $dateTo }}" type="date" class="datepicker"/></div>
            <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
        </form>

        <table class="stack">
            <thead>
                <tr>
					<form action="{{route('reservations.dateaddapt')}}" method="POST">
                        @csrf
                            <input type="text" value="{{$room->id}}" name="room_number">
                            <input type="text"  value="{{$client->id}}" name="client">
                            <input type="text"  value="{{old('data_start', ($reservation ? $dataFrom: ''))}}" name="date_start">
                            <input type="text"  value="{{old('date_end', ($reservation ? $dataTo : ''))}}" name="date_end">
                            <button type="text" class="hollow button success">OPSLAAN</button>
                        </td>
                         </form>
					<th># Kamer</th>
					
                    <th>Naam Kamer</th>
                    <th>Beschikbaarheid</th>
                    <th>Actie</th>
                </tr>
            </thead>
            <tbody>
                <!-- if  statement want als er geen datum is geen kamer-->
            </tbody>
        </table>
    </div>
</div>
@endsection