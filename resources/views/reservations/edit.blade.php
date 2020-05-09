@extends('layout')

@section('content')

<div class="row">

    <div class="medium-12 large-12 columns">
        <h4>
                <!--if else voor te switchen tussen beide isset => kijkt of het bestaat-->
          {{-- @if(!isset($reservation))
          Nieuw reservation
          @else
          Bewerk reservation
          @endif --}}
        </h4>
    <div class="medium-2  columns">Boeking voor:
        {{$client->title}} . {{$client->firstname . ' ' . $client->lastname}}
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
                    <th># Kamer</th>
                    <th>Naam Kamer</th>
                    <th>Beschikbaarheid</th>
                    <th>Actie</th>
                </tr>
            </thead>
            <tbody>
                <!-- if  statement want als er geen datum is geen kamer-->
                @if($dateFrom && $dateTo)

                    @foreach($rooms as $room)

                    <tr>
                        <td>{{ $room->number }}</td>
                        <td>{{ $room->name }}</td>
                        <td>
                            @if(!in_array($room->id, $reserved_rooms))

                            <div class="callout success">
                                <h7>Beschikbaar</h7>
                            </div>
                        </td>

                        <td>
                        <!-- form maken zodat de knop de data mee stuurt naar de volgende pagina-->
                        <form action="{{route('reservations.save')}}" method="POST">
                        @csrf
                            <input type="hidden" value="{{$room->id}}" name="room_number">
                            <input type="hidden" value="{{$client->id}}" name="client">
                            <input type="hidden" value="{{$dateFrom}}" name="date_start">
                            <input type="hidden" value="{{$dateTo}}" name="date_end">
                            <button type="submit" class="hollow button">Boek</button>
                        </td>
                         </form>
                            @else
                            <td>
                                <div class="callout warning">
                                <h7>Bezet</h7>
                                </div>
                            </td>

                            @endif
                        </td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
