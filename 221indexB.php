<!--
221indexB.html demonstrates basic JavaScript and CSS
Unpublished work (c)2013 Project Lead The Way
CSE Activity 2.2.1 HTML5andJavaScript
Version 12/19/2013 
-->

<html>
<head>
	<style = "text/css">
		#img1popout {
			z-index: 5;
			position: absolute;
			width: 550px;
			height: 300px;
			top: 50px;
			border: 1px dashed #000099;
			background-color: #800080;
		}
		#img1popin{}
		
	</style>
	<script type = "text/javascript">
		function initPopout()
		{
			var thumb1 = document.getElementById("pic1"); 
			
			thumb1.onmouseover = showDetailedView;
		}

		function showDetailedView()
		{
			var im1 = document.getElementById("img1popin");
			im1.id = "img1popout";
			im1.innerHTML = "<br /><TABLE><TR><TH rowspan='3'><img src='aprilla/pic1.jpg' width='250'><TH align='left'>Artist's Name: <TH align='left'>Aprill Aronie<TR><TH align='left'>File Name: <TH align='left'>pic1.jpg<TR></TABLE> ";
			var popOut = document.getElementById("img1popout");
			popOut.onmouseout = hideDetailedView;			
		}

		function hideDetailedView()
		{
			var im1 = document.getElementById("img1popout");
			im1.id = "img1popin";
			im1.innerHTML = "";
		} 
	</script>
</head>
<body onload="initPopout();" style= "font-family: Impact">
<br>
<table>
	<caption style= "color: red">Your Results:</caption>
	<tbody>
	<tr>
		<td>
			<img id="pic1" src="aprilla/pic1thumb.jpg"><div id = "img1popin"></div>
		</td>
		<td>
			<img src="aprilla/pic2thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic3thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic4thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic5thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic6thumb.jpg">
		</td>
	</tr>
	<tr>
		<td>
			<img src="aprilla/pic7thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic8thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic9thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic10thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic11thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic12thumb.jpg">
		</td>
	</tr>
	<tr>
		<td>
			<img src="aprilla/pic13thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic14thumb.jpg">
		</td>
		<td>
			<img src="aprilla/pic15thumb.jpg">
		</td>
	</tr>
	</tbody>
</table>
<br>
Search the art database using the fields below.
<form method="post" action="index1.html">
	<pre style= "font-family: Times New Roman">
First Name
<input type="text" name="firstname">
<br>
Last Name
<input type="text" name="lastname">
<br>
<input type="submit" value="SEARCH">
	</pre>
</form>
</body>
</html>