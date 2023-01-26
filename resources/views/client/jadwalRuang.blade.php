@extends('layout/header')
@section('getData')
    @php
        use App\Models\ruang_kelas;
        $ruangKelas = ruang_kelas::all();
        $sortedRuangKelas = $ruangKelas->sortBy('ruangan');
        $sortedRuangKelas->values()->all();

        use App\Models\ruang_lab;
        $ruangLab = ruang_lab::all();
        $sortedRuangLab = $ruangLab->sortBy('ruangan');
        $sortedRuangLab->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui vertical segment">
        <h3>Ruang Kelas</h3>
        <div class="ui stackable five column grid">
        @foreach ($sortedRuangKelas as $r)
            <div class="column">
                <a href="{{ Route('KelasDetail.show', $r->ruangan) }}">
                    <div class="ui rasied segment">
                        <h3>{{ $r->ruangan }}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
    <div class="ui vertical segment">
        <h3>Ruang Lab</h3>
        <div class="ui stackable five column grid">
        @foreach ($sortedRuangLab as $r)
            <div class="column">
                <a href="{{ Route('LabDetail.show', $r->ruangan) }}">
                    <div class="ui rasied segment">
                        <h3>{{ $r->ruangan }}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
    <div class="ui vertical segment">
        <h3>Gedung FTI</h3>
    </div>
@endsection
