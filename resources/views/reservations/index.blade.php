@extends('layout')


@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Reservaties</h4>

        <table class="stack">
            <thead>
                <tr>
                    <th width="200">Kamer</th>
                    <th width="200">Klant</th>
                    <th width="200">Datums</th>
                    <th width="200">Actie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)


                <tr>
                    <td>{{$reservation->room->name}}</td>
                    <td>{{$reservation->client->firstname . ' ' . $reservation->client->lastname }}</td>
                    <td>
                        <!--datum error display verkeerd -> in db juist-->
                        {{date('d-m-Y', strtotime($reservation->date_start))}} - {{date('d-m-Y', strtotime($reservation->date_end)) }};
                    </td>
                    <td>
                         <a class="hollow button" href="{{route('reservations.dateaddapt', $reservation->id)}}">BEWERK</a>
                    <a class="hollow button alert" href="{{route('reservations.destroy', $reservation->id)}}">X</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
