@extends('layout.headerAdmin')
@section('getData')
    @php
        use App\Models\ruang_lab;
        $ruangLab = ruang_lab::all();
        $sortedRuangLab = $ruangLab->sortBy('ruangan');
        $sortedRuangLab->values()->all();
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
                    <th>PIC</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sortedRuangLab as $lab)
                    <tr>
                        <td>{{ $lab->ruangan }}</td>
                        <td>{{ $lab->nama_ruangan }}</td>
                        <td>{{ $lab->jumlah_komputer }}</td>
                        <td>{{ $lab->nama_pic }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
