<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"F:\phpStudy\PHPTutorial\WWW\self\public/../application/admin\view\index\index.htm";i:1551457521;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>#</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="../../../../public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="../../../../public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="../../../../public/static/admin/style/demo.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/animate.css" rel="stylesheet">
    <style>
        #div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
    </style>
</head>
<body>
    <p>DROG:</p>
    <div id="div1"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <br>
    <img id="drag1" src="../../../../public/static/admin/images/logo.png" ontouchstart="touchstart(event)" ontouchmove="touchmove(event)" ontouchend="touchend(event)" draggable="true" ondragstart="drag(event)" width="300" height="56">
    
    <script>
    function allowDrop(ev){
        alert(ev);
        //ev.preventDefault();
    }
    function touchstart(ev){
        alert(ev);
        //ev.preventDefault();
    }
    function ontouchmove(ev){
        alert(ev);
        //ev.preventDefault();
    }
    function ontouchend(ev){
        alert(ev);
        //ev.preventDefault();
    }
    
    function drag(ev){
        alert(ev);
        //ev.dataTransfer.setData("Text",ev.target.id);
    }
    function test(ev)
    {
        alert(ev);
    }
    function drop(ev){
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        ev.target.appendChild(document.getElementById(data));
    }
    
    </script>

	    <!--Basic Scripts-->
    <script src="../../../../public/static/admin/style/jquery_002.js"></script>
    <script src="../../../../public/static/admin/style/bootstrap.js"></script>
    <script src="../../../../public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="../../../../public/static/admin/style/beyond.js"></script>
    


</body></html>