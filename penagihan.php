<div class="container-fluid my-3">

    <!-- start .row  -->
    <div class="row">
        <div class="col-12 py-3">

            <div class="card">
                <div class="card-header">
                    <h3>Penagihan</h3>
                </div>
                <div class="card-body">

                    <!-- start table  -->
                    <table class="table table-bordered mb-3">
                        <tbody class="bg-light text-dark">
                            <tr>
                                <td class="bg-dark text-light text-center align-middle" width="20%">Volume Range</td>
                                <td class="bg-dark text-light text-center">Volume (M³)</td>
                                <td class="bg-dark text-light text-center">FNA</td>
                                <td class="bg-dark text-light text-center">Harga Baku</td>
                                <td class="bg-dark text-light text-center">Jumlah</td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 0-50 M³</td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $volumeAirTanah;
                                    echo '<br>';
                                    echo '<br>';

                                    if ($volumeAirTanah > 50) {
                                        $volume1 = 50;
                                        $nilaiSisah1 = $volumeAirTanah - $volume1;
                                        echo 'Volume 1 : ' . $volume1;
                                        echo '<br>';
                                        echo 'Nilai Sisah 1 : ' . $nilaiSisah1;
                                        echo '<br>';
                                        echo '<br>';
                                    }

                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna1;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo rupiah($hargaBaku);
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 51-500 M³</td>
                                <td class="bg-light text-dark text-center">
                                    <?php


                                    if ($volumeAirTanah > 500) {
                                        $volume2 = 450;
                                        $nilaiSisah2 = $volumeAirTanah - ($volume2 + $volume1);
                                        echo 'Volume 2 : ' . $volume2;
                                        echo '<br>';
                                        echo 'Nilai Sisah 2 : ' . $nilaiSisah2;
                                        echo '<br>';
                                        echo '<br>';
                                    } else {
                                        if (isset($nilaiSisah1)) {
                                            echo $nilaiSisah1;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna2;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo rupiah($hargaBaku);
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 501-1000 M³</td>
                                <td class="bg-light text-dark text-center">
                                    <?php


                                    if ($volumeAirTanah > 1000) {
                                        $volume3 = 500;
                                        $nilaiSisah3 = $volumeAirTanah - ($volume3 + $volume2 + $volume1);
                                        echo 'Volume 3 : ' . $volume3;
                                        echo '<br>';
                                        echo 'Nilai Sisah 3 : ' . $nilaiSisah3;
                                        echo '<br>';
                                        echo '<br>';
                                    } else {
                                        if (isset($nilaiSisah2)) {
                                            echo $nilaiSisah2;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna3;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo rupiah($hargaBaku);
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 1001-2500 M³</td>
                                <td class="bg-light text-dark text-center">
                                    <?php



                                    if ($volumeAirTanah > 2500) {
                                        $volume4 = 1500;
                                        $nilaiSisah4 = $volumeAirTanah - ($volume4 + $volume3 + $volume2 + $volume1);
                                        echo 'Volume 4 : ' . $volume4;
                                        echo '<br>';
                                        echo 'Nilai Sisah 4 : ' . $nilaiSisah4;
                                        echo '<br>';
                                        echo '<br>';
                                    } else {
                                        if (isset($nilaiSisah3)) {
                                            echo $nilaiSisah3;
                                        }
                                    }

                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna4;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo rupiah($hargaBaku);
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>



                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol &gt;2500 M³</td>
                                <td class="bg-light text-dark text-center">
                                    <?php



                                    if ($volumeAirTanah > 2500) {
                                        $volume5 = 500;
                                        $nilaiSisah5 = $volumeAirTanah - ($volume5 + $volume4 + $volume3 + $volume2 + $volume1);
                                        echo 'Volume 5 : ' . $volume5;
                                        echo '<br>';
                                        echo 'Nilai Sisah 5 : ' . $nilaiSisah5;
                                        echo '<br>';
                                        echo '<br>';
                                    } else {
                                        if (isset($nilaiSisah4)) {
                                            echo $nilaiSisah4;
                                        }
                                    }

                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna5;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo rupiah($hargaBaku);
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>


                            <tr>
                                <td class="bg-soft-dark text-dark text-center align-middle" width="20%"></td>
                                <td class="bg-soft-dark text-dark text-center">
                                    <?php


                                    if (isset($nilaiSisah1) && isset($nilaiSisah2) && isset($nilaiSisah3) && isset($nilaiSisah4) && isset($nilaiSisah5)) {

                                        $total = $volume1 + $volume2 + $volume3 + $volume4 + $volume5 + $nilaiSisah5;
                                        echo $total;
                                    }

                                    ?>
                                </td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                            </tr>


                            <tr>
                                <td class="bg-soft-dark text-dark text-center align-middle" width="20%">NPA</td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-soft-dark text-dark text-center align-middle" width="20%">PAJAK PABT</td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center">0.2</td>
                                <td class="bg-soft-dark text-dark text-center">
                                    <?php
                                    echo '-';
                                    ?>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <!-- end table  -->
                </div>
            </div>

        </div>
    </div>
    <!-- end .row  -->

</div>