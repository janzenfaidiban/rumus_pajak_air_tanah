<div class="container-fluid my-3">

    <!-- start .row  -->
    <div class="row">
        <div class="col-12 py-3">

            <div class="card">
                <div class="card-header">
                    <h1>Perhitungan Faktor Nilai Air</h1>
                </div>
                <div class="card-body">

                    <!-- start table  -->
                    <table class="table table-bordered mb-3">
                        <tbody class="bg-light text-dark">
                            <tr>
                                <td rowspan="5" class="align-middle text-center" width="20%">
                                    Vol 0-50 M³
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light text-cente" width="20%">Jenis Komponen</td>
                                <td class="bg-dark text-light text-center" width="20%">Bobot</td>
                                <td class="bg-dark text-light text-center" width="20%">%</td>
                                <td class="bg-dark text-light text-center" width="20%">Jumlah</td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen SDA
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        echo $bobot_komponenSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiSDA)) {
                                        echo $persentasiSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        $jml1A = $bobot_komponenSDA * $persentasiSDA;
                                        echo $jml1A;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen Kompensasi
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai1)) {
                                        echo $nilai1;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiKompensasi)) {
                                        echo $persentasiKompensasi;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai1)) {
                                        $jml1B = $nilai1 * $persentasiKompensasi;
                                        echo $jml1B;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="bg-light text-dark text-center align-middle">
                                    Jumlah
                                </th>
                                <th class="text-center">
                                    <strong>
                                        <?php
                                        $fna1 = $jml1A + $jml1B;
                                        echo $fna1;
                                        ?>
                                    </strong>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table  -->


                    <!-- start table  -->
                    <table class="table table-bordered mb-3">
                        <tbody class="bg-light text-dark">
                            <tr>
                                <td rowspan="5" class="align-middle text-center" width="20%">
                                    Vol 51-500 M³
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light text-cente" width="20%">Jenis Komponen</td>
                                <td class="bg-dark text-light text-center" width="20%">Bobot</td>
                                <td class="bg-dark text-light text-center" width="20%">%</td>
                                <td class="bg-dark text-light text-center" width="20%">Jumlah</td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen SDA
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        echo $bobot_komponenSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiSDA)) {
                                        echo $persentasiSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        $jml2A = $bobot_komponenSDA * $persentasiSDA;
                                        echo $jml2A;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen Kompensasi
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai2)) {
                                        echo $nilai2;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiKompensasi)) {
                                        echo $persentasiKompensasi;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai2)) {
                                        $jml2B = $nilai2 * $persentasiKompensasi;
                                        echo $jml2B;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="bg-light text-dark text-center align-middle">
                                    Jumlah
                                </th>
                                <th class="text-center">
                                    <?php
                                    $fna2 = $jml2A + $jml2B;
                                    echo $fna2;
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table  -->




                    <!-- start table  -->
                    <table class="table table-bordered mb-3">
                        <tbody class="bg-light text-dark">
                            <tr>
                                <td rowspan="5" class="align-middle text-center" width="20%">
                                    Vol 501-1000 M³
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light text-cente" width="20%">Jenis Komponen</td>
                                <td class="bg-dark text-light text-center" width="20%">Bobot</td>
                                <td class="bg-dark text-light text-center" width="20%">%</td>
                                <td class="bg-dark text-light text-center" width="20%">Jumlah</td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen SDA
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        echo $bobot_komponenSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiSDA)) {
                                        echo $persentasiSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        $jml3A = $bobot_komponenSDA * $persentasiSDA;
                                        echo $jml3A;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen Kompensasi
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai3)) {
                                        echo $nilai3;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiKompensasi)) {
                                        echo $persentasiKompensasi;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai3)) {
                                        $jml3B = $nilai3 * $persentasiKompensasi;
                                        echo $jml3B;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="bg-light text-dark text-center align-middle">
                                    Jumlah
                                </th>
                                <th class="text-center">
                                    <?php
                                    $fna3 = $jml3A + $jml3B;
                                    echo $fna3;
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table  -->




                    <!-- start table  -->
                    <table class="table table-bordered mb-3">
                        <tbody class="bg-light text-dark">
                            <tr>
                                <td rowspan="5" class="align-middle text-center" width="20%">
                                    Vol 1001-2500 M³
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light text-cente" width="20%">Jenis Komponen</td>
                                <td class="bg-dark text-light text-center" width="20%">Bobot</td>
                                <td class="bg-dark text-light text-center" width="20%">%</td>
                                <td class="bg-dark text-light text-center" width="20%">Jumlah</td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen SDA
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        echo $bobot_komponenSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiSDA)) {
                                        echo $persentasiSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        $jml4A = $bobot_komponenSDA * $persentasiSDA;
                                        echo $jml4A;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen Kompensasi
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai4)) {
                                        echo $nilai4;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiKompensasi)) {
                                        echo $persentasiKompensasi;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai4)) {
                                        $jml4B = $nilai4 * $persentasiKompensasi;
                                        echo $jml4B;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="bg-light text-dark text-center align-middle">
                                    Jumlah
                                    </tthd>
                                <th class="text-center">
                                    <?php
                                    $fna4 = $jml4A + $jml4B;
                                    echo $fna4;
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table  -->





                    <!-- start table  -->
                    <table class="table table-bordered mb-3">
                        <tbody class="bg-light text-dark">
                            <tr>
                                <td rowspan="5" class="align-middle text-center" width="20%">
                                    Vol >2500 M³
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light text-cente" width="20%">Jenis Komponen</td>
                                <td class="bg-dark text-light text-center" width="20%">Bobot</td>
                                <td class="bg-dark text-light text-center" width="20%">%</td>
                                <td class="bg-dark text-light text-center" width="20%">Jumlah</td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen SDA
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        echo $bobot_komponenSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiSDA)) {
                                        echo $persentasiSDA;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($bobot_komponenSDA)) {
                                        $jml5A = $bobot_komponenSDA * $persentasiSDA;
                                        echo $jml5A;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle">
                                    Komponen Kompensasi
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai5)) {
                                        echo $nilai5;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($persentasiKompensasi)) {
                                        echo $persentasiKompensasi;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    if (isset($nilai5)) {
                                        $jml5B = $nilai5 * $persentasiKompensasi;
                                        echo $jml5B;
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="bg-light text-dark text-center align-middle">
                                    Jumlah
                                </th>
                                <th class="text-center">
                                    <?php
                                    $fna5 = $jml5A + $jml5B;
                                    echo $fna5;
                                    ?>
                                </th>
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