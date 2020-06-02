<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax crud</title>

    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    
     <div class="container">

              <form action="" id="contactForm" method="POST" >

                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="">

                    <label for="name">Email:</label>
                    <input type="text" name="email" class="form-control" id="">

                    <label for="name">Phone:</label>
                    <input type="text" name="phone" class="form-control" id="">

                    <input  type="submit" class="btn btn-default " id="btnSave" value="save">
             

              </form>
     </div>



   
    
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        

        $(function(){
            $('#contactForm').submit(function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = '{{url('contact')}}'

               $.ajaxSetup(
                   {
                      headers : {'X-CSRF-Token' : '{{csrf_token()}}' }
                   })


               $.ajax({ 
                   url : url ,
                   method : 'POST',
                   data : data ,
                   success: function(response){
                      if(response.success){
                          alert(response.message);
                      }
                   },
                   error : function(error){
                    console.log(error)
                   }
                })

            })
        });
    </script>
</body>
</html>