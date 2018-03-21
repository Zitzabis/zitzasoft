<canvas id="granim-canvas" class="backgroundCanvas"></canvas>
<!-- Create a Granim instance -->
<script>
    var granimInstance = new Granim({
    element: '#granim-canvas',
    name: 'granim',
    opacity: [1, 1],
    states : {
        "default-state": {
            gradients: [
                ['#558B2F', '#388e3c'],
                ['#00695C', '#0277BD']
            ]
        }
    }
    });
</script>