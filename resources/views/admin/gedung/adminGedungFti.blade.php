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
    <div class="ui container">
        <div class="ui raised segment">
            <a href="">
                <div class="ui blue animated button" tabindex="0">
                    <div class="visible content">Tambah Ruangan</div>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sortedGedungFti as $gf)
                        <tr>
                            <td>{{ $gf->ruangan }}</td>
                            <td>{{ $gf->nama_ruangan }}</td>
                            <td>{{ $gf->kapasitas }}</td>
                            <td>
                                <a href="">
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
