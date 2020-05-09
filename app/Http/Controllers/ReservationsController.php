<?php

namespace App\Http\Controllers;
use App\Client;
use App\Reservation;
use App\Room;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex() {

        // reservaties die gemaakt zijn weergeven + date('Y-m-d')->get() -> datum van vandaag
        $reservations= Reservation::where('date_end', '>', date('Y-m-d'))->get();
        return view('reservations.index', [
            'reservations' => $reservations
        ]);
    }

    public function getCreate(Client $client, Request $r) {
        $reserved_rooms = [];
        // datums mogen niet vallen tussen => whereBetween()
        if($r->dateFrom && $r->dateTo){
            // request voor te filteren

            // selecteer alle reservaties die reeds geboekt zijn binnen de periode dat gefilterd is-> query
            $reserved_rooms = Reservation::whereBetween('date_start', [$r->dateFrom, $r->dateTo])

            //waar de einddatum valt binnen de gefilterdd begin en eind datum
                ->orwhereBetween('date_end', [$r->dateFrom, $r->dateTo])

            /* maar als de periode vroeger begint en in onze periode eindigd of de periode in onze gefilterde periode is en na onze einddatum

            Maken gebruik van een geneste functie die aan enkele voorwaarden voldoet -> begint datum is kleiner dat die we filteren

            en eind-datum is groter dan die we filteren
            */
                ->orWhere(function($query) use($r){
                    $query->where('date_start', '<' , $r->dateFrom)
                    ->where('date_end', '>', $r->dateTo);
                })
                // methode voor 1 ding uit de query te halen -> toArray() => omzetten naar array
                ->pluck('room_id')->toArray();

        }

        $rooms = Room::get();

        return view('reservations.edit', [
            'rooms' => $rooms,
            'reserved_rooms' => $reserved_rooms,
            'client' => $client,
           
            'dateFrom' => $r->dateFrom,
            'dateTo' => $r->dateTo
        ]);
    }

    public function getEdit(Reservation $reservation, Request $r) {
        
        $client =Client::get()->toArray();
    

        return view('reservations.dateaddapt', [
           'reservation'=>$reservation,
            'client'=> $client,
            'firstname' => $client->firstname,
            'lastname' => $client->lastname
         ]);
    }

    public function postSave(Request $request) {
        // @todo post request naar db wegschrijven
        // adhv een model
    //dd($request); info vragen

    // data uit de request halen
    $reservation = new Reservation();

    $reservation->room_id = $request->room_number;
    $reservation->client_id = $request->client;
    $reservation->date_start = $request->date_start;
    $reservation->date_end= $request->date_end;
    $reservation->save();

    // dd($reservation); test

    if($reservation) {
                // klant updaten 1. client opvragen + id en dan updaten van data
                //$reservation = Reservation::where('id', $request->id)->first();
        // $reservation->update($data);
        return redirect()->route('reservations');
    }

    }
    public function destroy (request $request){
        dd($request);
    }

}
