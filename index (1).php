<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kostya</title>
</head>
<body>
	<input id="address" name="address" type="text" style="border: 1px solid #cccccc; 
	   border-radius: 60px;
	   -webkit-border-radius: 60px; 
	   -moz-border-radius: 60px; 
	   background: #ffffff !important;
	   outline: none; 
	   height: 50px;
	   width: 100%; 
	   margin-top: 200px;
	   color: #cccccc; 
	   font-size: 11px; 
	   font-family: Tahoma;" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>

	<script>
	    $("#address").suggestions({
	        token: "b05be8e9aaaa0ce1892440a43231b28153c8c39a",
	        type: "ADDRESS",
	        /* Вызывается, когда пользователь выбирает одну из подсказок */
	        onSelect: function(suggestion) {
	            console.log(suggestion);
	        }
	    });
	</script>
</body>
</html>