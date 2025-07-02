@props(['item'])

<div id="showModal{{ $item->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="showModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel{{ $item->id }}">
                    Detail Pendidikan Desa {{ $item->desa->nama_desa ?? '-' }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Nama Desa</strong></div>
                    <div class="col-sm-8">{{ $item->desa->nama_desa ?? '-' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>RT/RW</strong></div>
                    <div class="col-sm-8">
                        {{ optional($item->rtRwDesa)->rt ?? '-' }}/{{ optional($item->rtRwDesa)->rw ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Tahun</strong></div>
                    <div class="col-sm-8">{{ $item->tahun }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Jenis Pendidikan</strong></div>
                    <div class="col-sm-8">{{ $item->jenis_pendidikan }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Status Pendidikan</strong></div>
                    <div class="col-sm-8">{{ $item->status_pendidikan }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Foto</strong></div>
                    <div class="col-sm-8">
                        @if ($item->foto)
                            <img src="{{ asset('storage/foto_pendidikan/' . $item->foto) }}"
                                alt="Foto Pendidikan"
                                style="max-width: 100%; height: auto; border: 1px solid #ccc;">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Latitude</strong></div>
                    <div class="col-sm-8">{{ $item->latitude }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Longitude</strong></div>
                    <div class="col-sm-8">{{ $item->longitude }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Dibuat Oleh</strong></div>
                    <div class="col-sm-8">{{ $item->created_by }}</div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
