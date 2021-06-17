<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=baza', 'root', '');
	if(!$conn){
		die("Error: Failed to coonect to database!");
	}

	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered" style="background-color: white;">
		<thead class="alert-info">
			<tr>
				<th>Lastname</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $conn->prepare("SELECT * FROM `druzyny` WHERE `Nazwa` LIKE '%$keyword%' or `Stadion_domowy` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>

				<td><?php echo $row['Nazwa']?></td>
				<td><?php echo $row['Stadion_domowy']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>

				<th>Lastname</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $conn->prepare("SELECT * FROM `druzyny`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['Nazwa']?></td>
				<td><?php echo $row['Stadion_domowy']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
$conn = null;
?>