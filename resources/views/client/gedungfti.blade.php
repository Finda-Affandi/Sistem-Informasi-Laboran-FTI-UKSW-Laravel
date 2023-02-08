@extends('layout/header')
@section('getData')
    @php
        use App\Models\gedung_fti;
        $gedungFti = gedung_fti::all();
        $sortedGedungFti = $gedungFti->sortBy('ruangan');
        $sortedGedungFti->values()->all();
    @endphp
@endsection
@section('content')
    <div class="ui stackable five column grid">
        @foreach ($sortedGedungFti as $r)
            <div class="column">
                <a href="{{ Route('GedungDetail.show', $r->ruangan) }}">
                    <div class="ui rasied segment">
                        <h3>{{ $r->ruangan }}</h3>
                        <p>{{ $r->nama_ruangan }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
