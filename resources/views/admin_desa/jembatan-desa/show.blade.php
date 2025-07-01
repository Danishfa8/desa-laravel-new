@extends('layouts.app')

@section('template_title')
    {{ $jembatanDesa->name ?? __('Show') . " " . __('Jembatan Desa') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="card-title">{{ __('Show') }} Jembatan Desa</span>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin_desa.jembatan-desa.index') }}">
                        {{ __('Back') }}
                    </a>
                </div>

                <div class="card-body bg-white">
                    <div class="form-group mb-2">
                        <strong>Desa Id:</strong>
                        {{ $jembatanDesa->desa_id }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>RT/RW Desa Id:</strong>
                        {{ $jembatanDesa->rt_rw_desa_id }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Nama Jembatan:</strong>
                        {{ $jembatanDesa->nama_jembatan }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Panjang:</strong>
                        {{ $jembatanDesa->panjang }} M
                    </div>
                    <div class="form-group mb-2">
                        <strong>Lebar:</strong>
                        {{ $jembatanDesa->lebar }} M
                    </div>
                    <div class="form-group mb-2">
                        <strong>Kondisi:</strong>
                        {{ $jembatanDesa->kondisi }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Lokasi:</strong>
                        {{ $jembatanDesa->lokasi }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Created By:</strong>
                        {{ $jembatanDesa->created_by }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Updated By:</strong>
                        {{ $jembatanDesa->updated_by ?? '-' }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Status:</strong>
                        {{ $jembatanDesa->status }}
                    </div>

                    @if ($jembatanDesa->status === 'Rejected' && $jembatanDesa->reject_reason)
                        <div class="form-group mb-2">
                            <strong>Alasan Penolakan:</strong>
                            <div class="alert alert-danger mt-1 mb-0">
                                {{ $jembatanDesa->reject_reason }}
                            </div>
                        </div>
                    @endif

                    <div class="form-group mb-2">
                        <strong>Approved By:</strong>
                        {{ $jembatanDesa->approved_by ?? '-' }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Approved At:</strong>
                        {{ $jembatanDesa->approved_at ?? '-' }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Latitude:</strong>
                        {{ $jembatanDesa->latitude ?? '-' }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Longitude:</strong>
                        {{ $jembatanDesa->longitude ?? '-' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
