
.measurements{
  max-height:280px;
  overflow-y:auto;
}

.select-scale,
.select-lock,
.select-palette {
  height:24px;
  width:240px;
  border: 1px solid;
  cursor:pointer;
  border-color: #ccc;
  background: #FFFFFF;
  color: #444;
}

#buttonGroup-measure{
  top:64px;
}

#buttonGroup-misc{
  display:inline-block;
  top:64px;
}

#button-image-mode{
  background-image:url("/public/img/light_precision/Ic_ImageMode_MsIr_Def.png");
}

#button-image-mode:hover{
  background-image:url("/public/img/light_precision/Ic_ImageMode_MsIr_Sel.png");
}

#button-distance{
  background-image:url("/public/img/light_precision/Ic_Options_ParametersDistance_Def.png");
}

#button-distance:hover{
  background-image:url("/public/img/light_precision/Ic_Options_ParametersDistance_Sel.png");
}

#button-lamp{
  background-image:url("/public/img/light_precision/Ic_Camera_Lamp_Def.png");
}

#button-lamp:hover{
  background-image:url("/public/img/light_precision/Ic_Camera_Lamp_Sel.png");
}

#button-flip{
  background-image:url("/public/img/light_precision/Ic_ImageTool_FlipImage_Def.png");
}

#button-flip:hover{
  background-image:url("/public/img/light_precision/Ic_ImageTool_FlipImage_Sel.png");
}

#button-calibration-settings{
  background-image:url("/public/img/light_precision/Ic_Camera_FocusCalibrate_Def.png");
}

#button-calibration-settings:hover{
  background-image:url("/public/img/light_precision/Ic_Camera_FocusCalibrate_Sel.png");
}

#button-calibrate{
  background-image:url("/public/img/light_precision/Ic_Camera_FocusCalibrate_Def.png");
}

#button-calibrate:hover{
  background-image:url("/public/img/light_precision/Ic_Camera_FocusCalibrate_Sel.png");
}

.button-spot{
  vertical-align: top;
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Spot_Def.png");
}

.button-spot.interact:hover{
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Spot_Sel.png");
}

.button-mbox{
  vertical-align:top;
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Box_Def.png");
}

.button-mbox.interact:hover{
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Box_Sel.png");
}

.button-delta{
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Delta_Def.png");
}

.button-delta.interact:hover{
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Delta_Sel.png");
}

#button-global-parameters{
  background-image:url("/public/img/light_precision/Ic_Options_Parameters_Def.png");
}

#button-global-parameters:hover{
  background-image:url("/public/img/light_precision/Ic_Options_Parameters_Sel.png");
}

#button-pause{
  background-image:url("/public/img/light_precision/Ic_Player_Paus_Def.png");
}

#button-pause:hover{
  background-image:url("/public/img/light_precision/Ic_Player_Paus_Sel.png");
}

#button-play{
  background-image:url("/public/img/light_precision/Ic_Player_Play_Def.png");
}

#button-play:hover{
  background-image:url("/public/img/light_precision/Ic_Player_Play_Sel.png");
}

#button-save-image{
  background-image:url("/public/img/light_precision/Ic_Video_Snapshot_Def.png");
}

#button-save-image:hover{
  background-image:url("/public/img/light_precision/Ic_Video_Snapshot_Sel.png");
}

#button-save-video{
  background-image:url("/public/img/light_precision/Ic_Live_Record_Def.png");
}

#button-save-video:hover{
  background-image:url("/public/img/light_precision/Ic_Live_Record_Sel.png");
}

#button-schedule{
  background-image:url("/public/img/light_precision/Ic_Calendar_DatePicker_Def.png");
}

#button-schedule:hover{
  background-image:url("/public/img/light_precision/Ic_Calendar_DatePicker_Sel.png");
}

#button-hide{
  background-image:url("/public/img/light_precision/Ic_MeasureToolPreset_SpotHide_Def.png");
}

#button-hide:hover{
  background-image:url("/public/img/light_precision/Ic_MeasureToolPreset_SpotHide_Sel.png");
}

#button-fullscreen{
  background-image:url("/public/img/light_precision/Ic_ImageTool_PipResize_Def.png");
}

#button-fullscreen:hover{
  background-image:url("/public/img/light_precision/Ic_ImageTool_PipResize_Sel.png");
}

.button-internal-temp{
  background-image:url("/public/img/light_precision/Ic_Device_Nettan01_Def.png");
}

.button-internal-temp.interact:hover{
  background-image:url("/public/img/light_precision/Ic_Device_Nettan01_Sel.png");
}

.button-io{
  background-image:url("/public/img/light_precision/Ic_Camera_DigitalInput_Def.png");
}

.button-io.interact:hover{
  background-image:url("/public/img/light_precision/Ic_Camera_DigitalInput_Sel.png");
}

.button-alarm{
  vertical-align:top;
  margin-left: 6px;
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Alarm_Def.png");
  float: right;
  clear:right;
}

.button-alarm.interact:hover{
  background-image:url("/public/img/light_precision/Ic_MeasureTool_Alarm_Sel.png");
}

.button-activated{
  border: 2px solid #00aaee;
}

.button-alarm-trigged{
  border:2px solid red;
}

#buttonGroup-measure .button,
#buttonGroup-misc .button {
  margin-left:16px;
}

#buttonGroup-preset{
  position:relative;
}

.button-log{
  width:initial;
  margin-left:16px;
  margin-right:16px;
  display:block;
  text-align: center;
  line-height:32px;
}

.popup-alarm{
  position:absolute;
  display:none;
  width:470px;
  padding-left:16px;
  padding-right:16px;
}

.popup-local p,
.popup-alarm p{
  display:inline-block;
}

.alarm-actions p{
  padding-left: 8px;
  display: block;
}

.popup-local select,
.popup-local input,
.popup-alarm select,
.popup-alarm input{
  width:96px;
  height:32px;
  position:absolute;
  left:165px;
  box-sizing:border-box;
  padding:8px;
}

.popup-local select,
.popup-local input{
  left:185px;
}

.popup-local input,
.popup-alarm input{
  text-align: right;
}

.popup-local{
  position:absolute;
  display:none;
  width:270px;
  padding-left:16px;
  padding-right:16px;
}

.popup-mbox{
  width:480px;
  height:250px;
}

.popup-diff{
  width:365px;
  height:38px;
  position:absolute;
  display:none;
  padding-left:12px;
}

.popup-diff select,
.popup-diff input{
  width:96px;
  height:32px;
  box-sizing:border-box;
}

.popup-diff label{
  margin-left:16px;
}

.popup-diff input{
  margin-left:8px;
  display:inline-block;
  margin-right:0px;
  text-align: right;
}

.popup-diff p {
  display:inline-block;
}

#digin-alarm {
  height:195px;
}

#digin-alarm-actions {
  height:145px;
}

.measurement-settings {
  position:absolute;
  margin-left:16px;
  top:57px;
  left:280px;
  border-radius: 5px;
  background: #ddd;
  padding: 0px 16px 0px 16px;
}

#reset-local-p {
  position:relative;
  top:-10px;
}

.button-local-reset {
  position:absolute;
  width:96px;
  left:184px;
  text-align:center;
  text-align:center;
}

.alarm-settings{
  display:inline-block;
  width:256px;
  vertical-align: top;
}

.alarm-actions{
  display: inline-block;
  border-radius: 5px;
  height: 222px;
  vertical-align: top;
  background: #ddd;
  padding: 0px 16px 0px 16px;
}

#popup-image-mode label{
  display:inline-block;
}

#popup-image-mode{
  width:112px;
}

#popup-distance{
  width:188px;
  height:16px;
}
#popup-distance p{
  display: inline-block;
  position:relative;
  top:-9px;
  left: 20px;
}

#popup-lamp{
  width:136px;
}

#popup-flip{
  width:96px;
}

#popup-calibration-settings{
  width:128px;
}

#popup-global-parameters{
  width:410px;
  position:relative;
  left:-362px;
}

#popup-global-parameters:before,
#popup-global-parameters:after{
  left:376px;
}

#popup-global-parameters p{
  display: inline-block;
}

#popup-global-parameters input{
  width: 40px;
  position:absolute;
  margin-top:4px;
  border-radius: 2px;
  height:20px;
}

#popup-global-parameters label{
  width:64px;
}

#popup-global-parameters label select{
  position:relative;
  margin-left:20px;
  width:43px;
  height:20px;
  border-radius: 2px;
}

#popup-global-parameters .left-adjusted{
  width:216px;
  position:relative;
}
#popup-global-parameters .left-adjusted input{
  left:180px;
}

#popup-global-parameters .right-adjusted input{
  left:130px;
}

#popup-global-parameters .right-adjusted{
  position:relative;
  margin-left:16px;
}

.button-global-reset{
  float:right;
  width:70px;
  margin-top:5px;
  text-align: center;
}

.button-global-reset p{
  margin-top:8px;
}

#image-wrapper{
  width:100%;
}

#image-container {
  position:relative;
  margin-left:16px;
  margin-bottom:16px;
  padding-right:112px;
  max-width:752px;
  box-sizing:border-box;
}

#sideInfo {
  position:absolute;
  top:0px;
  right:0px;
  bottom:0px;
  width:112px;
}

#snapshot {
  width:100%;
  min-width: 640px;
  min-height: 480px;
  display:block;
}

.scale,
.isotherm {
  position:absolute;
  top:40px;
  bottom:40px;
  left:48px;
  width:16px;
}

#bw               {
background: -webkit-linear-gradient(top, rgb(242, 242, 242) 0%, rgb(152, 152, 152) 40%, rgb(98, 98, 98) 60%, rgb(47, 47, 47) 81%, rgb(0, 0, 0) 100%);
background: -o-linear-gradient(top, rgb(242, 242, 242) 0%, rgb(152, 152, 152) 40%, rgb(98, 98, 98) 60%, rgb(47, 47, 47) 81%, rgb(0, 0, 0) 100%);
background: -ms-linear-gradient(top, rgb(242, 242, 242) 0%, rgb(152, 152, 152) 40%, rgb(98, 98, 98) 60%, rgb(47, 47, 47) 81%, rgb(0, 0, 0) 100%);
background: -moz-linear-gradient(top, rgb(242, 242, 242) 0%, rgb(152, 152, 152) 40%, rgb(98, 98, 98) 60%, rgb(47, 47, 47) 81%, rgb(0, 0, 0) 100%);
background: linear-gradient(to bottom, rgb(242, 242, 242) 0%, rgb(152, 152, 152) 40%, rgb(98, 98, 98) 60%, rgb(47, 47, 47) 81%, rgb(0, 0, 0) 100%);}


#iron               {
background: -webkit-linear-gradient(top, rgb(242, 255, 246) 0%, rgb(254, 226, 44) 15%, rgb(253, 164, 0) 31%, rgb(233, 75, 67) 51%, rgb(160, 8, 157) 71%, rgb(49, 0, 133) 89%, rgb(0, 13, 33) 99%, rgb(0, 16, 21) 100%);
background: -o-linear-gradient(top, rgb(242, 255, 246) 0%, rgb(254, 226, 44) 15%, rgb(253, 164, 0) 31%, rgb(233, 75, 67) 51%, rgb(160, 8, 157) 71%, rgb(49, 0, 133) 89%, rgb(0, 13, 33) 99%, rgb(0, 16, 21) 100%);
background: -ms-linear-gradient(top, rgb(242, 255, 246) 0%, rgb(254, 226, 44) 15%, rgb(253, 164, 0) 31%, rgb(233, 75, 67) 51%, rgb(160, 8, 157) 71%, rgb(49, 0, 133) 89%, rgb(0, 13, 33) 99%, rgb(0, 16, 21) 100%);
background: -moz-linear-gradient(top, rgb(242, 255, 246) 0%, rgb(254, 226, 44) 15%, rgb(253, 164, 0) 31%, rgb(233, 75, 67) 51%, rgb(160, 8, 157) 71%, rgb(49, 0, 133) 89%, rgb(0, 13, 33) 99%, rgb(0, 16, 21) 100%);
background: linear-gradient(to bottom, rgb(242, 255, 246) 0%, rgb(254, 226, 44) 15%, rgb(253, 164, 0) 31%, rgb(233, 75, 67) 51%, rgb(160, 8, 157) 71%, rgb(49, 0, 133) 89%, rgb(0, 13, 33) 99%, rgb(0, 16, 21) 100%);}


#rainbow        {
background: -webkit-linear-gradient(top, rgb(255, 224, 203) 0%, rgb(249, 26, 67) 20%, rgb(245, 198, 11) 40%, rgb(159, 203, 4) 54%, rgb(39, 159, 94) 63%, rgb(0, 117, 221) 73%, rgb(0, 25, 103) 93%, rgb(0, 3, 73) 100%);
background: -o-linear-gradient(top, rgb(255, 224, 203) 0%, rgb(249, 26, 67) 20%, rgb(245, 198, 11) 40%, rgb(159, 203, 4) 54%, rgb(39, 159, 94) 63%, rgb(0, 117, 221) 73%, rgb(0, 25, 103) 93%, rgb(0, 3, 73) 100%);
background: -ms-linear-gradient(top, rgb(255, 224, 203) 0%, rgb(249, 26, 67) 20%, rgb(245, 198, 11) 40%, rgb(159, 203, 4) 54%, rgb(39, 159, 94) 63%, rgb(0, 117, 221) 73%, rgb(0, 25, 103) 93%, rgb(0, 3, 73) 100%);
background: -moz-linear-gradient(top, rgb(255, 224, 203) 0%, rgb(249, 26, 67) 20%, rgb(245, 198, 11) 40%, rgb(159, 203, 4) 54%, rgb(39, 159, 94) 63%, rgb(0, 117, 221) 73%, rgb(0, 25, 103) 93%, rgb(0, 3, 73) 100%);
background: linear-gradient(to bottom, rgb(255, 224, 203) 0%, rgb(249, 26, 67) 20%, rgb(245, 198, 11) 40%, rgb(159, 203, 4) 54%, rgb(39, 159, 94) 63%, rgb(0, 117, 221) 73%, rgb(0, 25, 103) 93%, rgb(0, 3, 73) 100%);}


#rainHC  {
background: -webkit-linear-gradient(top, rgb(250, 241, 240) 0%, rgb(192, 35, 36) 16%, rgb(135, 32, 0) 27%, rgb(204, 215, 0) 40%, rgb(0, 96, 25) 52%, rgb(0, 212, 222) 64%, rgb(33, 0, 164) 77%, rgb(214, 0, 213) 88%, rgb(0, 0, 0) 100%);
background: -o-linear-gradient(top, rgb(250, 241, 240) 0%, rgb(192, 35, 36) 16%, rgb(135, 32, 0) 27%, rgb(204, 215, 0) 40%, rgb(0, 96, 25) 52%, rgb(0, 212, 222) 64%, rgb(33, 0, 164) 77%, rgb(214, 0, 213) 88%, rgb(0, 0, 0) 100%);
background: -ms-linear-gradient(top, rgb(250, 241, 240) 0%, rgb(192, 35, 36) 16%, rgb(135, 32, 0) 27%, rgb(204, 215, 0) 40%, rgb(0, 96, 25) 52%, rgb(0, 212, 222) 64%, rgb(33, 0, 164) 77%, rgb(214, 0, 213) 88%, rgb(0, 0, 0) 100%);
background: -moz-linear-gradient(top, rgb(250, 241, 240) 0%, rgb(192, 35, 36) 16%, rgb(135, 32, 0) 27%, rgb(204, 215, 0) 40%, rgb(0, 96, 25) 52%, rgb(0, 212, 222) 64%, rgb(33, 0, 164) 77%, rgb(214, 0, 213) 88%, rgb(0, 0, 0) 100%);
background: linear-gradient(to bottom, rgb(250, 241, 240) 0%, rgb(192, 35, 36) 16%, rgb(135, 32, 0) 27%, rgb(204, 215, 0) 40%, rgb(0, 96, 25) 52%, rgb(0, 212, 222) 64%, rgb(33, 0, 164) 77%, rgb(214, 0, 213) 88%, rgb(0, 0, 0) 100%);}


#arctic          {
background: -webkit-linear-gradient(top, rgb(255, 248, 205) 0%, rgb(254, 189, 0) 16%, rgb(219, 100, 19) 32%, rgb(92, 124, 125) 52%, rgb(47, 244, 250) 71%, rgb(0, 0, 223) 91%, rgb(0, 0, 148) 100%);
background: -o-linear-gradient(top, rgb(255, 248, 205) 0%, rgb(254, 189, 0) 16%, rgb(219, 100, 19) 32%, rgb(92, 124, 125) 52%, rgb(47, 244, 250) 71%, rgb(0, 0, 223) 91%, rgb(0, 0, 148) 100%);
background: -ms-linear-gradient(top, rgb(255, 248, 205) 0%, rgb(254, 189, 0) 16%, rgb(219, 100, 19) 32%, rgb(92, 124, 125) 52%, rgb(47, 244, 250) 71%, rgb(0, 0, 223) 91%, rgb(0, 0, 148) 100%);
background: -moz-linear-gradient(top, rgb(255, 248, 205) 0%, rgb(254, 189, 0) 16%, rgb(219, 100, 19) 32%, rgb(92, 124, 125) 52%, rgb(47, 244, 250) 71%, rgb(0, 0, 223) 91%, rgb(0, 0, 148) 100%);
background: linear-gradient(to bottom, rgb(255, 248, 205) 0%, rgb(254, 189, 0) 16%, rgb(219, 100, 19) 32%, rgb(92, 124, 125) 52%, rgb(47, 244, 250) 71%, rgb(0, 0, 223) 91%, rgb(0, 0, 148) 100%);}


#lava               {
background: -webkit-linear-gradient(top, rgb(255, 252, 242) 0%, rgb(254, 209, 0) 9%, rgb(254, 68, 23) 30%, rgb(173, 30, 69) 49%, rgb(0, 133, 140) 69%, rgb(25, 75, 160) 89%, rgb(0, 0, 0) 100%);
background: -o-linear-gradient(top, rgb(255, 252, 242) 0%, rgb(254, 209, 0) 9%, rgb(254, 68, 23) 30%, rgb(173, 30, 69) 49%, rgb(0, 133, 140) 69%, rgb(25, 75, 160) 89%, rgb(0, 0, 0) 100%);
background: -ms-linear-gradient(top, rgb(255, 252, 242) 0%, rgb(254, 209, 0) 9%, rgb(254, 68, 23) 30%, rgb(173, 30, 69) 49%, rgb(0, 133, 140) 69%, rgb(25, 75, 160) 89%, rgb(0, 0, 0) 100%);
background: -moz-linear-gradient(top, rgb(255, 252, 242) 0%, rgb(254, 209, 0) 9%, rgb(254, 68, 23) 30%, rgb(173, 30, 69) 49%, rgb(0, 133, 140) 69%, rgb(25, 75, 160) 89%, rgb(0, 0, 0) 100%);
background: linear-gradient(to bottom, rgb(255, 252, 242) 0%, rgb(254, 209, 0) 9%, rgb(254, 68, 23) 30%, rgb(173, 30, 69) 49%, rgb(0, 133, 140) 69%, rgb(25, 75, 160) 89%, rgb(0, 0, 0) 100%);}


.temp-global-max,
.temp-global-min,
.isotherm-value {
  background:rgba(255, 255, 255, 0.5);
  color:#444;
  left:16px;
  width:48px;
  height:32px;
  position:absolute;
  line-height: 32px;
  text-align: center;
  border-radius: 4px;
  border: 1px solid #ddd; /* lp */
  border-top: 1px solid #999999; /* lp */
  border-bottom: 1px solid #eeeeee; /* lp */
}

.temp-global-max.manual,
.temp-global-min.manual {
  border: 2px solid #00aaee;
  width:46px;
  height:30px;
}

.temp-global-min {
  bottom:0px;
}

.isotherm-values {
  margin-top:8px;
  margin-left:8px;
}

#iso-value-low {
  left:155px;
}

#iso-value-high {
  left:210px;
}

.button-auto-max,
.button-auto-min {
  position:absolute;
  background:rgba(255, 255, 255, 0.5);
  right:8px;
  width:32px;
  height:32px;
  border-radius: 4px;
  line-height: 32px;
  font-size:10px;
  text-align: center;
  border: 1px solid #dddddd; /* lp */
  border-top: 1px solid #eeeeee; /* lp */
  border-bottom: 1px solid #999999; /* lp */
  cursor:pointer;
}

.button-auto-min {
  bottom:0px;
}

.measurement-value{
  display:inline-block;
  margin:0;
  line-height: 32px;
  color: #444;
  width:176px;
  text-align:right;
}

.data-init {
  color: #00aaee;
}

.temp-spot,
.temp-max,
.temp-diff{
  width:108px;
}

.temp-spot.readonly, .temp-max.readonly{
  width:143px;
}

.temp-min, .temp-average, .temp-iso{
  width:178px;
}

.internal-temp,
.digital-io-value{
  width:143px;
}

.spot{
  position:absolute;
  width:30px;
  height:30px;
  background-image: url("/public/img/light_precision/Sc_MeasureToolPlaced_Spot_Def.png");
}

.spot-label{
  background: #f6f6f6;
  border: 1px solid #ccc;
  width:13px;
  height:13px;
  border-radius: 2px;
  position:relative;
  left:21px;
  top:-4px;
  text-align: center;
  box-shadow: 1px 1px 1px black;
  cursor:default;
}

.mbox{
  position:absolute;
  border: 1px solid white;
  background-color: rgba(255,255,255,0);
}

.mbox-label{
  background: #f6f6f6;
  border: 1px solid #ccc;
  width:13px;
  height:13px;
  border-radius: 2px;
  box-shadow: 1px 1px 1px black;
  text-align: center;
  position: absolute;
  cursor:default;
  top:-15px;
  right:-15px;
}

.mbox-max{
  position:absolute;
  width:30px;
  height:30px;
  background-image:url("/public/img/light_precision/Sc_MeasureToolPlaced_BoxSpotHot_Def.png");
}

.mbox-min{
  position:absolute;
  width:30px;
  height:30px;
  background-image:url("/public/img/light_precision/Sc_MeasureToolPlaced_BoxSpotCold_Def.png");
}

@media only screen and (min-width: 417px) {
  #buttonGroup-misc{
      top:16px;
      right:112px;
  }
}

@media only screen and (min-width: 660px) {
  #buttonGroup-measure {
      top:16px;
      right:112px;
  }
}

@media only screen and (min-width: 1070px) {
  #column-tools{
      width:288px;
      height:656px;
  }

  #panel-log{
      position:absolute;
      bottom:0px;
      width:288px;
  }

  #button-log{
      width:256px;
  }

  .popup-diff:before,
  .popup-diff:after{
      left:370px;
  }

  .popup-spot:before,
  .popup-spot:after{
      left:287px;
  }

  .popup-mbox:before,
  .popup-mbox:after {
      left:497px;
  }
}

.notification{
  position:absolute;
  margin-left:16px;
  margin-top:-14px;
  z-index:1000;
  cursor: auto;
  display:none;
  border: 1px solid #00aaee;
  border-radius: 5px;
  border-color: #ccc;
  height:24px;
  vertical-align:top;
  background: #f6f6f6;
  color: #444;
}

.notification p{
  margin-top:6px;
  margin-left:8px;
}

#preset-to-upload{
  display:inline;
  position:absolute;
  left:17px;
  opacity:0;
  cursor: pointer;
}

#buttonGroup-preset input[type='button']{
  cursor: pointer;
}

.text-disabled{
  color: #777777;
}

#palette-dropdown{
  right:24px;
  margin-top:3px;
}

#log-container{
  max-height:180px;
  overflow-y:auto;
  border:0px;
  width:238px;
  margin:-8px;
}

.log-buttons {
  margin-top:-8px;
  margin-bottom:8px;
  width:237px;
  height:20px;
  cursor:pointer;
}

.log-button {
  display:inline-block;
  color:#00aaee;
}

#log-save {
  position:absolute;
  right:28px;
}

#log-hr {
  margin-top:8px;
  margin-left:-8px;
  margin-right:-8px;
}

#expand-indicator {
  display:inline-block;
  position:absolute;
  right:28px;
  height:12px;
  margin-top:10px;
  margin-bottom:0px;
  border:1px solid;
  border-radius:2px;
  border-color:#000000;
  background:#f6f6f6;
  width:12px;
  cursor:pointer;
}

#expand-p {
  margin-top:-10px;
  text-align:center;
}

.dialog-arrow{
  position:relative;
  z-index:1;
  pointer-events:none;
  -ms-transform:rotate(90deg) scale(0.7);
  -webkit-transform:rotate(90deg) scale(0.7);
  transform:rotate(90deg) scale(0.7);
  width:20px;
  left:20px;
  margin-top:20px;
}

.sidebar-item {
overflow: hidden;
border-bottom: 1px solid #ccc;
padding-bottom: 2px;
margin-bottom: 2px;
}

.sidebar-item:last-of-type {
  border-bottom: none;
}
