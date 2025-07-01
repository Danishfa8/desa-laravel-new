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
                                        <td>{{ $jembatanDesa->created_by }}</td>
                                        <td>
                                            {{-- Komponen tombol approve/reject --}}
                                            <x-approve-reject-buttons :item="$jembatanDesa" table="jembatan_desas" />
                                        </td>
                                    </tr>
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
