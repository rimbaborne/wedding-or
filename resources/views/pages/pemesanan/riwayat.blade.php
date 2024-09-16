
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

@auth
    @if ($pemesanan)
    <div class="row mt-5">
        <div class=" col-md-12">

                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Pemesanan</h3>
                    </div>
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
                                    @foreach ($pemesanan as $index => $item)
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
    @else
        <div class="card cart mt-5">
            <div class="card-header">
                <h3 class="card-title">Riwayat Pemesanan</h3>
            </div>
            <div class="card-body">
                <div class="mt-4 text-center">
                    <h4>Belum ada pemesanan</h4>
                </div>
            </div>
        </div>
    @endif
@else
<div class="row mt-5">
    <div class=" col-md-12">
        <div class="card cart">
            <div class="card-body pt-7 pb-7">
                <h4 class="text-center">Anda harus login / daftar akun terlebih dahulu</h4>
                <div class="text-center mt-5">
                    <div class="profile-1 mt-2">
                        <a href="{{url('auth/login')}}" class="btn btn-primary ">Login</a>
                        <a href="{{url('auth/register')}}" class="btn btn-outline-primary ">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth


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
