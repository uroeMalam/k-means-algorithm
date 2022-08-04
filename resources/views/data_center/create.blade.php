<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">       
                    <label for="">Kabupaten</label>
                    <input type="text"class="form-control" readonly name="id_kabupaten" id="id_kabupaten" value="{{ $id_kabupaten }}" aria-describedby="id_kabupaten">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">       
                    <label for="">Tahun</label>
                    <input type="text"class="form-control" readonly name="tahun" id="tahun" value="{{ $tahun }}"  aria-describedby="tahun">
                </div>
            </div>
        </div>

        <hr>
        {{-- center 1 --}}
        <div class="row">
            <div class="col-sm">
                <div class="form-group">       
                    <label for="">Data Center</label>
                    <input type="text"class="form-control" readonly name="center_1" id="center_1" value="center 1" aria-describedby="center_1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">       
                    <select class="form-control" id="id_datacenter_1" name="id_datacenter_1">
                        <option value="">Pilih</option>
                        @foreach ($data as $j)
                            <option value="{{ $j->id_data }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_datacenter_1"></small>
                </div>
            </div>
        </div>
        <hr>
        {{-- center 2 --}}
        <div class="row">
            <div class="col-sm">
                <div class="form-group">       
                    <label for="">Data Center</label>
                    <input type="text"class="form-control" readonly name="center_2" id="center_2" value="center 2" aria-describedby="center_2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">       
                    <select class="form-control" id="id_datacenter_2" name="id_datacenter_2">
                        <option value="">Pilih</option>
                        @foreach ($data as $j)
                            <option value="{{ $j->id_data }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_datacenter_2"></small>
                </div>
            </div>
        </div>
        <hr>
        {{-- center 3 --}}
        <div class="row">
            <div class="col-sm">
                <div class="form-group">       
                    <label for="">Data Center</label>
                    <input type="text"class="form-control" readonly name="center_3" id="center_3" value="center 3" aria-describedby="center_3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">       
                    <select class="form-control" id="id_datacenter_3" name="id_datacenter_3">
                        <option value="">Pilih</option>
                        @foreach ($data as $j)
                            <option value="{{ $j->id_data }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_datacenter_3"></small>
                </div>
            </div>
        </div>
        <hr>

        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnCreate">Tambah</button>
                </div>
            </div>
    </form>
</div>