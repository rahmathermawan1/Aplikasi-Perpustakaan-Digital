
<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <?php
            if($_SESSION['user']['level'] !='Admin'){
        ?>
            <?php
                }else{
            ?>
            <a href="?page=kategori_tambah" class="btn btn-primary">+ Tambah Kategori</a>
            <?php
                }
            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['nama_kategori']; ?></td>
                            <td>
                            <?php
                                if($_SESSION['user']['level'] !='Admin'){
                             ?>
                                <?php
                                    }else{
                                ?>
                                <a href="?page=kategoribuku_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">Ubah</a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=kategoribuku_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                                <?php
                                    }
                                 ?>
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