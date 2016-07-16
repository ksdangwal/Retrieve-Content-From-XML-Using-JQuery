<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Retrieve Data From XML</title>

<script type="application/javascript" src="js/jquery" /></script>

<script type="application/javascript">
	
	$(document).ready(function(e) {
    	$.ajax({
			type		:	'GET',
			dataType	:	'xml',
			url			:	'sample.xml',
			success		: 	xmlParser
		});
    });

	function xmlParser(xml) {
		
		$(xml).find('girl-desc').each(function() {
			
			Title 		= 	$(this).find('title').text();
			ImagePath 	= 	$(this).find('image').text();
			Artist 		= 	$(this).find('artist').text();
			Price 		=	$(this).find('price').text();

			content = '<div style="text-align: center; font-size: large; margin-bottom: 20px;">';
			content += '<span>'+Title+'</span>';
			content += '<br/>';	
			content += '<img src="image/'+ImagePath+'" style="border: 10px solid thistle;" />';
			content += '<br/>';	
			content += '<span>'+Artist+'</span>';	
			content += '<br/>';	
			content += '<span>'+ '$' + Price+'</span>';	
			content += '</div>';
			
			$('#MainContainer').append(content);
        });
	}

</script>

</head>

<body>

<div id="MainContainer"></div>

</body>
</html>