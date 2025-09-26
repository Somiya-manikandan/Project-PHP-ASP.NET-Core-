<?php


// -------- Opening / Writing to a File --------
$file = fopen("demo.txt", "w") or die("Unable to open file!");
fwrite($file, "Hello, this is a file handling example in PHP.\n");
fwrite($file, "File operations: read, write, copy, rename, delete.\n");
fclose($file);
echo "File created and written successfully.<br>";

// -------- Reading from a File --------
$file = fopen("demo.txt", "r") or die("Unable to open file!");
echo "<br>Reading File Content:<br>";
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

// -------- Copying a File --------
if (copy("demo.txt", "copy_demo.txt")) {
    echo "<br>File copied successfully (demo.txt → copy_demo.txt).<br>";
}

// -------- Renaming a File --------
if (rename("copy_demo.txt", "renamed_demo.txt")) {
    echo "File renamed successfully (copy_demo.txt → renamed_demo.txt).<br>";
}

// -------- Changing File Permissions --------
if (chmod("demo.txt", 0644)) {
    echo "File permissions of demo.txt changed successfully.<br>";
}

// -------- Deleting a File --------
if (unlink("renamed_demo.txt")) {
    echo "File deleted successfully (renamed_demo.txt).<br>";
}

// -------- include_once & require_once --------
// Create a helper file
file_put_contents("helper.php", "<?php echo 'This is included using include_once.<br>'; ?>");

// include_once
include_once("helper.php");

// require_once
require_once("helper.php");
?>