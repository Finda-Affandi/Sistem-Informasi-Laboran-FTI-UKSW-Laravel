@extends('layout/header')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/client.ruangLabDetail.css') }}">
    <div class="ui stackable three column grid">
        <div class="six wide column">
            <div class="ui raised segment">
                <h3>{{ $id }}</h3>
                @foreach ($gedung as $g)
                    <p>Kapasitas : {{ $g->kapasitas }}</p>
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Kelengkapan</th>
                                <th>Jumlah</th>
                                <th>Kondisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelengkapan as $k)
                                <tr>
                                    <td>{{ $k->kelengkapan }}</td>
                                    <td>{{ $k->jumlah }}</td>
                                    <td>{{ $k->kondisi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
        <div class="ten wide column">
            <div class="ui raised segment">
                @foreach ($kalender as $kd)
                    @php
                        echo $kd->embed_kalender;
                    @endphp
                @endforeach
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="ui raised segment">
                <h3>View Ruangan</h3>
                @foreach ($gedung as $g)
                    @php
                        echo $g->view;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
@endsection
