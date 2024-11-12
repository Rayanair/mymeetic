$(document).ready(function() {
    $("#formulaire").submit(function(e) {
       e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controler/controlrech.php",
            data: { genre: $("#genre").val(), ville: $("#ville").val(), loisir: $("#loisir").val(), age: $("#age").val()},
            async: true,
            success: function(response) {
                
                console.log(response)
            }
        });
});
});