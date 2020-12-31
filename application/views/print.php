

<!DOCTYPE html>
<html>
<head>
<style>
body {
  height: 842px;
  width: 595px;
  /* to centre page on screen*/
  margin-left: auto;
  margin-right: auto;
}
@page {
  /* dimensions for the whole page */
  size: A5;

  margin: 0;
}

html {
  /* off-white, so body edge is visible in browser */
  background: #eee;
}

body {
  /* A5 dimensions */
  height: 148mm;
  width: 210mm;

  margin: 0;
}
table{
  height: 100%;
  width: 100%;
}


</style>
</head>
<body>
  <table style="text-align: center">
  <tr>
    <th colspan="12">Exe Komputer</th>
  </tr>
  <tr>
    <td colspan="12" style="text-align: center"><h3> <?=$rc->no_nota ?> </h3></td>
  </tr>
  <tr>
    <td colspan="3">TGL</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3"></td>
  </tr>

 <tr>
    <td colspan="12" height="0"><hr></td>
  </tr>
    <tr style="border-bottom: 1px solid #000;">
    <td colspan="3">TGL ORDER</td>
    <td colspan="2">KAT</td>
    <td colspan="2">TIPE</td>
    <td colspan="3">MASLAH</td>
  </tr>

  <tr>
    <td colspan="3"><?= $rc->tgl_order ?></td>
    <td colspan="2">
      <?php
        if ($rc->status == 0){
          $st = "Sedang Dicek";
        } elseif($rc->status ==1){
          $st = "Belum Dikonfirmasi";
        }elseif($rc->status==2)
        {
          $st = "Sedang di Kerjakan";
        }elseif($rc->status ==3){
          $st = "ready";
        }elseif($rc->status == 4){
          $st = "Batal";
        }
        echo $st;

         ?>

    </td>
    <td colspan="2"><?= $rc->tipe ?></td>
    <!-- <td colspan="2">KET</td> -->
    <td colspan="3"><?= $rc->kerusakan ?></td>
  </tr>
  <tr>
    <td colspan="12"><hr></td>


  </tr>
  <tr>
    <td colspan="3"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="4">
      <?php
      if($rc->status == 3){
      echo harga($rc->harga);
      }else{
      echo "";
      }
      ?>

    </td>
  </tr>
</table>


</body>
</html>
