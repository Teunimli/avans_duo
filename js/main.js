$(document).ready(function() {
    $("h1").addClass("red");

    $(".bottom h2").addClass("red");

    $("#flipFirst").click(function(){
        $("#panelFirst").slideToggle("slow");
    })

    $("#flipSecond").click(function(){
        $("#panelSecond").slideToggle("slow");
    });

    $("#flipThird").click(function(){
        $("#panelThird").slideToggle("slow");
    });

    $("#flipFour").click(function(){
        $("#panelFour").slideToggle("slow");
    });

    $("#flipFifth").click(function(){
        $("#panelFifth").slideToggle("slow");
    });

    $("#flipSix").click(function(){
        $("#panelSix").slideToggle("slow");
    });
});

document.getElementById("defaultOpen").click();

function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;


    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function initMap() {
    var uluru = {lat: 51.584142, lng: 4.796597};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}



