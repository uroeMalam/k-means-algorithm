<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">   
                    <label for="">Kabupaten</label>
                    <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                        <option value="">Pilihan Kabupaten</option>
                        @foreach ($kabupaten as $j)
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kabupaten"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nama">Nama Kecamatan</label>
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