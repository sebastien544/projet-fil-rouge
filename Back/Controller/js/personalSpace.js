function displayHistory(value){
    $('#receiver').load('personalSpaceController.php?action='+value+'',{
    });
}

$.get('personalSpaceController.php?action=testConnexion', function(response){
    response = JSON.parse(response)
    if(response.status == false){
        window.location.href = "home.php";
    }
})