@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <div class="ui raised segment">
            <form class="ui form" action="{{ route('Kalender.update', $kalender->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="disabled field">
                    <label>Ruangan</label>
                    <input type="text" name="ruangan" placeholder="Ruangan" class="form-control"
                        value="{{ $kalender->ruangan }}">
                </div>
                <div class="field">
                    <label>Kalender ID</label>
                    <input type="text" name="kalender_id" placeholder="Kalender ID" class="form-control"
                        value="{{ $kalender->kalender_id }}">
                </div>
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
