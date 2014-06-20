function update() 
{
	$.ajax({
		type : "POST",
		url  : "getSummary.php",
		data : "",
		success: function (msg) {
			var summaryDiv = document.getElementById('summary');
			var newInnerHtml = "";
			try {
				var results = jQuery.parseJSON(msg);
				newInnerHtml = formatSummaryBar(results);
			} catch (err) {
				newInnerHtml = msg;
			}
			summaryDiv.innerHTML = newInnerHtml;
		}
		});
	$.ajax({
		type: "POST",
		url: "getProblemServices.php",
		data: "",
		success: function (msg) {
			var resultDiv = document.getElementById('results');
			var newInnerHtml = "";
			try {
				var results = jQuery.parseJSON(msg);
				var resultCount = results.length;
				if (resultCount >= 1) {
					for (var i = 0; i< resultCount; i++) {
						var result = results[i];
						newInnerHtml += format(result, i);
					}
				} else {
					newInnerHtml += "<h1>Infrastructure OK</h1>"
				}
			} catch (err) {
				newInnerHtml = msg;
			}
			resultDiv.innerHTML = newInnerHtml;
		}
	});
}


function formatSummaryBar(result)
{
	var ret = "<p class=\"resultwarn\">Warning:"+result.warn+"</p>";
	ret +=  "<p class=\"resultcrit\">Critical:"+result.crit+"</p>";
	ret +=  "<p class=\"resultok\">OK:"+result.ok+"</p>";
	ret +=  "<p class=\"resultunknown\">Unknown:"+result.unknown+"</p>";
	return ret;
}


function format(result, count)
{
	var currentDateInMilli = new Date().getTime();	
	var nextCheckInMilli = result.next_check;
	var stateHeldForInMilli = result.last_state_change;
	var secsSinceLastStateChange 
		= (currentDateInMilli - stateHeldForInMilli) / 1000;
	var nextCheckDate = new Date(nextCheckInMilli * 1000);
	var stateChangedDate = new Date(stateHeldForInMilli * 1000);
	var id = getDivId(result.current_state);
	var nextCheckDateAsString = formatDateString(nextCheckDate);
	var stateChangedDateAsString = formatDateString(stateChangedDate);
	var serviceNamePlaceHolder 
		= limitStringChars(result.service_description, 48);
	var hostNamePlaceHolder = limitStringChars(result.host_name, 48);
    var ret = "<div id=\"" + id + "\">";
    ret += "<p class=\"host_name\">" + hostNamePlaceHolder + "</p>";
    ret += "<p class=\"plugin_output\">" + result.plugin_output + "</p>";
    ret += "<p class=\"state_changed_date\">State since: ";
	ret += stateChangedDateAsString + "</p>";
    ret += "<p class=\"next_check_date\">Next check: " + nextCheckDateAsString;
	ret += "</p>";
    ret += "<p class=\"service_description\">" + serviceNamePlaceHolder;
    ret += "</p></div>";
    return ret;
}


function getDivId(currentState) 
{
	var id = "result";
	var ok = 0;
	var warn = 1;
	var crit = 2;
	var unknown = 3;
	if (currentState == warn) {
		id = "resultwarn";
	}
	if (currentState == crit) {
		id = "resultcrit";
	}
	if (currentState == unknown) {
		id = "resultunknown";
	}
	return id;
}


function formatDateString(dateToFormat)
{
	var ret = "";
	ret += dateToFormat.getHours() + ":";
	ret += dateToFormat.getMinutes() + ":";
	ret += dateToFormat.getSeconds() + " (";
	ret += dateToFormat.getDate() + "/";  
	ret += (dateToFormat.getMonth()+1) + ")";
	return ret;
}


function limitStringChars(stringToLimit, limit)
{
	var ret = stringToLimit; 
	if (stringToLimit.length > limit) {
		ret = stringToLimit.substring(-1, (limit-2)) + "..";
	}
	return ret;
}