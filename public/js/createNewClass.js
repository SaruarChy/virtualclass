//  $(document).ready(function (e) {

//      $.ajaxSetup({
//          headers: {
//              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr("content")
//          }
//      })

//      $("#createNewClas").click(function (e) {
//          e.preventDefault();
//          $.ajax({
//              url: "/create/class",
//              type: "post",
//              data: new FormData(this),
//              contentType: false,
//              processData: false,
//              success: function (responce) {
//                  console.log(responce);
//              }

//          }) //end ajax

//      })
//  }); //end document

$("#createNewClas").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        data: new FormData(this),
        processData: false,
        dataType: 'json',
        contentType: false,
        beforeSend: function () {
            $(document).find('span.error-text').text('');
        },
        success: function (data) {
            if (data.status == 0) {
                $.each(data.error, function (prefix, val) {
                    $('span.' + prefix + '_error').text(val[0]);
                })
            } else {
                $('#createNewClas')[0].reset();
                alert(data.msg);
            }
        }
    })
});
