@extends('layout.headerAdmin')
@section('content')
    @php
        session_start();
        $_SESSION['kelas'] = true;
    @endphp
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
                    @if (count($kalenderKelas) == 0)
                        <center>
                            <br>
                            <p>Kalender belum ditambahkan!</p>
                            <br>
                            <a href="{{ route('Kalender.create') }}">
                                <div class="ui blue animated button" tabindex="0">
                                    <div class="visible content">Tambah Kalender</div>
                                    <div class="hidden content">
                                        <i class="plus icon"></i>
                                    </div>
                                </div>
                            </a>
                        </center>
                    @else
                        @foreach ($kalenderKelas as $kd)
                            @php
                                $calId = $kd->kalender_id;
                            @endphp
                            <script type='text/javascript'>
                                var calId = '<?= $calId ?>'

                                $(document).ready(function() {

                                    $('#calendar').fullCalendar({
                                        plugins: ['dayGrid', 'list', 'googleCalendar'],
                                        views: {
                                            listWeek: {
                                                buttonText: 'Week'
                                            },
                                            month: {
                                                buttonText: 'Month'
                                            },
                                        },
                                        header: {
                                            left: 'prev, next, today',
                                            center: 'title',
                                            right: 'resourceTimeGridDay, dayGridMonth, month, listWeek'
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

                            <br>
                            <a href="{{ route('Kalender.edit', $kd->id) }}">
                                <div class="ui blue animated button" tabindex="0">
                                    <div class="visible content">Edit</div>
                                    <div class="hidden content">
                                        <i class="pencil alternate icon"></i>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="column">
                <div class="ui raised segment">
                    <div class="ui accordion">
                        <div class="title">
                            <h3>View Ruangan <i class="dropdown icon"></i></h3>
                        </div>
                        @foreach ($ruangKelas as $rk)
                            <div class="content">
                                <div class="iframe-container">
                                    @php
                                        echo $rk->view;
                                    @endphp
                                </div>
                                <br>
                                <a href="{{ route('LabDetail.edit', $rk->id) }}">
                                    <div class="ui blue animated button" tabindex="0">
                                        <div class="visible content">Edit</div>
                                        <div class="hidden content">
                                            <i class="pencil alternate icon"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
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

        $(function() {
            $('.ui.accordion').accordion();
        });
    </script>
@endsection
