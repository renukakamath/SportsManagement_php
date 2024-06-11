
<?php include 'adminheader.php';


if (isset($_POST['staffreg'])) {
	extract($_POST);
	$q1="select * from login where username='$uname' and password='$pwd'";
 		$res1=select($q1);
 		if (sizeof($res1)>0) {
 			alert('already exist');
 		}else{
    echo$q="insert into login values(null,'$uname','$pwd','staff')";
     $id=insert($q);
  echo$q1="insert into staff values(null,'$id','$fname','$lname','$email','$num','$place') ";
   insert($q1);
   alert('sucessfully');
   return redirect('admin_managestaff.php');
}
}

 if (isset($_GET['uid'])) {
 	extract($_GET);

 	 $q="select * from staff where staff_id='$uid'";
 	$res=select($q);

 }

 if (isset($_POST['update'])) {
 	extract($_POST);

 	$q="update staff set fname='$fname' ,lname='$lname',place='$place',phone='$num',email='$email' where staff_id='$uid'";
 	update($q);
 	 alert('sucessfully');
   return redirect('admin_managestaff.php');

 }
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from staff where staff_id='$did'";
	delete($q);

	alert('sucessfully');
   return redirect('admin_managestaff.php');
}



 ?>


  <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
             
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox"  >
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000"  style="height: 700px">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                             						                        <center>
                             						                        	<br><br><br>

<center>
<form method="post">
	<h1 style="color: white" >Manage Staff</h1>

	<?php  if (isset($_GET['uid'])) { ?>
	<table class="table" style="width:500px;color: white">
		<tr>
			<th>First Name</th>
			<td><input type="text" required="" class="form-control"  style="color: " value="<?php echo $res[0]['fname'] ?>" name="fname"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" required="" class="form-control"  style="color: " value="<?php echo $res[0]['lname'] ?>" name="lname"></td>
		</tr>
	

		<tr>
			<th>Place</th>
			<td><input type="text" required=""  style="color: " class="form-control" value="<?php echo $res[0]['place'] ?>" name="place"></td>
		</tr>

	
		<tr>
			<th>Phone</th>
			<td><input type="text" required=""  style="color: " pattern="[0-9]{10}" value="<?php echo $res[0]['phone'] ?>" class="form-control" name="num"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" required=""  style="color: " value="<?php echo $res[0]['email'] ?>" class="form-control" name="email"></td>
		</tr>
		
		

		<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
	</table>
<?php }else{ ?>
	<table class="table" style="width:500px;color: white">
		<tr>
			<th>First Name</th>
			<td><input type="text" required=""  style="color: " class="form-control" name="fname"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" required=""  style="color: " class="form-control" name="lname"></td>
		</tr>
	

		<tr>
			<th>Place</th>
			<td><input type="text" required=""  style="color: " class="form-control"  name="place"></td>
		</tr>

		
	
		<tr>
			<th>Phone</th>
			<td><input type="text" required=""  style="color: " pattern="[0-9]{10}"  class="form-control" name="num"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" required=""  style="color: "  class="form-control" name="email"></td>
		</tr>
		
		<tr>
			<th>User Name</th>
			<td><input type="text" required=""  style="color: white" class="form-control"  name="uname"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" required=""  style="color: " class="form-control" name="pwd"></td>
		</tr>
		<td align="center" colspan="2"><input type="submit" name="staffreg" value="submit" class="btn btn-success"></td>
	</table>
<?php } ?>
</form>
</center>

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

<center>
	<h1>view Staff</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			   <th>First Name</th>
				<th>Last Name</th>
				
				<th>Place</th>
				
				<th>Phone</th>
					<th>Email</th>
			
			

				
			</tr>
			<?php 

     $q="select * from staff inner join login using (login_id) ";
     $res=select($q);
     $sino=1;

    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['fname'] ?></td>
    		<td><?php echo $row['lname'] ?></td>
    		
    		
    	
    		<td><?php echo $row['place'] ?></td>
    	
    		<td><?php echo $row['phone'] ?></td>
    			<td><?php echo $row['email'] ?></td>
                    <td><a  class="btn btn-success" href="?did=<?php echo $row['staff_id'] ?>">Delete</a></td>
    		   <td><a class="btn btn-success" href="?uid=<?php echo $row['staff_id'] ?>">Update</a></td>

    
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>