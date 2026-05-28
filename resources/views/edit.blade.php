<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container border p-3 mt-5">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <h1 class="m-0 text-center flex-grow-1">CRUD Operation Project in Laravel</h1>
    </div>
  </nav>

  <div class="card p-4 shadow-sm">
      <form action="{{ route('update', base64_encode($data->id)) }}" method="post">
          @csrf
          <h1 class="text-center mb-4">Edit User Details</h1>
          <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" name="name" value={{ $data->name}} class="form-control" id="name">
              @error('name')
                  <div id="" class="form-text text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail" class="form-label">Email</label>
              <input type="email" name="email" value={{ $data->email }} class="form-control" id="email">
              @error('email')
                  <div id="" class="form-text text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputMobile" class="form-label">Mobile</label>
              <input type="text" name="mobile" value={{ $data->mobile}} class="form-control" id="mobile">
              @error('mobile')
                  <div id="" class="form-text text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="d-flex justify-content-between mt-4">
            <!-- Left Button -->
            <a class="btn btn-secondary" href="{{ route('index') }}">Go Back</a>
            <!-- Right Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
  </div>
</div>