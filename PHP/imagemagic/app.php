<?php

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_FILES);

// define('UPLOAD_DIR', dirname(__FILE__) . '/uploads');
// define('ALLOWED_EXT',['jpg','jpeg','png','pdf']);

// //echo UPLOAD_DIR;

// foreach ($_FILES as $key => $file) {

// 	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
// 	$ext = strtolower($ext);
// 	var_dump(ALLOWED_EXT);
// 	var_dump($ext);

// 	$key = array_search($ext, ALLOWED_EXT);

// 	var_dump($key);

// 	// if(!array_search($ext, ALLOWED_EXT)){
// 	// 	echo 'file not allowed';
// 	// 	exit;
// 	// }

	
// 		//move_uploaded_file($file['tmp_name'], uploadfile) ;
// }

define('UPLOAD_DIR', dirname(__FILE__) . '/uploads');
define('ALLOWED_EXTENSION', ['png', 'jpg', 'jpeg', 'pdf']);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$profilePicture = 'https://www.gravatar.com/avatar/' . md5(generateRandomString(16));

if (isset($_FILES['photo'])) {
	$file = $_FILES['photo'];

	if ($file['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$ext = strtolower($ext);

		if (!in_array($ext, ALLOWED_EXTENSION)) {
			echo "File not alllowed";

			exit;
		}

		$name = generateRandomString(16);

		$path = UPLOAD_DIR . '/' . date('Y/m/d');

		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}

		$path = sprintf('%s/%s.%s', $path, $name, $ext);

		move_uploaded_file($file['tmp_name'], $path);

		$profilePicture = str_replace('/home/code-academy/PHP', '', $path);
	}
}

