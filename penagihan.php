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
                                    volume1
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna1;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">Rp 1,200</td>
                                <td class="bg-light text-dark text-center">
                                    Rp 348,000 </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 51-500 M³</td>
                                <td class="bg-light text-dark text-center">
                                    volume2
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna2;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">Rp 1,200</td>
                                <td class="bg-light text-dark text-center">
                                    Rp 3,153,600 </td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 501-1000 M³</td>
                                <td class="bg-light text-dark text-center">
                                    volume3
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna3;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">Rp 1,200</td>
                                <td class="bg-light text-dark text-center">
                                    Rp 3,528,000 </td>
                            </tr>

                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol 1001-2500 M³</td>
                                <td class="bg-light text-dark text-center">
                                    volume4
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna4;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">Rp 1,200</td>
                                <td class="bg-light text-dark text-center">
                                    Rp 10,656,000 </td>
                            </tr>



                            <tr>
                                <td class="bg-light text-dark text-center align-middle" width="20%">Vol &gt;2500 M³</td>
                                <td class="bg-light text-dark text-center">
                                    volume5
                                </td>
                                <td class="bg-light text-dark text-center">
                                    <?php
                                    echo $fna5;
                                    ?>
                                </td>
                                <td class="bg-light text-dark text-center">Rp 1,200</td>
                                <td class="bg-light text-dark text-center">
                                    Rp 3,576,000 </td>
                            </tr>


                            <tr>
                                <td class="bg-soft-dark text-dark text-center align-middle" width="20%"></td>
                                <td class="bg-soft-dark text-dark text-center">
                                    volume total
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
                                    Rp 21,261,600 </td>
                            </tr>
                            <tr>
                                <td class="bg-soft-dark text-dark text-center align-middle" width="20%">PAJAK PABT</td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center"></td>
                                <td class="bg-soft-dark text-dark text-center">0.2</td>
                                <td class="bg-soft-dark text-dark text-center">
                                    Rp 4,252,320 </td>
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