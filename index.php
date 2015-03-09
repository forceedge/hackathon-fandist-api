<html>
<head>
<script type="text/javascript" src="//d3oz3h4ohtpniw.cloudfront.net/0.28.9/pub/bundles/CoreBundle/plugins/jquery-1.11.0/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#share').click(function() {
        console.log("share link clicked");
        console.log("attempting to inject");
        $('#scriptHolder').append('<' + 'script type="text/javascript" src="http://cdn.fandi.st/FD-800-01.js">' + '< /script' + '>');
        console.log("injected");
        return false
    });
});
</script>
</head>
<body>
<div id="scriptHolder">
<script>
window.universal_variable = {
      "user": {
           "user_id": ""
      },
      "events": [
           { "type": "hits"
      ],
      "page": {
           "category": "home"
      }
};
</script>
</div>
<a id="share" href="">click me to register a share</a>
</body>
</html>
