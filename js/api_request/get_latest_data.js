$(document).ready(function(){
  $('#loadingmessage').show();
  setInterval(function(){
    
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country.php?country=Mauritius",
        "method": "GET",
        "dataType": "json",
        "headers": {
            "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com",
            "x-rapidapi-key": "efa4e50816mshc9e6d29a9c29cd1p1e7471jsn27c5cd4e2a17"
        }
    }
      $.ajax(settings).done(function (data){
              var html = '';
            //   $.each(data, function(key, value){
                $('#loadingmessage').hide();
                html += '<div class="col-xl-5 col-md-6 mb-4">';
                html += '<div class="card border-left-primary shadow h-100 py-2">';
                html += '<div class="card-body">';
                html += '<div class="row no-gutters align-items-center">';
                html += '<div class="col mr-2">';
                html += '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Last Update</div>';
                html += '<div class="h5 mb-0 font-weight-bold text-gray-800">'+data.latest_stat_by_country[0].record_date+'<br><sub>Update For Mauritius Only</sub></div>';
                html += '</div>';
                html += '<div class="col-auto">';
                html += '<i class="fas fa-clock fa-2x text-gray-300"></i>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';

                if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

                    html += '<div class="col-xl-5 col-md-6 mb-4">';
                    html += '<div class="card shadow mb-4">';
                    html += '<div class="card-header py-3">';
                    html += '<h6 class="m-0 font-weight-bold text-primary">Mauritius Updates</h6>';
                    html += '</div>';
                    html += '<div class="card-body">';
                    html += '<div class="table-responsive">';
                    html += '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';

                    html += '<tbody>';
                    html += '<tr>';
                    html += '<th>Country Name</th>';
                    html += '<td>'+data.latest_stat_by_country[0].country_name+'</td>';
                    html += '</tr>';
                    
                    html += '<tr>';
                    html += '<th>Total Cases</th>';
                    html += '<td>'+data.latest_stat_by_country[0].total_cases+'</td>';
                    html += '</tr>';
                    
                    html += '<tr>';
                    html += '<th>New Cases</th>';
                    html += '<td>'+data.latest_stat_by_country[0].new_cases+'</td>';
                    html += '</tr>';
                    
                    html += '<tr>';
                    html += '<th>Active Cases</th>';
                    html += '<td>'+data.latest_stat_by_country[0].active_cases+'</td>';
                    html += '</tr>';

                    html += '<tr>';
                    html += '<th>Total Deaths</th>';
                    html += '<td style="background-color: #f98989; font-weight: 900; color:white;">'+data.latest_stat_by_country[0].total_deaths+'</td>';
                    html += '</tr>';

                    html += '<tr>';
                    html += '<th>Total Recovered</th>';
                    html += '<td style="background-color: #1cc88a; font-weight: 900; color:white;">'+data.latest_stat_by_country[0].total_recovered+'</td>';
                    html += '</tr>';
                    html += '</tbody>';
                    html += '</table>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';

                } else {
                  
                    html += '<div class="col-xl-7 col-md-6 mb-4">';
                    html += '<div class="card shadow mb-4">';
                    html += '<div class="card-header py-3">';
                    html += '<h6 class="m-0 font-weight-bold text-primary">Mauritius Updates</h6>';
                    html += '</div>';
                    html += '<div class="card-body">';
                    html += '<div class="table-responsive">';
                    html += '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
                    html += '<thead>';
                    html += '<tr>';
                    html += '<th>Country Name</th>';
                    html += '<th>Total Cases</th>';
                    html += '<th>New Cases</th>';
                    html += '<th>Active Cases</th>';
                    html += '<th>Total Deaths</th>';
                    html += '<th>Total Recovered</th>';
                    html += '</tr>';
                    html += '</thead>';
                    html += '<tfoot>';
                    html += '<tr>';
                    html += '<th>Country Name</th>';
                    html += '<th>Total Cases</th>';
                    html += '<th>New Cases</th>';
                    html += '<th>Active Cases</th>';
                    html += '<th>Total Deaths</th>';
                    html += '<th>Total Recovered</th>';
                    html += '</tr>';
                    html += '</tfoot>';
                    html += '<tbody>';
                    html += '<tr>';
                    html += '<td>'+data.latest_stat_by_country[0].country_name+'</td>';
                    html += '<td>'+data.latest_stat_by_country[0].total_cases+'</td>';
                    html += '<td>'+data.latest_stat_by_country[0].new_cases+'</td>';
                    html += '<td>'+data.latest_stat_by_country[0].active_cases+'</td>';
                    html += '<td style="background-color: #f98989; font-weight: 900; color:white;">'+data.latest_stat_by_country[0].total_deaths+'</td>';
                    html += '<td style="background-color: #1cc88a; font-weight: 900; color:white;">'+data.latest_stat_by_country[0].total_recovered+'</td>';
                    html += '</tr>';
                    html += '</tbody>';
                    html += '</table>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                }
        $('#parent_latest').html(html);
      });
  }, 5000);

  // validation
  $('.save_phone').prop('disabled', true);
  $('.phone_number').keyup(function() {
    console.log($(this).val().length);
      if($(this).val() != '' && ($(this).val().length === 8)) {
        $('.save_phone').prop('disabled', false);
      } else {
        $('.save_phone').prop('disabled', true);
      }
  });

  $(".phone_number").keypress(function (e) {
    //if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
       //display error message
       alert("Enter Mobile Number Please");
              return false;
   }
  });
});
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  saveDetails(position.coords.latitude, position.coords.longitude);
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
  
  saveDetails(0, 0);
}


function saveDetails(latitude, longitude) {
    var brief = document.getElementById("brief");

  $('#main_save').click(function () {
    var phone_number = $(".phone_number").val();
    var location = $("#select-location").val();
    var comment = $("#comment").val();
    
    
    if (comment == "" || comment == null) {
        brief.innerHTML = "Please give you exact Location - Example : Supermarket name.";
    } else { 
        brief.innerHTML ="";
         var obj_details = { 
        mobile_number: phone_number,
        latitude: latitude, 
        longitude: longitude, 
        description: location,
        comment: comment
    }
  console.log(obj_details);
  
var success_save = document.getElementById("success_save");
var bad_save = document.getElementById("bad_save");
    const url_save_details = "php/api/save_details.php";
    $.ajax({
        url : url_save_details,
        method : "POST",
        data : obj_details,
        dataType: 'json',                                                                                                                                                                                                                                                                                                                                                                                                                                              
        success : function(data){
          console.log(data.OUTCOME);
          if (data.OUTCOME == "OK") { 
            success_save.innerHTML = "Thanks - Location Saved Successfully";
            setTimeout(function() {$('#saveModal').modal('hide');}, 2000);
          } else {             
            bad_save.innerHTML = "Please try again later, Thank You.";
            setTimeout(function() {$('#saveModal').modal('hide');}, 2000);
          }
        },
        error: function(error) {
            console.log('Error ${error}');
        }
    });
    }
    
   
  });
}
