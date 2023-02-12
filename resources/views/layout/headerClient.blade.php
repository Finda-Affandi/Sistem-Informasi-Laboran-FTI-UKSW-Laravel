<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"
        integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
        integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css" rel="stylesheet"
        media="print">
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.min.js'></script>
    <link rel="stylesheet" href="{{ asset('css/kalender.css') }}">


    @if (request()->is('listRuang'))
        <link rel="stylesheet" href="{{ asset('css/client.listRuang.css') }}">
    @elseif (request()->is('ruangLab'))
        <link rel="stylesheet" href="{{ asset('css/client.ruangLab.css') }}">
    @elseif (request()->is('ruangKelas'))
        <link rel="stylesheet" href="{{ asset('css/client.ruangKelas.css') }}">
    @elseif (request()->is('ruangDosen'))
        <link rel="stylesheet" href="{{ asset('css/client.ruangDosen.css') }}">
    @elseif (request()->is('gedungFti'))
        <link rel="stylesheet" href="{{ asset('css/client.gedungFti.css') }}">
    @endif

</head>

<body>
    <div class="ui secondary menu">

        @if (request()->is('jadwalRuang'))
            <a class="active item" href="/listRuang"> List Ruangan </a>
        @else
            <a class="item" href="/listRuang"> List Ruangan </a>
        @endif

        @if (request()->is('ruangLab'))
            <a class="active item" href="/ruangLab"> Ruang Lab </a>
        @else
            <a class="item" href="/ruangLab"> Ruang Lab </a>
        @endif

        @if (request()->is('ruangKelas'))
            <a class="active item" href="/ruangKelas"> Ruang Kelas </a>
        @else
            <a class="item" href="/ruangKelas"> Ruang Kelas </a>
        @endif

        @if (request()->is('ruangDosen'))
            <a class="active item" href="/ruangDosen"> Ruang Dosen </a>
        @else
            <a class="item" href="/ruangDosen"> Ruang Dosen </a>
        @endif

        @if (request()->is('gedungFti'))
            <a class="active item" href="/gedungFti"> Gedung FTI </a>
        @else
            <a class="item" href="/gedungFti"> Gedung FTI </a>
        @endif

        <div class="right menu">
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Search..." />
                    <i class="search link icon"></i>
                </div>
            </div>
            <a class="ui item"> Logout </a>
        </div>
    </div>

    <div class="ui container">
        @yield('content')
    </div>

</body>

</html>
