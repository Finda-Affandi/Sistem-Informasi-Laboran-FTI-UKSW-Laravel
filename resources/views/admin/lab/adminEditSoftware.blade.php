@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form class="ui form" action="{{ route('Software.update', $software->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="disabled field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control"
                        value="{{ $software->ruangan }}">
                </div>
                <div class="field">
                    <label>Nama Software</label>
                    <input type="text" name="software" placeholder="Nama Software" class="form-control"
                        value="{{ $software->software }}">
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
