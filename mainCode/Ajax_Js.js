$("#calculator").on("submit", function(e){
    e.preventDefault();
    const that = $(this);
    const data_content = that.serialize();
    console.log(1);
    $.ajax({
      url: 'ajax_response.php',
      method: 'post',
      dataType: 'json',
      data: data_content,
      success: function(data){
        if(data.success) $('#result').text(data.result);
      }
    })
  });
