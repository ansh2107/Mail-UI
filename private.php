<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
?>

<?php
}
else
{
header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js.js"></script>
  <title>Mailing Page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="mycss/bootstrap.min.css" rel="stylesheet">
  <link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="../js/fileinput.js" type="text/javascript"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$("#myModal").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + ' Form');
    });
});
</script>
<script>
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }

.form-message{
	max-height: 250px;
	height: 250px;
        width  : 860px;
	background-color: white;
	border-collapse: separate;
  	border: 1px solid rgb(204, 204, 204);
 	padding: 4px;
 	box-sizing: content-box;
 	-webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0 1px 1px 0 inset;
 	box-shadow: rgba(0, 0, 0, 0.0745098) 0 1px 1px 0 inset;
	border-top-right-radius: 3px; border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px; border-top-left-radius: 3px;
	overflow -y: auto;
        overflow -x: hidden;
	outline: none;
}
</style>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords"
		content="opensource rich wysiwyg text editor jquery bootstrap execCommand html5" />
	<meta name="description"
		content="This tiny jQuery Bootstrap WYSIWYG plugin turns any DIV into a HTML5 rich text editor" />
	<link href="external/google-code-prettify/prettify.css" rel="stylesheet" />
	<link rel="stylesheet"
		href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
	<link
		href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css"
		rel="stylesheet" />
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="external/jquery.hotkeys.js"></script>
	<script
		src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="external/google-code-prettify/prettify.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<script src="src/bootstrap-wysiwyg.js"></script>
</head> 

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="btn-compose pull-left">
                <a type="button" class="btn btn-danger navbar-btn" href="#compose" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-pencil"></span> Compose</a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="#inbox" role="tab" data-toggle="tab">
                        Groups <span class="label label-success">10</span>
                    </a>
                </li>
                <li><a href="#sent-mail" role="tab" data-toggle="tab">Contacts</a>

                </li>
                <li><a href="#draft" role="tab" data-toggle="tab">Sent Mail</a>

                </li>
                <li><a href="#trash" role="tab" data-toggle="tab">Drafts</a>

                </li>
            </ul>
           
			 
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>

                </li>
				
				<li><div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="glyphicon glyphicon-align-justify" aria-hidden="true" ></span></button>
  <ul class="dropdown-menu">
   <li><a href="change_name.php">Change Display Name</a></li>
<li><a href="change_pass.php">Change Password</a></li>

<li><a href="Del_account.php">Delete Account</a></li>

  </ul>
</div>
				</li>

            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#"></span> Welcome  <?php print $_SESSION['display_name']; ?></a>

                </li>
            </ul>
			        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>




<div class="tab-content">
  <div class="tab-pane active" id="inbox">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
			       <br></br>
				   <br></br>
				   
                   <h1 class="content-title">Groups</h1>
				   
				    <div class="row">
					   <div class="col-sm-6 col-md-12">
					      <div class="pull-left">

						  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-title="Feedback">Add new Group</button>
					      <a type="button" class="btn btn-danger" href="#delete" role="tab" data-toggle="tab">View/Edit Group</a>  
					      </div>
					             <div class="pull-right">
                                      <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
                                   <div class="btn-group btn-group-sm">
                                      <button type="button" class="btn btn-default">
                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                      </button>
                                          <button type="button" class="btn btn-default">
                                             <span class="glyphicon glyphicon-chevron-right"></span>
                                      </button>
                                   </div>
                    </div>
					 </div>
					
					</div>
					</hr>
                   <br></br>
				   
                  
                   
                   <ul class="mail-list">
                       <li>
					                        <ul class="nav navbar-nav navbar-right">
                <a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
			 
                           <a href=""> 
						   
						   
                               <span class="mail-sender">Delhi University Group</span>
                             
                           </a>
						   
                       </li>
                       <li>
					     					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
			 
                           <a href="">
                               <span class="mail-sender">IIT Delhi Group</span>
                              
                           </a>
                       </li>
                       <li>
					    					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">IIITM GWALIOR Group</span>
                              
                           </a>
                       </li>
                       <li>
					    					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">CS/IT Group</span>
                             
                           </a>
                       </li>
                       <li>
					   					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">AJTAK Group</span>
                               
                           </a>
                       </li>
					                          <li>
											  					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">Delhi University Group</span>
                             
                           </a>
                       </li>
                       <li>
					    					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">IIT Delhi Group</span>
                              
                           </a>
                       </li>
                       <li>
					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">IIITM GWALIOR Group</span>
                              
                           </a>
                       </li>
                       <li>
					    					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">CS/IT Group</span>
                             
                           </a>
                       </li>
                       <li>
					   					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">AJTAK Group</span>
                               
                           </a>
                       </li>
					                          <li>
											 					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">Delhi University Group</span>
                             
                           </a>
                       </li>
                       <li>
					   					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">IIT Delhi Group</span>
                              
                           </a>
                       </li>
                       <li>
					   					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">IIITM GWALIOR Group</span>
                              
                           </a>
                       </li>
                       <li>
					   					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">CS/IT Group</span>
                             
                           </a>
                       </li>
                       <li>
					   					                        <ul class="nav navbar-nav navbar-right">
                <li><a href="#add_contact"><span class="glyphicon glyphicon-plus"  data-toggle="modal" data-target="#add_contact"></span> </a>

                </li>
            </ul>
			 <ul class="nav navbar-nav navbar-right">
                <li><a href="#import_contact"><span class="glyphicon glyphicon-circle-arrow-down"  data-toggle="modal" data-target="#import_contact"></span> </a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#edit_group"><span class="glyphicon glyphicon-edit"  data-toggle="modal" data-target="#edit_group"></span></a>

                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
                <li><a href="#delete_group"><span class="glyphicon glyphicon-remove-circle"  data-toggle="modal" data-target="#delete_group"></span> </a>

                </li>
            </ul>
                           <a href="">
                               <span class="mail-sender">AJTAK Group</span>
                               
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal Window</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Group Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Group Description:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>

	  
	  
	  
  </div>
  <div class="tab-pane" id="compose">
      
      <div class="container">
    <div class="content-container clearfix">
<br>

<br>

<br>

<br>
        <h1 class="content-title">Compose</h1>
        <div class="col-md-12">
<form  class="signup" method="post" action="mail.php">
     <div class="form-group">
                <input name="from" type="text" class="form-control" placeholder="From" />
            </div>
            <div class="form-group">
                <input name="to" id="tokenfield" type="text" class="form-control" placeholder="To" />
                <span>Use comma (,) to separate different email i.d </span>
            </div>
            
            <div class="form-group">
                <input name="subject" type="text" class="form-control" placeholder="Subject" />
            </div>
           
		   
		    <div >
                <input name="message" type="text" class="form-message" placeholder="Compose your mail" />
            </div>
	
			
			
            <div class="btn-send">
         <input  type="submit" name="login" class="login loginmodal-submit" value="Send">
            </div>
			<div class="btn-send">
            <input  type="submit" name="login" class="login loginmodal-submit" value="Save as Draft">
            </div>
</form>
        </div>
    </div>
</div>
      
  </div>
  <div class="tab-pane" id="sent-mail">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
			    <br></br>
				   <br></br>
                   <h1 class="content-title">Contacts</h1>
				   <div class="row">
					   <div class="col-sm-6 col-md-12">
					      <div class="pull-left">
					        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1" data-title="Feedback">Add new Contact</button>
					      <a type="button" class="btn btn-danger" href="#delete1" role="tab" data-toggle="tab">View/Edit Contact</a>   
					      </div>
					             <div class="pull-right">
                                      <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
                                   <div class="btn-group btn-group-sm">
                                      <button type="button" class="btn btn-default">
                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                      </button>
                                          <button type="button" class="btn btn-default">
                                             <span class="glyphicon glyphicon-chevron-right"></span>
                                      </button>
                                   </div>
                    </div>
					 </div>
					
					</div>
					</hr>
                   <br></br>
				   
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">ASHUTOSH JINDAL SIR</span>
                             
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">ASHISH KRISHNA</span>
                              
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">PRATEEK JAIN SIR</span>
                              
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">ANKIT BANSAL</span>
                             
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">ANIRUDDH BIYANI</span>
                               
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
		   <div id="myModal1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add new Contact</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
						<div class="form-group">
                            <label for="message-text" class="control-label">Mobile Number:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
		    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#select_group" data-title="Feedback">Select Group</button>
                    </form>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
		   
		   
       </div>
      
	  
  </div>
  
  		   <div id="add_contact" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add new Contact</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
						<div class="form-group">
                            <label for="message-text" class="control-label">Mobile Number:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
		  
                    </form>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Contact</button>
                </div>
            </div>
        </div>
    </div>
		   
		   
       <div id="import_contact" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add new Contact</h4>
                </div>
                <div class="modal-body">

				 <form enctype="multipart/form-data">
                <input id="file-0" class="file" type="file" multiple data-min-file-count="1">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
                </form>
				
				
				
				
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Contact</button>
                </div>
            </div>
        </div>
    </div>
		   
             <div id="edit_group" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edit Group</h4>
                </div>
                <div class="modal-body">

				 <form role="form">
    <div class="form-group">
      <label for="inputdefault">Edit group name</label>
      <input class="form-control" id="inputdefault" type="text">
    </div>
				</form>
				
				
				
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
	  


  
   <div id="select_group" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Select Group</h4>
                </div>
                <div class="modal-body">
                   

      
      
    
        <h1 class="content-title">Groups Name</h1>
        <div class="col-md-12">
           <table class="table table-condensed table-hover">
  <thead>
    <tr>
      <th class="span1"><input type="checkbox"></th>
      <th class="span2"></th>
      <th class="span2"></th>
      <th class="span9"></th>
      <th class="span2"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td><strong>John Doe</strong></td>
     
    </tr>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td>John Doe</td>
     
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
      
    </tr>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
	  
     
    </tr>
	  <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
	  
     
    </tr>
	  <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
	  
     
    </tr>
  </tbody>
</table>

        </div>
 
 
					
					
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Select</button>
                </div>
            </div>
        </div>
    </div>
	
  <div class="tab-pane" id="draft">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
			    <br></br>
				   <br></br>
                   <h1 class="content-title">Sentmail</h1>
				   <div class="row">
					   <div class="col-sm-6 col-md-12">
					     
					             <div class="pull-right">
                                      <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
                                   <div class="btn-group btn-group-sm">
                                      <button type="button" class="btn btn-default">
                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                      </button>
                                          <button type="button" class="btn btn-default">
                                             <span class="glyphicon glyphicon-chevron-right"></span>
                                      </button>
                                   </div>
                    </div>
				  </div>
					
					</div>
					</hr>
                   <br></br>
				   
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="trash">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
			    <br></br>
				   <br></br>
                   <h1 class="content-title">Drafts</h1>
				   <div class="row">
					   <div class="col-sm-6 col-md-12">
					      
					             <div class="pull-right">
                                      <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
                                   <div class="btn-group btn-group-sm">
                                      <button type="button" class="btn btn-default">
                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                      </button>
                                          <button type="button" class="btn btn-default">
                                             <span class="glyphicon glyphicon-chevron-right"></span>
                                      </button>
                                   </div>
                    </div>
					 </div>
					
					</div>
					</hr>
                   <br></br>
				   
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>

         <div id="delete_group" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Group is Deleted</h4>
                </div>
              
            </div>
        </div>
    </div>
  
<div class="tab-pane" id="delete">
      
      <div class="container">
    <div class="content-container clearfix">
        <h1 class="content-title">Groups Name</h1>
        <div class="col-md-12">
           <table class="table table-condensed table-hover">
  <thead>
    <tr>
      <th class="span1"><input type="checkbox"></th>
      <th class="span2"></th>
      <th class="span2"></th>
      <th class="span9"></th>
      <th class="span2"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td><strong>John Doe</strong></td>
     
    </tr>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td>John Doe</td>
     
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
      
    </tr>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
     
    </tr>
  </tbody>
</table>
  <a type="button" class="btn btn-danger" href="#add1" role="tab" data-toggle="tab">DELETE</a>
        </div>
    </div>
</div>
      
  </div>
<div class="tab-pane" id="delete1">
      
      <div class="container">
    <div class="content-container clearfix">
        <h1 class="content-title">Contacts Names</h1>
        <div class="col-md-12">
           <table class="table table-condensed table-hover">
  <thead>
    <tr>
      <th class="span1"><input type="checkbox"></th>
      <th class="span2"></th>
      <th class="span2"></th>
      <th class="span9"></th>
      <th class="span2"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td><strong>John Doe</strong></td>
     
    </tr>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
      <td>John Doe</td>
     
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
      
    </tr>
    <tr>
      <td><input type="checkbox"> <a href="#"><i class="icon-star"></i></a></td>
      <td><strong>John Doe</strong></td>
     
    </tr>
  </tbody>
</table>
  <a type="button" class="btn btn-danger" href="#add1" role="tab" data-toggle="tab">DELETE</a>
        </div>
    </div>
</div>
      
  </div>
  
</div>









   



<script>
  $(function(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
    	$('.dropdown-menu input').click(function() {return false;})
		    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      if ("onwebkitspeechchange"  in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        //$('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
      } else {
        $('#voiceBtn').hide();
      }
	};
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
    initToolbarBootstrapBindings();  
	$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
  });
</script>

</body>
</html>


