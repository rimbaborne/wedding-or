
@extends('admin.layouts.layout')

@section('styles')



@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Data Pemesanan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pemesanan</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">No</th>
                                    <th class="border-bottom-0">Invoice</th>
                                    <th class="border-bottom-0">Status Pembayaran</th>
                                    <th class="border-bottom-0">Status Pemesanan</th>
                                    <th class="border-bottom-0">Nama</th>
                                    <th class="border-bottom-0">No. Telepon</th>
                                    <th class="border-bottom-0">Alamat</th>
                                    <th class="border-bottom-0">Tanggal</th>
                                    <th class="border-bottom-0" width="100px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemesanans as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->id.'-'.$item->created_at->format('dmY') }}</td>
                                        <td>{{ $item->status_pemesanan }}</td>
                                        <td>{{ $item->status_pembayaran }}</td>
                                        <td>{{ $item->nama_pemesan }}</td>
                                        <td>{{ $item->no_telepon_pemesan }}</td>
                                        <td>{{ $item->alamat_pemesan }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('pemesanan.invoice', $item->uuid) }}" class="btn btn-primary"><i class="fa fa-file"></i> Invoice</a>
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
