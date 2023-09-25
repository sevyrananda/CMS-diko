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
                                <h4>Form Edit Berita</h4>
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
                                        <label for="category"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Category</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" id="category" name="category">
                                                <option>Tech</option>
                                                <option>News</option>
                                                <option>Political</option>
                                            </select>
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
                                        <label for="image"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Thumbnail</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="image" id="image-upload"
                                                    onchange="previewImage(this);">
                                                <img src="" id="image-preview" alt="Image Preview"
                                                    style="max-width: 100%; display: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="tags"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Tags</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control inputtags" id="tags"
                                                name="tags">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="status"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Status</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" id="status" name="status">
                                                <option>Publish</option>
                                                <option>Draft</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <div class="col-sm-12 col-md-7 offset-md-3">
                                            <button type="submit" class="btn btn-sm btn-success">
                                            Update
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
