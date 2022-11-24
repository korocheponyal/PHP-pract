<?php include "controler_ajax.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="js_custom.js"></script> 
    <script> $(document).ready(function(){

$("#form").on("submit", function(e){
  e.preventDefault();
  var asyncData;
  $.ajax({
    url: 'fish_js.php',
    async: false ,
    method: 'post',
    dataType: 'json',
    data: $(this).serialize(),
    success: function(data){
      $('#ajax').html(data);
      asyncData = data;
    }
  })
  return asyncData;
});
}) 
</script>
    <title>Document</title>
</head>
<body>
    <div id="ajax"></div>
    <form id="form" method="POST">
        <input type="text" name="name">
        <figcaption>Введите ваше <em>имя</em></figcaption> 
        <input type="text"  name="secondname">
        <figcaption>Введите вашу <em>фамилию</em></figcaption> 
        <input type="submit"  value="SEND">
</form>
</body>
</html>

