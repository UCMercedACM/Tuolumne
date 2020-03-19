<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Cars</title>

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css" />

</head>

<body>

    <div class="mw6 center pa3 sans-serif">

        <h1 class="mb4">Workshops</h1>



        @foreach($workshops as $workshop)

        <div class="pa2 mb3 striped--near-white">

            <header class="b mb2">{{ $workshop->workshop_name }}</header>

            <div class="pl2">

                <p class="mb2">description: {{ $workshop->description }}</p>

                <p class="mb2">location: {{ $workshop->location }}</p>

                <p class="mb2">time: {{ $workshop->time }}</p>

                <p class="mb2">date: {{ $workshop->date }}</p>

            </div>

        </div>

        @endforeach

    </div>

</body>

</html>
