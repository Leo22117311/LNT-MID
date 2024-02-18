<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ChipiChapa</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
        <div class="left">
            <a href=""><img src="https://media.tenor.com/9ZaIM50ELMAAAAAi/caramelldansen-caramelldansen-cat.gif" alt=""></a>
            <p>PT ChipiChapa</p>
        </div>
        <div class="right">
            <a href="/home">Home</a>
            <a href="#">Employee List</a>
            <a href="/add-karyawan" class="add">Add Employee</a>
        </div>
    </nav>

    <div class="kotak">
        <div class="karyawan">
            @forelse ($karyawans as $k)
            <div class="help">
                <img src="{{ asset('/storage/'.'/'.$k->Photo) }}" alt="{{ $k->Photo }}">
                <h2>Name: {{ $k->Name }}</h2>
                <h2>Age: {{ $k->Age }}</h2>
                <h2>Address: {{ $k->Address }}</h2>
                <h2>Phone Number: {{ $k->Phone }}</h2>
                <div class="buton">
                    <a href="/edit/{{ $k->id }}" class = "btn">Edit</a>
                    <form action="/delete/{{ $k->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btnn" type="submit">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @empty
                <p>Data is empty.</p>
            @endforelse
        </div>
    </div>
</body>
</html>