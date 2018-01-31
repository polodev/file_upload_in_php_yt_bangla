<?php 
if ( isset($_FILES['file']  )) {
  $file = $_FILES['file'];
  $name = $file['name']; //polo.jpg
  if (!file_exists('uploads')) {
    mkdir('uploads');
  }
  $destination = 'uploads/'. $name;
  $tmp_name = $file['tmp_name'];
  move_uploaded_file($tmp_name, $destination);
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload file in php</title>
  <style>
  body {
    margin: 20px 10%;
  }
  div {
    margin: 20px 0;
  }
  button {
    background: teal;
    color: white;
    border: 1px solid tomato;
    padding: 10px 15px;
  }
  </style>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <div>
      <label for="file">File</label>
      <input type="file" name="file" id="file">
    </div>
    <div>
      <button type="submit">Upload file</button>
    </div>
  </form>
</body>
</html>