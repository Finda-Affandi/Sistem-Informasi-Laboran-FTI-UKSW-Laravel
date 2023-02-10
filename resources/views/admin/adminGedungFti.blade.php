@extends('layout.headerAdmin')
@section('getData')
    @php
        use App\Models\gedung_fti;
        $gedungFti = gedung_fti::all();
        $sortedGedungFti = $gedungFti->sortBy('ruangan');
        $sortedGedungFti->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui raised segment">
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>No Ruang</th>
                    <th>Nama Ruangan</th>
                    <th>Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sortedGedungFti as $gf)
                    <tr>
                        <td>{{ $gf->ruangan }}</td>
                        <td>{{ $gf->nama_ruangan }}</td>
                        <td>{{ $gf->kapasitas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
