function get_parameter(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if(pair[0] == variable){return pair[1];}
  }
  return(false);
}

function create_cookie(name,value,days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  document.cookie = name+"="+value+expires+"; path=/";
}

var cookie_lifetime = 30; // lifetime of cookies in days

if(get_parameter("utm_source") != "") {
	create_cookie("_t_utmz", get_parameter("utm_source")+"|"+get_parameter("utm_medium")+"|"+get_parameter("utm_term")+"|"+get_parameter("utm_content")+"|"+get_parameter("utm_campaign")+"|"+get_parameter("utm_id"), cookie_lifetime);
  create_cookie("_t_land", window.location.href.split('?')[0], cookie_lifetime);
  if(document.referrer.indexOf(location.protocol + "//" + location.host) === 0){
  	create_cookie("_t_ref", document.referrer, cookie_lifetime);
  }
}

if(get_parameter("fbclid") != "") {
	create_cookie("_t_fbclid", get_parameter("fbclid"), cookie_lifetime);
}

if(get_parameter("gclid") != "") {
	create_cookie("_t_gclid", get_parameter("gclid"), cookie_lifetime);
}

if(get_parameter("dclid") != "") {
	create_cookie("_t_dclid", get_parameter("dclid"), cookie_lifetime);
}

if(get_parameter("epik") != "") {
	create_cookie("_t_epik", get_parameter("epik"), cookie_lifetime);
}

create_cookie("_t_last", window.location.href.split('?')[0], cookie_lifetime);
