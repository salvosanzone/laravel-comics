<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-9/css/all.min.css" integrity="sha512-X8jR8oYnEmXhGB43u+qxt0mQezR37NUxHhtukvD4bzeWDthOz0mvNOYOzPCMZ7VB0mG607nrkd+kakmSmbffyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  @include('partials.header')

  {{-- 

    .1 questa pagina ad esclusione, in questo caso, del jumbotron e information, deve essere presente in tutte le pagine 

    .2 in questo punto carico i contenuti diversi delle varie pagine

  --}}

  @yield('content')
  
  @include('partials.footer')

  

</body>
</html>