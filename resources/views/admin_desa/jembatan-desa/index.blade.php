@extends('layouts.app')

@section('template_title')
    Jembatan Desa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @include('layouts.messages')
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">{{ __('Jembatan Desa') }}</span>
                    <a href="{{ route('admin_desa.jembatan-desa.create') }}" class="btn btn-primary btn-sm">
                        {{ __('Create New') }}
                    </a>
                </div>

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Desa</th>
                                    <th>RT/RW</th>
                                    <th>Nama Jembatan</th>
                                    <th>Panjang</th>
                                    <th>Lebar</th>
                                    <th>Kondisi</th>
                                    <th>Lokasi</th>
                                    <th>Foto</th> {{-- ✅ Foto dipindah ke sini --}}
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jembatanDesas as $jembatanDesa)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $jembatanDesa->desa->nama_desa ?? '-' }}</td>
                                        <td>{{ $jembatanDesa->rtRwDesa->rt ?? '-' }}/{{ $jembatanDesa->rtRwDesa->rw ?? '-' }}</td>
                                        <td>{{ $jembatanDesa->nama_jembatan }}</td>
                                        <td>{{ $jembatanDesa->panjang }} M</td>
                                        <td>{{ $jembatanDesa->lebar }} M</td>
                                        <td>
                                            <span class="badge
                                                @if ($jembatanDesa->kondisi == 'Baik') bg-success
                                                @elseif($jembatanDesa->kondisi == 'Rusak Ringan') bg-warning text-dark
                                                @elseif($jembatanDesa->kondisi == 'Rusak Berat') bg-danger
                                                @else bg-secondary @endif">
                                                {{ $jembatanDesa->kondisi }}
                                            </span>
                                        </td>
                                        <td>{{ $jembatanDesa->lokasi }}</td>
                                        <td>
    @if ($jembatanDesa->foto)
        <img src="{{ asset('storage/foto_jembatan/' . $jembatanDesa->foto) }}"
             alt="Foto Jembatan"
             style="max-height: 60px; border-radius: 4px;">
    @else
        <span class="text-muted">Tidak ada</span>
    @endif
</td>


                                        <td>{{ $jembatanDesa->created_by }}</td>
                                        <td>
                                            <span class="badge
                                                @if ($jembatanDesa->status === 'Approved') bg-success
                                                @elseif ($jembatanDesa->status === 'Pending') bg-warning text-dark
                                                @elseif ($jembatanDesa->status === 'Arsip') bg-secondary
                                                @elseif ($jembatanDesa->status === 'Rejected') bg-danger
                                                @else bg-light text-dark @endif">
                                                {{ $jembatanDesa->status }}
                                            </span>
                                        </td>

                                        {{-- Komponen Tombol Aksi --}}
                                        <x-action-buttons 
                                            :item="$jembatanDesa" 
                                            route-prefix="admin_desa.jembatan-desa"
                                            :ajukan-route="true" 
                                            status-field="status" 
                                        />
                                        <x-jembatan-desa.modal-detail :item="$jembatanDesa" />
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @include('layouts.pagination', ['paginator' => $jembatanDesas])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
