<!DOCTYPE html>
<html>

<body>

    <h1>Getting server updates</h1>
    <div id="result"></div>

    <script>
        if (typeof(EventSource) !== "undefined") {
            var sse = '<?php echo base_url('sse') ?>';
            var source = new EventSource(sse);
            source.onmessage = function(event) {
                document.getElementById("result").innerHTML += event.data + "<br>";
            };
        } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
        }
    </script>

</body>

</html>