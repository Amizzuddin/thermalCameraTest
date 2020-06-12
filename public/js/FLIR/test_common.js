// Initialize jQuery
$(function () {
  init();
});

function generateGUID() {
  var guid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
      var r = Math.random() * 16 | 0;
      var v = c === 'x' ? r : (r & 0x3 | 0x8);
      return v.toString(16);
  });
  return guid;
}

function init() {
  clientGUID = generateGUID();

  var jqPost = $.post('http://192.168.200.17/settings/getDistanceUnit/', function () {})
  .done(function (data) {
      console.log("init.done: distUnit = " + data);
      $.cookie('distanceUnit', data, { expires: 365, path :'/' });
  });

  var jqPost = $.post(getBaseUrl() + 'settings/getTemperatureUnit/', function () {})
  .done(function (data) {
      // console.log("init.done: tempUnit = " + data);
      $.cookie('temperatureUnit', data, { expires: 365, path :'/' });
  });

  //updateServerTimeZone();
}

function connectToWebSocket(waitForConnection, waitCallback) {
  if (WebSocket != undefined) {
      initWebSocket();
      if (waitForConnection == true) {
          setTimeout(function () {
              if (websocket.readyState === 1) {
                  if (waitCallback != null) {
                      waitCallback();
                  }
                  return;
              }
              console.log('Waiting for WebSocket connection...');
              if (websocket != undefined) {
                  websocket = null;
              }
              connectToWebSocket(waitForConnection, waitCallback);
          }, 5000);
      }
  }
}

function getWebSocketUri() {
  var wsUri;
  if (window.location.protocol === 'https:') {
      wsUri = 'wss://';
  } else {
      wsUri = 'ws://';
  }
  wsUri += '192.168.200.17/';
  wsUri += window.location.pathname + 'x'; // fix for IE10 error 12008
  return wsUri;
}

function getBaseUrl() {
  return '/';
}

function poll(data, callback, requestReset) {
    return $.ajax({
        type: 'POST',
        url: getBaseUrl() + 'res.php',
        data: data,
        dataType: 'json',
        success: function (result, status, xhr) {
            if (callback != undefined) {
                callback(result);
            }
        },
        error: function (result, status, xhr) {
            // console.log(result);
        },
        complete: function () {
            if (requestReset != undefined) {
                requestRunning = false;
                // console.log("Ajax complete: requestRunning=" + requestRunning);
            }
        }
    });
}

function getResource(resource, callback) {
  poll({
      action: 'get',
      resource: resource
  }, callback);
}

function kelvinToCurrentTemperatureUnit(t, diff) {
  console.log("Chaning celsius");
  console.log (t);
  if ($.cookie('temperatureUnit') === 'celsius') {
      return kelvinToCelsius(t, diff);
  }
  return kelvinToFahrenheit(t, diff);
}

function kelvinToFahrenheit(t, diff) {
  if (typeof(t) == 'string') {
      if (diff == true) {
          return(parseFloat(t) * 1.8).toFixed(1).toString();
      }
      return((parseFloat(t) - 273.15) * 1.8 + 32).toFixed(1).toString();
  }
  console.log('kelvinToFahrenheit() - Error');
}

function getCurrentTemperatureUnitString() {
  if ($.cookie('temperatureUnit') === 'celsius') {
      return '&degC';
  }
  return '&degF';
}