<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/addkaryawan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
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
            <a href="/list">Employee List</a>
            <a href="/add-karyawan" class="add">Add Employee</a>
        </div>
    </nav>
    <div class="box">
        <h1>Edit Employee</h1>
        <form action="/update/{{ $karyawan->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch');
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="Name" value="{{ $karyawan->Name }}">
                @error('Name')
                    <p style="color: red;">{{ 'Name field is required. Must be 5-20 characters.' }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Age" class="form-label">Age</label>
                <input type="number" class="form-control" id="Age" aria-describedby="emailHelp" name="Age" value="{{ $karyawan->Age }}">
                @error('Age')
                    <p style="color: red;">{{ 'Age field is required. Must be older than 20.' }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" id="Address" aria-describedby="emailHelp" name="Address" value="{{ $karyawan-> Address }}">
                @error('Address')
                    <p style="color: red;">{{ 'Address field is required. Must be 10-40 characters.' }}</p>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="Phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="Phone" aria-describedby="emailHelp" name="Phone" value="{{ $karyawan->Phone }}">
                @error('Phone')
                    <p style="color: red;">{{ 'Phone number field is required. Must be 9-12 characters. Starts with 08.' }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="Photo" aria-describedby="emailHelp" name="Photo" value="{{ old('Photo')}}">
                @error('Photo')
                    <p style="color: red;">{{ 'Photo field is required.' }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>