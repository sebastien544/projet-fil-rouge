$('#cart').load('shopController.php',{
});

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
