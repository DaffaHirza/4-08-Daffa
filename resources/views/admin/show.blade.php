@extends('layouts.app')
@section('title', 'Dappa | Data Contacts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Detail Buku
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">

                                    <img src="{{Storage::url($buku->gambar)}}" alt="{{ $buku->judul }}" style="max-width: 230px;">

                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" value="{{ $buku->judul }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengarang">Pengarang</label>
                                        <input type="text" class="form-control" id="pengarang" value="{{ $buku->pengarang }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                        <input type="text" class="form-control" id="penerbit" value="{{ $buku->penerbit }}" readonly>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection