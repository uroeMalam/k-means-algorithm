<div class="container-fluid">
    <form method="POST" id="formEdit">
        @csrf
        @method("POST")
        <input type="text" class="form-control" id="id" name="id" value="{{ $id }}" aria-describedby="id" hidden>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">                    
                    <label for="id_kabupaten">Kabupaten</label>
                    <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                        <option value="">Pilih</option>
                        @foreach ($kabupaten as $j)
                            <option value="{{ $j->id }}" {{ ($j->id == $data->id_kabupaten) ? "selected" : ""}}>{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kabupaten"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">                    
                    <label for="id_kecamatan">kecamatan</label>
                    <select class="form-control" id="id_kecamatan" name="id_kecamatan">
                        <option value="">Pilih</option>
                        @foreach ($kecamatan as $kc)
                            <option value="{{ $kc->id }}" {{ ($kc->id == $data->id_kecamatan) ? "selected" : ""}}>{{ $kc->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kecamatan"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tahun">Tahun (masi ada bug)</label>
                    <select class="form-control" id="tahun" name="tahun" >
                        <option value="2019" {{($data->tahun == "2019") ? "selected" :""}}>2019</option>
                        <option value="2020" {{($data->tahun == "2020") ? "selected" :""}}>2020</option>
                        <option value="2021" {{($data->tahun == "2021") ? "selected" :""}}>2021</option>
                        <option value="2022" {{($data->tahun == "2022") ? "selected" :""}}>2022</option>
                    </select>
                    <small class="d-none text-danger" id="tahun"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="luas_tanam">Luas Tanam</label>
                    <input type="number" class="form-control" id="luas_tanam" name="luas_tanam" value="{{ $data->luas_tanam }}" aria-describedby="luas_tanam">
                    <small class="d-none text-danger" id="luas_tanam"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="luas_panen">Luas Panen</label>
                    <input type="number" class="form-control" id="luas_panen" name="luas_panen" value="{{  $data->luas_panen }}" aria-describedby="luas_panen">
                    <small class="d-none text-danger" id="luas_panen"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="produktivitas">Produktivitas</label>
                    <input type="number" class="form-control" id="produktivitas" name="produktivitas" value="{{ $data->produktivitas }}" aria-describedby="produktivitas">
                    <small class="d-none text-danger" id="produktivitas"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="Produksi">Produksi</label>
                    <input type="number" class="form-control" id="produksi" name="produksi" value="{{  $data->produksi }}" aria-describedby="produksi">
                    <small class="d-none text-danger" id="produksi"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-info" id="btnEdit">Simpan Perubahan</button>
                </div>
            </div>
    </form>
</div>