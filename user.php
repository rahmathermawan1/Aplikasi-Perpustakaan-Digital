
<h1 class="mt-4">User</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
        
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>id user</th>
                    <th>Username</th>
                    <th>email </th>
                    <th>nama_lengkap</th>
                    <th>no_telepon</th>
                    <th>alamat </th>
                    <th>level </th>
                </tr>
                <?php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM user");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['no_telepon']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['level']; ?></td>
                            <td>
                            
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