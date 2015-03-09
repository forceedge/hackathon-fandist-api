<html>
<head>
<script type="text/javascript" src="//d3oz3h4ohtpniw.cloudfront.net/0.28.9/pub/bundles/CoreBundle/plugins/jquery-1.11.0/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function () {
    $('.share').click(function() {
        var shareType = $(this).attr('linkType');
        console.log('you have shared using ' + shareType);
        console.log("share link clicked");
        console.log('events')
        console.log(window.universal_variable.events);
        console.log('event 0')
        console.log(window.universal_variable.events[0]);
        console.log('the type')
        console.log(window.universal_variable.events[0].cause);
        window.universal_variable.events[0].cause = shareType;
        console.log('uv');
        console.log(window.universal_variable);
        console.log("attempting to inject");
        $('#scriptHolder').append('<' + 'script type="text/javascript" src="http://cdn.fandi.st/FD-800-01.js">' + '< /script' + '>');
        console.log("injected");
        var toShare = $(this).attr('href');
        window.open(toShare, 'sharingbox', "height=600, width=450")
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
              "user_id": "405"
          },
          "events": [
              { "type": "shares", "cause": "twitter", "effect": "1270-2cLuJilST" }
          ],
          "page": {
              "category": "home"
          },
          debug:true
    };
</script>
</div>

<!-- Facebook -->
<a href="http://www.facebook.com/sharer.php?u=http://www.simplesharebuttons.com" class="share" linkType="facebook" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
 
<!-- Twitter -->
<a href="http://twitter.com/share?url=http://www.simplesharebuttons.com&text=Simple Share Buttons&hashtags=simplesharebuttons"  class="share" linkType="twitter" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
 
<!-- Google+ -->
<a href="https://plus.google.com/share?url=http://www.simplesharebuttons.com"  class="share" linkType="googleplus" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>

</body>
</html>
