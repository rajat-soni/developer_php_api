
            function loadFun(){
                
            $.ajax({
        
                url : 'http://localhost:3000/developer_php_api/AJAX_PHP_API/fetchApi.php',
                type : 'GET',
                success : function(response){
                    // let resut = JSON.parse(response);
                    // console.log(resut)
                 if(response.status == 201){
                    
                 }else{
                   
                 
                 $.each(response, function(key,value){
                    $('#tbl').html('');
                   $('#tbl').append("<tr><td>"+value.user_id+"</td><td>"+value.name+"</td><td>"+value.mobile+"</td><td>"+value.email+"</td><td>"+value.city+"</td><td><button class= 'btn btn-primary btn-sm data-eId ='"+value.user_id+">Edit</button>&nbsp;<button class= 'btn btn-danger btn-sm data-dId =  '"+value.user_id+">Delete</button></td></tr>" )
                  
                 
                 
                })
               
                 }
                }
            });
        }
     

