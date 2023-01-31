function insertUser(){

    var name = $('#fname').val();
    var mobile = $('#fmobile').val();
    var email = $('#femail').val();

    if(name != '' && mobile != '' && email != ''){

        $.ajax({
            url : 'insertData.inc.php',
            type : 'POST',
            data : {
                'name' : name,
                'mobile' : mobile,
                'email' : email
            },
            dataType : 'JSON'
            
                success : function(response){
                    console.log(response)
                    if(response.trim() == 'success'){
                        $('#msg').html('data send')
                    }else{
                        $('#msg').html('data not send')
                    }
                }
        })
    }

}
