<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col">
                <div class="form-group">       
                    <label for="luas_panen">Kabupaten</label>
                    <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                        <option value="">Pilih Kabupaten</option>
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
                    <label for="luas_panen">Kecamatan</label>
                    <select class="form-control" id="id_kecamatan" name="id_kecamatan">
                        <option value="">Pilih Kecamatan</option>
                        @foreach ($kecamatan as $kc)
                            <option value="{{ $kc->id }}">{{ $kc->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kecamatan"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="luas_panen">Tahun</label>
                    <select class="form-control" id="tahun" name="tahun">
                        <option value="">Pilihan Tahun</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    <small class="d-none text-danger" id="tahun"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="luas_tanam">Luas Tanam PerHektar</label>
                    <input type="number" step="any" class="form-control" id="luas_tanam" name="luas_tanam" value="" aria-describedby="luas_tanam">
                    <small class="d-none text-danger" id="luas_tanam"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="luas_panen">Luas Panen PerHektar</label>
                    <input type="number" step="any" class="form-control" id="luas_panen" name="luas_panen" value="" aria-describedby="luas_panen">
                    <small class="d-none text-danger" id="luas_panen"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="produktivitas">Produktivitas</label>
                    <input type="number" step="any"  class="form-control" id="produktivitas" name="produktivitas" value="" aria-describedby="produktivitas">
                    <small class="d-none text-danger" id="produktivitas"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="produksi">Produksi PerTon</label>
                    <input type="number" step="any" class="form-control" id="produksi" name="produksi" value="" aria-describedby="produksi">
                    <small class="d-none text-danger" id="produksi"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnCreate">Tambah</button>
                </div>
            </div>
    </form>
</div>