<?php
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname="intern";
		$tablename="users";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$requestData= $_REQUEST;
		$len=$_REQUEST["length"];
		$start=$requestData["start"];
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
				$nestedData=array(); 
				$nestedData[] = $row["id"];$nestedData[] = $row["firstname"];
				$nestedData[] = $row["lastname"];$nestedData[] = $row["address"];
				$nestedData[] = $row["gender"];$nestedData[] = $row["language"];
				$nestedData[] = $row["company"];$nestedData[] = $row["model"];
				$nestedData[] = $row["email"];$nestedData[] = $row["password"];
				$nestedData[]="<form action=\"form.php\" method=\"post\"><input type=\"hidden\" name=\"id1\" value=$id1><input type=\"submit\"  class=\"but\" value=\"Edit\"></form>".
				$data[] = $nestedData;
			}
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