
    @extends('admin.layouts.layout')

    @section('styles')
    @endsection

    @section('content')

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Tambah Jenis Paket</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Paket</a></li>
                <li class="breadcrumb-item active text-capitalize" aria-current="page">Tambah</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.jenis-paket.store') }}" method="POST">
                            @csrf
                            <section>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Jenis Paket</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control required" placeholder="Nama Jenis Paket" id="nama" name="nama"
                                        onkeyup="
                                            var slug = document.getElementById('nama').value;
                                            slug = slug.replace(/ /g,'-');
                                            slug = slug.toLowerCase();
                                            document.getElementById('slug').value = slug;
                                        ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Slug" id="slug" name="slug" readonly>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    @endsection

    @section('scripts')


		<!-- INTERNAL WYSIWYG EDITOR JS -->
		<script src="{{asset('build/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{asset('build/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

		<!-- INTERNAL File-Uploads Js-->
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- ADVANCED FORM JS -->
		@vite('resources/assets/js/advancedform.js')

    @endsection
