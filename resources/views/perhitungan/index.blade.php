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
                            @foreach ($tahun as $t)
                                <option value="{{ $t->tahun }}">{{ $t->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <div class="table-responsive"> 
            <table class="table data-total table-bordered">
                <thead class="thead-dark text-center">
                <tr>
                    <th class="bg-success text-dark">Class 1</th>
                    <th class="bg-warning text-dark">Class 2</th>
                    <th class="bg-danger text-dark">Class 3</th>
                </tr>
                </thead>
            </table>
            </div>
            <br>
            <br>
            <br>
            <div class="table-responsive"> 
            <table class="table table-flush data-table">
                <thead class="thead-light">
                <tr>
                    <th width="10%">No.</th>
                    <th>kecamatan</th>
                    <th>Luas Tanam </th>
                    <th>Luas Panen</th>
                    <th>Produktivitas</th>
                    <th>Produksi</th>
                    <th>Class</th>
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
        var table = $('.data-table').DataTable({                
            processing: true,
            serverSide: true,
            rowId:"id",
            ajax: {
                'url': "{{ route('perhitungan_dataTable') }}",
                'type': "POST",
                'data': function(d){
                    d.id_kabupaten =$("#id_kabupaten").val();
                    d.tahun =$("#tahun").val();
                    d._token = '{{ csrf_token() }}';
                }
            },
            columns: [
                {orderable:false,searchable:false,data:'DT_RowIndex',name: 'DT_RowIndex'},
                {data: 'kecamatan', name: 'kecamatan'},
                {data: 'luas_tanam', name: 'luas_tanam'},
                {data: 'luas_panen', name: 'luas_panen'},
                {data: 'produktivitas', name: 'produktivitas'},
                {data: 'produksi', name: 'produksi'},
                {data: 'color_class', name: 'color_class', orderable: false, searchable: false},
            ]
        });   
        // data total  
        var table = $('.data-total').DataTable({                
            processing: true,
            serverSide: true,
            rowId:"id",
            paging: false,
            searching: false,
            info: false,
            ajax: {
                'url': "{{ route('perhitungan_dataTable_total') }}",
                'type': "POST",
                'data': function(d){
                    d.id_kabupaten =$("#id_kabupaten").val();
                    d.tahun =$("#tahun").val();
                    d._token = '{{ csrf_token() }}';
                }
            },
            columns: [
                {orderable:false,searchable:false,data: 'class_i_color', name: 'class_i_color'},
                {orderable:false,searchable:false,data: 'class_ii_color', name: 'class_ii_color'},
                {orderable:false,searchable:false,data: 'class_iii_color', name: 'class_iii_color'},
            ]
        });        

        //onchange
        $(document).on('change', '#id_kabupaten',function (e) {
            table.ajax.reload();
        });
        $(document).on('change', '#tahun',function (e) {
            table.ajax.reload();
        });

    });

    </script>
@endpush