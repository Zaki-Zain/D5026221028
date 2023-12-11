@extends('master5')
@section('judulhalaman','Kategori')

@section('konten')
    <br/>
    <p>Pilih Kategori</p>

    <form action="/submitKategori" method="post">
        @csrf
        <select class="form-control" name="index4" id="index4">
            @foreach($kategori as $id => $nama)
                <option value="{{ $id }}">{{ $nama }}</option>
            @endforeach
        </select>
    <br/>
        <input class="btn btn-info" type="submit" value="KIRIM">
    </form>

    @if(isset($selectedOptionId))
        <h2>Anda Telah Memilih Kategori dengan ID = {{ $selectedOptionId }}</h2>
        <br/>
    @endif
@endsection
