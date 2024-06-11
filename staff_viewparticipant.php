<?php include 'staffheader.php' ;

extract($_GET);
?>

<div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
              
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000"  style="height: auto">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        

						
<center>
	<h1 style="color: white">view Participant</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			   <th>Team Name</th>
			
				<th>Place</th>
				
				<th>Phone</th>
					<th>Email</th>
			
			

				
			</tr>
			<?php 

     $q="select * from participant where tournament_id='$tid'";
     $res=select($q);
     $sino=1;

    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['team_name'] ?></td>
    	
    	
    		<td><?php echo $row['place'] ?></td>
    		
    		<td><?php echo $row['phone'] ?></td>
    			<td><?php echo $row['email'] ?></td>
    			<td><a  class="btn btn-success"  href="staff_uploadwinner.php?pid=<?php echo $row['participant_id'] ?>">Upload Winner</a></td>
    			<td><a class="btn btn-success"  href="staff_viewrequestparticipant.php?pid=<?php echo $row['participant_id'] ?>">View Request</a></td>
                  
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>
            </div></div></div></div></div></div></div>

<?php include 'footer.php' ?>