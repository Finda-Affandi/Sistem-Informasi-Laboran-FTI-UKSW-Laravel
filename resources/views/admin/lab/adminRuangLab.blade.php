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
    <div class="ui container">
        <div class="ui raised segment">
            <a href="{{ route('RuangLab.create') }}">
                <div class="ui blue animated button" tabindex="0">
                    <div class="visible content">Tambah Ruang Lab</div>
                    <div class="hidden content">
                        <i class="plus circle icon"></i>
                    </div>
                </div>
            </a>
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>No Ruang</th>
                        <th>Nama Ruangan</th>
                        <th>Kapasitas</th>
                        <th>PIC</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sortedRuangLab as $lab)
                        <tr>
                            <td>{{ $lab->ruangan }}</td>
                            <td>{{ $lab->nama_ruangan }}</td>
                            <td>{{ $lab->jumlah_komputer }}</td>
                            <td>{{ $lab->nama_pic }}</td>
                            <td>
                                <a href="{{ Route('RuangLab.show', $lab->ruangan) }}">
                                    <div class="ui blue animated fade button" tabindex="0">
                                        <div class="visible content">
                                            <i class="arrow alternate circle right outline icon"></i>
                                        </div>
                                        <div class="hidden content">
                                            Detail
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
