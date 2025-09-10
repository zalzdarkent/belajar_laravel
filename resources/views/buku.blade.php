@extends('app')

@section('content')
    <h1>Welcome to the Buku Page</h1>
    <div>
        <a href="{{route('buku.tambah')}}"><button>Tambah Buku</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pengarang }}</td>
                    <td>{{ $item->penerbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection