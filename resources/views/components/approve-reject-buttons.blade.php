@props(['item', 'table', 'statusField' => 'status'])

@if ($item->{$statusField} === 'Pending')
    <div class="d-flex align-items-center gap-1 flex-wrap">
        <!-- Tombol Approve -->
        <form action="{{ route('admin_kabupaten.approval', ['table' => $table, 'id' => $item->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('PUT')
            <input type="hidden" name="status" value="Approved">
            <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Yakin ingin menyetujui data ini?')">
                ✅ Approve
            </button>
        </form>

        <!-- Tombol Reject -->
        <button type="button" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $item->id }}">
            ❌ Reject
        </button>

        <!-- Modal Reject -->
        <div class="modal fade" id="rejectModal{{ $item->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rejectModalLabel{{ $item->id }}">Alasan Penolakan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <form action="{{ route('admin_kabupaten.approval', ['table' => $table, 'id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="Rejected">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="reject_reason">Tuliskan alasan penolakan:</label>
                                <textarea name="reject_reason" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Kirim Penolakan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@elseif ($item->{$statusField} === 'Approved')
    <span class="badge bg-success px-3 py-1 fs-6">✔ Disetujui</span>
@elseif ($item->{$statusField} === 'Rejected')
    <span class="badge bg-danger px-3 py-1 fs-6" data-bs-toggle="tooltip" title="Alasan: {{ $item->reject_reason }}">
        ✖ Ditolak
    </span>
@else
    <span class="badge bg-secondary px-3 py-1 fs-6">{{ $item->{$statusField} }}</span>
@endif
