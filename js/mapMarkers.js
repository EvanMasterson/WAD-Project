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
    	
    	map.addMarker({
		  lat: 53.2909504,
		  lng: -6.3656008,
		  title: 'Institute of Technology Tallaght',
		  infoWindow: {
          content: 'Institute of Technology Tallaght<br/>Old Blessington Rd<br/>Dublin 24'
		  }
    	});
    	
    	map.addMarker({
		  lat: 52.2461474,
		  lng: -7.142438,
		  title: 'Waterford Institute of Technology',
		  infoWindow: {
          content: 'Waterford Institute of Technology<br/>Cork Rd<br/>Waterford'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.2786273,
		  lng: -9.0127533,
		  title: 'Galway-Mayo Institute of Technology',
		  infoWindow: {
          content: 'Galway-Mayo Institute of Technology<br/>Old Dublin Rd<br/>Galway'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.9838207,
		  lng: -6.3978557,
		  title: 'Dundalk Institute of Technology',
		  infoWindow: {
          content: 'Dundalk Institute of Technology<br/>Dublin Rd, Dundalk<br/>Co. Louth'
		  }
    	});
    	
    	map.addMarker({
		  lat: 54.2782761,
		  lng: -8.4638107,
		  title: 'Institute of Technology, Sligo',
		  infoWindow: {
          content: 'Institute of Technology, Sligo<br/>Ash Ln<br/>Sligo'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.4047518,
		  lng: -6.3802514,
		  title: 'Institute of Technology, Blanchardstown',
		  infoWindow: {
          content: 'Institute of Technology, Blanchardstown<br/>Blanchardstown Rd North<br/>Dublin 15'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.2803556,
		  lng: -6.155323,
		  title: 'Dun Laoghaire Institute Of Art Design & Technology',
		  infoWindow: {
          content: 'Dun Laoghaire Institute Of Art Design & Technology<br/>Kill Avenue, Dun Laoghaire<br/>Dublin'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.4189426,
		  lng: -7.9072817,
		  title: 'Athlone Institute of Technology',
		  infoWindow: {
          content: 'Athlone Institute of Technology<br/>Dublin Rd, Athlone<br/>Co. Westmeath'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3389882,
		  lng: -6.2641747,
		  title: 'Royal College of Surgeons in Ireland',
		  infoWindow: {
          content: 'Royal College of Surgeons in Ireland<br/>123 St Stephens Green<br/>Dublin 2'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3405272,
		  lng: -6.2677119,
		  title: 'Dublin Business School',
		  infoWindow: {
          content: 'Dublin Business School<br/>13-14 Aungier St<br/>Dublin 2'
		  }
    	});
    	
    	map.addMarker({
		  lat: 52.8273012,
		  lng: -6.9382947,
		  title: 'Institute of Technology Carlow',
		  infoWindow: {
          content: 'Institute of Technology Carlow<br/>Kilkenny Rd<br/>Carlow'
		  }
    	});
    	
    	map.addMarker({
		  lat: 52.2853057,
		  lng: -9.6770527,
		  title: 'Institute of Technology, Tralee',
		  infoWindow: {
          content: 'Institute of Technology, Tralee<br/>Clash, Tralee Rd<br/>Co.Kerry'
		  }
    	});
    	
    	map.addMarker({
		  lat: 54.9524165,
		  lng: -7.7230776,
		  title: 'Letterkenny Institute of Technology',
		  infoWindow: {
          content: 'Letterkenny Institute of Technology<br/>Port Rd, Letterkenny<br/>Co. Donegal'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3454777,
		  lng: -6.2678714,
		  title: 'IBAT College Dublin',
		  infoWindow: {
          content: 'IBAT College Dublin<br/>16-19 Wellington Quay, Temple Bar<br/>Dublin 2'
		  }
    	});
    	
    	map.addMarker({
		  lat: 53.3308702,
		  lng: -6.2809297,
		  title: 'Griffith College Dublin',
		  infoWindow: {
          content: 'Griffith College Dublin<br/>S Circular Rd<br/>Dublin 8'
		  }
    	});
    	
		});
	    
	    