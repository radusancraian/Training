$(document).ready(function() {

   jQuery('#form-new').submit(function (event) {

       event.preventDefault();

       var form = $(this);
       var data = form.serialize();
       var task = $('#task').val();


       $.ajax({
          url: 'log.php',
          data: data
       });

   });
    $('#log').load('log.php');

});