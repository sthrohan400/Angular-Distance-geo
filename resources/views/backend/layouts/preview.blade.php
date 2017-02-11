
<div class="Preview" id="preview">

    <div class="alert alert-default" style="">
        <a href="#" class="close text-danger text-left" data-dismiss="alert">&times;</a>

        <img src="" class="img-thumbnail" id="profile" 
        style="float: right;max-height: 300px;">
    </div>




    <div class="box-header without-border">





    </div>
    <!-- /.box-header -->
    <div class="box-body">






        <div id="loading">

        </div>


        <div class="col-md-12 ">

            @if(Session::has('failure'))


            <div class="alert alert-warning alert1">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <!--<button type="button" class="close" data-dismiss="alert">X</button>-->
                Sorry !! Unable to process your Queries. 


            </div>
            @endif



            @if(Session::has('error'))


            <div class="alert alert-error alert1">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <!--<button type="button" class="close" data-dismiss="alert">X</button>-->
                Oops !! Unable to Handle your Request. 


            </div>
            @endif




            @if(Session::has('success'))


            <div class="alert alert-success alert1 ">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                Well Done !!  
            </div>
            @endif


        </div>

         
        @if (count($errors) > 0)
       
       <div class="alert alert-danger alert-dismissable alert1 ">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            
    </div>
       
        @endif




    </div>






</div>


<!---Image Preview modal-->

<div id="PreviewImage" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title label label-danger">Image Preview</h4>
    </div>
    <div class="modal-body" id="loadimage">





    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>

</div>
</div>
