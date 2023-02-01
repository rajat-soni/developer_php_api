function insertUser(){
 
    var name = $('#name').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var city = $('#city').val();
    
    if(name == "" &&  mobile == "" && email == "" && city == ""){

        $("#error").html("<p class='alert alert-danger'>Form Should not be empty!</p>").fadeOut(2000);

    }else{

        $.ajax({
            url: "http://localhost:3000/AJAX_PHP_API/insertDataApi.php",
            type: "POST",
            contentType: "application/json; charset=utf-8",
    
            data: JSON.stringify(
                {
                    'name': name, 
                    'mobile': mobile, 
                    'email': email, 
                    'city' : city
                }
            ),
            cache: false,
        
            success : function(resposne){

                 let resut = JSON.parse(resposne);


                if(resut.status == 200){

                    window.location.href = "http://127.0.0.1:5500/home.html";
                    
                }else{

                    window.location.href = "http://localhost:3000/AJAX_PHP_API/insertDataApi.php";
                }

            }

        })
    }
}    
       
    


       