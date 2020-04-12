$(document).ready(function()
{
    $("#loginDiv").load('Connexion.php',{
        action:"affichage"
    })

    $.ajax({
        url:'petitionController.php',
        type:'POST',
        data: "action=afficherPet",
        success : function(data){
            response = JSON.parse(data)
            for(i=0; i<response.length; i++){
                $('#'+response[i].id_petition+'').attr('disabled','disabled')
                $('#'+response[i].id_petition+'').attr('value','SIGNED')
            }
    
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
    
});

$("#deconnection").click(function(){
    $.ajax({
        url:'Connexion.php',
        type:'POST',
        data: "action=logout",
        success : function(data){
            
                $("#loginDiv").load('Connexion.php',{
                    action:"affichage"
                })
                
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });

});
$('#loginDiv').on('submit', 'form', function(event){
    event.preventDefault();
    $.ajax({
        url:'Connexion.php',
        type:'POST',
        data: $( this ).serialize(),
        success : function(data){
            response = JSON.parse(data)
            if(response.success){
                $("#loginDiv").load('Connexion.php',{
                    action:"affichage"
                });
            }else{
                $('#warning1').attr('class','text-center alert alert-dismissible alert-danger')
                h = $('<h4>');
                h.attr('class', 'alert-heading');
                h.text('Warning !');
                $('#warning1').append(h);
                p = $('<p>');
                p.attr('class', 'mb-0')
                p.text('connexion failed, please verify your email or your password.');
                $('#warning1').append(p);
                b = $('<button>')
                b.attr('type','button')
                b.attr('class','close')
                b.attr('data-dismiss','alert')
                b.text('X')
                $('#warning1').append(b);

            }
        },

        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });

});

function btn(id){
    $.ajax({
        url:'petitionController.php',
        type:'POST',
        data: 'idPetition='+id+'&action=validation_petition',
        success : function(){
            $('#'+id+'').attr('disabled','disabled')
            $('#'+id+'').attr('value','SIGNED')
            $('#answers'+id+'').html("Thank you for your support")
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
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
