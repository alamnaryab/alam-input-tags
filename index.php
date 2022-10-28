<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alam Input Tags</title>
    <link rel="stylesheet" href="css/bootstrap.css"  >
    <link rel="stylesheet" href="css/alam-input-tags.css"  >
    <script src="js/jquery.js"></script>
    <script src="js/alam-input-tags.js"></script>
 
    <script>
        $(function(){
            $('.alamInputTag').alamInputTags({
                url:'src.html'
            });
        });
    </script>
</head>
<body>
    
<div class="container">
    <div class="row">
        
       <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" />
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" />
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" />
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" />
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control alamInputTag" value="1,2,4" />
            </div>
        </div>

    </div>
</div>

</body>
</html>