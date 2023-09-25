@extends('layout.app')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Berita</h4>
                            </div>
                            <div class="card-body">
                                <form id="createPostForm" action="{{ route('storePost') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label for="title"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control form-control sm sm @error('title') is-invalid @enderror" 
                                            id="title" name="title" value="{{ old('title') }}">
                                            @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="content"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Content</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple @error('content') is-invalid @enderror" 
                                            id="content" name="content" value="{{ old('content') }}"></textarea>
                                            @error('content')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="tanggal"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Tanggal</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple @error('tanggal') is-invalid @enderror" 
                                            id="tanggal" name="tanggal" value="{{ old('tanggal') }}"></textarea>
                                            @error('tanggal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-12 col-md-7 offset-md-3">
                                            <button type="submit" class="btn btn-sm btn-success">
                                            Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function previewImage(input) {
            var imagePreview = document.getElementById('image-preview');
            var imageLabel = document.getElementById('image-label');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.getElementsByTagName('img')[0].src = e.target.result;
                    imageLabel.textContent = 'Change File';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imageLabel.textContent = 'Choose File';
            }
        }
    </script>
@endsection
