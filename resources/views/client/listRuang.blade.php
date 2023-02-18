@extends('layout/headerClient')
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
        
        use App\Models\gedung_fti;
        $gedungFti = gedung_fti::all();
        $sortedGedungFti = $gedungFti->sortBy('ruangan');
        $sortedGedungFti->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui container">
        <div class="ui vertical segment">
            <div class="ui accordion">
                <div class="title">
                    <h3>Ruang Kelas <i class="dropdown icon"></i></h3>
                </div>
                <div class="content">
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
                </div>
            </div>
        </div>
        <div class="ui vertical segment">
            <div class="ui accordion">
                <div class="title">
                    <h3>Ruang Lab <i class="dropdown icon"></i></h3>
                </div>
                <div class="content">
                    <div class="ui stackable five column grid">
                        @foreach ($sortedRuangLab as $r)
                            <div class="column">
                                <a href="{{ Route('LabDetail.show', $r->ruangan) }}">
                                    <div class="ui rasied segment">
                                        <h3>{{ $r->ruangan }}</h3>
                                        <p>{{ $r->nama_ruangan }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="ui vertical segment">
            <div class="ui accordion">
                <div class="title">
                    <h3>Gedung FTI <i class="dropdown icon"></i></h3>
                </div>
                <div class="content">
                    <div class="ui stackable five column grid">
                        @foreach ($sortedGedungFti as $g)
                            <div class="column">
                                <a href="{{ Route('LabDetail.show', $r->ruangan) }}">
                                    <div class="ui rasied segment">
                                        <h3>{{ $g->ruangan }}</h3>
                                        <p>{{ $g->nama_ruangan }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('.ui.accordion').accordion();
        });
    </script>
@endsection
