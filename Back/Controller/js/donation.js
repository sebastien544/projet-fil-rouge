new WOW().init();
$("button").click(function(e){
    $("#displayDon").html(this.textContent);
    $('#amount').attr('value', this.textContent )
});
// $("#submit").click(function(e){
//     $("#myModal").show("slow");
// });

$("#donationForm").on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        url:'donationController.php',
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

