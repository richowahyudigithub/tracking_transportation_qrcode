<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- This link would go in your header tag -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="container">

  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center">
      <br>
      <p><img src="logo_dishub.png" alt="logo dinas perhubungan"></p>

      <!-- <h2><i class="far fa-thumbs-up" style="color:red"></i> -->
     
 <h2>Terima kasih atas dukungan dan kerja sama Anda dalam mewujudkan transportasi umum yang lebih baik di Kabupaten Banyuwangi. <br>Dinas Perhubungan Kabupaten Banyuwangi akan selalu meningkatkan pelayanan di sektor transportasi untuk warga Kabupaten Banyuwangi</h2>
     

        <br>
      </p>

      <a href="/" class="btn btn-primary btn-round">SCAN ULANG</a>
      <a href="javascript:history.back()" class="btn btn-success btn-round">KEMBALI INPUT PENUMPANG</a>
  <br>
      <?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=11) && ($a<=15)){
        echo " , Selamat  Pagi !! ";
    }elseif(($a>15) && ($a<=18)){
        echo ", Selamat Siang !!";
    }else{
        echo ", <b> Selamat Malam </b>";
    }
 ?>

    </div>
  </div>
</div>
<script>
  document.write('<a href="' + document.referrer + '"></a>');
</script>