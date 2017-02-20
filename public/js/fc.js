 $(document).ready(function(){

      var api_call = 'http://localhost:8000/api/public/forex/client/www.hello.com';
                    $.ajaxSetup({
                   headers: {

                           
                        }
                    });
                    $.ajax({
                        type: "GET",
                        dataType: 'html',
                        url: api_call,
                        beforeSend: function () {
                            $('#forex').addClass('loading');

                        },
                        success: function (response) {
                           $('#forex').removeClass('loading');


                            //console.log(response);
                           
                            $('#forex').html(response);

                        },
                        error: function (e) {
                         if(e.status == 401)
                         {
                             $template = 'Sorry !! This Website is Unauthorized. http://localhost:8000 .Thankyou';
                           
                           
                           $('#forex').html($template); 
                         }
                           
                           
                        }
                    });

    });
