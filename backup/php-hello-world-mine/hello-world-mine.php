<!DOCTYPE html>
<html>
    <head>
        <title>Hello World</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    <body>
        <p><?php
            //
            // This is only a SKELETON file for the "Hello World" exercise.
            // It's been provided as a convenience to get you started writing code faster.
            //
            function helloWorld($name)
            {
                //
                // YOUR CODE GOES HERE
                //
                echo "<strong>Hello World!</strong>";
            }
            helloWorld();
            ?>
        </p>
        <img src="Gif_image.gif" /><br />
        <p><strong>Live only today, Don't care about tomorrow!!!</strong></p><br />
        <p>You have a surprise below, please click it quickly</p>
        <button id="demo" onclick="myFunction()">Click me</button>
        <p id="demo"></p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            function myFunction() {
                var obj = {"video": {
						"value": "<iframe title='YouTube video player' type=\"text/html\" width='640' height='390' src='http://www.youtube.com/embed/W-Q7RMpINVo' frameborder='0' allowFullScreen></iframe>"
}}
$("#demo").html(obj.video.value);
					 }
			 </script>
	 </body>
</html>
