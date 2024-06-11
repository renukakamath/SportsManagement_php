<?php include 'publicheader.php';

if (isset($_POST['cusreg'])) {
	extract($_POST);
	$q1="select * from login where username='$uname' ";
 		$res1=select($q1);
 		if (sizeof($res1)>0) {
 			alert('already exist');
 		}else{
    echo$q="insert into login values(null,'$uname','$pwd','participant')";
     $id=insert($q);
 echo $q1="insert into participant values(null,'$id','$tid','$fname','$num','$place','$email') ";
   insert($q1);
   alert('sucessfully');
   return redirect('participantregistration.php');
}
}






 ?>
<div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
              
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000"  style="height: 700px">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight"> 
                           	<br><br><br><br>
 

<center>
<h1  style="color: white">Participant Registration</h1>
<form method="post" style="" class="ppp">
	<table class="table" style="width:500px;color: ">


		<tr>
			<th>tournament</th>
			<td><select  name="tid"  style="color: black"  class="form-control" >

				<option>---Select---</option>

				<?php 

				$q="select * from tournament";
				$res=select($q);

				foreach ($res as $row) {
				?>
				<option  value="<?php echo $row['tournament_id'] ?>"><?php echo $row['tournament'] ?></option>
				<?php }
				 ?>
				
			</select></td>
		</tr>
		<tr>
			<th>Team Name</th>
			<td><input type="text" required="" class="form-control" style="color: " name="fname"></td>
		</tr>
		
		<tr>
			<th>Place</th>
			<td><input type="text" required="" style="color: " class="form-control" name="place"></td>
		</tr>
		


		<tr>
			<th>Phone</th>
			<td><input type="text" required="" style="color: " pattern="[0-9]{10}" class="form-control" name="num"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" required="" style="color: " class="form-control" name="email"></td>
		</tr>

		<tr>
			<th>User Name</th>
			<td><input type="text" required="" style="color: " class="form-control"  name="uname"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" required="" style="color: " class="form-control" name="pwd"></td>
		</tr>
		<tr>
		<td align="center" colspan="2"><input type="submit" name="cusreg" value="submit" class="btn btn-success"></td>
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