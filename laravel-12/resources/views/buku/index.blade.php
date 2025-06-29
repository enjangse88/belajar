<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .action-buttons {
            white-space: nowrap;
        }
        .action-buttons a {
            color:#000;
            text-decoration:none;
        }
        .table-responsive {
            margin-top: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
         .search-form-right {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }

    .search-form-right form input[type="text"] {
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
    }

    .search-form-right form button {
        padding: 8px 16px;
        font-size: 14px;
        background-color:#28a745;
        color: white;
        border: none;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }

    .search-form-right form button:hover {
        background-color:#218838;
    }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Buku</h1>
        <div class="search-form-right">
        <form action="{{ route('buku.search') }}" method="GET">
          <input type="text" name="search" value="{{ request('search')  }}"placeholder="Search Products">
          <button type="submit">Search</button>
        </form>
        </div>
        @if (session('success'))
          <div class="alert alert-success alert-dismissable fade-show" role="alert">
            {{ session('success') }}
             <button type="button" class="btn-close" data-bs-dimiss='aler' ariab-labels="Close"></button>    
          </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $item)
                   <li>{{ $item }}</li>
                @endforeach
            <ul>
    </div>
        @endif

        @if(request('search'))
        <p>Menampilkan hasil untuk: <strong>{{ request('search') }}</strong></p>
        @endif

        <!-- Tabel Data Buku -->
        <div class="table-responsive">
          
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $item) 
                    
                    <!-- Data Buku 1 -->
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td class="action-buttons">
                            <button class="btn btn-sm btn-warning">
                                <a href="{{ route('buku.edit',['id'=>$item->id]) }}"" > 
                                <i class="fas fa-edit"></i> Edit
                                </a>
                            </button>
                            <form action="{{ route('buku.delete',['id'=>$item->id]) }}" method="post" class="d-inline">
                               @csrf
                               @method('delete')
                               <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                            </form>

                            
                        </td>
                    </tr>

                    <!-- Data Buku 2 -->
                    
                     @endforeach 
                    

                </tbody>
            </table>
        </div>

        <!-- Form Tambah Data (opsional) -->
        <div class="mt-4 p-3 bg-light rounded">
            <h3>{{ isset($bukuDetail)?'Edit Buku':'Tambah Buku'}} </h3>
            
            <form action="{{ isset($bukuDetail)?route('buku.update',['id'=>$bukuDetail->id]):route('buku.post') }}" method="post">
              @csrf 
              @if (isset($bukuDetail))
                  @method('put')
              @endif
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul',$bukuDetail->judul??'') }}" required>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ old('pengarang',$bukuDetail->pengarang??'') }}" required>
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" min="1900" max="2099" value="{{ old('tahun_terbit',$bukuDetail->tahun_terbit??'') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>