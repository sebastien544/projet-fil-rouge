$(document).ready(function()
{

    $("#loginDiv").load('Connexion.php',{
        action:"affichage"
    })


});

$("#deconnection").click(function(){

    $("#loginDiv").load('Connexion.php',{
        action:"logout"
    })

});




load()