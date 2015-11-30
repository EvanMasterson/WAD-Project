// JavaScript File
/*global GMaps*/
		var map;
    	$(document).ready(function mapMarkers(){
	      map = new GMaps({
	        div: "#map",
	        lat: 53.4857183,
	        lng: -7.2826004
	      });
	      
	      map.addMarker({
		  lat: 53.3437967,
		  lng: -6.2567603,
		  title: 'Trinity College Dublin',
		  infoWindow: {
          content: 'Trinity College Dublin<br/>College Green<br/>Dublin 2'
        }
		});
		
		map.addMarker({
		  lat: 51.8921132,
		  lng: -8.4954625,
		  title: 'University College Cork',
		  infoWindow: {
          content: 'University College Cork <br/>Western Rd<br/>Cork'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.2785552,
		  lng: -9.0627068,
		  title: 'NUI Galway',
		  infoWindow: {
          content: 'NUI Galway<br/>University Rd<br/>Galway'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3069227,
		  lng: -6.2234008,
		  title: 'University College Dublin',
		  infoWindow: {
          content: 'University College Dublin<br/>Belfield<br/>Dublin 4'
		  }
    	});
    	
    	map.addMarker({
		  lat: 52.6686699,
		  lng: -8.5766729,
		  title: 'University of Limerick',
		  infoWindow: {
          content: 'University of Limerick<br/>Castletroy<br/>Co. Limerick'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3858142,
		  lng: -6.2611337,
		  title: 'Dublin College University ',
		  infoWindow: {
          content: 'Dublin College University<br/>Glasnevin<br/>Dublin 9'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3486925,
		  lng: -6.2453144,
		  title: 'National College of Ireland',
		  infoWindow: {
          content: 'National College of Ireland<br/>Mayor Square, IFSC<br/>Dublin 1'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.338561,
		  lng: -6.2687624,
		  title: 'Dublin Institute of Technology',
		  infoWindow: {
          content: 'Dublin Institute of Technology<br/>Aungier St.<br/>Dublin 2'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3807032,
		  lng: -6.5967847,
		  title: 'Maynooth University',
		  infoWindow: {
          content: 'Maynooth University<br/>Maynooth<br/>Co. Kildare'
		  }
    	});
    	
    	map.addMarker({
		  lat: 51.8841492,
		  lng: -8.5338367,
		  title: 'Cork Institute of Technology',
		  infoWindow: {
          content: 'Cork Institute of Technology<br/>Rossa Ave<br/>Co. Cork'
		  }
    	});
    	
    	map.addMarker({
		  lat: 52.6743477,
		  lng: -8.6516021,
		  title: 'Limerick Institute of Technology',
		  infoWindow: {
          content: 'Limerick Institute of Technology<br/>Moylish Park<br/>Co. Limerick'
		  }
    	});
    	
		});
	    
	    