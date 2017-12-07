
<html>
<body>
<header>
    <meta charset="utf-8">
</header>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="sub" value="Submit" />
</form>
<?php
if (isset($_FILES["file"])) {
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/pjpeg"))
    ||  ($_FILES["file"]["type"]=='aplication/msword')
    ||  ($_FILES["file"]["type"]=='text/plain') && ($_FILES["file"]["size"] < 2000000))
      {
      if ($_FILES["file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
      else
        {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

        if (file_exists("upload/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . " already exists. ";
          }
        else
          {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "../upload/" . $_FILES["file"]["name"]);
          echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
          }
        }
      }
    else
      {
      echo "Invalid file";
      }

}
$dir = "../upload/";
// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
if ($dh = opendir($dir)) {
while (($file = readdir($dh)) !== false) {?>
    <a href="<?php echo $dir.$file ?>"><?php echo $file ?></a><a href="./download.php?file=<?php echo $dir.$file ?>">下载</a><br>
<?php 
} closedir($dh);
}
}

?>
</body>
</html>