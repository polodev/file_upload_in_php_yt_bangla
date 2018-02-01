# simple file uploading in php

<hr>

### enctype
When we upload file we have to set a `enctype="multipart/form-data"` attribute to `form` tag.

~~~html
<form action="" method="post" enctype="multipart/form-data">
~~~

### to create a folder in php   

~~~php
mkdir('foldername')
~~~

### to check any file or folder exists we use `file_exists` function. which will return boolean

~~~php
//file
file_exists('hello.txt')
//folder
file_exists('hello')
~~~


### to upload file in php we use `move_uploaded_file` function. Which takes 2 arguments. file and destination location.

~~~php
  move_uploaded_file($tmp_name, $destination);
~~~

### Uploading file code in at a glance

~~~php
<?php
if (isset($_FILES['file'])) {
  $file = $_FILES['file'];
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];
  if (! file_exists('hello')) {
    mkdir('hello');
  }
  $destination = 'hello/' . $name;
  move_uploaded_file($tmp_name, $destination);
}
~~~

