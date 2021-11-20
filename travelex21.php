<!doctype html>
<html lang="en">
   <head>
        <title>Travel</title>
		<h1><b><u><center>Travel</center></u></b></h1>
		<style>
		#ef{
		  
			 font-family:Verdana;
		   }
		  
#mn{
    background-color:purple;
	opacity:0.3;
	filter:alpha(opacity=30);
}
		</style>
       <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>-->
        <script type="text/javascript">
        function setiFrameSource(){
            var iFrame = document.getElementById("iFrame");
            var Url = "https://www.google.com/maps/embed/v1/directions?";
            var origin = "origin=".concat(document.getElementById("origin").value).concat("&");
            var destination = "destination=".concat(document.getElementById("destination").value).concat("&");
            var key = "key=".concat(document.getElementById("key").value);
            Url = Url.concat( origin, destination, key );
            iFrame.src= Url;
        }
        function initialize() {
          // Create the autocomplete object, restricting the search
          // to geographical location types.
          origin= new google.maps.places.Autocomplete(
              /** @type {HTMLInputElement} */(document.getElementById('origin')),
              { types: ['geocode'] });
          destination = new google.maps.places.Autocomplete(
              /** @type {HTMLInputElement} */(document.getElementById('destination')),
              { types: ['geocode'] });
          // When the user selects an address from the dropdown,
          // populate the address fields in the form.
          google.maps.event.addListener(origin, 'place_changed', function() {
            fillInAddress();
          });
          google.maps.event.addListener(destination, 'place_changed', function() {
            fillInAddress();
          });
        }
        // [START region_geolocation]
        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = new google.maps.LatLng(
                  position.coords.latitude, position.coords.longitude);
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              autocomplete.setBounds(circle.getBounds());
            });
          }
        }
</script>
    </head>
    <body onload="initialize()">
	<form method="POST" action="travelsearch.php">
	<div>
	<table align="center" border="0" id="ef"style="font-size:20px;top:500px;">
	<tr>
	<td width="30" valign="middle"><b>State:</b></td>
          <td><select name="statename">
              <option name="" selected="selected" value="">select here</option>
              <option value="andhra pradesh">andhra pradesh</option>
              <option value="arunachal pradesh">arunachal pradesh</option>
              <option value="assam">assam</option>
			   <option value="bihar">bihar</option>
              <option value="chhattisgarh">chhattisgarh</option>
			  <option value="goa">goa</option>
              <option value="gujarat">gujarat</option>
			   <option value="haryana">haryana</option>
              <option value="himachal pradesh">himachal pradesh</option>
			   <option value="jammu and kashmir">jammu and kashmir</option>
              <option value="jharkhand">jharkhand</option>
			   <option value="karnataka">karnataka</option>
              <option value="kerala">kerala</option>
			   <option value="madhya pradesh">madhya pradesh</option>
			  <option value="maharastra">maharastra</option>
              <option value="manipur">manipur</option>
			   <option value="meghalaya">meghalaya</option>
              <option value="mizoram">mizoram</option>
			   <option value="nagaland">nagaland</option>
              <option value="orissa">Orissa</option>
			   <option value="punjab">punjab</option>
              <option value="rajasthan">rajasthan</option>
			   <option value="sikkim">sikkim</option>
              <option value="tamil nadu">tamil nadu</option>
			   <option value="telangana">telangana</option>
              <option value="tripura">tripura</option>
			   <option value="uttar pradesh">uttar pradesh</option>
              <option value="uttarakhand">uttarakhand</option>
			  <option value="west bengal">west bengal</option>
            </select></td>
	</tr>
	<td>
<b>Days:</b>
</td>
<td>
<input type="text" name="from" size="25" placeholder="Enter Number of Days">
</td>
</tr>
<tr>
<td ><input type="submit" value="Search" align="center"></td>
</tr>
	</table>
	</div>
	</form>
	<!--<div>
	<a href="https://www.google.com/maps/dir/Hyderabad,+Telangana,+India/JNTU+Bus+Stop,+National+Highway+65,+Jawaharlal+Nehru+Technological+University,+Kukatpally+Housing+Board+Colony,+Kukatpally,+Hyderabad,+Telangana+500085,+India/@17.440709,78.44139,12z/data=!4m14!4m13!1m5!1m1!1s0x3bcb99daeaebd2c7:0xae93b78392bafbc2!2m2!1d78.486671!2d17.385044!1m5!1m1!1s0x3bcb91f25cde1747:0xea5a485059490c80!2m2!1d78.3941299!2d17.496402!3e0?hl=en-US">MAP</a>
	</div>-->
	<div>
        <form method="GET" target="iFrame">
        <input id="origin" style="width:100%;" placeholder="Put source here" name="origin" type="text" onFocus="geolocate();"/>
        <input id="destination" style="width:100%;" placeholder="Put destination here" name="destination" type="text" onFocus="geolocate();"/>
        <input id="key" type="hidden" name="key" value="AIzaSyB8kX7mmkYUad2w-cE01kj1j-Tuo9rYoIU">
        <input style="width:5%;" type="button" value="Go" onclick="setiFrameSource();"/>
        </form>
        <iframe id="iFrame" name="iFrame" src="https://www.google.com/maps/embed/v1/directions?origin=Hyderabad&destination=JNTUBusstop&key=AIzaSyB8kX7mmkYUad2w-cE01kj1j-Tuo9rYoIU" style="height:500px;width:100%" ></iframe>

    </div>
    </body>
</html>