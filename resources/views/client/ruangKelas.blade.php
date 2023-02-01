@extends('layout/header')
@section('getData')
    @php
        use App\Models\ruang_kelas;
        $ruangKelas = ruang_kelas::all();
        $sortedRuangKelas = $ruangKelas->sortBy('ruangan');
        $sortedRuangKelas->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui stackable five column grid">
        @foreach ($sortedRuangKelas as $r)
            <div class="column">
                <a href="{{ Route('KelasDetail.show', $r->ruangan) }}">
                    <div class="ui rasied segment">
                        <h3>{{ $r->ruangan }}</h3>
                        <p>{{ $r->nama_ruangan }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
