    <?php
            	if(isset($_POST['submit']))
					{ 
						if(!empty($_POST["choice"])){
							foreach($_POST['choice'] as $key)
							{
						echo $key.'<br>';
						}
					
				}
			}
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Check Box</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <style type="text/css">
 body {padding-top:20px;}
</style>

</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Form</legend>
    

        
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">CSS</label>
              <div class="col-md-9">
                <input id="phone" name="choice[]" value="CSS" type="checkbox" placeholder="" class="form-control">
              </div> 
              </div> 
               <div class="form-group">
              <label class="col-md-3 control-label" for="name">JS</label>
              <div class="col-md-9">
                <input id="phone" name="choice[]" value="JS" type="checkbox" placeholder="" class="form-control">
              </div> 
              </div>  <div class="form-group">
              <label class="col-md-3 control-label" for="name">PHP</label>
              <div class="col-md-9">
                <input id="phone" name="choice[]" value="PHP" type="checkbox" placeholder="" class="form-control">
              </div> 
              </div> 

    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button  name = "submit" type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
</div>
</body>
</html>