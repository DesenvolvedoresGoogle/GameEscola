<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

        
    <footer id="colophon" class="site-footer" role="contentinfo">
        <section class="row ">Gamescola - Todos os direitos reservados - <?php echo date("Y"); ?></section>
    </footer><!-- #colophon -->
    
    <script>
        function signinCallback(authResult) {
          if (authResult['access_token']) {
    // Update the app to reflect a signed in user
    // Hide the sign-in button now that the user is authorized, for example:
    document.getElementById('signinButton').setAttribute('style', 'display: none');


    gapi.client.load('plus','v1', function(){
        var request = gapi.client.plus.people.get({
            'userId': 'me'
        });
        request.execute(function(resp) {
            console.log('Retrieved profile for:' + resp.displayName);
            console.log(resp);

            $.post(
                '/wp-content/themes/gamescola/signplus.php',
                {
                    /*'first_name': resp.*/
                }
                function(data, textStatus, xhr) {
                /*optional stuff to do after success */
            });

            $.ajax({
                type: "POST",
                url: '/wp-content/themes/gamescola/signplus.php',
                data: ,
                success: success,
                dataType: dataType
            });

        });
    });

} else if (authResult['error']) {
    // Update the app to reflect a signed out user
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
}
}
    </script>

    <!-- loads plus sign -->
    <script type="text/javascript">
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/client:plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
</body>
</html>