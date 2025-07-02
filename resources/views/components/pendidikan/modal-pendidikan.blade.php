@props(['item'])

<div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pendidikan Desa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">

                {{-- ✅ Foto --}}
                @if ($item->foto)
                    <div class="text-center mb-3">
                        <img src="{{ asset('storage/foto_pendidikan/' . $item->foto) }}"
                             alt="Foto Pendidikan"
                             class="img-fluid rounded shadow-sm"
                             style="max-height: 300px;">
                    </div>
                @endif

                <div class="mb-2"><strong>Desa:</strong> {{ $item->desa->nama_desa ?? '-' }}</div>
                <div class="mb-2"><strong>RT/RW:</strong> {{ $item->rtRwDesa->rt ?? '-' }}/{{ $item->rtRwDesa->rw ?? '-' }}</div>
                <div class="mb-2"><strong>Tahun:</strong> {{ $item->tahun }}</div>
                <div class="mb-2"><strong>Jenis Pendidikan:</strong> {{ $item->jenis_pendidikan }}</div>
                <div class="mb-2"><strong>Status Pendidikan:</strong> {{ $item->status_pendidikan }}</div>
                <div class="mb-2"><strong>Created By:</strong> {{ $item->created_by }}</div>
                <div class="mb-2"><strong>Updated By:</strong> {{ $item->updated_by ?? '-' }}</div>
                <div class="mb-2"><strong>Status:</strong>
                    <span class="badge
                        @if ($item->status === 'Approved') bg-success
                        @elseif ($item->status === 'Pending') bg-warning text-dark
                        @elseif ($item->status === 'Rejected') bg-danger
                        @elseif ($item->status === 'Arsip') bg-primary
                        @else bg-secondary @endif">
                        {{ $item->status }}
                    </span>
                </div>

                @if ($item->status === 'Rejected' && $item->reject_reason)
                    <div class="mb-2">
                        <strong>Alasan Penolakan:</strong>
                        <div class="alert alert-danger mt-1 mb-0">
                            {{ $item->reject_reason }}
                        </div>
                    </div>
                @endif

                <div class="mb-2"><strong>Approved By:</strong> {{ $item->approved_by ?? '-' }}</div>
                <div class="mb-2"><strong>Approved At:</strong> {{ $item->approved_at ?? '-' }}</div>
                <div class="mb-2"><strong>Latitude:</strong> {{ $item->latitude ?? '-' }}</div>
                <div class="mb-2"><strong>Longitude:</strong> {{ $item->longitude ?? '-' }}</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
