<div class="map">
     <gmp-map center={{$latitude}},{{$longitud}} zoom="16" map-id="DEMO_MAP_ID">
    	<gmp-advanced-marker position={{$latitude}},{{$longitud}} title="{{$bixName}}"></gmp-advanced-marker>
    </gmp-map>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClQ5TY8C_AstL1EOMYuldgVbnaOe0wS5c&callback=initMap&libraries=marker"></script>
</div>
