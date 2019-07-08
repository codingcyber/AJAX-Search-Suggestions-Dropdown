<!DOCTYPE html>
<html>
<head>
	<title>AJAX Search Suggestions Dropdown List</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<input type="text" id="search" name="search">
<input type="button" name="" value="Search">
<ul id="results">
	<li><a href="#">India</a>
	<li><a href="#">US</a>
	<li><a href="#">UK</a>
	<li><a href="#">Australia</a>
</ul>
<script type="text/javascript">
	var results = document.getElementById("results");
	var search = document.getElementById("search");

	function getSearchResults(){
		var searchVal = search.value;

		if(searchVal.length < 1){
			results.style.display='none';
			return;
		}

		console.log('searchVal : ' + searchVal);
		var xhr = new XMLHttpRequest();
		var url = 'searchresults.php?search=' + searchVal;
		// open function
		xhr.open('GET', url, true);

		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				var text = xhr.responseText;
				//console.log('response from searchresults.php : ' + xhr.responseText);
				results.innerHTML = text;
				results.style.display='block';
			}
		}

		xhr.send();
	}

	search.addEventListener("input", getSearchResults);
</script>
</body>
</html>