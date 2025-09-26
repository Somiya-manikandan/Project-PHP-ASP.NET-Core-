<?php
// Aim: Program to demonstrate working with directories in PHP

// -------- Current Directory --------
echo "Current Directory (_DIR): " . __DIR_ . "<br><br>";

// -------- Create a Directory --------
$dirname = "myDir";
if (!is_dir($dirname)) {
    mkdir($dirname);
    echo "Directory '$dirname' created successfully.<br>";
}

// -------- Check if Directory Exists --------
if (is_dir($dirname)) {
    echo "Directory '$dirname' exists.<br>";
}

// -------- Change Directory --------
chdir($dirname);
echo "Changed to Directory: " . getcwd() . "<br>";

// -------- Create Files inside Directory --------
file_put_contents("file1.txt", "This is file 1.");
file_put_contents("file2.txt", "This is file 2.");
echo "Files created inside '$dirname'.<br>";

// -------- List Directory Contents --------
echo "<br>Directory Contents using readdir():<br>";
$handle = opendir(getcwd());
while (($entry = readdir($handle)) !== false) {
    echo $entry . "<br>";
}
closedir($handle);

// -------- List Directory Contents using scandir --------
echo "<br>Directory Contents using scandir():<br>";
print_r(scandir(getcwd()));

// -------- Go Back to Parent Directory --------
chdir("..");
echo "<br><br>Back to Parent Directory: " . getcwd() . "<br>";

// -------- Rename Directory --------
$newName = "newDir";
if (rename($dirname, $newName)) {
    echo "Directory renamed to '$newName'.<br>";
}

// -------- Delete Files and Directory --------
foreach (scandir($newName) as $file) {
    if ($file != "." && $file != "..") {
        unlink("$newName/$file");
    }
}
rmdir($newName);
echo "Directory '$newName' deleted.<br>";
?>