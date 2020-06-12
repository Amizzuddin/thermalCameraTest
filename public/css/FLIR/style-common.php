
/*
 * Header & Navigation
 */

body {
    background: #f6f6f6;
    font-family: Helvetica, Arial, sans-serif;
    font-size:12px;
    color: #444;
    margin: auto;
    width: auto;
 }

 p {
    color: #444;
 }


 h1,h2,h3,h4,h5 {
    font-family: Helvetica, Arial, sans-serif;
 }

 hr{
    background: #ccc;
    height:1px;
    border:none;
 }

label{
    line-height: 32px;
}

/* CHECKBOX */

label [type="checkbox"] {
    display:none;
}

label [type="checkbox"] + span{
    display:inline-block;
    width:30px;
    height:30px;
    vertical-align:top;
    background:url("/public/img/light_precision/Ic_ListChoice_CheckBox_Def.png");
}

label [type="checkbox"]:checked + span{
    background: url("/public/img/light_precision/Ic_ListChoice_CheckBoxChecked_Sel.png");
}

.left-adjusted, .right-adjusted{
    display:inline-block;
    vertical-align: top;
}

.box-shadow-small{
    -webkit-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.box-shadow-big{
    -webkit-box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
}

/* RADIO BUTTON */

label [type="radio"] {
    display:none;
}

label [type="radio"] + span{
    display:inline-block;
    width:30px;
    height:30px;
    vertical-align:top;
    background:url("/public/img/light_precision/Ic_ListChoice_RadioButton_Def.png");
}

label [type="radio"]:checked + span{
    background: url("/public/img/light_precision/Ic_ListChoice_RadioButtonChecked_Def.png");
}

 /*input[type="checkbox"], 
 input[type="radio"] {
    display:none;
 }
*/

.header-container {
    position:fixed;
    right: 0;
    left: 0;
    top: 0;
    margin-right: auto;
    margin-left: auto;
    width:100%;
    height:32px;
    z-index: 1000;
    background: #f6f6f6;
    border-bottom: 2px solid #00aaee;
}

.header-nav{
    margin-left:16px;
}

.header-nav a {
    display:inline-block;
    width: 20%;
    max-width: 128px;
    height:20px;
    text-align: center;
    text-decoration: none;
    margin-top:12px;
    color: #444;
    line-height:10px;
    font-size:14px;
}

.header-nav a:last-child{
    border-right:none;
}

.header-nav a.current{
    color: #00aaee;
    background-image: url("/public/img/light_precision/tabs_selected.png");
    background-repeat:no-repeat;
    background-position:bottom center;
}

.nav-edge{
    display:inline-block;
    background-image:url("/public/img/light_precision/tabs.png");
    width:1px;
    height:14px;
}

#header-logo{
    width:100px;
    height: 40px;
    position:absolute;
    top:0px;
    right:0px;
    display:none;
    background-image:url("/public/img/light_precision/flir_logo.png");
    background-size: 100px 40px;
    background-position: center;
    background-repeat: no-repeat;
}

#logout-container{
    text-align: center;
    padding-top: 0px;
    position: absolute;
    top: 6px;
    right: 0px;
    width: 57px;
    height: 40px;
}

#header-logout, #logged-in-user{
    font-size: 10px;
    line-height: 10px;
    margin: 0;
}

#logged-in-user{
    color: #777777;
}

#header-logout a:link,
#header-logout a:visited,
#header-logout a:hover,
#header-logout a:active{
    color: #00aaee;
    text-decoration: underline;
}

.toolbar-container{
    position:fixed;
    top:34px;
    width:100%;
    z-index:1000;
    right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
}

.main-container{
    position:relative;
    top:114px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
}

.main-container.camera, .main-container.help{
    top:34px;
}

.helper{
    position:relative;
}

.column{
    display:inline-block;
    width:100%;
    max-width:768px;
    vertical-align: top;
    position:relative;
}

.panel{
    height:64px;
    position:relative;
    margin-bottom:16px;
    background: #ddd; /* For older browsers */
    background: -webkit-linear-gradient(#f6f6f6, #ddd); /* For Safari 5.1 to 6.0 */ /* lp */
    background: -o-linear-gradient(#f6f6f6, #ddd); /* For Opera 11.1 to 12.0 */ /* lp */
    background: -moz-linear-gradient(#f6f6f6, #ddd); /* For Firefox 3.6 to 15 */ /* lp */
    background: linear-gradient(#f6f6f6, #ddd); 
}

#panel-top,
#panel-bottom{
    height:112px;
}

.sidebar{
    margin-top: 16px;
    margin-right:16px;
    margin-left:16px;
    position:relative;
}

.sidebar-title{
    margin-top:16px;
    margin-left:16px;
    margin-right:16px;
    height:32px;
    line-height: 32px;
    background: #eeeeee;
    text-align: left;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px solid #ccc;
    padding-left:8px;
    color: #444;
    font-size:13px;
}

.sidebar-content{
    margin-left:16px;
    margin-right:16px;
    background:#ffffff;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border:1px solid #ccc;
    border-top: none;
    padding: 8px 8px 8px 8px;
    vertical-align: top;
    font-size:12px;
}

.buttonGroup {
    position:absolute;
    top:16px;
}

#buttonGroup-image,
#buttonGroup-recording,
#buttonGroup-storage{
    left:16px;
}

.button {
    width:32px;
    height:32px;
    display:inline-block;
    border-radius:4px;
    vertical-align: bottom;
    border: 1px solid #dddddd;
    border-top: 1px solid #eeeeee;
    border-bottom: 1px solid #999999;
    color: #444;
    box-sizing:border-box;
    background:rgba(255, 255, 255, 0.5);
    background-repeat:no-repeat;
    cursor:pointer;
    font-size: 12px;
}

.no-interact,
div.no-interact
input.no-interact,
.button.no-interact{
    cursor: default;
}

.button-delete{
    vertical-align: top;
    background-image:url("/public/img/light_precision/Ic_Global_Delete_Def.png");
}

.button-delete:hover{
    background-image:url("/public/img/light_precision/Ic_Global_Delete_Sel.png");
}

#buttonGroup-image .button,
#buttonGroup-storage .button,
#buttonGroup-recording .button {
    margin-right:16px;
}

.button-wide {
    width:120px;
    line-height:32px;
    margin-left:16px;
    box-sizing:border-box;
    text-align: center;
}

.button-wide:last-child {
    position:absolute;
    right:16px;
}

.popup-hoverable:hover {
    display:block;
}

.popup {
    position: relative;
    top:37px;
    background: #FFFFFF;
    border: 1px solid #808080;
    border-radius: 4px;
    padding:8px;
    z-index:101;
    cursor: auto;
}

.popup-hoverable{
    display:none;
}

.popup:after, .popup:before {
    bottom: 100%;
    left: 15px;
    border: solid transparent;
    content:" ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.popup:after {
    /*border-color: rgba(255, 255, 255, 0);*/
    border-bottom-color: #FFFFFF;
    border-width: 5px;
    margin-left: -5px;
}

.popup:before {
    border-color: rgba(84, 84, 84, 0);
    border-bottom-color: #808080;
    border-width: 6px;
    margin-left: -6px;
}

.popup-alarm:after, .popup-alarm:before{
    left:488px;
}

.popup input{
    cursor:pointer;
    margin-right:8px;
    vertical-align: middle;
}

.popup-helper{
    margin-top:-45px;
    height:40px;
}

.slider {
    border:1px solid gray;
    position:relative;
    width: 128px;
    display: inline-block;
    height:0px;
    top:-12px;
    left:8px;
}

.ui-slider .ui-slider-handle{
    /*border:1px solid red;*/
    background:gray;
    border-radius:1.2em;
    top:-.6em;
}

.ui-slider .ui-state-active{
    background:lightgray;
}

@media only screen and (min-width: 417px) {
    #panel-bottom{
        height:64px;
    }
}

@media only screen and (min-width: 480px) {
    nav{
        margin-left:0px;
    }

    .header-nav a{
        margin-top:28px;
    }

    .header-container{
        height:48px;
    }

    .main-container.camera, .main-container.help, .toolbar-container{
        top:50px;
    }

    #logout-container{
        top: 13px;
    }
}

@media only screen and (min-width: 660px) {
    #panel-top{
        height:64px;
    }

    #header-logo{
        display:inline-block;
    }

    #logout-container{
        right: 93px;
    }
}

@media only screen and (min-width: 768px) {
    .main-container, .header-container, .toolbar-container{
        width: 768px;
    }
}

@media only screen and (min-width: 1070px) {
    .main-container, .header-container, .toolbar-container{
        width: 1056px;
    }
}

 .drop-down-arrow{
    display:none;;
    position:absolute;
    z-index:1;
    pointer-events:none;
    -webkit-transform:rotate(90deg);
    transform:rotate(90deg);
    width:20px;
    height:auto;
    right:43px;
    margin-top:3px;
}

.overide-dropdown-arrow-div{
    display:inline;
}

#header-support{
    display: inline-block;
    position: absolute;
    top: 12px;
    right: 20px;
}

#header-support a:link,
#header-support a:visited,
#header-support a:hover,
#header-support a:active{
    color: #00aaee;
    text-decoration: underline;
}

.flip-horizontal {
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH"
}

.flip-vertical {
    -moz-transform: scaleY(-1);
    -o-transform: scaleY(-1);
    -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
    filter: FlipV;
    -ms-filter: "FlipV"
}

.flip-horizontal.flip-vertical {
    -moz-transform: scaleX(-1) scaleY(-1) !important;
    -o-transform: scaleX(-1) scaleY(-1) !important;
    -webkit-transform: scaleX(-1) scaleY(-1) !important;
    transform: scaleX(-1) scaleY(-1) !important;
    filter: FlipH FlipV !important;
    -ms-filter: "FlipH FlipV" !important
}