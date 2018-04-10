<?php
    $.post("callJson.aspx", {
        name: $("#inputname").val(),
        site: $("#inputsite").val(),
        email: $("#inputemail").val(),
        phone: $("#inputphone").val(),
        question: $("#inputauestion").val()
    }, function (data) {

               

               });


