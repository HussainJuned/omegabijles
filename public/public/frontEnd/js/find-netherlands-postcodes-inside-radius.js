var map;
var bounds;
var circle;
var centremarker;
var routeMarkers=new Array(0);
var geocoder;

function GUnload()
{}

function Gload() 
{
	var latlng = new google.maps.LatLng(52.1023,5.6792);
	var myOptions = {zoom:7,center:latlng,mapTypeId:google.maps.MapTypeId.ROADMAP,draggableCursor:'crosshair',mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.DROPDOWN_MENU}};
	map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	document.getElementById("tb_output").value="";
	document.getElementById("tb_radius").value=20;
	tb_radius_changed(20);
	
	google.maps.event.addListener(map, 'click', ftn_mapclick);
}

function ftn_mapclick(event) 
{
	startdraw(event.latLng);
}
	
function resetmap()
{
	if (circle) 
	{
		circle.setMap(null);
	}
	
	if (routeMarkers) 
	{
		for (i in routeMarkers) 
		{
			routeMarkers[i].setMap(null);
		}
	}
		
	if (centremarker)
	{
		centremarker.setMap(null);
	}
	
	routeMarkers=new Array(0);
	document.getElementById("tb_output").value="";
	
	var latlng = new google.maps.LatLng(52.1023,5.6792);
	map.setCenter(latlng);
	map.setZoom(7);
}

function startdraw(point)
{
	document.getElementById("output").innerHTML="Drawing Radius";
	
	if (circle) 
	{
		circle.setMap(null);
	}
	
	if (routeMarkers) 
	{
		for (i in routeMarkers) 
		{
			routeMarkers[i].setMap(null);
		}
	}
		
	if (centremarker)
	{
		centremarker.setMap(null);
	}
	
	routeMarkers=new Array(0);
	
	if (document.getElementById("cb_showcentre").checked)
	{
		centremarker=placeCentreMarker(point,"Centre Point");
		centremarker.setMap(map);
	}
	
	var givenRad = document.getElementById("tb_radius").value;

	circle=DrawCircle(point,givenRad);
	circle.setMap(map);
	
	document.getElementById("output").innerHTML="<p><img src='images/loading.gif' />Searching...</p>";
	document.getElementById("tb_output").value="";
	
	showallwithfilter(givenRad,point.lat(),point.lng());	
}

function DrawCircle(point,rad) {
 
    rad *= 1000; // convert to meters if in miles
    draw_circle = new google.maps.Circle({
        center: point,
        radius: rad,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 1,
        fillColor: "#0000FF",
        fillOpacity: 0.25,
        map: null
    });
	return draw_circle;
}

		
function showallwithfilter(givenRad,lat,lng) 
{
	bounds = new google.maps.LatLngBounds();

	var xmlHttp;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
	catch (e)
	{
		try
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e)
		{
			alert("Your browser does not support AJAX!");
			return false;
		}
	}
	}
	
	xmlHttp.onreadystatechange=function()
	{
      	if(xmlHttp.readyState==4)
        {
			var xml = xmlHttp.responseXML;
	//console.log(xml);
			var output="";
			var count=0;
			var markers = xml.documentElement.getElementsByTagName("marker");

			for (var i = 0; i < markers.length; i++) 
			{
				var id = markers[i].getAttribute("id");
				var dist = markers[i].getAttribute("dist");
				var postcode = markers[i].getAttribute("postcode");
				var placename = markers[i].getAttribute("placename");
				
				var point = new google.maps.LatLng(parseFloat(markers[i].getAttribute("lat")),parseFloat(markers[i].getAttribute("lng")));
				
				bounds.extend(point);
				
				var marker = placeMarker(id, point, postcode + " in "+placename+" (" + dist + "km)");
				if (document.getElementById("cb_showpcmarkers").checked)
				{
					marker.setMap(map);
				}
				else
				{
					marker.setMap(null);	
				}
				routeMarkers.push(marker);
				
				output+=postcode+",";
				count++;
			}
			
			document.getElementById("tb_output").value=output.substring(0,output.length-1);
			document.getElementById("output").innerHTML="Re-zoom...";
			if (count !=0)
			{
				map.setCenter(bounds.getCenter());
				map.fitBounds(bounds);
			}
			document.getElementById("output").innerHTML="Done ("+count+" found)";
		}
	};
	var rn=Math.floor(Math.random()*9999);	
	var urltext="ajax/get-all-netherlands-postcodes-inside.php?radius="+givenRad+"&lat="+lat+"&lng="+lng+"&rn="+rn;
//console.log(urltext);
	xmlHttp.open("GET",urltext,true);
    xmlHttp.send(null);
	
}

function placeMarker(id, point, outcode) 
{
	var image = {url: FMTmarkerurl,size: new google.maps.Size(20, 34),origin: new google.maps.Point(0,0),anchor: new google.maps.Point(10*FMTmarkersizefactor,34*FMTmarkersizefactor), scaledSize: new google.maps.Size(20*FMTmarkersizefactor, 34*FMTmarkersizefactor)};

	var marker = new google.maps.Marker({position:point,map:map,icon:image,title:outcode,draggable:true,opacity:FMTmarkeropacity});
	
	return marker;
}


function tb_radius_changed(inp)
{
	if (inp>320)
	{
		document.getElementById("tb_radius").value=320;
		inp=320;	
	}
	document.getElementById("tb_radius_miles").value=(inp*(1/1.609344)).toFixed(2);
}


function tb_radius_miles_changed(inp)
{
	if (inp>200)
	{
		document.getElementById("tb_radius_miles").value=200;
		inp=200;	
	}
	document.getElementById("tb_radius").value=(inp*1.609344).toFixed(2);
}

function usePointFromPostcode(place, callbackFunction) 
{
	geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': place + ", Netherlands"}, function(results, status) 
	{
		if (status == google.maps.GeocoderStatus.OK) 
		{
			var point = results[0].geometry.location;			
			callbackFunction(point);
		}
		else 
		{
        	alert("Location not found!");
      	}
   	});
}

function placeMarkerAtPoint(pointin)
{
	var str_lat=pointin.lat();
	var str_lng=pointin.lng();
	
	var point=new google.maps.LatLng(parseFloat(str_lat),parseFloat(str_lng));
	startdraw(point);
}

function placeCentreMarker(point, text) 
{
	var image = {url: FMTmarkerurl,size: new google.maps.Size(20, 34),origin: new google.maps.Point(0,0),anchor: new google.maps.Point(10*FMTmarkersizefactor,34*FMTmarkersizefactor), scaledSize: new google.maps.Size(20*FMTmarkersizefactor, 34*FMTmarkersizefactor)};

	var marker = new google.maps.Marker({position:point,map:map,icon:image,title:text,draggable:true,opacity:FMTmarkeropacity});
	
	return marker;
}

    // Replaces all instances of the given substring.
    String.prototype.replaceAll = function(
    strTarget, // The substring you want to replace
    strSubString // The string you want to replace in.
    ){
    var strText = this;
    var intIndexOfMatch = strText.indexOf( strTarget );
     
    // Keep looping while an instance of the target string
    // still exists in the string.
    while (intIndexOfMatch != -1){
    // Relace out the current instance.
    strText = strText.replace( strTarget, strSubString );
     
    // Get the index of any next matching substring.
    intIndexOfMatch = strText.indexOf( strTarget );
    }
     
    // Return the updated string with ALL the target strings
    // replaced out with the new substring.
    return( strText );
    };