@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $id = $_SESSION['idRuang'];
    @endphp
    <div class="ui raised segment">
        <form class="ui form" action="{{ route('Software.store') }}" method="POST">
            @csrf
            <input type="hidden" name="ruangan" class="form-control" value="{{ $id }}">
            <div class="field">
                <label>Nama Software</label>
                <input type="text" name="software" placeholder="Nama Software" class="form-control">
            </div>
            <br>
            <button type="submit" class="ui blue animated button" tabindex="0">
                <div class="visible content">Tambah</div>
                <div class="hidden content">
                    <i class="right arrow icon"></i>
                </div>
            </button>
        </form>
    </div>
@endsection
