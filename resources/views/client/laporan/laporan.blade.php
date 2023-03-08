@extends('layout/headerClient')
@section('content')
    <div class="ui container">
        <div class="ui stackable three column grid">
            <div class="ui five wide column"></div>
            <div class="ui six wide column">
                <a href="{{ route('Laporan.create') }}">
                    <div class="ui raised segment">
                        <h5>Laporkan Permasalahan</h5>
                        <p>Laporkan permasalahan yang terjadi di ruang kelas, laboratorium, atau fasilitas lainnya</p>
                    </div>
                </a>
            </div>
            <div class="ui five wide column"></div>
        </div>
    </div>
@endsection
