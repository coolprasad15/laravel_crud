<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container border p-3 mt-5">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <h1 class="m-0 text-center flex-grow-1">CRUD Operation Project in Laravel</h1>
    </div>
  </nav>

    <div class="card p-4 shadow-sm">
    
    <h3 class="text-center mb-4">User Details Page</h3>

    <div class="mb-3">
        <strong>Name:</strong>
        <p class="mb-0">{{ $DatA->name }}</p>
    </div>

    <div class="mb-3">
        <strong>Email:</strong>
        <p class="mb-0">{{ $DatA->email }}</p>
    </div>

    <div class="mb-3">
        <strong>Mobile:</strong>
        <p class="mb-0">{{ $DatA->mobile }}</p>
    </div>

    <div class="text-end mt-4">
        <a class="btn btn-primary" href="{{ route('index') }}">Go Back</a>
    </div>

</div>
</div>
