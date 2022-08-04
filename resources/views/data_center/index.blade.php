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
            <h2 class="mb-0">Data Center</h2>
            </div>
            <div class="col-auto">
            <div class="form-actions">
                <div class="text-right">
                <button type="submit" class="btn btn-danger btn-sm" id="hapusData" >Hapus</button>
                <button type="submit" class="btn btn-info btn-sm" id="tambah" >Tambah</button>
                </div>
            </div>
            </div>
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
            
        </div>
        <div class="card-body">
            <div class="table-responsive"> 
            <table class="table table-flush data-table">
                <thead class="thead-light">
                <tr>
                    <th width="10%">No.</th>
                    <th>Center</th>
                    <th>Luas Tanam</th>
                    <th>Luas Panen</th>
                    <th>Produktivitas</th>
                    <th>Produksi</th>
                    {{-- <th width="20%">Actions</th> --}}
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
                'url': "{{ route('dataCenter_dataTable') }}",
                'type': "POST",
                'data': function(d){
                    d.id_kabupaten =$("#id_kabupaten").val();
                    d.tahun =$("#tahun").val();
                    d._token = '{{ csrf_token() }}';
                }
            },
            columns: [
                {orderable:false,searchable:false,data:'DT_RowIndex',name: 'DT_RowIndex'},
                {data: 'center_name', name: 'center_name'},
                {data: 'luas_tanam', name: 'luas_tanam'},
                {data: 'luas_panen', name: 'luas_panen'},
                {data: 'produktivitas', name: 'produktivitas'},
                {data: 'produksi', name: 'produksi'},
                // {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });      
    
        //onchange
        $(document).on('change', '#id_kabupaten',function (e) {
            table.ajax.reload();
        });

        $(document).on('change', '#tahun',function (e) {
            table.ajax.reload();
        });
    

     // menjalankan tombol tambah
     $(document).on('click', '#tambah',function (e) {
        e.preventDefault();
        let element = $(this);
        const id_kabupaten = $("#id_kabupaten").val();
        const tahun = $("#tahun").val();
        show_loading(element, "full");
        $.ajax({
            type: 'get',
            url: `/dataCenter/tambah/${id_kabupaten}/${tahun}`,
            success: function(data) {
            hide_loading(element, '', 'full', ' Tambah Data');
            $('#modalDialogLabel').html("Tambah Data")
            $('#modalDialogSize').addClass("modal-lg")
            $('#modalDialogData').html(data);
            $('#modalDialog').modal({
                backdrop: 'static'
            })
            $('#modalDialog').modal("show");
            }
        });
    });

    // menjalankan fungsi tambah
    $(document).on('submit', '#formCreate', function(e) {
          e.preventDefault();
          clear_error_withStyle()
          console.log('ok')
          show_loading("#btnCreate", "full");
          $.ajax({
              url: '/dataCenter/simpan',
              method: "POST",
              data: new FormData(this),
              dataType: 'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success: function(data) {
                console.log('bereh')
                  hide_loading('#btnCreate', '', 'full', 'Create');
                  if (data.status) {
                      clearInput();
                      $('#modalDialog').modal("hide");
                      Swal.fire("Berhasil!", data.message, "success").then(function() {
                          table.ajax.reload();
                      });
                    }else{
                      clearInput();
                      $('#modalDialog').modal("hide");
                      Swal.fire("Maaf!", data.message, "error").then(function() {
                          table.ajax.reload();
                      });
                  }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                console.log('rusak')
                  hide_loading('#btnCreate', '', 'full', 'Create');
                  check_errors_withStyle(xhr.responseJSON.errors);
              }
          });
      }); 

      // mejalankan tombol edit
    $(document).on('click', '#edit',function (e) {
        e.preventDefault();
        let element = $(this);
        show_loading(element, "full");
        let id=$(this).attr('data-id');
        console.log(id);
        $.ajax({
            type: 'get',
            url: "/data/edit/"+id,
            success: function(data) {
            hide_loading(element, 'edit', '', ' Edit');
            $('#modalDialogLabel').html("Edit")
            $('#modalDialogSize').addClass("modal-lg")
            $('#modalDialogData').html(data);
            $('#modalDialog').modal({
                backdrop: 'static'
            })
            $('#modalDialog').modal("show");
            }
        });
    });

      // menjalankan fungsi edit
      $(document).on('submit', '#formEdit', function(e) {
        e.preventDefault();
        clear_error_withStyle()
        show_loading("#btnEdit", "");
        $.ajax({
            url: `/data/update`,
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                hide_loading('#btnEdit', '', '', 'Edit');
                if (data.status) {
                    clearInput();
                    $('#modalDialog').modal("hide");
                    Swal.fire("Berhasil!", data.message, "success").then(function() {
                        table.ajax.reload();
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                hide_loading('#btnEdit', '', '', 'Edit');
                check_errors_withStyle(xhr.responseJSON.errors);
            }
        });
      });
      
      $(document).on('click', '#hapusData', function(e) {
        e.preventDefault();
        const id_kabupaten = $("#id_kabupaten").val();
        const tahun = $("#tahun").val();
        var url = "{{ route('dataCenter_destroy') }}";
        var csrf= '{{ csrf_token() }}';
        var dataText= tahun;
        var id= id_kabupaten;
        deleteConfirm(url,table,dataText,csrf,id);
    });
    });

    </script>
@endpush