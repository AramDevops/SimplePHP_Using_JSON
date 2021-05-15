
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>Creat New</title>
	</head>

	<body>
    <div class="msg">

</div>
	<!-------------------Main Content------------------------------>
	<div class="container main" >
		<div class="image-box">
			<h2>Create New Character</h2>
			<form method="POST">
				<div>              
					<input type="text" placeholder="Enter Character Name" name="name" class="tb" />
					<input type="text" placeholder="Enter Character Description" name="characteristics" class="tb" />
					<input type="file" name="photo" class="file_input" />
					<button type="submit" class="btn btn-primary" name="add">Add Character</button>

				</div>
			</form>
			<button onclick="window.location.href='indexjson.php';">Back</button>

            <h4>This is JSON-VERSION</h4>
		</div>
		
	</div>
	</body>
	</html>


	<?php
	include "AddStyler.php";
	
	if(isset($_POST['add'])){

		$data = file_get_contents('Data.json');
		$data_array = json_decode($data);
		//image directory where actual image will be store
		$file_path = "Images/".$_POST['photo'];	

		//data in our POST
		

		$input = array(
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'photo' => $file_path,
			'characteristics' => $_POST['characteristics'],
			
		);
		//append the POST data
		$data_array[] = $input;
		//return to json and put contents to our file
		$data_array = json_encode($data_array, JSON_PRETTY_PRINT);
		file_put_contents('Data.json', $data_array);
		$_SESSION['message'] = 'Data successfully appended';
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
	}
	
?>



