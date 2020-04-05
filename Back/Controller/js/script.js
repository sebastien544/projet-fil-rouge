$(document).ready(function()
{
    $("#loginDiv").hide();
    //$("button").clicked(function(){
        if($(this).prop("#clicked") == true)
        {
            $("#loginDiv").hide();
            $("#menuDiv").show();
        }
   // });


   
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
