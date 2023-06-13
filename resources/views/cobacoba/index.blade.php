<head>
    <title>Create User</title>
</head>

<body>
    <h1>Create User</h1>

    <form method="POST" action="{{ route('coba') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="nama" id="name" required>
        </div>

        <button type="submit">Create</button>
    </form>


    <form action="{{ route('user.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" class="form-control" name="file">
        <button type="submit">import</button>
    </form>

    {{--  <a href="{{ route('index_export') }}">
        <button class="btn btn-success">Excel</button>
    </a>  --}}
    {{--  <div>
        {--  Button trigger modal  --}}
        {{--  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            imporex
        </button>  --}}
    {{--  </div>  --}}
    {{--  Modal  --}}
    {{--  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    {{--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  --}}
                {{--  </div>  --}}
                    {{--  <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="file" required>
                        </div>
                    </div>  --}}
                    {{--  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>  --}}
                {{--  </div>
        </div>
    </div>  --}}

    {{--  <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="importex">
        <button type="submit">Import</button>
    </form>  --}}
</body>
