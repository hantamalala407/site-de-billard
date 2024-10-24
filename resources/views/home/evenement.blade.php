@extends('layouts.application')

@section('title', 'Afebas - Tournois')

@section('content')
<table class="event-table">
    <thead>
        <tr>
            <th>Événement</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Lieu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Match de Football</td>
            <td>20 Septembre 2024</td>
            <td>18h00</td>
            <td>Stade Municipal</td>
        </tr>
        <tr>
            <td>Match de Basket</td>
            <td>22 Septembre 2024</td>
            <td>20h00</td>
            <td>Salle Sportive</td>
        </tr>
    </tbody>
</table>

@endsection
