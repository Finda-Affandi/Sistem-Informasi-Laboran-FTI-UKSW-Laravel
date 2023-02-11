@extends('layout/headerClient')
@section('content')
    <div class="ui stackable two column grid">
        @foreach ($dosen as $ds)
            <div class="column">
                <div class="ui raised segment">
                    <p>Nama : {{ $ds->nama_dosen }}</p>
                    <p>Jabatan : {{ $ds->jabatan }}</p>
                    <p>Email : {{ $ds->email }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
