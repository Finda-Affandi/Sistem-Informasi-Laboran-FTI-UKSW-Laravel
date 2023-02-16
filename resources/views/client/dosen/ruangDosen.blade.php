@extends('layout/headerClient')
@section('getData')
    @php
        use App\Models\ruang_dosen;
        use App\Models\dosen;
        
        $ruangDosen = ruang_dosen::all();
        $sortedRuangDosen = $ruangDosen->sortBy('ruangan');
        $sortedRuangDosen->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui container">
        <div class="ui stackable four column grid">
            @foreach ($sortedRuangDosen as $r)
                <div class="column">
                    <a href="{{ Route('DosenDetail.show', $r->ruangan) }}">
                        <div class="ui rasied segment">
                            <h3>{{ $r->ruangan }}</h3>
                            @php
                                $ds = dosen::select()
                                    ->where('ruangan', $r->ruangan)
                                    ->get();
                                $dosen = $ds->sortBy('nama_dosen');
                                $dosen->values()->all();
                                
                                foreach ($dosen as $d) {
                                    echo '<b>' . $d->nama_dosen . '</b><br>';
                                    echo $d->jabatan . '<br>';
                                    echo '<br>';
                                }
                            @endphp
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
