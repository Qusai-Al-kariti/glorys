<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: cart_add.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database

						
						$sql = "INSERT INTO images (image_url,name,description )
						VALUES ('$new_img_name','$_POST[name]','$_POST[description]')";
			


				mysqli_query($mysqli, $sql);
				header("Location: thx.php");
				echo "<p style='color:green; font-size:26px;'>" . "-تم الأرسال بنجاح , شكراً لك-" . "</p>";
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index1.php?error=$em");
			}
		}
	}
}