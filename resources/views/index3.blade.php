<!DOCTYPE html>
@extends('master4')
@section('title', 'Database Sepeda Motor')

@section('judul_halaman')


    <h2>www.malasngoding.com</h2>
    <h3>Data Sepeda Motor</h3>

    <a href="/sepedamotor/tambah3"> Tambah Sepeda Motor</a>

    <br />
    <br />
@endsection

@section('konten')

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Sepeda Motor</th>
            <th>Merk Sepeda Motor</th>
            <th>Stock Sepeda Motor</th>
            <th>Tersedia</th>
        </tr>
        @foreach ($sepedamotor as $p)
            <tr>
                <td>{{ $p->kodesepedamotor }}</td>
                <td>{{ $p->merksepedamotor }}</td>
                <td>{{ $p->stocksepedamotor }}</td>
                <td>{{ $p->tersedia}}</td>
            </tr>
        @endforeach
    </table>
    {{ $sepedamotor->links() }}

@endsection
