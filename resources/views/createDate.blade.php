<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geprek Maniak</title>
    <style>
        .but {
            padding: 20px 35px;
            background-color: #007bff;
            display: inline-block;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 20px;
            margin-top: 20px;
        }
        .but2 {
            padding: 20px 35px;
            background-color: #fd3b19;
            display: inline-block;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <form action="{{ route('createDate') }}" method="POST">
      @csrf

      <label for="Tanggal" style="font-size: 30px">Tanggal</label><br>
      <input id="Tanggal" type="text" name="Tanggal" value="{{ old("Tanggal") }}"><br>
      @error('Tanggal')
          <p style="color: red;">{{ $message }}</p>
      @enderror

      <label for="Bulan" style="font-size: 30px">Bulan</label><br>
      <input id="Bulan" type="number" name="Bulan" value="{{ old("Bulan") }}"><br>
      @error('Bulan')
          <p style="color: red;">{{ $message }}</p>
      @enderror

      <label for="Jam" style="font-size: 30px">Jam</label><br>
      <input id="Jam" type="number" name="Jam" value="{{ old("Jam") }}"><br>
      @error('Jam')
          <p style="color: red;">{{ $message }}</p>
      @enderror

      <button type="submit" class="but">Submit</button>
    </form>
    <a href="/" class="but2">Home</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
