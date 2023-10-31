<div class="profile clearfix">
<?php
//include_once("includes/logged.php");
include_once("includes/con_db.php");

	try{
		$msql = "SELECT * FROM `users` WHERE id=?";
		$mstmt=$conn->prepare($msql);
		$mstmt->execute(["$mid"]);
        $mresult = $mstmt->fetch();
		$mimage= $mresult["uimg"];
	}catch(PDOException $e){
		echo "Connection failed" .$e->getMessage();
	}
		?>
						<div class="profile_pic">
							<img src="img/<?php echo $mimage ?>" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2> <?php echo $musername ?> </h2>
						</div>
					</div>
					