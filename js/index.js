$(document).ready(function(){

var waypoint = new Waypoint({
  element: document.getElementById('nav'),
  handler: function(direction) {

    if(direction === "down"){
    	$('#nav').addClass('navFixed');
    }

    else if(direction === "up"){
    	$('#nav').removeClass('navFixed');
    }
  },
  offset: 20
})


/*$(function() {
    var img = $("#peeps"),
        width = img.get(0).width,
        screenWidth = $(window).width(),
        duration = 5000;

    function animatePeeps() {
        img.css("left", -width)
           .animate({
                "left": screenWidth
            }, duration, animatePeeps);
    }

    animatePeeps();*/




var animate, left=0, imgObj=null;

function init(){

   imgObj = document.getElementById('peeps');
   imgObj.style.position= 'absolute';
   imgObj.style.top = '240px';
   imgObj.style.left = '-300px';
   imgObj.style.visibility='hidden';

   moveRight();
}

function moveRight(){
    left = parseInt(imgObj.style.left, 10);

    if (10 >= left) {
        imgObj.style.left = (left + 5) + 'px';
        imgObj.style.visibility='visible';

        animate = setTimeout(function(){moveRight();},20); // call moveRight in 20msec

        //stopanimate = setTimeout(moveRight,20);
    } else {
        stop();
    }
    //f();
}

function stop(){
   clearTimeout(animate);
}

$( window ).scroll(function() {
  $( "span" ).css( "display", "inline" );
});

//window.onload {init();}; ) //Originally wndow.onload 

});



