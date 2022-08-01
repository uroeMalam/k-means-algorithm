@extends('layout.main')

@push('page-css')

@endpush

@section('content')
<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
    <div class="col">
        <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row">
            <div class="col">
            <h2 class="mb-0">Data Hasil Perhitungan</h2>
            </div>
            {{-- <div class="col-auto">
            <div class="form-actions">
                <div class="text-right">
                <button type="submit" class="btn btn-info btn-sm" id="tambah" >Tambah</button>
                </div>
            </div>
            </div> --}}
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <small><label for="">Kabupaten</label></small>
                        <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                            <option value="">Pilih</option>
                            @foreach ($kabupaten as $j)
                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <small><label for="">Tahun</label></small>
                        <select class="form-control" id="tahun" name="tahun">
                            <option value="">Pilih</option>
                            @foreach ($tahun as $t)
                                <option value="{{ $t->id }}">{{ $t->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <div class="table-responsive"> 
            <table class="table table-flush data-table">
                <thead class="thead-light">
                <tr>
                    <th width="10%">No.</th>
                    <th>kecamatan</th>
                    <th>DC 1</th>
                    <th>DC 2</th>
                    <th>DC 3</th>
                    <th>Hasil/Rangking</th>
                </tr>
                </thead>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection


@push('page-scripts')
    <script type="text/javascript">
    $(document).ready(function () {
        // data table
        // var table = $('.data-table').DataTable({                
        //     processing: true,
        //     serverSide: true,
        //     rowId:"id",
        //     ajax: "{{ route('data_dataTable') }}",
        //     columns: [
        //         {orderable:false,searchable:false,data:'DT_RowIndex',name: 'DT_RowIndex'},
        //         // {data: 'kecamatan', name: 'kecamatan'},
        //         {data: 'luas_tanam', name: 'luas_tanam'},
        //         {data: 'luas_panen', name: 'luas_panen'},
        //         {data: 'produktivitas', name: 'produktivitas'},
        //         {data: 'produksi', name: 'produksi'},
        //         {data: 'action', name: 'action', orderable: false, searchable: false},
        //     ]
        // });        
    

    });

    </script>
@endpush