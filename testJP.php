<?php
?>

<!-- http://localhost/miecolo/testJP.php -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<script>


  jQuery.ajax({
    type: "POST",
    url: "http://localhost/miecolo/wp-admin/admin-ajax.php",
    data: {
      action: 'jp_get_rank',
      message_id: 1
      // pseudo: user.pseudo,
      // email: user.email,
      // score: user.score
    },
    success: function (output) {
      console.log("ICICIICICICICICI output success=", output);
    },
    error : function(error){ console.log("output error=", error.responseText) }
  });


</script>
