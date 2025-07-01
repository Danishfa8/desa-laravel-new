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
                <div class="card-header">
                    <span id="card_title">{{ __('Jembatan Desa (Admin Kabupaten)') }}</span>
                </div>

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
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
                                                @else bg-secondary
                                                @endif">
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
                                                @elseif ($jembatanDesa->status === 'Rejected') bg-danger
                                                @else bg-secondary @endif">
                                                {{ $jembatanDesa->status }}
                                            </span>
                                        </td>
                                        <td class="d-flex gap-1 flex-wrap">
                                            {{-- Tombol Lihat --}}
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#showModal{{ $jembatanDesa->id }}">
                                                <i class="las la-eye"></i> Lihat
                                            </button>

                                            <x-button-edit routePrefix="admin_kabupaten.jembatan-desa" :id="$jembatanDesa->id" :status="$jembatanDesa->status" />

                                            {{-- Komponen tombol approve/reject --}}
                                            <x-approve-reject-buttons :item="$jembatanDesa" table="jembatan_desas" />
                                        </td>
                                    </tr>

                                    {{-- Modal Detail --}}
                                    <div class="modal fade" id="showModal{{ $jembatanDesa->id }}" tabindex="-1" aria-labelledby="showModalLabel{{ $jembatanDesa->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showModalLabel{{ $jembatanDesa->id }}">Detail Jembatan Desa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group list-group-flush">
                                                    @if ($jembatanDesa->foto)
    <div class="text-center mb-3">
        <img src="{{ asset('storage/foto_jembatan/' . $jembatanDesa->foto) }}"
             alt="Foto Jembatan"
             class="img-fluid rounded shadow-sm"
             style="max-height: 300px;">
    </div>
@endif

                                                        <li class="list-group-item"><strong>Desa:</strong> {{ $jembatanDesa->desa->nama_desa ?? '-' }}</li>
                                                        <li class="list-group-item"><strong>RT/RW:</strong> {{ $jembatanDesa->rtRwDesa->rt ?? '-' }}/{{ $jembatanDesa->rtRwDesa->rw ?? '-' }}</li>
                                                        <li class="list-group-item"><strong>Nama Jembatan:</strong> {{ $jembatanDesa->nama_jembatan }}</li>
                                                        <li class="list-group-item"><strong>Panjang:</strong> {{ $jembatanDesa->panjang }} meter</li>
                                                        <li class="list-group-item"><strong>Lebar:</strong> {{ $jembatanDesa->lebar }} meter</li>
                                                        <li class="list-group-item"><strong>Kondisi:</strong> {{ $jembatanDesa->kondisi }}</li>
                                                        <li class="list-group-item"><strong>Lokasi:</strong> {{ $jembatanDesa->lokasi }}</li>
                                                        <li class="list-group-item"><strong>Created By:</strong> {{ $jembatanDesa->created_by }}</li>
                                                        <li class="list-group-item"><strong>Status:</strong> {{ $jembatanDesa->status }}</li>
                                                        @if ($jembatanDesa->status === 'Approved')
                                                            <li class="list-group-item"><strong>Approved By:</strong> {{ $jembatanDesa->approved_by }}</li>
                                                            <li class="list-group-item"><strong>Approved At:</strong> {{ $jembatanDesa->approved_at }}</li>
                                                        @endif
                                                        <li class="list-group-item"><strong>Latitude:</strong> {{ $jembatanDesa->latitude ?? '-' }}</li>
                                                        <li class="list-group-item"><strong>Longitude:</strong> {{ $jembatanDesa->longitude ?? '-' }}</li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    @include('layouts.pagination', ['paginator' => $jembatanDesas])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
