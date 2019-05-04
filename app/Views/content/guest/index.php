<div class="container">
    <center>
        <div class="titlediv">
            <img class="title img-logo" src="/images/logo-track.png"/>
            <h1 class="title text-title">Leaflet JS Tracking</h1>
        </div>
        <form method="post" action="/guest/search">
            <input type="text" name="resi" class="form-input">
            <button type="submit" name="search"><i class="ti-search"></i></button>
            <br><small>silahkan input resi barang</small>
        </form>
        <?php if($searching == TRUE && $validate > 0){ ?>
            <span style="float:left">Data Track | Resi : <?= $resi ?> </span>
            <div id="mapid"></div>
            <input type="hidden" id="latA" name="latA" value="<?=$barang[0]['lat_asal']?>">
            <input type="hidden" id="lngA" name="lngA" value="<?=$barang[0]['lng_asal']?>">
            <input type="hidden" id="latB" name="latB" value="<?=$barang[0]['lat_tujuan']?>">
            <input type="hidden" id="lngB" name="lngB" value="<?=$barang[0]['lng_tujuan']?>">
            <input type="hidden" id="latC" name="latC" value="<?=$lokasi[0]['latitude']?>">
            <input type="hidden" id="lngC" name="lngC" value="<?=$lokasi[0]['longitude']?>">
        <?php }else if($searching == TRUE && $validate < 1){ ?>
            <h6>Tidak menemukan data resi, silahkan cek kembali<h6>
            <h6>no resi : <?= $resi ?> </h6>
        <?php }?>
    </center>
</div>