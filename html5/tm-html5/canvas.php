<!DOCTYPE html>
<html>
<head>
  <title>Canvaas</title>
  <meta charset="utf-8">
</head>
<body>
	<p>Canvas</p>
	<canvas id="canvas" width="300" height="300">
		Браузер не поддерживает canvas
	</canvas>
	  <title>Diagonal line example</title>

  <canvas id="diagonal" style="border: 1px solid;"  width="200" height="200"> Non supported canvas </canvas>
  <script>
        function drawDiagonal() {
            // Get the canvas element and its drawing context
            var canvas = document.getElementById('diagonal');
            var context = canvas.getContext('2d');

            // Create a path in absolute coordinates
            context.beginPath();
            context.moveTo(70, 140);
            context.lineTo(140, 70);

            // Stroke the line onto the canvas
            context.stroke();
        }

        window.addEventListener("load", drawDiagonal, true);
  </script>
</html>

</body>
</html>