@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $ruang = $_SESSION['ruang'];
        $id = $_SESSION['idRuang'];
    @endphp
    <div class="ui container">
        <div class="ui raised segment">
            @if ($ruang == 'kelas')
                <h3>Ruang Kelas {{ $id }}</h3>
            @else
                <h3>Ruang Lab {{ $id }}</h3>
            @endif
            <form class="ui form" action="{{ route('Kalender.store') }}" method="POST">
                @csrf
                <input type="hidden" name="ruangan" value="{{ $id }}" class="form-control">
                <div class="field">
                    <label>Kalender ID</label>
                    <input type="text" name="kalender_id" placeholder="Kalender ID" class="form-control">
                </div>
                <button type="submit" class="ui blue animated button" tabindex="0">
                    <div class="visible content">Tambah</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </button>
            </form>
        </div>
    </div>
@endsection
