

var app=angular.module("FolderImage",[]);
    


app.controller('FolderImageController', function($scope,$http) {
        $scope.OpenFolder = function(id) {
        //console.log($scope.previewurl);
        var url = '/gallery/subfolder/' + id;
        console.log (url);


        $http({
            method : "GET",

            url : url,

        }).then(function mySucces(response) {
            $('#zero-folder').hide();
          

             console.log(response);
           return  $scope.results = response;


            
           


        }, function myError(response) {

        //error function here
        return $scope.results="Error Occured";


        console.log('No data available.');
    });
    }

    $scope.PreviewImage = function(id){

        var url = '/image/preview/' + id;
        console.log(url);
        $http({
            method : "GET",
            url : url,
        }).then(function mySuccess(response){

            var template='';

/*        for (i = 0; i < response.data.length; i++) {*/

                

            template += '<h4 class="text-bold">' + response.data.name + '</h4>'
                        + '<br>'
                        + '<img src="/'+ response.data.path  + response.data.name  + '" class="img-responsive " alt="'+response.data.name +'" style="width:100%; height:350px;">';






        /*}*/
            console.log(template);


           $('#loadimage').html(template);


        },function myError(response){
            return $scope.results = "Error Occured.";
            console.log(response);
        });


    }


  });