@extends('layout/headerClient')
@section('content')
    <div class="ui container">
        <link rel="stylesheet" href="{{ asset('css/client.ruangLabDetail.css') }}">
        <div class="ui stackable three column grid">
            <div class="six wide column">
                <div class="ui raised segment">
                    <h3>{{ $id }}</h3>
                    @foreach ($ruangKelas as $rk)
                        <p>Kapasitas : {{ $rk->kapasitas }}</p>
                        <table class="ui selectable unstackable table">
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
                    @endforeach
                </div>
            </div>
            <div class="sixteen wide column">
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
@endsection
