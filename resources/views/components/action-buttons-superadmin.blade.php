@props([
    'item',
    'routePrefix',
    'showRoute' => true,
    'editRoute' => true,
    'deleteRoute' => true,
    'statusField' => 'status',
])

<td>
    {{-- Button Show --}}
    @if ($showRoute)
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#showModal{{ $item->id }}">
            <i class="las la-eye"></i> {{ __('Show') }}
        </button>
    @endif

    {{-- Button Edit (Selalu bisa diakses oleh Superadmin) --}}
    @if ($editRoute)
        <a class="btn btn-sm btn-success" href="{{ route($routePrefix . '.edit', $item->id) }}">
            <i class="las la-edit"></i> {{ __('Edit') }}
        </a>
    @endif

    {{-- Button Delete (Selalu bisa diakses oleh Superadmin) --}}
    @if ($deleteRoute)
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $item->id }}">
            <i class="las la-trash"></i> {{ __('Delete') }}
        </button>
    @endif
</td>

{{-- Modal Delete --}}
@if ($deleteRoute)
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
