<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>socket</title>
</head>

<body>
<div id="cc" style="width:500px;">
    <div id="content" style=" height:400px; overflow:auto; width:100%; border:1px solid #ccc;"></div>
    <form id="form">
        <textarea id="text" style="width:100%; height:200px;"></textarea>
        <input type="button" onclick="ab()" value="发送">
    </form>
</div>
<p id="a"></p>
<script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>


</body>
</html>
<script>
    var wsServer = 'ws://0.0.0.0:18308';
    var websocket = new WebSocket(wsServer);
    websocket.onopen = function (evt) {
        console.log("Connected to WebSocket server.");
    };

    websocket.onclose = function (evt) {
        console.log("Disconnected");
    };

    websocket.onmessage = function (evt) {
        $('#content').append(evt.data+"<br>");

        // document.getElementById('div').style.background = evt.data;
        console.log('Retrieved data from server: ' + evt.data);
    };

    websocket.onerror = function (evt, e) {
        console.log('Error occured: ' + evt.data);
    };
    function ab(){
        var zhi = $('#text').val();
        websocket.send(zhi);
        $('#text').val('');
    }

</script>