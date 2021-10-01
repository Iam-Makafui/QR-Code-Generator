<script type="text/javascript">
    $(document).ready(function () {
          $("form").submit(function (event) {
              event.preventDefault();

                //setting field values to variables
                var data_type = $('.data_type').val();

                switch (data_type) {

                     case 'URL':
                       var url = $('.url').val();

                         $.ajax({
                           type: "POST",
                           url: "generate.php",
                           data: {url: url},
                           dataType: "json",
                           beforeSend:function(){
                             $('.loader').show();
                             $('.button').hide();
                           },
                           success:function(response)
                                {
                                  $('.loader').hide();
                                  $('.button').show();
                                  location.reload();
                                },
                                error: function(response)
                                {
                                    //if fails
                                  //alert('it didnt work');
                                    $('.loader').hide();
                                    $('.button').show();
                                    location.reload();
                                }
                         })
                     break;

                     case 'EMAIL':
                     var email = $('.email').val();
                     var email_subject = $('.email_subject').val();
                     var email_message = $('.email_message').val();

                       $.ajax({
                         type: "POST",
                         url: "generate.php",
                         data: {email: email, email_subject: email_subject, email_message: email_message},
                         dataType: "json",
                         beforeSend:function(){
                           $('.loader').show();
                           $('.button').hide();
                         },
                         success:function(response)
                              {
                                $('.loader').hide();
                                $('.button').show();
                                location.reload();
                              },
                              error: function(response)
                              {
                                  //if fails
                                //alert('it didnt work');
                                  $('.loader').hide();
                                  $('.button').show();
                                  location.reload();
                              }
                       })
                     break;

                     case 'PHONE':
                       var phone = $('.phone').val();

                       $.ajax({
                         type: "POST",
                         url: "generate.php",
                         data: {phone: phone},
                         dataType: "json",
                         beforeSend:function(){
                           $('.loader').show();
                           $('.button').hide();
                         },
                         success:function(response)
                              {
                                $('.loader').hide();
                                $('.button').show();
                                location.reload();
                              },
                              error: function(response)
                              {
                                  //if fails
                                //alert('it didnt work');
                                  $('.loader').hide();
                                  $('.button').show();
                                  location.reload();

                              }
                       })
                      break;

                    case 'SMS':
                          var tel = $('.phone').val();
                          var sms = $('.sms_text').val();

                          $.ajax({
                            type: "POST",
                            url: "generate.php",
                            data: {sms: sms, tel: tel},
                            dataType: "json",
                            beforeSend:function(){
                              $('.loader').show();
                              $('.button').hide();
                            },
                            success:function(response)
                                 {
                                   $('.loader').hide();
                                   $('.button').show();
                                   location.reload();
                                 },
                                 error: function(response)
                                 {
                                     //if fails
                                   //alert('it didnt work');
                                     $('.loader').hide();
                                     $('.button').show();
                                     location.reload();
                                 }
                          })
                    break;

                    case 'TEXT':
                    var text = $('.text-msg').val();

                    $.ajax({
                      type: "POST",
                      url: "generate.php",
                      data: {text: text},
                      dataType: "json",
                      beforeSend:function(){
                        $('.loader').show();
                        $('.button').hide();
                      },
                      success:function(response)
                           {
                             $('.loader').hide();
                             $('.button').show();
                             location.reload();
                           },
                           error: function(response)
                           {
                               //if fails
                             //alert('it didnt work');
                               $('.loader').hide();
                               $('.button').show();
                               location.reload();

                           }
                    })
                    break;

                    case 'CONTACT':
                    var name = $('.name').val();
                    var address = $('.address').val();
                    var contact_phone = $('.phone').val();
                    var contact_email = $('.email').val();

                    $.ajax({
                      type: "POST",
                      url: "generate.php",
                      data: {name: name, address: address, contact_phone: contact_phone, contact_email: contact_email},
                      dataType: "json",
                      beforeSend:function(){
                        $('.loader').show();
                        $('.button').hide();
                      },
                      success:function(response)
                           {
                             $('.loader').hide();
                             $('.button').show();
                             location.reload();
                           },
                           error: function(response)
                           {
                               //if fails
                             //alert('it didnt work');
                               $('.loader').hide();
                               $('.button').show();
                               location.reload();

                           }
                    })
                    break;

                  default:
                    return false;
                }

          });
      });
</script>
