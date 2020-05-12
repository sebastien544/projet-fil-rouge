new WOW().init();
$("button").click(function(e){
    $("#displayDon").html(this.textContent);
    $('#amount').attr('value', this.textContent )
});
// $("#submit").click(function(e){
//     $("#myModal").show("slow");
// });

$('#selectAnimal').change(function (){
    if($('#selectAnimal').val() == 'Monthly'){
        $('#div2').attr('class', 'd-flex')
        input = $('<input class="ml-1 form-control" name="donationDay" type="number" min="1" max="15" id="wDay" placeholder="withdrawal day">')
        $('#div2').append(input)
    }else{
        $('#wDay').remove()
    }
})

function donSuccess(animal)
{
    div = $('<div id="thankYou" class="card-body">')
    h4 =$('<h4 class="card-title text-center">')
    h4.html('THANK YOU !')
    div.append(h4)
    p = $('<p class="card-text">')
    p.html('Thanks to your support we will be able to provide a better futur for animals')
    div.append(p)
    p2 = $('<p class="card-text">')
    switch (animal) {
        case 'Gorilla':
            img = ('<img class="card-img-bottom" src="img/babyGoril.jpg" alt="Card image" style="width:100%;height:450px">')
            p2.html('Feel free to use the promo code "GORIL25" and get 25% off on any items of our shop')
          break;
        case 'Tiger':
            img = ('<img class="card-img-bottom" src="img/babyTiger.jpg" alt="Card image" style="width:100%">')
            p2.html('Feel free to use the promo code "TIGER25" and get 25% off on any items of our shop')
          break;
        case 'Elephant':
            img = ('<img class="card-img-bottom" src="img/babyEleph.jpg" alt="Card image" style="width:100%">')
            p2.html('Feel free to use the promo code "ELEPH25" and get 25% off on any items of our shop')
          break;
        case 'Chimpanze':
            img = ('<img class="card-img-bottom" src="img/babyChimp.jpeg" alt="Card image" style="width:100%">')
            p2.html('Feel free to use the promo code "CHIMP25" and get 25% off on any items of our shop')
          break;
        case 'Giraffe':
            img = ('<img class="card-img-bottom" src="img/babyGiraffe.jpg" alt="Card image" style="width:100%">')
            p2.html('Feel free to use the promo code "GIRAF25" and get 25% off on any items of our shop')
      }
    div.append(p2)
    div.append(img)
    $('#success').append(div)
}

$(window).click(function (){
    $('#thankYou').remove();
})


$("#donationForm").on( "submit", function( event ) 
{
    event.preventDefault();
    $.ajax(
    {
        url:'../Controller/donationController.php',
        type:'POST',
        data:$( this ).serialize(),
        success : function(data)
        {
            if(data)
            {
                response = JSON.parse(data);
                if(response.status == false)
                {
                    message();
                }else if(response.error)
                {
                    if(response.error.code == 1062)
                    {
                        $('#warning2').attr('class','alert alert-dismissible alert-danger')
                        h = $('<h4>');
                        h.attr('class', 'alert-heading');
                        h.text('Warning !');
                        $('#warning2').append(h);
                        p = $('<p>');
                        p.attr('class', 'mb-0')
                        p.text('Numéro employé déjà utilisé');
                        $('#warning2').append(p);
                    }else
                    {
                      console.log(response.error.message);
                    }
                }else
                {
                    donSuccess($('#animal').val());
                }
            }
        }, 
        error : function(xhr, message, status)
        {
            alert("Erreur !!");
        }
    });
});



