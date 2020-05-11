function message(){
    $('#test').click()
    $('#warning1').empty();
    div = $('<div>')
    div.attr('class','alert alert-dismissible alert-info')
    p = $('<p>');
    p.attr('class', 'mb-0 text-center')
    p.text('You must be connected');
    div.append(p);
    $('#warning1').append(div);
}

// $(window).click(function (){
//     $('#waring1').remove
// })

function messageSuccess()
{
    div = $('<div id="alert" class="alert alert-success">')
    div.html('The product has been succefully added to cart')
    $('#success').append(div)
}

function nbreItems()
{
    $.get("shopController.php?action=compter", function(data, status){
        $('#nbreItems').html(data);
    });
}

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

function remove(val){
    $('#cart').load('shopController.php',{
       action:"supprimer",
       id:val
    });
    nbreItems();
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
            $('#'+idInput.id+'').attr('value', val);
            nbreItems();
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
}




$(document).ready(function(){
    $('#cart').load('shopController.php',{
        action:"afficher"
    });
    nbreItems();
});

$(window).mousemove(function (){
    $('#alert').remove();
});


$('.add').click(function (e){
    $.ajax({
        url:'shopController.php',
        type:'POST',
        data: 'id='+$(this).attr('id')+'&action=ajouter',
        success : function(data)
        {
            response = JSON.parse(data)
            if(response.status == true){
                $('#cart').load('shopController.php',{
                    action:"afficher"
                });
                nbreItems();
                messageSuccess();

            }else{
                message();
            }
        },
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
});

$('#redeem').click(function(){
    var val = $('#inputCode').val()
    $.ajax({
        url:'shopController.php',
        type:'POST',
        data:'promo&codePromo='+val+'',
        success: function(data){
            response = JSON.parse(data)
            $('#reduction').html('-'+response[0].reduction+'%')
            $('#code').html(val)
        }
    });
});

$("#checkout").on( "submit", function( event ) {
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
                }else{
                    window.location.href="personal-space.php";
                }
            }
            else{
                window.location.href="personal-space.php";
                
            }
        }, 
        error : function(xhr, message, status){
            alert("Erreur !!");
        }
    });
});

function extractUrlParams(){
    var t = location.search.substring(1).split('?');
    var s = t[0].substring().split('&');
    var f = [];
    for (var i=0; i<s.length; i++){
        var x = s[ i ].split('=');
        f[x[0]]=x[1];
    }
    return f;
}



$(document).ready(function(){
    data= extractUrlParams()
    $("#pagination").load('shopController.php?action=pagination&categorie='+data['categorie']+'')
});

$(document).ready(function(){
    afficherProduit();
});

function afficherProduit(categorie){
    data= extractUrlParams()
    
    $("#produit").load('shopController.php?action=afficherProduit&page='+data['page']+'&categorie='+data['categorie']+'')
};


function passage(){
    $.get('shopController.php?action=numberPage', function(response){
        var numberPage = response;
        data= extractUrlParams();
        if(parseInt(data['page'])<numberPage){
            data1= parseInt(data['page'])+1;
        }
        
        if(parseInt(data['page'])>1){
            data2= parseInt(data['page'])-1;
        }
        $('#suivant').attr('href','shop_02.php?page='+data1+'')

        $('#precedent').attr('href','shop_02.php?page='+data2+'')
    });
}

