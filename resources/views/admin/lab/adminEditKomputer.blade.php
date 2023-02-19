@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form role="form" class="ui form" action="{{ route('Komputer.update', $komputer->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="disabled field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control"
                        value="{{ $komputer->ruangan }}">
                </div>
                <div class="field">
                    <label>Nomor Komputer</label>
                    <input type="text" name="no_komputer" placeholder="Nomor Komputer"
                        class="form-control"value="{{ $komputer->no_komputer }}">
                </div>
                <div class="field">
                    <label>Kondisi</label>
                    <input type="text" name="kondisi" placeholder="Kondisi"
                        class="form-control"value="{{ $komputer->kondisi }}">
                </div>
                <div class="field">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" placeholder="Keterangan"
                        class="form-control"value="{{ $komputer->keterangan }}">
                </div>
                <br>
                <button type="submit" class="ui blue animated button" tabindex="0">
                    <div class="visible content">Update</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </button>
            </form>
        </div>
    </div>
@endsection
