var nagiosTv = {
    update : function() {
        $.ajax({
            type    : "POST",
            url     : "?command=getSummary",
            data    : "",
            success : function (msg) {
                var summaryDiv   = document.getElementById('summary');
                var newInnerHtml = "";
                try {
                    var results  = jQuery.parseJSON(msg);
                    newInnerHtml = nagiosTv.formatSummaryBar(results);
                } catch (err) {
                    newInnerHtml = msg;
                }
                summaryDiv.innerHTML = newInnerHtml;
            }
        });
        $.ajax({
            type    : "POST",
            url     : "?command=getProblemServices",
            data    : "",
            success : function (msg) {
                var resultDiv    = document.getElementById('results');
                var newInnerHtml = "";
                try {
                    var results         = jQuery.parseJSON(msg);
                    var resultCount     = results.length;
                    var thereAreResults = resultCount >= 1;
                    if (thereAreResults) {
                        for (var i = 0; i< resultCount; i++) {
                            var result = results[i];
                            newInnerHtml += nagiosTv.format(result, i);
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
    },
    formatSummaryBar : function(result) {
        var formattedOutput =  "<p class=\"resultcrit\">Critical:"+result.crit+"</p>";
        formattedOutput += "<p class=\"resultwarn\">Warning:"+result.warn+"</p>";
        formattedOutput +=  "<p class=\"resultunknown\">Unknown:"+result.unknown+"</p>";
        formattedOutput +=  "<p class=\"resultok\">OK:"+result.ok+"</p>";
        return formattedOutput;
    },
    format : function(result, count) {
        var currentDateInMilli       = new Date().getTime();
        var nextCheckInMilli         = result.next_check;
        var stateHeldForInMilli      = result.last_state_change;
        var secsSinceLastStateChange = (currentDateInMilli - stateHeldForInMilli) / 1000;
        var nextCheckDate            = new Date(nextCheckInMilli * 1000);
        var stateChangedDate         = new Date(stateHeldForInMilli * 1000);
        var id                       = nagiosTv.getDivId(result.current_state);
        var nextCheckDateAsString    = nagiosTv.formatDateString(nextCheckDate);
        var stateChangedDateAsString = nagiosTv.formatDateString(stateChangedDate);
        var serviceNamePlaceHolder   = nagiosTv.limitStringChars(result.service_description, 48);
        var hostNamePlaceHolder      = nagiosTv.limitStringChars(result.host_name, 48);
        var formattedOutput          = "<div id                                           = \"" + id + "\">";
        formattedOutput += "<p class=\"host_name\">" + hostNamePlaceHolder + "</p>";
        formattedOutput += "<p class=\"plugin_output\">" + result.plugin_output + "</p>";
        formattedOutput += "<div class=\"dates\">";
        formattedOutput += "<p class=\"state_changed_date\">State since: ";
        formattedOutput += stateChangedDateAsString + "</p>";
        formattedOutput += "<p class=\"next_check_date\">Next check: " + nextCheckDateAsString;
        formattedOutput += "</p>";
        formattedOutput += "</div>";
        formattedOutput += "<p class=\"service_description\">" + serviceNamePlaceHolder;
        formattedOutput += "</p></div>";
        return formattedOutput;
    },
    getDivId : function(currentState) {
        var id      = "result";
        var ok      = 0;
        var warn    = 1;
        var crit    = 2;
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
    },
    formatDateString : function(dateToFormat) {
        var formattedDateString = "";
        formattedDateString += dateToFormat.getHours() + ":";
        formattedDateString += dateToFormat.getMinutes() + ":";
        formattedDateString += dateToFormat.getSeconds() + " (";
        formattedDateString += dateToFormat.getDate() + "/";  
        formattedDateString += (dateToFormat.getMonth()+1) + ")";
        return formattedDateString;
    },
    limitStringChars : function(stringToLimit, limit) {
        var limitedString = stringToLimit; 
        if (stringToLimit.length > limit) {
            ret = stringToLimit.substring(-1, (limit-2)) + "..";
        }
        return limitedString;
    }
};


