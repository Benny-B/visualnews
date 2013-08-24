 <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0}

      #map-canvas {position: relative; z-index: 100; height: 100%;display: inline; width: 100%; float: right; clear: right }
      }
    </style>

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbC3kdthrkHEEAgPn2IaBzIU0MmPoeOsA&sensor=true">
</script>

<script type="text/javascript">
	var map;
function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(9.10, 18.28),
          streetViewControl: false,
          zoom: 3,
          mapTypeId: google.maps.MapTypeId.TERRAIN
        }
   map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

   // create and set kml layer
  var kmllayer = new google.maps.KmlLayer({
    clickable: true,
    map: map,
    url: 'http://gmaps-samples.googlecode.com/svn/trunk/ggeoxml/cta.kml'
  });

 };
  
  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<div id="map-canvas"> </div>