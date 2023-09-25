@extends('layout.app')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">All <span
                                                class="badge badge-white">10</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Draft <span
                                                class="badge badge-primary">2</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pending <span
                                                class="badge badge-primary">3</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Trash <span
                                                class="badge badge-primary">0</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Berita</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ route('tambahBerita') }}" class="btn btn-primary">Tambah Data</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Post Title 1</td>
                                                <td>Sejarah</td>
                                                <td>10-02-2019</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary">Lihat</a>
                                                    <a href="{{ route('editBerita') }}" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Post Title 2</td>
                                                <td>Sejarah</td>
                                                <td>10-05-2018</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary">Lihat</a>
                                                    <a href="{{ route('editBerita') }}" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <td>3</td>
                                            <td>Post Title 3</td>
                                            <td>Sejarah</td>
                                            <td>25-06-2018</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Lihat</a>
                                                <a href="{{ route('editBerita') }}" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                            </tr>
                                            <td>4</td>
                                            <td>Post Title 4</td>
                                            <td>Sejarah</td>
                                            <td>11-02-2017</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Lihat</a>
                                                <a href="{{ route('editBerita') }}" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
