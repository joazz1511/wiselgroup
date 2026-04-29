@extends('layouts.app')

@section('content')

<!-- LOCATION -->
<section id="ourlocation" class="sectiondeere bg-grey1">
    <div class="container">

        <div class="openingpage">
            <h1 class="text-uppercase txt-green3">Our Location</h1>
        </div>

        <div class="page-header">
            <h2 class="txt-grey2">Find our nearest Branch Office</h2>
        </div>

        <div class="row">

            <!-- MAP -->
            <div class="col-md-9">
                <div id="map" style="height:400px; border:1px solid #ccc;"></div>
            </div>

            <!-- DEALER LIST -->
            <div class="col-md-3">
                <div style="height:400px; overflow-y:auto; border:1px solid #ccc; background:#fff;">

                    <div style="padding:10px; font-weight:bold; border-bottom:1px solid #ddd;">
                        John Deere Dealer
                    </div>

                    <ul id="dealerList" style="list-style:none; padding:0; margin:0;">
                        @foreach($dealerData as $dealer)
                            <li class="dealer-item"
                                data-lat="{{ $dealer->latitude }}"
                                data-lng="{{ $dealer->longitude }}"
                                style="padding:10px; cursor:pointer; border-bottom:1px solid #eee;">

                                {{ $dealer->dealer_name }}

                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>

        <script>
            var dealers = @json($dealerData ?? []);
        </script>

    </div>
</section>

<!-- contact -->
<section id="contactus" class="sectiondeere">
    <div class="container">

        <div class="openingpage">
            <h1 class="text-uppercase txt-green3">Contact Us</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}">
            @csrf

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Source</label>
                <input type="text" name="source" class="form-control">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-deere_green">
                Submit
            </button>

        </form>

    </div>
</section>

<!-- leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    var map = L.map('map').setView([-2.5, 118], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var dealers = @json($dealerData ?? []);
    var markers = [];

    // icon pin
    var greenIcon = new L.Icon({
        iconUrl: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png',
        iconSize: [32, 32],
        iconAnchor: [16, 32],
        popupAnchor: [0, -30]
    });

    // LOOP MARKER
    dealers.forEach(function(d, index) {

        if (d.latitude && d.longitude) {

            var popupContent = `
                <div style="min-width:200px">
                    <b>${d.dealer_name ?? ''}</b><br>
                    ${d.city ?? ''}<br>
                    📞 ${d.phone ?? '-'}
                </div>
            `;

            var marker = L.marker([d.latitude, d.longitude], { icon: greenIcon })
                .addTo(map)
                .bindPopup(popupContent);

            markers.push({
                marker: marker,
                lat: d.latitude,
                lng: d.longitude
            });
        }
    });

    // fokus map
    document.querySelectorAll('.dealer-item').forEach(function(item, index) {

        item.addEventListener('click', function() {

            var lat = this.getAttribute('data-lat');
            var lng = this.getAttribute('data-lng');

            if (lat && lng) {
                map.setView([lat, lng], 10);

                // pop up marker
                if (markers[index]) {
                    markers[index].marker.openPopup();
                }
            }

            // highlight
            document.querySelectorAll('.dealer-item').forEach(el => el.style.background = '');
            this.style.background = '#e6f4ea';
        });

    });

</script>

@endsection