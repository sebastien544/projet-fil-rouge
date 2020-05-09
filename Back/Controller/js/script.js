

$(document).ready(function()
{
    $("#loginDiv").load('Connexion.php',{
        action:"affichage"
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

                $('#cart').load('shopController.php',{
                    action:"afficher"
                });

                $('.signPet').removeAttr('disabled')
                $('.signPet').attr('value','SIGN')
                $('#nbreItems').empty()
                
                
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
            if(response.success)
            {
                $("#loginDiv").load('Connexion.php',{
                    action:"affichage"
                });
                
                $('#cart').load('shopController.php',{
                    action:"afficher"
                });

                nbreItems();

                $('.close').click();
                signed();
            }else
            {
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
        success : function(data){
            response = JSON.parse(data)
            if(response.status == true){
                $('#'+id+'').attr('disabled','disabled')
                $('#'+id+'').attr('value','SIGNED')
                $('#answers'+id+'').html("Thank you for your support")
            }else{
                $('#test').click()
                $('#warning1').empty();
                div = $('<div>')
                div.attr('class',' alert alert-dismissible alert-success')
                p = $('<p>');
                p.attr('class', 'mb-0')
                p.text('You must be connected');
                div.append(p);
                b = $('<button>')
                b.attr('type','button')
                b.attr('class','close')
                b.attr('data-dismiss','alert')
                b.html('&times;')
                div.append(b);
                $('#warning1').append(div);
            }
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
}

function bouton(idPetition)
{
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


