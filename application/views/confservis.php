<div class="table-responsive">
  <table class="table table-bordered table-hover">

    <tr>
      <td>No Nota</td>
      <td><?= $rc->no_nota ?></td>
    </tr>
    <tr>
      <tr>
        <td>Tipe Barang</td>
        <td><?= $rc->tipe ?></td>
      </tr>
      <tr>
        <td>Tanggal Servis</td>
        <td><?= tanggal($rc->tgl_order) ?></td>
      </tr>
      <tr>
        <td>Kategori Barang</td>
        <td>
          <?php
          foreach ($kategori as $kat){
            if($kat->id == $rc->kategori ){
              echo $kat->kategori;
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>No Hp</td>
        <td><?= $rc->kontak ?></td>
      </tr>
      <tr>
        <td>Kelengkapan</td>
        <td><?= $rc->kelengkapan ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
          <?php
          if ($rc->status == 0){
            echo "Sedang Dicek";
          } elseif($rc->status ==1){
            echo "Belum Dikonfirmasi";
            echo "<br><small>Kami membutuhkan konfirmasi anda untuk melanjutkan servis</small>";
          }elseif($rc->status==2)
          {
            echo "Sedang di Kerjakan";
          }elseif($rc->status ==3){
            echo "ready";
          }elseif($rc->status == 4){
            echo "Batal";
          }
          ?>


        </td>
      </tr>
      <tr>
        <td>Kerusakan</td>
        <td><?= $rc->kerusakan ?></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><?= harga($rc->harga) ?></td>
      </tr>


    </table>


      <?php

      if($rc->status == '1')
      {
        ?>

        <form action="<?= base_url('welcome/konfirmasi') ?>" method="post">
          <div class="form-group">
            <label>Mohon masukan nama untuk konfirmasi Servis </label>
            <input class="form-control" required placeholder="Nama harus sesuai dengan nota anda" name="nama">
          </div>
          <div class="form-group">
            <label>Masukan kembali No Nota Anda </label>
            <input class="form-control" required placeholder="No Nota" name="no_nota">
          </div>


        <div class="modal-footer">
          <button  type="submit" class="btn " name="konfirmtrue" value="1">Konfirmasi</button>
          <button  type="submit" class="btn " name="konfirmfalse" value="0">Tolak</button>

        </div>

        <?php } ?>
      </form>
