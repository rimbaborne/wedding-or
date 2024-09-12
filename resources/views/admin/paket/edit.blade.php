
    @extends('admin.layouts.layout')

    @section('styles')
    @endsection

    @section('content')

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Tambah Paket {{ $jenis }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Paket</a></li>
                <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $jenis }}</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.paket.update', ['jenis' => $jenis, 'id' => $data->id]) }}" method="post" enctype="multipart/form-data"
                            onsubmit="return confirm('Anda yakin ingin memperbarui data ini?')">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Paket</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control required " placeholder="Nama Paket" name="nama" id="name" value="{{ $data->nama }}"
                                    onkeyup="
                                        var slug = document.getElementById('name').value;
                                        slug = slug.replace(/ /g,'-');
                                        slug = slug.toLowerCase();
                                        document.getElementById('slug').value = slug;
                                    ">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Slug" id="slug" readonly value="{{ $data->slug }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label required class="col-sm-2 col-form-label">Nominal</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="">
                                                Rp.
                                            </div>
                                        </div><!--  -->
                                        <input type="text" class="form-control currency required" name="nominal" placeholder="0" id="nominal" value="{{ number_format($data->nominal, 0, ',', '.') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Diskon</label>
                                <div class="col-sm-3">
                                    <div class="input-group">

                                        <input type="number" class="form-control required" placeholder="Diskon" value="0" id="diskon" name="diskon" value="{{ $data->diskon }}">
                                        <div class="input-group-text">
                                            <div class="">
                                                %
                                            </div>
                                        </div><!--  -->
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label required class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="content" name="keterangan">{{ $data->keterangan }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Foto Paket</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/gambar/'.$data->gambar) }}" alt="" style="width:300px">

                                    <div class="mb-3">
                                        <input class="form-control" type="file" id="formFile" name="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-5 text-right">
                                <button type="submit" class="btn btn-primary pr-4 pl-4">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    @endsection

    @section('scripts')

    <script>
        var currencyFormatter = function(event) {
            var el = this;
            var x = event.keyCode;
            if ( (x > 64 && x < 91) || (x < 48 || x > 57) )
                event.preventDefault();
            setTimeout(function () {
                var v = el.value.replace(/\D/g, '');
                v = (v/1).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                el.value = v;
            }, 10);
        };
        document.getElementById("nominal").addEventListener("keyup", currencyFormatter);
    </script>

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
