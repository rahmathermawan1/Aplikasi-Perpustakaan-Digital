
<h1 class="mt-4">Ulasan buku </h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Ulasan</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Ulasan</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku LEFT JOIN user on user.id_user = ulasanbuku.id_user LEFT JOIN buku on buku.id_buku = ulasanbuku.id_buku");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['nama_lengkap']; ?></td>   
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['ulasanbuku']; ?></td>
                        <td><?php echo $data['rating']; ?></td>
                        <td>
                            <a href="?page=ulasanbuku_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">Ubah</a>
                            <a onclick="return confirm('Apakah anda yakin menghaous data ini?');" href="?page=ulasanbuku_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>
    </div>
</div>