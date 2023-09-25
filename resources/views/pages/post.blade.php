{{-- @extends('layout.app')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Post</h4>
                            </div>
                            <div class="card-body">
                                <form id="createPostForm" action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric">
                                            <option>Tech</option>
                                            <option>News</option>
                                            <option>Political</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple" style="display: none;"></textarea>
                                        <div class="note-editor note-frame card">
                                            <div class="note-dropzone">
                                                <div class="note-dropzone-message"></div>
                                            </div>
                                            <div class="note-toolbar-wrapper" style="height: 71.4182px;">
                                                <div class="note-toolbar card-header"
                                                    style="position: relative; top: 0px; width: 100%;">
                                                    <div class="note-btn-group btn-group note-style"><button type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-bold"
                                                            tabindex="-1" aria-label="Bold (CTRL+B)"
                                                            data-bs-original-title="Bold (CTRL+B)"><i
                                                                class="note-icon-bold"></i></button><button type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-italic"
                                                            tabindex="-1" aria-label="Italic (CTRL+I)"
                                                            data-bs-original-title="Italic (CTRL+I)"><i
                                                                class="note-icon-italic"></i></button><button type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-underline"
                                                            tabindex="-1" aria-label="Underline (CTRL+U)"
                                                            data-bs-original-title="Underline (CTRL+U)"><i
                                                                class="note-icon-underline"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            tabindex="-1" aria-label="Remove Font Style (CTRL+\)"
                                                            data-bs-original-title="Remove Font Style (CTRL+\)"><i
                                                                class="note-icon-eraser"></i></button></div>
                                                    <div class="note-btn-group btn-group note-font"><button type="button"
                                                            class="note-btn btn btn-light btn-sm note-btn-strikethrough"
                                                            tabindex="-1" aria-label="Strikethrough (CTRL+SHIFT+S)"
                                                            data-bs-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                                                class="note-icon-strikethrough"></i></button></div>
                                                    <div class="note-btn-group btn-group note-para">
                                                        <div class="note-btn-group btn-group"><button type="button"
                                                                class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                tabindex="-1" data-toggle="dropdown" aria-label="Paragraph"
                                                                data-bs-original-title="Paragraph"><i
                                                                    class="note-icon-align-left"></i></button>
                                                            <div class="dropdown-menu">
                                                                <div class="note-btn-group btn-group note-align"><button
                                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1"
                                                                        aria-label="Align left (CTRL+SHIFT+L)"
                                                                        data-bs-original-title="Align left (CTRL+SHIFT+L)"><i
                                                                            class="note-icon-align-left"></i></button><button
                                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1"
                                                                        aria-label="Align center (CTRL+SHIFT+E)"
                                                                        data-bs-original-title="Align center (CTRL+SHIFT+E)"><i
                                                                            class="note-icon-align-center"></i></button><button
                                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1"
                                                                        aria-label="Align right (CTRL+SHIFT+R)"
                                                                        data-bs-original-title="Align right (CTRL+SHIFT+R)"><i
                                                                            class="note-icon-align-right"></i></button><button
                                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1"
                                                                        aria-label="Justify full (CTRL+SHIFT+J)"
                                                                        data-bs-original-title="Justify full (CTRL+SHIFT+J)"><i
                                                                            class="note-icon-align-justify"></i></button>
                                                                </div>
                                                                <div class="note-btn-group btn-group note-list"><button
                                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" aria-label="Outdent (CTRL+[)"
                                                                        data-bs-original-title="Outdent (CTRL+[)"><i
                                                                            class="note-icon-align-outdent"></i></button><button
                                                                        type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" aria-label="Indent (CTRL+])"
                                                                        data-bs-original-title="Indent (CTRL+])"><i
                                                                            class="note-icon-align-indent"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note-editing-area">
                                                <div class="note-handle">
                                                    <div class="note-control-selection" style="display: none;">
                                                        <div class="note-control-selection-bg"></div>
                                                        <div class="note-control-holder note-control-nw"></div>
                                                        <div class="note-control-holder note-control-ne"></div>
                                                        <div class="note-control-holder note-control-sw"></div>
                                                        <div class="note-control-sizing note-control-se"></div>
                                                        <div class="note-control-selection-info"></div>
                                                    </div>
                                                </div>
                                                <textarea class="note-codable"></textarea>
                                                <div class="note-editable card-block" contenteditable="true"
                                                    style="min-height: 150px; height: 84.9591px;">
                                                    <p><br></p>
                                                </div>
                                            </div>
                                            <div class="note-statusbar">
                                                <div class="note-resizebar">
                                                    <div class="note-icon-bar">
                                                        <div class="note-icon-bar">
                                                            <div class="note-icon-bar"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Thumbnail</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric">
                                            <option>Publish</option>
                                            <option>Draft</option>
                                            <option>Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-sm btn-success">Create Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById('createPostForm').addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>
@endsection --}}

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
                                <h4>Write Your Post</h4>
                            </div>
                            <div class="card-body">
                                <form id="createPostForm" action="{{ route('storePost') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label for="title"
                                            class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" id="title" name="title">
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
                                            <textarea class="summernote-simple" id="content" name="content"></textarea>
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
                                            <button type="submit" class="btn btn-sm btn-success">Create Post</button>
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
        function deleteData(post) {
            pesan = confirm('Yakin data admins dengan nama ${post} ini dihapus?');
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
