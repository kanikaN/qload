
$(document).ready(function() {
   
        $( "#datepicker" ).datepicker({
                changeMonth: true,
                dateFormat : "yy-mm-dd",
                defaultDate : "1980-01-01",
                yearRange: "1950:2000",
                changeYear: true});
        $( "input.submit").button();
        $( "button.submit").button();
        $(".href_button").button();
        //$(".preview_button").button();
        
        
    if (typeof gState != 'undefined') {
		$("#state_selector").empty();
		
		for(var idx = 0; idx < stateCityList.length;idx++) {
			var stateSelected = '';
			if (stateCityList[idx].name == gState) {
				stateSelected = 'selected';
			}
		   $("#state_selector")
		   .append('<option  '
				   + stateSelected 
				   + ' value="'  +stateCityList[idx].name +'">' 
				   + stateCityList[idx].name 
				   + '</option>');
					  
		}
		$("#state_selector").change(selectCity);
		selectCity(gCity);
	}
	//process();
        
}); 
    
var stateCityList = [
{"name":"Andaman and Nicobar Islands","cityList":["Port Blair"]},
{"name":"Andhra Pradesh","cityList":["Hyderabad","Secunderabad","Visakhapatnam","Vijayawada","Guntur","Warangal","Nellore","Kurnool","Rajahmundry","Kakinada","Nizamabad","Tirupati","Anantapur","Karimnagar","Ramagundam"]},
{"name":"Arunachal Pradesh","cityList":["Itanagar"]},
{"name":"Assam","cityList":["Guwahati","Dispur"]},
{"name":"Bihar","cityList":["Patna","Gaya","Bhagalpur","Muzaffarpur","Bihar Sharif","Darbhanga","Purnia","Arrah"]},
{"name":"Chandigarh","cityList":["Chandigarh"]},
{"name":"Chhattisgarh","cityList":["Raipur","Bhilai","Korba","Bilaspur","Durg"]},
{"name":"Dadar and Nagar Haveli","cityList":["Silwassa"]},
{"name":"Daman and Diu","cityList":["Daman"]},

{"name":"Delhi","cityList":["Delhi","New Delhi","Nangloi Jat","Deoli"]},
{"name":"Gujarat","cityList":["Ahmedabad","Surat","Vadodara","Rajkot","Bhavnagar","Jamnagar","Gandhinagar"]},
{"name":"Goa","cityList":["Panaji"]},
{"name":"Haryana","cityList":["Faridabad","Rohtak","Hisar","Panipat","Sonipat"]},

{"name":"Himachal Pradesh","cityList":["Simla"]},

{"name":"Jammu and Kashmir","cityList":["Srinagar","Jammu"]},
{"name":"Jharkhand","cityList":["Dhanbad","Ranchi","Jamshedpur","Bokaro"]},
{"name":"Karnataka","cityList":["Bangalore","Hubballi-Dharwad","Mysore","Gulbarga","Belgaum","Mangalore","Davanagere","Bellary","Tumakuru (Tumkur)","Bijapur","Shivamogga (Shimoga)","Raichur","Bidar","Hosapete"]},
{"name":"Kerala","cityList":["Thiruvananthapuram","Kochi (Cochin)","Kozhikode (Calicut)","Kollam (Quilon)","Thrissur"]},

{"name":"Lakshadweep","cityList":["Kavaratti"]},

{"name":"Madhya Pradesh","cityList":["Indore","Bhopal","Jabalpur","Gwalior","Ujjain","Dewas","Satna","Sagar","Ratlam","Rewa","Singrauli","Burhanpur"]},
{"name":"Maharashtra","cityList":["Mumbai","Pune","Nagpur","Thane","Pimpri-Chinchwad","Nashik","Kalyan-Dombivali","Vasai-Virar","Aurangabad","Navi Mumbai","Solapur","Mira-Bhayandar","Bhiwandi","Amravati","Nanded","Kolhapur","Ulhasnagar","Sangli-Miraj & Kupwad","Malegaon","Jalgaon","Akola","Latur","Dhule","Ahmednagar","Chandrapur","Parbhani","Ichalkaranji","Jalna","Ambernath","Panvel"]},
{"name":"Manipur","cityList":["Imphal"]},
{"name":"Meghalaya","cityList":["Shillong"]},

{"name":"Mizoram","cityList":["Aizawl"]},
{"name":"Nagaland","cityList":["Kohima"]},


{"name":"Orissa","cityList":["Bhubaneswar","Cuttack","Brahmapur","Puri"]},
{"name":"Pondicherry","cityList":["Pondicherry"]},
{"name":"Punjab","cityList":["Ludhiana","Amritsar","Jalandhar","Patiala","Bathinda"]},
{"name":"Rajasthan","cityList":["Jaipur","Jodhpur","Kota","Bikaner","Ajmer","Udaipur","Bhilwara","Alwar","Bharatpur","Pali","Sri Ganganagar"]},
{"name":"Sikkim","cityList":["Gangtok"]},


{"name":"Tamil Nadu","cityList":["Chennai","Coimbatore","Madurai","Tiruchirappalli","Salem","Ambattur","Tirunelveli","Tirupur","Avadi","Tiruvottiyur"]},
{"name":"Tripura","cityList":["Agartala"]},

{"name":"Uttar Pradesh","cityList":["Lucknow","Kanpur","Ghaziabad","Agra","Meerut","Varanasi","Allahabad","Bareilly","Moradabad","Aligarh","Saharanpur","Gorakhpur","Noida","Firozabad","Loni","Jhansi","Muzaffarnagar","Mathura","Shahjahanpur","Rampur","Mau","Farrukhabad","Hapur","Etawah","Mirzapur"]},
{"name":"Uttarakhand","cityList":["Dehradun"]},
{"name":"West Bengal","cityList":["Kolkata","Howrah","Durgapur","Asansol","Siliguri","Maheshtala","Rajpur Sonarpur","South Dumdum","Gopalpur","Bhatpara","Panihati","Kamarhati","Bardhaman","Kulti","Bally","North Dumdum","Baranagar","Uluberia","Naihati","Bidhan Nagar","Srirampur"]}

];

function selectCity(city) {
	var name =  $("#state_selector").val();
	$("#city_selector").empty();
	for(var idx = 0; idx < stateCityList.length;idx++) {
		if (stateCityList[idx].name == name) {
			if (!city) {
				city = stateCityList[idx].cityList[0];
			}
			for(idx2 = 0; idx2 < stateCityList[idx].cityList.length; idx2++) {
			var name = stateCityList[idx].cityList[idx2];
			var selected = '';
			if (name == city) {
				selected = 'selected';
			}
			$("#city_selector").append('<option  '+ selected +' value="'+name
   			  +'">'+ name +'</option>');
   			
			}
		}
	}
}






