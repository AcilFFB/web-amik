@extends('layout.v_template')

@section('title','Data Mahasiswa')

@section('content')
    <a href="/mahasiswa/add" class="btn btn-primary btn-sm">Add</a><br>

     <!-- <br> <select id="input_filter">                      
              <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
              <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
              <option value="S1 DKV">S1 DKV</option>
      </select> -->


    @if (session('pesan'))<br>
    <div class="alert alert-success fade in">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('pesan') }}
    </div>
    @endif  
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($mahasiswa as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->npm}}</td>
                    <td>{{ $data->nama_mahasiswa}}</td>
                    <td>{{ $data->jurusan}}</td>
                    <td>
                        <a href="/mahasiswa/detail/{{ $data->id_mahasiswa }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/mahasiswa/edit/{{ $data->id_mahasiswa }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_mahasiswa }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($mahasiswa as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_mahasiswa }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$data->nama_mahasiswa}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data Ini ?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/mahasiswa/delete/{{ $data->id_mahasiswa }}" class="btn btn-outline">Yes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    @endforeach

    
@endsection

<!-- @section('script')
<script>
    var table = $('#myTable').DataTable();
    $('#input_filter').on( 'change', function () {
        table
            .columns(3)
            .search( this.value )
            .draw();
    } );
</script>
@endsection -->