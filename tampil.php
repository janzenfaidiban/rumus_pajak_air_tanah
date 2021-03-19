<!-- start .col  -->
<div class="col-6 py-3">

    <div class="card">
        <div class="card-header">
            <h1>Tampilkan Data Usaha</h1>
        </div>
        <div class="card-body">
            <ul class="list-group">


                <li class="list-group-item">

                    <?php
                    // data jenis usaha
                    if (isset($_GET['jenisUsaha'])) {
                        $jenisUsaha = $_GET['jenisUsaha']; // Ambil id jenis usaha

                        if (isset($jenisUsaha) && $jenisUsaha == 1) {
                            $judul_jenisUsaha = 'Non Niaga';
                            $nilai1 = 1;
                            $nilai2 = 1.1;
                            $nilai3 = 1.2;
                            $nilai4 = 1.3;
                            $nilai5 = 1.4;
                        } elseif (isset($jenisUsaha) && $jenisUsaha == 2) {
                            $judul_jenisUsaha = 'Niaga Kecil';
                            $nilai1 = 2;
                            $nilai2 = 2.2;
                            $nilai3 = 2.4;
                            $nilai4 = 2.6;
                            $nilai5 = 2.8;
                        } elseif (isset($jenisUsaha) && $jenisUsaha == 3) {
                            $judul_jenisUsaha = 'Industri Kecil';
                            $nilai1 = 3;
                            $nilai2 = 3.3;
                            $nilai3 = 3.6;
                            $nilai4 = 3.9;
                            $nilai5 = 4.5;
                        } elseif (isset($jenisUsaha) && $jenisUsaha == 4) {
                            $judul_jenisUsaha = 'Niaga Besar';
                            $nilai1 = 4;
                            $nilai2 = 4.4;
                            $nilai3 = 4.8;
                            $nilai4 = 5.2;
                            $nilai5 = 5.6;
                        } elseif (isset($jenisUsaha) && $jenisUsaha == 5) {
                            $judul_jenisUsaha = 'Industri Besar';
                            $nilai1 = 5;
                            $nilai2 = 5.5;
                            $nilai3 = 6.0;
                            $nilai4 = 6.5;
                            $nilai5 = 7.0;
                        }
                    } else {
                        $_error_jenisUsaha = '<small class="alert text-danger p-0">Komponen Kompensasi belum dipilih</small>';
                    }

                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Jenis Usaha (Komponen Kompensasi)</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="komponenSDA" value="<?php if (!empty($judul_jenisUsaha)) {
                                                                                echo $judul_jenisUsaha;
                                                                            } ?>" placeholder="Jenis usaha" class="form-control">

                            <?php if (!empty($_error_jenisUsaha)) {
                                echo $_error_jenisUsaha;
                            } ?>
                        </div>
                    </div>



                </li>


                <li class="list-group-item">

                    <?php
                    // data komponen sumber daya alam (SDA)
                    if (isset($_GET['komponenSDA'])) {
                        $komponenSDA = $_GET['komponenSDA']; // Ambil id komponen sumber daya alam (sda)

                        if (isset($komponenSDA) && $komponenSDA == 1) {
                            $judul_komponenSDA = 'Air bawah tanah, kualitas baik, ada sumber air alternatif';
                            $bobot_komponenSDA = 9;
                        } elseif (isset($komponenSDA) && $komponenSDA == 2) {
                            $judul_komponenSDA = 'Air bawah tanah, kualitas baik, tidak ada sumber air alternatif';
                            $bobot_komponenSDA = 4;
                        } elseif (isset($komponenSDA) && $komponenSDA == 3) {
                            $judul_komponenSDA = 'Air bawah tanah, kualitas jelek';
                            $bobot_komponenSDA = 1;
                            echo "";
                        }

                        // echo "Bobot Jenis Usaha = " . $komponenSDABobot;
                    } else {
                        $_error_bobot_komponenSDA = '<small class="alert text-danger p-0">Komponen Sumber Daya Alam belum dipilih</small>';
                    }

                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Komponen Sumber Daya Alam (SDA)</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="komponenSDA" value="<?php if (!empty($judul_komponenSDA)) {
                                                                                echo $judul_komponenSDA;
                                                                            } ?>" placeholder="Bobot Komponen SDA" class="form-control">

                            <?php if (!empty($_error_bobot_komponenSDA)) {
                                echo $_error_bobot_komponenSDA;
                            } ?>
                        </div>
                    </div>



                </li>
                <li class="list-group-item">

                    <?php
                    // data volume air tanah
                    if (isset($_GET['volumeAirTanah']) && $_GET['volumeAirTanah'] != '') {
                        $volumeAirTanah = $_GET['volumeAirTanah']; // Ambil id jenis usaha

                        // echo "Bobot Jenis Usaha = " . $komponenSDABobot;
                    } else {

                        $_error_volumeAirTanah = '<small class="alert text-danger p-0">Volume Air belum dimasukan</small>';
                    }
                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Volume Pemanfaatan Air</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="volumeAirTanah" value="<?php if (!empty($volumeAirTanah)) {
                                                                                echo $volumeAirTanah;
                                                                            } ?>" class=" form-control" placeholder="Volume air tanah">

                            <?php if (!empty($_error_volumeAirTanah)) {
                                echo $_error_volumeAirTanah;
                            } ?>
                        </div>
                    </div>

                </li>
                <li class="list-group-item">

                    <?php
                    // data harga baku
                    if (isset($_GET['hargaBaku']) && $_GET['hargaBaku'] != '') {
                        $hargaBaku = $_GET['hargaBaku']; // ambil nilai harga baku
                    } else {
                        $_error_hargaBaku = '<small class="alert text-danger p-0">Harga baku belum dimasukan</small>';
                    }
                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Harga Baku (Rp)</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="volumeAirTanah" value="<?php if (!empty($hargaBaku)) {
                                                                                echo $hargaBaku;
                                                                            } ?>" class=" form-control" placeholder="Harga baku">

                            <?php if (!empty($_error_hargaBaku)) {
                                echo $_error_hargaBaku;
                            } ?>
                        </div>
                    </div>

                </li>

                <li class="list-group-item">

                    <?php
                    // data pajak PABT
                    if (isset($_GET['pajakPABT']) && $_GET['pajakPABT'] != '') {
                        $pajakPABT = $_GET['pajakPABT']; // ambil pajak PABT
                    } else {
                        $_error_pajakPABT = '<small class="alert text-danger p-0">Pajak PABT belum dimasukan</small>';
                    }
                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Pajak PABT (20%)</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="volumeAirTanah" value="<?php if (!empty($pajakPABT)) {
                                                                                echo $pajakPABT;
                                                                            } ?>" class=" form-control" placeholder="Pajak PABT">

                            <?php if (!empty($_error_pajakPABT)) {
                                echo $_error_pajakPABT;
                            } ?>
                        </div>
                    </div>

                </li>

                <li class="list-group-item">

                    <?php
                    // data persentasi SDA
                    if (isset($_GET['persentasiSDA']) && $_GET['persentasiSDA'] != '') {
                        $persentasiSDA = $_GET['persentasiSDA']; // ambil persentasi SDA
                    } else {
                        $_error_persentasiSDA = '<small class="alert text-danger p-0">Persentasi SDA belum dimasukan</small>';
                    }
                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Persentasi SDA</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="volumeAirTanah" value="<?php if (!empty($persentasiSDA)) {
                                                                                echo $persentasiSDA;
                                                                            } ?>" class=" form-control" placeholder="Pajak PABT">

                            <?php if (!empty($_error_persentasiSDA)) {
                                echo $_error_persentasiSDA;
                            } ?>
                        </div>
                    </div>

                </li>

                <li class="list-group-item">

                    <?php
                    // data persentasi SDA
                    if (isset($_GET['persentasiKompensasi']) && $_GET['persentasiKompensasi'] != '') {
                        $persentasiKompensasi = $_GET['persentasiKompensasi']; // ambil persentasi SDA
                    } else {
                        $_error_persentasiKompensasi = '<small class="alert text-danger p-0">Persentasi Kompenasi belum dimasukan</small>';
                    }
                    ?>

                    <div class="row">
                        <div class="col-3">
                            <label for="">Persentasi Kompensasi</label>
                        </div>
                        <div class="col-9">

                            <input type="text" name="volumeAirTanah" value="<?php if (!empty($persentasiKompensasi)) {
                                                                                echo $persentasiKompensasi;
                                                                            } ?>" class=" form-control" placeholder="Pajak PABT">

                            <?php if (!empty($_error_persentasiKompensasi)) {
                                echo $_error_persentasiKompensasi;
                            } ?>
                        </div>
                    </div>

                </li>

            </ul>
        </div>
    </div>

</div>
<!-- end .col  -->