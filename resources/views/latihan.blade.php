<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan blade</title>
</head>

<body>
    @if ($datasiswa[0]['kelas'] == 12)
        <h1>Fitriyan sebentar lagi lulus</h1>
    @else
        <h1>Fitriyan masih lama lulus</h1>
    @endif

    @foreach ($datasiswa as $item)
        <h2>Nama siswa : {{$item['nama']}} , Kelas : {{$item['kelas']}}</h2>
    @endforeach
</body>

</html>
