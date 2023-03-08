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
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout/headerClient.css') }}">

</head>

<body>
    <div class="ui three column grid" id="navbarContainer">
        <div class="ui two wide column">
        </div>
        <div class="ui twelve wide column">
            <div class="ui secondary nine item menu" id="navMenu">

                @if (request()->is('jadwalRuang'))
                    <a class="active item" href="/listRuang"><b> List Ruangan </b></a>
                @else
                    <a class="item" href="/listRuang"><b> List Ruangan </b></a>
                @endif

                @if (request()->is('ruangLab'))
                    <a class="active item" href="/ruangLab"><b>Ruang Lab</b></a>
                @else
                    <a class="item" href="/ruangLab"><b> Ruang Lab </b></a>
                @endif

                @if (request()->is('ruangKelas'))
                    <a class="active item" href="/ruangKelas"><b> Ruang Kelas </b></a>
                @else
                    <a class="item" href="/ruangKelas"><b> Ruang Kelas </b></a>
                @endif

                @if (request()->is('ruangDosen'))
                    <a class="active item" href="/ruangDosen"><b> Ruang Dosen </b></a>
                @else
                    <a class="item" href="/ruangDosen"><b> Ruang Dosen </b></a>
                @endif

                @if (request()->is('gedungFti'))
                    <a class="active item" href="/gedungFti"><b> Gedung FTI </b></a>
                @else
                    <a class="item" href="/gedungFti"><b> Gedung FTI </b></a>
                @endif

                @if (request()->is('laporan'))
                    <a class="active item" href="/laporan"><b> Lapor </b></a>
                @else
                    <a class="item" href="/laporan"><b> Lapor </b></a>
                @endif

                @if (request()->is('laporan'))
                    <a class="active item" href="/laporan"><b> Lost & Found </b></a>
                @else
                    <a class="item" href="/laporan"><b> Lost & Found </b></a>
                @endif

            </div>
        </div>
    </div>

    @yield('content')

</body>

</html>
