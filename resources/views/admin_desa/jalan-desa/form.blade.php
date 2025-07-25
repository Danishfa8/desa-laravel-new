<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="desa_id" class="form-label">{{ __('Desa') }}</label>
            <select name="desa_id" id="desa_id" class="form-control select2 @error('desa_id') is-invalid @enderror">
                <option value="">-- Pilih Desa --</option>
                @foreach ($desas as $item)
                    <option value="{{ $item->id }}"
                        {{ old('desa_id', $jalanDesa?->desa_id) == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_desa }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('desa_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rt_rw_desa_id">RT/RW</label>
            <select name="rt_rw_desa_id" id="rt_rw_desa_id" class="form-control" required>
                <option value="">-- Pilih RT/RW --</option>
            </select>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama_jalan" class="form-label">{{ __('Nama Jalan') }}</label>
            <input type="text" name="nama_jalan" class="form-control @error('nama_jalan') is-invalid @enderror"
                value="{{ old('nama_jalan', $jalanDesa?->nama_jalan) }}" id="nama_jalan" placeholder="Nama Jalan">
            {!! $errors->first('nama_jalan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="panjang" class="form-label">{{ __('Panjang') }}</label>
            <input type="number" name="panjang" class="form-control @error('panjang') is-invalid @enderror"
                value="{{ old('panjang', $jalanDesa?->panjang) }}" id="panjang" placeholder="Panjang (Meter)">
            {!! $errors->first('panjang', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lebar" class="form-label">{{ __('Lebar') }}</label>
            <input type="number" name="lebar" class="form-control @error('lebar') is-invalid @enderror"
                value="{{ old('lebar', $jalanDesa?->lebar) }}" id="lebar" placeholder="Lebar (Meter)">
            {!! $errors->first('lebar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kondisi" class="form-label">{{ __('Kondisi') }}</label>
            <select name="kondisi" class="form-control @error('kondisi') is-invalid @enderror" id="kondisi">
                <option value="">-- Pilih Kondisi --</option>
                <option value="Baik" {{ old('kondisi', $jalanDesa?->kondisi) == 'Baik' ? 'selected' : '' }}>Baik
                </option>
                <option value="Rusak Ringan"
                    {{ old('kondisi', $jalanDesa?->kondisi) == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan
                </option>
                <option value="Rusak Berat"
                    {{ old('kondisi', $jalanDesa?->kondisi) == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat
                </option>
            </select>
            {!! $errors->first('kondisi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jenis_jalan" class="form-label">{{ __('Jenis Jalan') }}</label>
            <select name="jenis_jalan" class="form-control @error('jenis_jalan') is-invalid @enderror" id="jenis_jalan">
                <option value="">-- Pilih jenis_jalan --</option>
                <option value="Aspal" {{ old('jenis_jalan', $jalanDesa?->jenis_jalan) == 'Aspal' ? 'selected' : '' }}>
                    Aspal
                </option>
                <option value="Beton" {{ old('jenis_jalan', $jalanDesa?->jenis_jalan) == 'Beton' ? 'selected' : '' }}>
                    Beton
                </option>
                <option value="Makadam"
                    {{ old('jenis_jalan', $jalanDesa?->jenis_jalan) == 'Makadam' ? 'selected' : '' }}>Makadam
                </option>
                <option value="Tanah" {{ old('jenis_jalan', $jalanDesa?->jenis_jalan) == 'Tanah' ? 'selected' : '' }}>
                    Tanah
                </option>

            </select>
            {!! $errors->first('jenis_jalan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lokasi" class="form-label">{{ __('Lokasi') }}</label>
            <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
                value="{{ old('lokasi', $jalanDesa?->lokasi) }}" id="lokasi" placeholder="Lokasi">
            {!! $errors->first('lokasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <input type="hidden" name="created_by" value="{{ Auth::user()->name }}">
        <input type="hidden" name="updated_by" class="form-control" value="{{ $kelembagaanDesa->updated_by ?? '-' }}">
        <input type="hidden" name="status" class="form-control" value="Arsip" id="status" placeholder="Status">
        <div class="form-group mb-2 mb20">
            <label for="latitude" class="form-label">{{ __('Latitude') }}</label>
            <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror"
                value="{{ old('latitude', $jalanDesa?->latitude) }}" id="latitude" placeholder="Latitude">
            {!! $errors->first('latitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <small class="text-danger">*Opsional</small>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="longitude" class="form-label">{{ __('Longitude') }}</label>
            <input type="text" name="longitude" class="form-control @error('longitude') is-invalid @enderror"
                value="{{ old('longitude', $jalanDesa?->longitude) }}" id="longitude" placeholder="Longitude">
            {!! $errors->first('longitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <small class="text-danger">*Opsional</small>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
