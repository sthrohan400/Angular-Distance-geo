$(document).ready(function(){
	  var api_call = 'http://localhost:8000/api/public/forex/client/www.hello.com';
	 				$.ajaxSetup({
	               headers: {
	                       // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    }
	                });
	                $.ajax({
	                    type: "GET",
	                    dataType: 'html',
	                    url: api_call,
	                    beforeSend: function () {
	                        $('#forex').append('<img src="http://localhost:8000/loading/loading.gif"/>');

	                    },
	                    success: function (response) {
	                        $('#forex').children('<img src="http://localhost:8000/loading/loading.gif"/>').remove();


	                        //console.log(response);
	                       
	                        $('#forex').html(response);

	                    },
	                    error: function (e) {
	                       
	                        alert(e);
	                    }
	                });

	});