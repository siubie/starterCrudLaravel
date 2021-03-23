@extends("layout")
@section('content')
    <h1>Daftar Mahasiswa</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nomor Handphone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->kelas}}</td>
                <td>{{$mhs->nomor_handphone}}</td>
                <td>Action</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {{$mahasiswa->links()}}
    </div>
@endsection
