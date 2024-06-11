
<?php include 'adminheader.php';


if (isset($_POST['staffreg'])) {
	extract($_POST);
	$q1="select * from sport where sport='$fname' ";
 		$res1=select($q1);
 		if (sizeof($res1)>0) {
 			alert('already exist');
 		}else{
    
  echo$q1="insert into sport values(null,'$fname','$lname','$date') ";
   insert($q1);
   alert('sucessfully');
   return redirect('admin_manage_sport.php');
}
}

 if (isset($_GET['uid'])) {
 	extract($_GET);

 	 $q="select * from sport where sport_id='$uid'";
 	$res=select($q);

 }

 if (isset($_POST['update'])) {
 	extract($_POST);

 	$q="update sport set sport='$fname' ,details='$lname',date='$date' where sport_id='$uid'";
 	update($q);
 	 alert('sucessfully');
   return redirect('admin_manage_sport.php');

 }
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from sport where sport_id='$did'";
	delete($q);

	 alert('sucessfully');
   return redirect('admin_manage_sport.php');
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
<h1  style="color: white">Manage sport</h1>
<form method="post">
	<?php  if (isset($_GET['uid'])) { ?>
	<table class="table" style="width:500px;color: ">
		<tr>
			<th>sport</th>
			<td><input type="text" required="" class="form-control"  value="<?php echo $res[0]['sport'] ?>" name="fname"></td>
		</tr>
		<tr>
			<th>Details</th>
			<td><input type="text" required="" class="form-control"   value="<?php echo $res[0]['details'] ?>" name="lname"></td>
		</tr>


		<tr>
			<th>date</th>
			<td><input type="date" required="" class="form-control"   value="<?php echo $res[0]['date'] ?>" name="date"></td>
		</tr>
	

		
		
		

		<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
	</table>
<?php }else{ ?>
	<table class="table" style="width:500px;color: ">
		<tr>
			<th>sport</th>
			<td><input type="text" required="" class="form-control"   name="fname"></td>
		</tr>
		<tr>
			<th>Details</th>
			<td><input type="text" required="" class="form-control"   name="lname"></td>
		</tr>
		<tr>
			<th>date</th>
			<td><input type="date" required="" class="form-control"    name="date"></td>
		</tr>
	

		<tr>
		<td align="center" colspan="2"><input type="submit" name="staffreg" value="submit" class="btn btn-success"></td>
	</tr>
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
	<h1>view sport</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			   <th>sport</th>
				<th>Details</th>
				<th>Date</th>
				
			
			

				
			</tr>
			<?php 

     $q="select * from sport  ";
     $res=select($q);
     $sino=1;

    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['sport'] ?></td>
    		<td><?php echo $row['details'] ?></td>
    		<td><?php echo $row['date'] ?></td>
    		
    		
    	
    		
                    <td><a  class="btn btn-success" href="?did=<?php echo $row['sport_id'] ?>">Delete</a></td>
    		   <td><a class="btn btn-success" href="?uid=<?php echo $row['sport_id'] ?>">Update</a></td>

    
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>