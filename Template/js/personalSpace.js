function displayHistory(value){
    $('#receiver').load('../Controller/personalSpaceController.php?action='+value+'',{
    });
}

$.get('../Controller/personalSpaceController.php?action=testConnexion', function(response){
    response = JSON.parse(response)
    if(response.status == false){
        window.location.href = "home.php";
    }
})