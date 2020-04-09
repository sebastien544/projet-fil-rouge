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

/*function connec (form) {
   
    $('#loginDiv').load('Connexion.php',{
        data:$(form.value).serialize()
    })
}; */
$('#loginDiv').on('submit', 'form', function( event ){
    $("#loginDiv").load('Connexion.php',$(this).serialize(),{
        
        
        
    })
});



function btn01(){
    document.getElementById("answers1").innerHTML ="you have already signed the petition";
    document.getElementById("disapear1").innerHTML ="";
}

function btn02(){
    document.getElementById("answers2").innerHTML ="you have already signed the petition";
    document.getElementById("disapear2").innerHTML ="";
}

function btn03(){
    document.getElementById("answers3").innerHTML ="you have already signed the petition";
    document.getElementById("disapear3").innerHTML ="";
}


function bouton(idPetition){
    $.ajax({
        url:'formulaire_petition.php',
        type:'POST',
        data:'action=searchPet&id='+idPetition+'',
        success : function(data){
            response = JSON.parse(data)
            console.log(response)
        }
    });
}
