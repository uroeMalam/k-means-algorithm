<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nama">Nama Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="" aria-describedby="nama">
                    <small class="d-none text-danger" id="nama"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <input type="text" class="form-control" id="ket" name="ket" value="" aria-describedby="ket">
                    <small class="d-none text-danger" id="ket"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnCreate">simpan</button>
                </div>
            </div>
    </form>
</div>