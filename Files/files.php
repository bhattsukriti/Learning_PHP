<?php
if (isset($_POST['filename'])){
    $filename = "Files/" . $_POST['filename'];
    $content = $_POST['Content'];    
    $filename = fopen($filename, "w") or die("Unable to create file");
    fwrite($filename, $content);
    fclose($filename);
    echo "File Created";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create File</title>
</head>
<body>

<form method="post">
    <input type="text" placeholder="Enter file name" name="filename" required> 
    <br/><br/> 
    <textarea name="Content" placeholder="Enter file content" rows="10" cols="30" required></textarea> 
    <br><br>
    <button type="submit">Create File</button>
</form>

</body>
</html>
