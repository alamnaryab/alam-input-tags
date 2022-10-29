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
                //url:'src.html',
                maxItems:4,
                data:[ 
                    {"no":1,"text":"abcdef","class":"danger"},
                    {"no":2,"text":"aghijk","class":"danger"},
                    {"no":3,"text":"blmnop","class":"success"},
                    {"no":4,"text":"qrstuv","class":"success"},
                ],
                fieldMappings:{
                    id:'no',
                    name:'text',
                    class:'class',
                }
            });
        });
    </script>
</head>
<body>
    
<div class="container mt-3">
    <div class="jumbotron py-3">
        <h1 class="text-center">Alam Input Tags</h1>
        <strong>Features</strong>
        <ul>
            <li>Ajax Or Static Json array of objects</li>
            <li>Colored tags based on object field</li>
            <li>Comma separated ids will be submitted</li>
            <li>In Edit page it will make tags from csv value</li>
            <li>Configurable max number of suggested items</li>
        </ul>
        
    </div>
    <div class="row">
        
       <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" />
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" />
            </div>
        </div>


        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <label>Tags</label>
                <input type="text" class="form-control alamInputTag" value="1,2,4" />
            </div>
        </div>

    </div>
    <div class="jumbotron py-3">
        <h3 class="p-0 m-0">How to use it</h3>
        
    <pre>

&lt;link rel="stylesheet" href="css/bootstrap.css"  />
&lt;link rel="stylesheet" href="css/alam-input-tags.css"  />
&lt;script src="js/jquery.js">&lt;/script>
&lt;script src="js/alam-input-tags.js">&lt;/script>

&lt;input type="text" name="tags" class="form-control alamInputTag" value="1,2,4" />

$(function(){
    $('.alamInputTag').alamInputTags({ 
        maxSuggessions:5,
        maxItems:10,
        //url:'src.html', 
        data:[ 
                {"id":1,"name":"abcdef","class":"danger"},
                {"id":2,"name":"aghijk","class":"danger"},
                {"id":3,"name":"blmnop","class":"success"},
                {"id":4,"name":"qrstuv","class":"success"},
            ],
        fieldMappings:{
            id:'no',
            name:'text',
            class:'class',
        }
    });
});
        </pre>
        <ul>
            <li><strong>maxSuggessions</strong> its optional if not provided it will take default 5</li>
            <li><strong>maxItems</strong> its optional if not provided it will take default 0 which means no limit</li>
            <li><strong>url</strong> url or data one should be there, If both url and data given then data will be overwritten </li>
            <li><strong>data</strong> data should be JSON array of objects, the same format will be required in URL too</li>
            <li><strong>fieldMappings</strong> (optional if fields names are [id,name,class]) else if your data has different field names e.g
                <pre>

data:[ 
    {"no":1,"text":"abcdef","class":"danger"},
    {"no":2,"text":"aghijk","class":"danger"},
    {"no":3,"text":"blmnop","class":"success"},
    {"no":4,"text":"qrstuv","class":"success"},
]
                </pre>
                then you have to provide <b>fieldMappings</b> as below
                <pre>

fieldMappings:{
    id:'no',
    name:'text',
    class:'class',
}
                </pre>
                left side of : should not be changed, only right side of : should be same as your field names also in commas
            </li>
        </ul>
    </div>
</div>

</body>
</html>