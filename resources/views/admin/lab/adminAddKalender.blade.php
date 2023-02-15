@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $id = $_SESSION['idRuang'];
    @endphp
    <div class="ui raised segment">
        <h3>Ruang Lab {{ $id }}</h3>
        <form class="ui form" action="{{ route('Kelengkapan.store') }}" method="POST">
            @csrf
            <input type="hidden" name="ruangan" value="{{ $id }}" class="form-control">
            <div class="field">
                <label>Kalender</label>
                <input type="text" name="kalender_id" placeholder="Kalender" class="form-control">
            </div>
            <button type="submit" class="ui blue animated button" tabindex="0">
                <div class="visible content">Tambah</div>
                <div class="hidden content">
                    <i class="right arrow icon"></i>
                </div>
            </button>
        </form>
    </div>
@endsection