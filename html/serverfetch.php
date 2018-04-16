<?php
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname="intern";
		$tablename="cartable";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$requestData= $_REQUEST;
		$len=$_REQUEST["length"];
		$start=$requestData["start"];
		echo '<script>console.log('.$_REQUEST.');alert("boom")<script>';
		//if( !empty($requestData['myTable_length']['value']) )
			//$len=$requestData['myTable_length']['value'];
		$data = array();
		$sql = "SELECT * FROM $tablename";
		$result = $conn->query($sql);
		$totalData = $result->num_rows;
		$totalFiltered = $totalData; 
		if($len!=-1){
		$sql = "SELECT * FROM $tablename LIMIT $start, $len";
		$result = $conn->query($sql);}
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id1=$row["id"];
				/*echo "<tr ><td>".$row["id"]."</td><td>". $row["name"]."</td><td>".  $row["image"]."</td><td>".$row["price"].
				"</td><td><form action=\"addcar.php\" class='form1' method=\"post\"><input type=\"hidden\" name=\"id1\" value=$id1><input type=\"submit\"  class=\"but\" value=\"Edit\"></form>".
				"<form action=\"delcar.php\" class='fright1' onclick=\"return check()\" method=\"post\"><input type=\"hidden\" name=\"id2\" value=$id1><input type=\"submit\" class=\"but\"  value=\"Delete\"></form>"."</td></tr> ";
				*/$nestedData=array(); 

	$nestedData[] = $row["id"];
	$nestedData[] = $row["name"];
	$nestedData[] = $row["image"];
	$nestedData[] = $row["price"];
	$nestedData[]="<form action='addcar.php'class='form1' method='post'><input type='hidden' name='id1' value=$id1><input type='submit'  class='but' value='Edit'></form><form action='delcar.php' class='delfo' onclick='return check()' method='post'><input type='hidden' name='id2' value=$id1><input type='submit' class='but' value='Delete'></form>";
	//$nestedData[]="hello";
	$data[] = $nestedData;
			}
		} else {
		}
		$sql = "SELECT * FROM $tablename LIMIT $start, $len";
		$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ),			// total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);
?>