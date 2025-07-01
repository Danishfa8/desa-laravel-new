<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="desa_id" class="form-label">Desa</label>
            <select name="desa_id" id="desa_id" class="form-control select2 @error('desa_id') is-invalid @enderror">
                <option value="">-- Pilih Desa --</option>
                @foreach ($desas as $item)
                    <option value="{{ $item->id }}" {{ old('desa_id', $jembatanDesa->desa_id) == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_desa }}
                    </option>
                @endforeach
            </select>
            @error('desa_id')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="rt_rw_desa_id">RT/RW</label>
            <select name="rt_rw_desa_id" id="rt_rw_desa_id" class="form-control" required>
                <option value="">-- Pilih RT/RW --</option>
            </select>
        </div>

        <div class="form-group mb-2 mb20">
            <label for="nama_jembatan">Nama Jembatan</label>
            <input type="text" name="nama_jembatan" id="nama_jembatan" class="form-control @error('nama_jembatan') is-invalid @enderror"
                value="{{ old('nama_jembatan', $jembatanDesa->nama_jembatan) }}" placeholder="Nama Jembatan">
            @error('nama_jembatan')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="panjang">Panjang</label>
            <input type="number" name="panjang" id="panjang" class="form-control @error('panjang') is-invalid @enderror"
                value="{{ old('panjang', $jembatanDesa->panjang) }}" placeholder="Panjang (Meter)">
            @error('panjang')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="lebar">Lebar</label>
            <input type="number" name="lebar" id="lebar" class="form-control @error('lebar') is-invalid @enderror"
                value="{{ old('lebar', $jembatanDesa->lebar) }}" placeholder="Lebar (Meter)">
            @error('lebar')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="kondisi">Kondisi</label>
            <select name="kondisi" id="kondisi" class="form-control @error('kondisi') is-invalid @enderror">
                <option value="">-- Pilih Kondisi --</option>
                <option value="Baik" {{ old('kondisi', $jembatanDesa->kondisi) == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Rusak Ringan" {{ old('kondisi', $jembatanDesa->kondisi) == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                <option value="Rusak Berat" {{ old('kondisi', $jembatanDesa->kondisi) == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
            </select>
            @error('kondisi')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
                value="{{ old('lokasi', $jembatanDesa->lokasi) }}" placeholder="Lokasi">
            @error('lokasi')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <input type="hidden" name="updated_by" value="{{ Auth::user()->name }}">

        <div class="form-group mb-2 mb20">
            <label for="latitude">Latitude</label>
            <input type="text" name="latitude" id="latitude" class="form-control @error('latitude') is-invalid @enderror"
                value="{{ old('latitude', $jembatanDesa->latitude) }}" placeholder="Latitude">
            @error('latitude')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="longitude">Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control @error('longitude') is-invalid @enderror"
                value="{{ old('longitude', $jembatanDesa->longitude) }}" placeholder="Longitude">
            @error('longitude')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>
    </div>

    <div class="form-group mb-2 mb20">
    <label for="foto" class="form-label">Foto Jembatan</label>
    <input type="file" name="foto" id="foto" accept="image/*"
           class="form-control @error('foto') is-invalid @enderror">
    <small class="text-muted">Format: jpg, jpeg, png. Maksimal 2MB.</small>
    @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror

    @if ($jembatanDesa->foto)
        <div class="mt-2">
            <img src="{{ asset('storage/foto_jembatan/' . $jembatanDesa->foto) }}" alt="Foto Jembatan"
                 style="max-height: 150px; border: 1px solid #ccc;">
        </div>
    @endif
</div>


    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</div>
