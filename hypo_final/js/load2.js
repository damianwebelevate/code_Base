(function(){

$(document).ready(function(){

	load();
	
	//<![CDATA[
	var map;
	var markers = [];
	var infoWindow;
	var locationSelect;
	var button = document.getElementById('getResults');

	function load() {
	  map = new google.maps.Map(document.getElementById("map"), {
	    center: new google.maps.LatLng(53.271014, -2.284448),
	    zoom: 6,
	    mapTypeId: 'roadmap',
	    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
	  });
	  infoWindow = new google.maps.InfoWindow();
	  locationSelect = document.getElementById("locationSelect");
	  locationSelect.onchange = function() {
	    var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
	    if (markerNum != "none"){
	      google.maps.event.trigger(markers[markerNum], 'click');
	    }
	  };
	}


	button.addEventListener("click", function(event){
	  searchLocations();
	});

	function searchLocations() {
	 var address = document.getElementById("addressInput").value;
	 var geocoder = new google.maps.Geocoder();
	 geocoder.geocode({address: address}, function(results, status) {
	   if (status == google.maps.GeocoderStatus.OK) {
	    searchLocationsNear(results[0].geometry.location);
	   } else {
	     alert(address + ' not found');
	   }
	 });
	}

	function clearLocations() {
	 infoWindow.close();
	 for (var i = 0; i < markers.length; i++) {
	   markers[i].setMap(null);
	 }
	 markers.length = 0;

	 locationSelect.innerHTML = "";
	 var option = document.createElement("option");
	 option.value = "none";
	 option.innerHTML = "See all results:";
	 locationSelect.appendChild(option);
	}

	function searchLocationsNear(center) {
	 clearLocations();

	 var radius = document.getElementById('radiusSelect').value;
	 var searchUrl = 'phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
	 downloadUrl(searchUrl, function(data) {
	   var xml = parseXml(data);
	   var markerNodes = xml.documentElement.getElementsByTagName("marker");
	   var bounds = new google.maps.LatLngBounds();
	   var input = document.getElementById("addressInput");
	    if(markerNodes.length == 0){
	      google.maps.event.trigger(map, 'resize');
	      locationSelect.style.visibility = "hidden";
	      input.value = "";
	      input.focus();
	      alert("We did not find any Retailers within your search");
	    }else{
	     for (var i = 0; i < markerNodes.length; i++) {

	       var name = markerNodes[i].getAttribute("name");
	       var address = markerNodes[i].getAttribute("address");
	       var distance = parseFloat(markerNodes[i].getAttribute("distance"));
	       var latlng = new google.maps.LatLng(
	            parseFloat(markerNodes[i].getAttribute("lat")),
	            parseFloat(markerNodes[i].getAttribute("lng")));

	       createOption(name, distance, i);
	       createMarker(latlng, name, address);
	       bounds.extend(latlng);
	       map.fitBounds(bounds);
	       locationSelect.style.visibility = "visible";
	       locationSelect.onchange = function() {
	         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
	         google.maps.event.trigger(markers[markerNum], 'click');
	       };
	     }
	    }//close if
	   
	  });
	}


	function createMarker(latlng, name, address) {
	  var html = "<b>" + name + "</b> <br/>" + address;
	  // var pinColor = "0084c8";
	  // var pinImage = new google.maps.MarkerImage("//chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
	  //     new google.maps.Size(21, 34),
	  //     new google.maps.Point(0,0),
	  //     new google.maps.Point(10, 34));
	  // var pinShadow = new google.maps.MarkerImage("//chart.apis.google.com/chart?chst=d_map_pin_shadow",
	  //     new google.maps.Size(40, 37),
	  //     new google.maps.Point(0, 0),
	  //     new google.maps.Point(12, 35));

	  var pinImage = "https://chart.googleapis.com/chart?chst=d_map_pin_letter_withshadow&chld=H|0084c8|FFFFFF";

	  var marker = new google.maps.Marker({
	    map: map,
	    icon: pinImage,
	    position: latlng
	  });
	  google.maps.event.addListener(marker, 'click', function() {
	    infoWindow.setContent(html);
	    infoWindow.open(map, marker);
	  });
	  markers.push(marker);
	}

	function createOption(name, distance, num) {
	  var option = document.createElement("option");
	  option.value = num;
	  option.innerHTML = name + "(" + distance.toFixed(1) + ")";
	  locationSelect.appendChild(option);
	}

	function downloadUrl(url, callback) {
	  var request = window.ActiveXObject ?
	      new ActiveXObject('Microsoft.XMLHTTP') :
	      new XMLHttpRequest;

	  request.onreadystatechange = function() {
	    if (request.readyState == 4) {
	      request.onreadystatechange = doNothing;
	      callback(request.responseText, request.status);
	    }
	  };

	  request.open('GET', url, true);
	  request.send(null);
	}

	function parseXml(str) {
	  if (window.ActiveXObject) {
	    var doc = new ActiveXObject('Microsoft.XMLDOM');
	    doc.loadXML(str);
	    return doc;
	  } else if (window.DOMParser) {
	    return (new DOMParser).parseFromString(str, 'text/xml');
	  }
	}

	function doNothing() {}


	//]]>

});


})(jQuery);
