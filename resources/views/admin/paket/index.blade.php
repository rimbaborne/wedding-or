
    @extends('admin.layouts.layout')

    @section('styles')



    @endsection

    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Paket {{ $jenis }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Paket</a></li>
                <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $jenis }}</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pull-right">
                        <a href="{{ route('admin.paket.create', $jenis) }}" class="btn btn-info">Tambah Data <i class="fa fa-plus-circle"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">No</th>
                                        <th class="border-bottom-0">Nama</th>
                                        <th class="border-bottom-0">Keterangan</th>
                                        <th class="border-bottom-0">Harga</th>
                                        <th class="border-bottom-0">Diskon</th>
                                        <th class="border-bottom-0">Gambar</th>
                                        <th class="border-bottom-0" width="100px"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($pakets as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ 'Rp. ' . number_format($item->nominal, 0, ',', '.') }}</td>
                                            <td>{{ $item->diskon }}</td>
                                            <td>
                                                <a href="{{ asset('storage/gambar/'.$item->gambar) }}" target="_blank">
                                                    <img src="{{ asset('storage/gambar/'.$item->gambar) }}" alt="" width="100px">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.paket.edit', ['jenis' => $jenis, 'id' => $item->id]) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('admin.paket.destroy', ['jenis' => $jenis, 'id' => $item->id]) }}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    @endsection

    @section('scripts')

    <!-- SELECT2 JS -->
    <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
    @vite('resources/assets/js/select2.js')

    <!-- DATA TABLE JS-->
    <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    @vite('resources/assets/js/table-data.js')

    @endsection
