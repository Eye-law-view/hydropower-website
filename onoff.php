<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		/* Make the image smaller and blend with the background */
		#Image {
			width: 35px; /* Smaller size */
			height: 35px; /* Fixed height */
			/* mix-blend-mode: multiply; Blend image with background */
			position: absolute; /* Allows free movement in the page */
		}
	</style>
</head>

<body style="background-color: #f0f0f0;"> <!-- Light background to see the blending effect -->
	<script>
		// Function to switch the bulb image on mouse move
		function turnOnOff() {
			let image = document.getElementById('Image');
			if (image.src.match("ONbulb")) {
				image.src = "./OFFbulb.png";
			} else {
				image.src = "./ONbulb.png";
			}
		}

		// Add event listener to change image when mouse moves anywhere in the window
		window.onmousemove = turnOnOff;
	</script>

	<!-- Image with smaller size and blending effect -->
	<img id="Image" src="./OFFbulb.png" alt="Bulb">
</body>

</html>
