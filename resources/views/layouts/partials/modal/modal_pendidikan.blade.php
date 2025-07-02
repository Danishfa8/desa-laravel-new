<div id="showModal{{ $pendidikanDesa->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="showModalLabel{{ $pendidikanDesa->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel{{ $pendidikanDesa->id }}">
                    Detail Pendidikan Desa {{ $pendidikanDesa->desa->nama_desa }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Nama Desa</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->desa->nama_desa }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>RT/RW</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->rtRwDesa->rt }}/{{ $pendidikanDesa->rtRwDesa->rw }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Tahun</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->tahun }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Jenis Pendidikan</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->jenis_pendidikan }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Status Pendidikan</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->status_pendidikan }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Foto</strong></div>
                    <div class="col-sm-8">
                        @if ($pendidikanDesa->foto)
                            <img src="{{ asset('storage/foto_pendidikan/' . $pendidikanDesa->foto) }}"
                                 alt="Foto Pendidikan"
                                 class="img-fluid rounded shadow-sm"
                                 style="max-height: 200px;">
                        @else
                            Tidak ada foto
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Latitude</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->latitude }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Longitude</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->longitude }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Status</strong></div>
                    <div class="col-sm-8">
                        <span class="badge
                            @if ($pendidikanDesa->status == 'Approved') bg-success
                            @elseif ($pendidikanDesa->status == 'Pending') bg-warning text-dark
                            @elseif ($pendidikanDesa->status == 'Rejected') bg-danger
                            @elseif ($pendidikanDesa->status == 'Arsip') bg-primary
                            @else bg-secondary @endif">
                            {{ $pendidikanDesa->status }}
                        </span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Created By</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->created_by }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Reject Reason</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->reject_reason ?? 'Tidak ada keterangan' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Approved By</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->approved_by ?? 'Belum Di Approved' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Approved At</strong></div>
                    <div class="col-sm-8">{{ $pendidikanDesa->approved_at ?? 'Belum Di Approved' }}</div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
