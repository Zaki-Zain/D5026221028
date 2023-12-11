@extends('master5')

@section('konten')
    <h2 class="text-center">Kategori</h2><br>

    @foreach($pegawai as $p)
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 400px">
                        <div class="card bg-secondary">
                          <div class="card-body text-center">
                            {{-- konten card 1 --}}
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body d-flex flex-column justify-content-center">
                              <p class="card-text">ID {{ $p->id }}</p>
                              <p class="card-text">Nama {{ $p->nama }}</p>
                              <div class="text-center">
                                  <a href="/pegawai" class="btn btn-primary">Kembali</a>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
