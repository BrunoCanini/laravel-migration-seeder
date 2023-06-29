@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Data Partenza</th>
                            <th scope="col">Partenza</th>
                            <th scope="col">Destinazione</th>
                            <th scope="col">Orario Partenza</th>
                            <th scope="col">Orario Arrivo</th>
                            <th scope="col">Numero Treno</th>
                            <th scope="col">Stato Treno</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $train->azienda }}</td>
                                <td>{{ $train->data_partenza }}</td>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td>{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->orario_di_partenza }}</td>
                                <td>{{ $train->orario_di_arrivo }}</td>
                                <td>{{ $train->codice_treno }}</td>
                                @if ($train->cancellato == 1)
                                    <td>cancellato</td>
                                @else
                                    <td>In orario</td>
                                @endif
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection