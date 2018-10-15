<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div style="background:red" class="col-md-8 offset-md-2">Col SM 4</div>
        <!-- <div style="background:blue" class="col-sm-4">Col SM 4</div> -->
        <!-- <div style="background:yellow" class="col-sm-4">Col SM 4</div> -->
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4" style="background:yellow">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, accusamus.</div>
    </div>
</div>
<style>
@media only screen and (max-width: 1100px) and (min-width: 600px) {
    body {
        background-color: cyan;
    }
    
    div.col-md-4{
        display:none;
    }
}

</style>

<!-- <div class="row pb-5">
        <div class="col-md-6 offset-md-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis molestiae officiis praesentium vitae laudantium exercitationem, corporis debitis! Blanditiis, doloremque ipsa minus adipisci eius, tenetur molestiae architecto praesentium quasi quibusdam repudiandae voluptatem ipsam ut quae expedita dolore mollitia consequuntur cupiditate, dolorum cum? Perferendis, commodi illum aspernatur dolorum natus dolores modi corrupti qui veniam et atque ducimus corporis accusantium cupiditate saepe odio, omnis aliquam eveniet animi consequuntur in ipsa. Nam, modi! Optio unde soluta dignissimos accusamus autem praesentium similique pariatur error, possimus minima nulla tempora rem. Natus harum dolores id deleniti est, veritatis quisquam facere. Quo aliquam in iure eaque asperiores officia sequi perferendis, minima deleniti cum laboriosam nobis, doloribus aspernatur quos corrupti fuga eum! Veniam maiores vero, cupiditate enim, culpa molestias sunt nam praesentium numquam officia aut facere. Exercitationem quisquam fuga magni minima vel veritatis excepturi, expedita assumenda, provident in, ullam fugiat. Deleniti, molestias ipsa temporibus possimus assumenda ad nisi? Molestias consequatur ut dicta eaque, ipsam doloremque porro nemo tenetur quod repellat vel odit facere commodi nulla voluptates quidem beatae animi saepe enim eius obcaecati veritatis perferendis aliquam. Qui, accusantium quis sequi illo id architecto neque modi veritatis. Eaque nemo, maiores, nulla impedit culpa molestias quod reprehenderit enim omnis, corrupti praesentium.</div>
</div>

<div class="container d-flex" style="height:200px; background:yellow;">
  <div class="row align-items-center">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div> -->
    <!-- <div id="container">
        <div id="one">Lorem ipsum dolor sit amet.</div>
    
        <div id="two">Lorem ipsum dolor sit amet.</div>
    
        <div id="three">Lorem ipsum dolor sit amet.</div>
    
        <div id="four">Lorem ipsum dolor sit amet.</div>
    </div>

    <style>
        
        #one{
            height: 100px;
            width:100px;
            background:red;
            
        }
        #two{
            height: 100px;
            width:100px;
            background:blue;
            
        }
        #three{
            height: 100px;
            width:100px;
            background:yellow;
        }
        #four{
            height: 100px;
            width:100px;
            background:green;
        }
    </style> -->
</body>
</html>