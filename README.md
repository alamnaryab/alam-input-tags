# Alam input tags jQuery plugin
## Features
- Ajax Or Static Json array of objects
- Colored tags based on object field
- Comma separated ids will be submitted
- In Edit page it will make tags from csv value
- Configurable max number of suggested items
- Configurable max number of items to select
- Fields mapping

## How to use it
Include these css and js files in your page
```html
<link rel="stylesheet" href="css/bootstrap.css"  />
<link rel="stylesheet" href="css/alam-input-tags.css"  />
<script src="js/jquery.js"></script>
<script src="js/alam-input-tags.js"></script>
```

a textbox
```html
<input type="text" name="tags" class="form-control alamInputTag" value="1,2,4" />
```

and add this JS code
```javascript
$(function(){
    $('.alamInputTag').alamInputTags({ 
        maxSuggessions:5,
        maxItems:10,
        //url:'src.html', 
        data:[ 
                {"id":1,"name":"Alam","class":"danger"},
                {"id":2,"name":"Bilal","class":"danger"},
                {"id":3,"name":"Khan","class":"success"},
                {"id":4,"name":"Shayan","class":"success"},
            ],
        //fieldMappings:{
        //    id:'no',
        //    name:'text',
        //    class:'class',
        //}
    });
});
```

## Optoins
- **maxSuggessions** its optional if not provided it will take default 5
- **maxItems** its optional if not provided it will take default 0 which means no limit
- **url** url or data one should be there, If both url and data given then data will be overwritten
- **data** data should be JSON array of objects, the same format will be required in URL too
- **fieldMappings** (optional if fields names are [id,name,class]) else if your data has different field names e.g
   ```javascript
  data:[ 
		{"no":1,"text":"Alam","class":"danger"},
		{"no":2,"text":"Bilal","class":"danger"},
		{"no":3,"text":"Khan","class":"success"},
		{"no":4,"text":"Shayan","class":"success"},
	]
  ```
  then you have to provide **fieldMappings** as below
  ```javascript
  fieldMappings:{
		id:'no',
		name:'text',
		class:'class',
	}
  ```
  
  left side of : should not be changed, only right side of : should be same as your field names also in commas

