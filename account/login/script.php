<script scr='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script type='text/javascript'>
    function submitData() {
        $(document).ready(function() {
            var data = {
                username: $('#unsername').val(),
                pass: $('#pass').val(),
            };

            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success:function(response){
                    alert(response);
                    if (response == 'Login successfully') {
                        window.location.reload();
                    }
                }
            });
        });
    }
</script>