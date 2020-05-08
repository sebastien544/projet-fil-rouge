$.ajax({
    url:'petitionController.php',
    type:'POST',
    data: "action=afficherPet",
    success : function(data){
        response = JSON.parse(data)
        if(response.status == false){
            
        }else{
            for(i=0; i<response.length; i++){
                $('#'+response[i].id_petition+'').attr('disabled','disabled')
                $('#'+response[i].id_petition+'').attr('value','SIGNED')
            }
        }

    },
    error : function(xhr, message, status){
        alert("Erreur !!");
    }
});


