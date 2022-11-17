<?php 

$username="";
if(isset($_GET['user']))
{
  $username=$_GET['user'];
}else{
  echo '<script>alert("You are not logged in")</script>';

  echo '<script> window.location.href="../index/index.html"</script>';

  
}?><!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>ADMIN PANEL</title>
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="Dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"></script>
</head>
<body>

<body>
 <!--Logo image and also used as the home page button--> 
 <header class="header">
    <a href="../index/index.html" ><img src="marks logo.jpeg"logo" width="100px" height="100px"></a>
    <!--h1>MARK's E-REGISTRY</h1-->
    <div class="nav-items">
    <!--Link for the menu tabs-->
    <a class="fa fa-home" href="../Index.html">Home</a>
      <a href="../About/About.html">About Us</a>
      <a href="../Contact us/contact us.html">Contact</a>
      <a href="../Help/Help.html">Help</a>
    </div>
  </header>


    <div class="container" align="center">
        <div style="font-size:1.45em"> <strong>Logged in as  <?php echo $username?></strong></div>
        <h1>SYSTEM ADMINISTRATOR PANEL</h1>
      <div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
   
            <div class="form-group">
                <input type="text" name="userid" class="form-control" placeholder="User ID" required="">
            </div>
        
           <!-- <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="User Name" required="">
            </div>-->
          
          <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="User Email" required="">
            </div>
          
          <div class="form-group">
                <input type="text" name="firstname" class="form-control" placeholder="Firstname" required="">
            </div>
          <div class="form-group">
                <input type="text" name="lastname" class="form-control" placeholder="Lastname" required="">
            </div>
          <div style="display:none;font-weight:bold; color:red;" id="mismatchPassword" >Passwords mismatch</div>
          <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required="">
            </div>
            <div class="form-group">
                <input type="password" name="Confirmpassword" class="form-control" id="confirmPassword" placeholder="Password" required="">
</div>
       <script>

                pass=document.getElementById("password").value;
                confirmpass=document.getElementById("confirmPassword").value;
                function confirmPasswords()
                {
                    AddtheUser=true;
                    pass=document.getElementById("password").value;
                confirmpass=document.getElementById("confirmPassword").value;

                if(pass!=confirmpass)
                {
                   mess= document.getElementById("mismatchPassword");
                   mess.style.display='block';
                   mess.focus();
                   AddtheUser=false;
                }
                return AddtheUser;

                }
                
document.getElementById('submitBtn').addEventListener('click',(e)=>{
    e.preventDefault();
    if(!confirmPasswords()){

        

    }
}

       </script>
            <button type="submit" id="submitBtn" class="btn btn-success save-btn">Add User</button>
			
			<button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
		
		 </div>
		 <button class="open-button" onclick="openForm()">Add new user</button>
    
        <br/>
        <table class="table table-bordered data-table">
            <thead>
              
			<th>User ID</th>
              <th>Username</th>
              <th>User Email</th>
                <th>Action</th>
            </thead>
            <tbody>
			<tr>
			</tr>
            </tbody>
        </table>
   
    <script type="text/javascript">
      function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  formClear();
}	
      
        $("form").submit(function(e){
            e.preventDefault();
            var userid = $("input[name='userid']").val();
            var username = $("input[name='username']").val();
            var email = $("input[name='email']").val();
            var firstname= $("input[name='firstname']").val();
            var lastname= $("input[name='lastname']").val();
			var password= $("input[name='password']").val();
            $(".data-table tbody").append("<tr data-userid='"+userid+"' data-username='"+username+"' data-email='"+email+"' data-firstname='"+firstname+"' data-lastname='"+lastname+"' data-password='"+password+"'><td>"+userid+"</td><td>"+username+"</td> <td>"+email+"</td><td><button class='btn btn-info btn-xs btn-edit'>Edit</button><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");
			
            $("input[name='userid']").val('');
            $("input[name='username']").val('');
			$("input[name='email']").val('');
			$("input[name='firstname']").val('');
            $("input[name='lastname']").val('');
			$("input[name='password']").val('');
          
			 formClear();
        });
       
        $("body").on("click", ".btn-delete", function(){
            $(this).parents("tr").remove();
        });
        
        $("body").on("click", ".btn-edit", function(){
            var userid = $(this).parents("tr").attr('data-userid');
            var username = $(this).parents("tr").attr('data-username');
			 var email = $(this).parents("tr").attr('data-email');
			 
           
            $(this).parents("tr").find("td:eq(0)").html('<input name="edit_userid" value="'+userid+'">');
            $(this).parents("tr").find("td:eq(1)").html('<input name="edit_username" value="'+username+'">');
			$(this).parents("tr").find("td:eq(2)").html('<input name="edit_email" value="'+email+'">');
			
            $(this).parents("tr").find("td:eq(3)").prepend("<button class='btn btn-info btn-xs btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>")
            $(this).hide();
        });
       
        $("body").on("click", ".btn-cancel", function(){
            var userid = $(this).parents("tr").attr('data-userid');
            var username = $(this).parents("tr").attr('data-username');
			var email = $(this).parents("tr").attr('data-email');
			
            $(this).parents("tr").find("td:eq(0)").text(userid);
            $(this).parents("tr").find("td:eq(1)").text(username);
			 $(this).parents("tr").find("td:eq(2)").text(email);
			 
            
            $(this).parents("tr").find(".btn-edit").show();
            $(this).parents("tr").find(".btn-update").remove();
            $(this).parents("tr").find(".btn-cancel").remove();
        });
       
         $("body").on("click", ".btn-update", function(){
            var userid = $(this).parents("tr").find("input[name='edit_userid']").val();
            var username = $(this).parents("tr").find("input[name='edit_username']").val();
			var email = $(this).parents("tr").find("input[name='edit_email']").val();
        
            $(this).parents("tr").find("td:eq(0)").text(userid);
            $(this).parents("tr").find("td:eq(1)").text(username);
			$(this).parents("tr").find("td:eq(2)").text(email);
         
            $(this).parents("tr").attr('data-userid', userid);
            $(this).parents("tr").attr('data-username', username);
			$(this).parents("tr").attr('data-email', email);
        
            $(this).parents("tr").find(".btn-edit").show();
            $(this).parents("tr").find(".btn-cancel").remove();
            $(this).parents("tr").find(".btn-update").remove();
        });
    </script>
      
	  
	 
      
</body>
</html>
<?php ?>