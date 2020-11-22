@extends('template_backend.home')
@section('heading', 'Details Guru')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('guru.index') }}">Guru</a></li>
  <li class="breadcrumb-item active">Details Guru</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="{{ route("guru.mapel", Crypt::encrypt($guru->mapel_id)) }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div>
        <div class="card-body">
            <div class="row no-gutters ml-2 mb-2 mr-2">
                <div class="col-md-4">
                    <img src="{{ asset($guru->foto) }}" class="card-img img-details" alt="...">
                </div>
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-7"> 
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>: {{ $guru->nama_guru }}</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>: {{ $guru->nip }}</td>
                        </tr>
                        <tr>
                            <td>No ID Card</td>
                            <td>: {{ $guru->id_card }}</td>
                        </tr>
                        <tr>
                            <td>Guru Mapel</td>
                            <td>: {{ $guru->mapel->nama_mapel }}</td>
                        </tr>
                        <tr>
                            <td>Kode Jadwal</td>
                            <td>: {{ $guru->kode }}</td>
                        </tr>
                        @if ($guru->jk == 'L')
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: Laki - laki</td>
                        </tr>
                        @else
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: Perempuan</td>
                        </tr>
                        @endif

                        <tr>
                            <td>Tempat Lahir</td>
                            <td>: {{ $guru->tmp_lahir }}</td>
                        </tr>

                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: {{ date('l, d F Y', strtotime($guru->tgl_lahir)) }}</td>
                        </tr>

                        <tr>
                            <td>NO. Telpon</td>
                            <td>: {{ $guru->telp }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataGuru").addClass("active");
    </script>
@endsection