<?php 
include 'koneksi.php'; 

// Ambil data untuk ditampilkan di tabel
$query = mysqli_query($conn, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Kelola Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Kelola Kategori Batik</h2>
        
        <div class="card mb-5">
            <div class="card-header">Tambah Kategori Baru</div>
            <div class="card-body">
                <form action="proses_tambah_kategori.php" method="POST">
                    <div class="mb-3">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" placeholder="Contoh: Batik Tulis" required>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Daftar Kategori</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $row['id_kategori']; ?></td>
                            <td><?php echo $row['nama_kategori']; ?></td>
                            <td><?php echo $row['deskripsi']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
