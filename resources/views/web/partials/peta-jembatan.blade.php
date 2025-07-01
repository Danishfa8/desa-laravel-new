<div id="map" style="width: 100%; height: 100%; min-height: 600px; z-index: 0;"></div>

@if($jembatanMarkers->isEmpty())
    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-80 text-gray-700 font-semibold text-sm z-[999]">
        Tidak ada data jembatan untuk ditampilkan di desa ini.
    </div>
@endif

{{-- Render semua modal jembatan --}}
@foreach ($jembatanMarkers as $jembatan)
    @include('layouts.partials.modal.modal_jembatan', ['jembatanDesa' => $jembatan])
@endforeach

<script>
    const map = L.map('map').setView([
        {{ $desaLat ?? '-6.9514' }},
        {{ $desaLng ?? '109.4275' }}
    ], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const markers = L.markerClusterGroup();

    const jembatanIcon = L.icon({
        iconUrl: '{{ asset("assets/icons/jembatan.png") }}',
        iconSize: [32, 37],
        iconAnchor: [16, 37],
        popupAnchor: [0, -30]
    });

    @foreach ($jembatanMarkers as $jembatan)
        {
            let marker = L.marker(
                [{{ $jembatan->latitude }}, {{ $jembatan->longitude }}],
                { icon: jembatanIcon }
            );

            marker.on('click', () => {
                openModal('{{ $jembatan->id }}');
            });

            markers.addLayer(marker);
        }
    @endforeach

    map.addLayer(markers);

    if (markers.getLayers().length > 0) {
        map.fitBounds(markers.getBounds(), { padding: [20, 20] });
    }

    function openModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    function handleOutsideClick(event, id) {
        const modalContent = event.currentTarget.querySelector('.bg-white');
        if (!modalContent.contains(event.target)) {
            closeModal(id);
        }
    }
</script>


<!-- <div id="map" style="width: 100%; height: 100%; z-index: 0;"></div>

@if($jembatanMarkers->isEmpty())
    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-80 text-gray-700 font-semibold text-sm z-[999]">
        Tidak ada data jembatan untuk ditampilkan di desa ini.
    </div>
@endif

{{-- Hanya render modal jika ada jembatan --}}
@foreach ($jembatanMarkers as $jembatan)
    @include('layouts.partials.modal.modal_jembatan', ['jembatanDesa' => $jembatan])
@endforeach

<script>
    const map = L.map('map').setView([
        {{ $desaLat ?? '-6.9514' }},
        {{ $desaLng ?? '109.4275' }}
    ], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const markers = L.markerClusterGroup();

    const jembatanIcon = L.icon({
        iconUrl: '{{ asset("assets/icons/jembatan.png") }}',
        iconSize: [32, 37],
        iconAnchor: [16, 37],
        popupAnchor: [0, -30]
    });

    @foreach ($jembatanMarkers as $jembatan)
        const marker = L.marker(
            [{{ $jembatan->latitude }}, {{ $jembatan->longitude }}],
            { icon: jembatanIcon }
        );

        marker.on('click', () => {
            openModal('{{ $jembatan->id }}');
        });

        markers.addLayer(marker);
    @endforeach

    map.addLayer(markers);

    if (markers.getLayers().length > 0) {
        map.fitBounds(markers.getBounds(), { padding: [20, 20] });
    }

    function openModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    function handleOutsideClick(event, id) {
        const modalContent = event.currentTarget.querySelector('.bg-white');
        if (!modalContent.contains(event.target)) {
            closeModal(id);
        }
    }
</script> -->
