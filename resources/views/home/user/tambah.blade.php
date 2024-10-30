@extends('layout.master');
@section('title.user');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card_header">
                            <h3>Halaman Tambah Data User</h3>
                            <a class="btn btn warning" href="user">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                            <div class="table-responsive">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="password"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <button class="btn btn-primary" type="submit">simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
