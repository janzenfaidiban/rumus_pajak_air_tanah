<!-- start .col  -->
<div class="col-6 py-3">

    <!-- start form  -->
    <form action="?" method="GET">
        <div class="card">
            <div class="card-header">
                <h3>Masukan Data Usaha</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <label for="">Jenis Usaha</label>
                        <select class="form-select" aria-label="Default select example" name="jenisUsaha">
                            <option selected></option>
                            <option value="1">Non Niaga</option>
                            <option value="2">Niaga Kecil</option>
                            <option value="3">Industri Kecil</option>
                            <option value="4">Niaga Besar</option>
                            <option value="5">Industri Besar</option>
                        </select>
                    </li>
                    <li class="list-group-item">
                        <label for="">Komponen Sumber Daya Alam (SDA)</label>
                        <select class="form-select" aria-label="Default select example" name="komponenSDA">
                            <option selected></option>
                            <option value="1">Air bawah tanah, kualitas baik, ada sumber air alternatif</option>
                            <option value="2">Air bawah tanah, kualitas baik, tidak ada sumber air alternatif</option>
                            <option value="3">Air bawah tanah, kualitas jelekhree</option>
                        </select>
                    </li>
                    <li class="list-group-item">
                        <label for="">Volume Air Tanah (m<sup>3</sup>)</label>
                        <input class="form-control" type="text" class="form-group" name="volumeAirTanah" value="">
                    </li>
                    <li class="list-group-item">
                        <label for="">Harga Baku (Rp)</label>
                        <input class="form-control" type="text" class="form-group" name="hargaBaku" value="12000" readonly>
                    </li>
                    <li class="list-group-item">
                        <label for="">Pajak PABT (20%)</label>
                        <input class="form-control" type="text" class="form-group" name="pajakPABT" value="0.2" readonly>
                    </li>
                    <li class="list-group-item">
                        <input type="submit" value="Hitung" class="btn btn-lg btn-dark">
                        <input type="reset" value="Bersihkan" class="btn btn-lg btn-dark bg-light text-dark">
                    </li>
                </ul>
            </div>
        </div>
    </form>
    <!-- end form  -->
</div>
<!-- end .col  -->