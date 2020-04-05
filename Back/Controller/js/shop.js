$('#cart').load('shopController.php',{
    action:"afficher"
});

function recuperer(){
 $.ajax({
    url:'shopController.php',
    type:'POST',
    data:'action=recuperer',
    success: function(data){
        response = JSON.parse(data)
        $('#firstName').val(response.prenom)
        $('#lastName').val(response.nom)
        $('#email').val(response.mail)
    }
 })
}

$('.add').click(function (e){
    $('#cart').load('shopController.php',{
        action:"ajouter",
        id:$(this).attr('id')
     });
});

function remove(val){
    $('#cart').load('shopController.php',{
       action:"supprimer",
       id:val
    });
}

function updateQuantity(id,idInput,role){
    $.ajax({
        url:'shopController.php',
        type:'POST',
        data:'id='+id+'&action=majorer&quantity='+idInput.value+'&role='+role+'',
        success : function(){
            if(role == 'major'){
            val = parseInt(idInput.value) + 1
            }else{
                val = parseInt(idInput.value) - 1
            }
            $('#'+idInput.id+'').attr('value', val)
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
}

$('#redeem').click(function(){
    $('#code').html($('#inputCode').val())
});

$("form").on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        url:'shopController.php',
        type:'POST',
        data:$( this ).serialize(),
        success : function(data){
            if(data){
                response = JSON.parse(data);
                if(response.error){
                    if(response.error.code == 1062){
                        $('#warning2').attr('class','alert alert-dismissible alert-danger')
                        h = $('<h4>');
                        h.attr('class', 'alert-heading');
                        h.text('Warning !');
                        $('#warning2').append(h);
                        p = $('<p>');
                        p.attr('class', 'mb-0')
                        p.text('Numéro employé déjà utilisé');
                        $('#warning2').append(p);
                    } 
                    else{
                      console.log(response.error.message);
                    }
                } 
            }
            else{
                $('.modal').modal('hide');
                $('tbody').load('affichage.php',{
                });
            }
        }, 
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
});

