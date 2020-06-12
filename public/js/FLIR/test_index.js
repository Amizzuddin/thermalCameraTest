// Initialize jQuery
$(function () {
    if (WebSocket === undefined) {
        alert('This browser does not support WebSockets. The web page will not function properly.');
    }

    connectToWebSocket(true);
});

var globIrImgWidth = 80;
var globIrImgHeight = 60;
var globScaling = 8;
var globScalingHeight = 8;
var spotOffset = 15;    // size/2
var gridAlignment = globScaling / 2;

var globSpotGridOffsetX = 0;
var globSpotGridOffsetY = 116;
var globImgHeight = 480;
var globImgWidth = 640;

var hflip = false;
var vflip = false;

function initWebSocket() {
    // create a new WebSocket object.
    var wsUri = getWebSocketUri();
    websocket = new WebSocket(wsUri);
    websocket.onopen = function (ev) { // connection is open
        console.log('Connected to WebSocket server');
    };

    websocket.onmessage = function (ev) {
        var msg = JSON.parse(ev.data); // PHP sends Json data

        $.each(msg, function (k, v) {
            if (k === 'notify') {
                //handleClientNotifications(v[0], 'index');
                console.log("notify");
            } else {
                var res = k.slice(1).split('.');
                console.log(res);
                if (res[2] === 'measureFuncs') {
                    switch (res[5]) {
                    
                    case 'width':
                        $('#' + res[3] + '-' + res[4]).css('width', scaleToScreen(v, 'width'));
                        break;
                    case 'height':
                        $('#' + res[3] + '-' + res[4]).css('height', scaleToScreen(v, 'height'));
                        break;
                    case 'maxX':
                        $('#' + res[3] + '-max-' + res[4]).css('left', scaleToScreen(v, 'x') - spotOffset + gridAlignment);
                        break;
                    case 'maxY':
                        $('#' + res[3] + '-max-' + res[4]).css('top', scaleToScreen(v, 'y') - spotOffset + gridAlignment);
                        break;
                    case 'minX':
                        $('#' + res[3] + '-min-' + res[4]).css('left', scaleToScreen(v, 'x') - spotOffset + gridAlignment);
                        break;
                    case 'minY':
                        $('#' + res[3] + '-min-' + res[4]).css('top', scaleToScreen(v, 'y') - spotOffset + gridAlignment);
                        break;
                    case 'avgT':
                        updateMeasurementValue($('#' + res[3] + '-bar-' + res[4] + ' .temp-average'), v, false);
                        break;
                    case 'maxT':
                        updateMeasurementValue($('#' + res[3] + '-bar-' + res[4] + ' .temp-max'), v, false);
                        break;
                    case 'minT':
                        updateMeasurementValue($('#' + res[3] + '-bar-' + res[4] + ' .temp-min'), v, false);
                        break;             
                    }
                }
            }
        });
    }

    websocket.onerror = function (ev) {
        console.log('WebSocket error occured: ' + ev.data);
    };

    websocket.onclose = function (ev) {
        console.log('WebSocket connection closed');
    };
}

function updateMeasurementValue(element, v, diff) {
    var label = element.attr('data-label');
    var prefix = element.attr('data-value-prefix');
    var value = kelvinToCurrentTemperatureUnit(v, diff);
    if (diff) {
        if (element.attr('data-init') == 'true') {
            element.html('Config');
            // element.css("color", "blue");
        } else {
            element.attr('data-value', value);
            element.html(label + prefix + value + '&nbsp;' + getCurrentTemperatureUnitString());
            // element.css("color", "black");
        }
    } else {
        element.attr('data-value', value);
        element.html(label + prefix + value + '&nbsp;' + getCurrentTemperatureUnitString());
    }
}

function scaleToScreen(val, axis, size) {
    val = parseInt(val, 10);
    var ret = val * globScaling;
    if (axis === 'x') {
        if (hflip) {
            if (size !== undefined) {
                ret = globImgWidth - (parseFloat(val) + parseFloat(size)) * globScaling;
            } else {
                ret = globImgWidth - (val * globScaling) - globScaling;
            }
        }
    } else if (axis === 'y') {
        if (vflip) {
            if (size !== undefined) {
                ret = globImgHeight - (parseFloat(val) + parseFloat(size)) * globScalingHeight;
            } else {
                ret = globImgHeight - (val * globScalingHeight) - globScalingHeight;
            }
        } else {
            ret = val * globScalingHeight;
        }
    } else if (axis === 'width') {
        if (hflip === false) {
            ret += -2;
        }
    } else if (axis === 'height') {
        ret = val * globScalingHeight;
        if (vflip == false) {
            ret += -2;
        }
    }
    return ret;
}