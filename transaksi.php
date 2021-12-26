 <?php include 'template.php'?>
 <div class="container">

        <h3 class="mt-4 pt-2">Daftar Transaksi</h3>
        <table class="mt-3 table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal Pembelian</th>
                    <th>Total sebelum diskon</th>
                    <th>Diskon</th>
                    <th>Total Harga</th>
                </tr>
                </thead>
                <tbody>
                        
                 <?php
                        $i=1;
                        $data = mysqli_query($koneksi,"SELECT * FROM transaksi");
                        while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $i;?></td>
                            <td><?php echo $d['uidtransaksi']?></td>
                            <td><?php echo $d['namapembeli']?></td>
                            <td><?php echo $d['tanggalpembelian']?></td>
                            <td><?php echo $d['totalsebelumdiskon']?></td>
                            <td><?php echo $d['diskon']?></td>
                            <td><?php echo $d['totalharga']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>