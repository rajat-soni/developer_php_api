function insertUser(){

    var name = $('#name').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();

    if(name != '' && mobile != '' && email != ''){

        $.ajax({
            
                url: "http://localhost:3000/AJAX_PHP_API/insertDataApi.php",
                type: "POST",
                contentType: "application/json; charset=utf-8",
                data: JSON.stringify({'name': name, 'mobile': mobile, 'email': email}),
                cache: false,
                success : function(response){
                let rest = JSON.parse(response)
                
                    if(rest.status == 200){
                       window.location.href = 'http://127.0.0.1:5500/CURL_API/curlHome.html';
                    }else{
                        $('#msg').html('data not send')
                    }
                }
        })
    }

}
