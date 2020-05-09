@extends('layout')

@section('content')
 @section('inline-style')
<style>
.invalid{
    border-color: red;
}
</style>
@endsection
<div class="row">
    <div class="medium-12 large-12 columns">
      <h4>
          <!--if else voor te switchen tussen beide isset => kijkt of het bestaat-->
          @if(!isset($client))
          Nieuwe klant
          @else
          Bewerk klant
          @endif

        </h4>
      <form action="{{ route('clients.save') }}" method="post">
        @csrf
        <!-- controleer of er al een klant is en geef  het zin id weer-->
        @if($client)
        <input type="hidden" name="id" value={{ $client->id}}>
        @endif
        <div class="medium-4  columns">
          <label>Titel</label>
          <select name="title">
              <!-- in value = old() -> ophalen oude waarde , $client->title -> waarde oproepen van de database voor bewerken -> alles in old()

                Maar wat met een nieuwe klant ?

                ($client ? $client->title : '') in old => if else om eerst te controleren of onze klant bestaat
                1. bestaat de klant -> veld invullen
                2. bestaat de klant niet-> ''
            -->
            <option value="mr" @if(old('title', ($client ? $client->title : '')) == 'mr') selected="selected" @endif>Mr.</option>
            <option value="mw" @if(old('title', ($client ? $client->title : '')) == 'mw') selected="selected" @endif>Mw.</option>
            <option value="juf" @if(old('title', ($client ? $client->title : '')) == 'juf') selected="selected" @endif>Juf.</option>
            <option value="dr" @if(old('title', ($client ? $client->title : '')) == 'dr') selected="selected" @endif>Dr.</option>
          </select>
        </div>
        <div class="medium-4  columns">
        <!-- klass toekennen bij een error op 1 van de input velden (visueel zichtbaarder)
            class="error() invalid enderror"-->
          <label>Voornaam</label>
        <input name="firstname" type="text" value ="{{old('firstname', ($client ? $client->firstname : ''))}}" class="@error('firstname') invalid @enderror">
        </div>
        <div class="medium-4  columns">
          <label>Achternaam</label>
          <input name="lastname" type="text" value ="{{old('lastname', ($client ? $client->lastname : ''))}}" class="@error('lastname') invalid @enderror">
        </div>
        <div class="medium-8  columns">
          <label>Adres</label>
          <input name="address" type="text" value ="{{old('address', ($client ? $client->address : '')) }}" class="@error('address') invalid @enderror">
        </div>
        <div class="medium-4  columns">
          <label>Postcode</label>
          <input name="postal_code" type="text" value ="{{old('postal_code', ($client ? $client->postal_code : ''))}}" class="@error('postal_code') invalid @enderror">
        </div>
        <div class="medium-4  columns">
          <label>Stad</label>
          <input name="city" type="text" value ="{{old('city', ($client ? $client->city : ''))}}" class="@error('city') invalid @enderror">
        </div>
        <div class="medium-4  columns">
          <label>Provincie</label>
          <input name="province" type="text" value ="{{old('province', ($client ? $client->province : ''))}}" class="@error('province') invalid @enderror">
        </div>
        <div class="medium-12  columns">
          <label>E-mail</label>
          <input name="email" type="text" value ="{{old('email', ($client ? $client->email : ''))}}" class="@error('email') invalid @enderror">
        </div>
        <div class="medium-12  columns">
          <input value="BEWAAR" class="button success hollow" type="submit">
        </div>
        <div class="medium-12 columns">
            @if($errors->any())
            <div class="callout error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
      </form>
    </div>
  </div>
@endsection
