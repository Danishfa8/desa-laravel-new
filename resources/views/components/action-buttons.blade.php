@props([
    'item',
    'routePrefix',
    'showRoute' => true,
    'editRoute' => true,
    'deleteRoute' => true,
    'ajukanRoute' => false,
    'statusField' => 'status',
])

@php
    $resource = explode('.', $routePrefix)[1];
    $status = $item->{$statusField};
@endphp

<td>
    {{-- Button Show --}}
    @if ($showRoute)
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#showModal{{ $item->id }}">
            <i class="las la-eye"></i> {{ __('Show') }}
        </button>
    @endif

    {{-- Button Edit --}}
    @if ($editRoute && in_array($status, ['Arsip', 'Rejected']))
        <a class="btn btn-sm btn-success" href="{{ route($routePrefix . '.edit', $item->id) }}">
            <i class="las la-edit"></i> {{ __('Edit') }}
        </a>
    @endif

    {{-- Button Delete --}}
    @if ($deleteRoute && in_array($status, ['Arsip', 'Rejected']))
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $item->id }}">
            <i class="las la-trash"></i> {{ __('Delete') }}
        </button>
    @endif

    {{-- Button Ajukan --}}
    @if ($ajukanRoute && in_array($status, ['Arsip', 'Rejected']))
        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
            data-bs-target="#ajukanModal{{ $item->id }}">
            <i class="las la-paper-plane"></i> {{ __('Ajukan') }}
        </button>
    @endif
</td>

{{-- Modal Delete --}}
@if ($deleteRoute && in_array($status, ['Arsip', 'Rejected']))
    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{ route($routePrefix . '.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endif

{{-- Modal Ajukan --}}
@if ($ajukanRoute && in_array($status, ['Arsip', 'Rejected']))
    <div class="modal fade" id="ajukanModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="{{ route('admin_desa.universal.ajukan', ['resource' => $resource, 'id' => $item->id]) }}">
                @csrf
                @method('PATCH')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Pengajuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        Yakin ingin mengajukan data ini ke Admin Kabupaten?<br>
                        Setelah diajukan, data tidak dapat diedit atau dihapus.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Ajukan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endif
