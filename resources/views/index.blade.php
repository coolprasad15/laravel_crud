<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container border p-3 mt-5">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <!-- Empty div (left side for spacing) -->
      <div></div>

      <!-- Center Title -->
      <h1 class="m-0 text-center flex-grow-1">CRUD Operation Project in Laravel</h1>

      <!-- Right Button -->
      <div>
        <a class="btn btn-primary" href="{{ route('add') }}">Add User</a>
      </div>

    </div>
  </nav>

  <div class="p-5">
    <table class="table table-bordered table-striped">
      <thead class="bg-dark text-white">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      {{-- <tbody>
        @if($data->isNotEmpty( ))
        @php
          $count = 1;
        @endphp
        @foreach ($data as $da)
            <tr>
              <th scope="row">{{ $count }}</th>
              <td>{{ $da->name ?? ''}}</td>
              <td>{{ $da->email ?? '' }}</td>
              <td>{{ $da->mobile ?? '' }}</td>
              <td class="d-flex gap-2">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('view', base64_encode($da->id)) }}">View</a>
                <a class="btn btn-outline-success btn-sm" href="{{ route('edit', base64_encode($da->id)) }}">Edit</a>
                <a class="btn btn-outline-danger btn-sm" href="{{ route('delete', base64_encode($da->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
              </td>
            </tr>
            @php
                $count++;
            @endphp
        @endforeach
        @endif
      </tbody> --}}
      <tbody>
        @forelse ($data as $da)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $da->name ?? '' }}</td>
                <td>{{ $da->email ?? '' }}</td>
                <td>{{ $da->mobile ?? '' }}</td>
                <td class="d-flex gap-2">
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('view', base64_encode($da->id)) }}">View</a>
                    <a class="btn btn-outline-success btn-sm" href="{{ route('edit', base64_encode($da->id)) }}">Edit</a>
                    <a class="btn btn-outline-danger btn-sm" href="{{ route('delete', base64_encode($da->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-danger">
                    No records found
                </td>
            </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

<script>
  function show(message, message_type){
    Swal.fire({
        title: message,
        // text: message,
        icon: message_type,
    });
  }
</script>

@if(Session::has('success'))
  <script>
    show('{{ Session::get('success') }}', 'success');
  </script>
@endif