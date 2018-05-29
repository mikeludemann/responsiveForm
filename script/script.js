$(document).ready(function () {

    $("#contact").click(function () {

        $("#contactForm").slideDown("fast");
        $("#feedbackForm").slideUp("fast");

    });

    $("#feedback").click(function () {

        $("#feedbackForm").slideDown("fast");
        $("#contactForm").slideUp("fast");

    });

});