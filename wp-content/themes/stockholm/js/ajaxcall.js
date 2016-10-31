(function($) {

    $('.besok').click(function(){




      var id = $(this).attr('id')

      $.ajax({
      url: ajaxpagination.ajaxurl,
      type: 'post',
      data: {
          action: 'get_hembesok',
          id: id
      },
      success: function( html ) {

        $('.kontor-li').removeClass('active');
        $('.tab-pane').removeClass('active');
        console.log(html);
        $('#hembesok-ajax').empty();
        $('#hembesok-ajax').append(html)
      },

      error: function(response){
        console.log(response);
      }

  })


});

$('.kontor-btn').click(function(){

  console.log(this)

  $('#hembesok-ajax').empty();



})

})(jQuery)
