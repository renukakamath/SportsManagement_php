<?php include 'adminheader.php';
extract($_GET);


if (isset($_POST['cusreg'])) {
	extract($_POST);
	$q1="select * from assign_sports where sport_id='$sid' ";
 		$res1=select($q1);
 		if (sizeof($res1)>0) {
 			alert('already assign');
 			  return redirect('admin_manage_tournament.php');
 		}else{
    
  echo$q1="insert into assign_sports values(null,'$tid','$sid','$date','assign') ";
   insert($q1);
   alert('sucessfully');
   return redirect('admin_manage_tournament.php');
}
}




if (isset($_GET['aid'])) {
	extract($_GET);
$q1="select * from assignvenue where sport_assign_id='$aid' ";
 		$res1=select($q1);
 		if (sizeof($res1)>0) {
 			alert('already assign');
 			  return redirect('admin_manage_tournament.php');
 		}else{
    
  echo$q1="insert into assignvenue values(null,'$aid',curdate(),'assign') ";
   insert($q1);
   alert('sucessfully');
   return redirect('admin_manage_tournament.php');
}

}

?>



 <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
             
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox"  >
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000"  >
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                             						                        <center>
                             						                        	<br><br><br>
<center>

<center>
<h1  style="color: white"> Assign Sports</h1>
<form method="post" style="" class="ppp">
	<table class="table" style="width:500px;color: white">


		<tr>
			<th>Sports</th>
			<td><select  name="sid"  class="form-control"  style="color: black">

				<?php 

				$q="select * from sport";
				$res=select($q);

				foreach ($res as $row) {
				?>
				<option  value="<?php echo $row['sport_id'] ?>"><?php echo $row['sport'] ?></option>
				<?php }
				 ?>
				
			</select></td>
		</tr>
		<tr>
			<th>date</th>
			<td><input type="date" required="" class="form-control"    name="date"></td>
		</tr>
		
		
		<td align="center" colspan="2"><input type="submit" name="cusreg" value="submit" class="btn btn-success"></td>
	</table>
</form>
</center>



</center></center></div></div></div></div></div></div></div>
						
<center>
	<h1 style="color: black"> view Booking</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			

			   <th>tournament</th>
			   <th>sport</th>
				<th> date</th>
				
				<th> Status</th>
				
			</tr>
			<?php 

     $q="SELECT * FROM `assign_sports` inner join tournament using (tournament_id) inner join sport using (sport_id)  WHERE tournament_id='$tid'";
     $res=select($q);
     $sino=1;

    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['tournament'] ?></td>
    		<td><?php echo $row['sport'] ?></td>
    		
    		<td><?php echo $row['date'] ?></td>
    		<td><?php echo $row['status'] ?></td>

    		<td><a  class="btn btn-success" href="?aid=<?php echo $row['sport_assign_id'] ?>">Assign Venu</a></td>
            



    	
    
    			
    			
                  
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>


<?php include 'footer.php' ?>