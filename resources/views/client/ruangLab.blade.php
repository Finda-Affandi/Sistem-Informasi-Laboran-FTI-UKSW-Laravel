@extends('layout/header')
@section('getData')
    @php
        use App\Models\ruang_lab;
        $ruangLab = ruang_lab::all();
        $sortedRuangLab = $ruangLab->sortBy('ruangan');
        $sortedRuangLab->values()->all();
    @endphp
@endsection
@section('content')
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
@endsection
