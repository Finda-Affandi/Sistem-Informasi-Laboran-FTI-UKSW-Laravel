@extends('layout.headerAdmin')
@section('content')
    <div class="ui container">
        <link rel="stylesheet" href="{{ asset('css/admin/admin.ruangKelasDetail.css') }}">
        <div class="ui stackable one column grid">
            <div class="sixteen wide column">
                <div class="ui raised segment">
                    <h3>{{ $id }}</h3>
                    @foreach ($ruangKelas as $rk)
                        <p><b>{{ $rk->nama_ruangan }}</b></p>
                        <p>Kapasitas : {{ $rk->kapasitas }}</p>
                    @endforeach
                    @if (count($kelengkapan) == 0)
                        <center>
                            <br>
                            <p>Kelengkapan belum ditambahkan!</p>
                            <br>
                            <a href="{{ route('Kelengkapan.create') }}">
                                <div class="ui blue animated button" tabindex="0">
                                    <div class="visible content">Tambah Kelengkapan</div>
                                    <div class="hidden content">
                                        <i class="plus icon"></i>
                                    </div>
                                </div>
                            </a>
                        </center>
                    @else
                        <table class="ui selectable unstackable table">
                            <thead>
                                <tr>
                                    <th>Kelengkapan</th>
                                    <th>Jumlah</th>
                                    <th>Kondisi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelengkapan as $k)
                                    <tr>
                                        <td>{{ $k->kelengkapan }}</td>
                                        <td>{{ $k->jumlah }}</td>
                                        <td>{{ $k->kondisi }}</td>
                                        <td>
                                            <center>
                                                <div class="ui dropdown">
                                                    <i class="ellipsis vertical icon"></i>
                                                    <div class="menu">
                                                        <a href="{{ route('Kelengkapan.edit', $k->id) }}" class="item">
                                                            Edit
                                                        </a>
                                                        <a href="" class="item">
                                                            <form action="{{ route('Kelengkapan.destroy', $k->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" id="delete">Delete</button>
                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('Kelengkapan.create') }}">
                            <div class="ui blue animated button" tabindex="0">
                                <div class="visible content">Tambah</div>
                                <div class="hidden content">
                                    <i class="plus icon"></i>
                                </div>
                            </div>
                        </a>
                    @endif
                </div>
            </div>
            <div class="column">
                <div class="ui raised segment">
                    @foreach ($kalenderKelas as $kd)
                        @php
                            $calId = $kd->kalender_id;
                        @endphp
                        <script type='text/javascript'>
                            var calId = '<?= $calId ?>'

                            $(document).ready(function() {

                                $('#calendar').fullCalendar({
                                    plugins: ['dayGrid', 'list', 'googleCalendar'],
                                    header: {
                                        left: 'prev,next, today',
                                        center: 'title',
                                        right: 'dayGridMonth, month, listYear'
                                    },
                                    googleCalendarApiKey: 'AIzaSyDSQvD1WnAhaqWM-CnHkfsmU_D5dvqboKs',
                                    events: {
                                        googleCalendarId: calId
                                    },
                                    timeFormat: 'H(:mm)'
                                });
                            });
                        </script>
                        <div id='calendar'></div>
                    @endforeach
                </div>
            </div>
            <div class="column">
                <div class="ui raised segment">
                    <h3>View Ruangan 360°</h3>
                    <div class="iframe-container">
                        @foreach ($ruangKelas as $rk)
                            @php
                                echo $rk->view;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('.ui.dropdown')
                .dropdown();
        });
    </script>
@endsection
