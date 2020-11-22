@extends('template_backend.home')
@section('heading', 'Details Siswa')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Details Siswa</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('siswa.kelas', Crypt::encrypt($siswa->kelas_id)) }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div>
        <div class="card-body">
            <div class="row no-gutters ml-2 mb-2 mr-2">
                <div class="col-md-4">
                    <img src="{{ asset($siswa->foto) }}" class="card-img img-details" alt="...">
                </div>
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td> : {{ $siswa->nama_siswa }}</td>
                        </tr>

                        <tr>
                            <td>No. Induk</td>
                            <td> : {{ $siswa->no_induk }}</td>
                        </tr>

                        <tr>
                            <td>NIS</td>
                            <td> : {{ $siswa->nis }}</td>
                        </tr>

                        <tr>
                            <td>Kelas</td>
                            <td> : {{ $siswa->kelas->nama_kelas }}</td>
                        </tr>

                        <tr>
                            <td>Nama</td>
                            <td> : {{ $siswa->nama_siswa }}</td>
                        </tr>
                        
                        @if ($siswa->jk == 'L')
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
                            <td> : {{ $siswa->tmp_lahir }}</td>
                        </tr>

                        <tr>
                            <td>Tanggal Lahir</td>
                            <td> : {{ date('l, d F Y', strtotime ($siswa->tgl_lahir)) }}</td>
                        </tr>

                        <tr>
                            <td>No. Telepon Lahir</td>
                            <td> : {{ $siswa->telp }}</td>
                        </tr>
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
        $("#DataSiswa").addClass("active");
    </script>
@endsection