<?php include 'publicheader.php';


if (isset($_POST['login'])) {
	extract($_POST);

	$q="select * from login where username='$uname' and password='$pwd'";
	$res=select($q);
	if (sizeof($res)>0) {

           $_SESSION['login_id']=$res[0]['login_id'];
           $lid=$_SESSION['login_id'];

 	   

		if ($res[0]['user_type']=="admin") {

			return redirect('admin_home.php');



		}elseif ($res[0]['user_type']=="participant") {

		

 			$q2="select * from participant inner join login using (login_id) where login_id='$lid'";
 			$res2=select($q2);
 			if (sizeof($res2)>0) {

 				$_SESSION['login_id']=$res[0]['login_id'];

 				 $_SESSION['participant_id']=$res2[0]['participant_id'];
                    echo $pid=$_SESSION['participant_id'];
           return redirect('participant_home.php');


 			}
			
		

		}elseif ($res[0]['user_type']=="vistors") {

		

 			$q2="select * from vistors inner join login using (login_id) where login_id='$lid'";
 			$res2=select($q2);
 			if (sizeof($res2)>0) {


 				$_SESSION['login_id']=$res[0]['login_id'];
 				 $_SESSION['vistors_id']=$res2[0]['vistors_id'];
                    echo $lid=$_SESSION['vistors_id'];
           return redirect('vistors_home.php');


 			}
			
		

		}





		elseif ($res[0]['user_type']=="staff") {

		

 			$q2="select * from staff  inner join login using (login_id) where login_id='$lid'";
 			$res2=select($q2);
 			if (sizeof($res2)>0) {
 				 $_SESSION['staff_id']=$res2[0]['staff_id'];
                    echo $uid=$_SESSION['staff_id'];
           		return redirect('staff_home.php');


 			}
			
		

		}
	
		
	}else{
		alert('invalid username and password');
	    }

}



 ?>


 <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
             
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                             						                        <center>
<h1  style="color: white">Login</h1>
<form method="post" >
	<table class="table" style="width:500px;color: ">
		
		<tr>
			<th>User Name</th>
			<td ><input type="text"  required="" class="form-control" style="color: " name="uname"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" required="" class="form-control" name="pwd" style="color: "></td>
		</tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
               
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                 
                  
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
              
            </div>
            <!-- /.carousel -->

 

<?php include 'footer.php' ?>