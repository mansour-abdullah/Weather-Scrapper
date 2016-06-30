<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scrapper 1.0</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
          html , body{
              height:100%; 
              
          }          
.container {
  background-image:url(background.jpg); 
 width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    padding-top: 100px;
          }
          .center{
              text-align: center;
               
          }  
          .white{
              color:white;
          }
          p {
              padding-top:15px;
              padding-bottom:15px; 
              
          }
          button{
              margin-top:20px; 
             
          }
          .alert{
               margin-top:20px;
                display: none;
          }
      </style>
  </head>
  <body>
 <div class="container">
      <div class="row">
     
     <div class="col-md-6 col-md-offset-3 center white">
           
         <h1>Weather Scraper</h1>
         <p class="lead">Enter Your city below to get forcast of the weather</p>
         <form>
         <div class="form-group">
             <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London , Newyork , Paris ,Ryiadh ... ">
             
             
             
             </div>
         <button id="find" class="btn btn-success btn-lg">Find My Weather</button>
         
         </form>
           <div id="success" class="alert alert-success"> </div>
         <div id="fail" class="alert alert-danger">Please enter correct city name </div>
          <div id="empty" class="alert alert-warning">Please enter A City </div>
         </div> 
        
    
   
        
          </div>
        
     </div>
      
      
      
      
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        //ajax code
    $('#find').click(function(event) {
        event.preventDefault();
        if ( $('#city').val() !="" ){
	//passing the city using the url
      $.get("scraper.php?city="+$('#city').val() ,function( data ) {
          $(".alert").hide();
       
        if (data=="") {
            $('#success').hide();
             $('#fail').fadeIn();
            $('#empty').hide();
        }else {
            $('#empty').hide();
              $('#fail').hide();
             $('#success').html(data).fadeIn();
        }  
      }); 
        }else{
            $('#success').hide();
            $('#fail').hide();
            $('#empty').fadeIn();
            
        }
        
        
    });
    
    
    
    
    
    </script>
  </body>
</html>
