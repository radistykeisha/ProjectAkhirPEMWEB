<?php 
include 'koneksi.php'; 
$ambil_kategori = mysqli_query($conn, "SELECT * FROM kategori");
?>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        Kategori Batik
    </a>
    <ul class="dropdown-menu">
        <?php while($row = mysqli_fetch_assoc($ambil_kategori)) { ?>
            <li>
                <a class="dropdown-item" href="katalog.php?id=<?php echo $row['id_kategori']; ?>">
                    <?php echo htmlspecialchars($row['nama_kategori']); ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</li>