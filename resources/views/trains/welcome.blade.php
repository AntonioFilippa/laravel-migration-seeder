@extends('layouts.app')
@section('content')
<h1>TRAIN PAGE</h1>
{{-- AZIENDA --}}
<div class="container mt-5">
    <div class="row">
        @foreach ($trains as $train)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->Azienda }}</h5>
                        <p class="card-text">
                            <strong>Partenza:</strong> {{ $train->Stazione_di_partenza }}<br>
                            <strong>Arrivo:</strong> {{ $train->Stazione_di_arrivo }}<br>
                            <strong>Orario di partenza:</strong> {{ $train->Orario_di_partenza }}
                            <br>
                            <strong>Orario di arrivo:</strong> {{ $train->Orario_di_arrivo }}
                            <br>
                            <strong>Codice_Treno:</strong> {{ $train->Codice_Treno }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection