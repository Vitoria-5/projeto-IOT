<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    @livewireStyles
</head>

<body>
    
<div class="d-flex" style="min-height: 100vh">
  <nav class="d-flex flex-column flex-shrink-0 p-3 bg-body border-end" style="width: 260px" aria-label="Main navigation">
    <a href="#" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none fs-5 fw-semibold">
      <i class="bi bi-hexagon-half me-2"></i>Projetinho
    </a>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('ambiente.index')}}"><i class="bi bi-cart me-2"></i>Ambiente</a></li>
      <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-box-seam me-2"></i>Registro</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('sensor.index')}}"><i class="bi bi-people me-2"></i>Sensor</a></li>
    </ul>
  </nav>
  <main class="flex-grow-1 p-4">{{ $slot }}</main>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    @livewireScripts

</body>

</html>
