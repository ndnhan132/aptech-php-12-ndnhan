<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- FILE CREATE WRITE ---
 *
 * fopen() or die
 * fwrite()
 * fclose()
 *
 */

echo "<h1>2. FILE CREATE WRITE</h1>";

/*
 * EXERCISE 1 : Create yourname.txt, write your name into it and display.
 *
 */

/*
 * SUGGESTION :
 *
$file = fopen("nam.txt", "w") or die("Can't open the file.");
fwrite($file, "Nguyen Hai Nam");
fclose($file);
echo readfile("nam.txt");
 *
 */

/*
 * EXERCISE 2 : Insert your project name inside file yourname.txt and display line by line.
 */

/*
 *
$file = fopen("nam.txt", "a+") or die("Can't open the file");
fwrite($file, "\nNews Website");
fclose($file);

$file = fopen("nam.txt", "a+") or die("Can't open the file");
while (!feof($file)) {
echo fgets($file) . "<br>";
}
fclose($file);
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$file=fopen("ndnhan.txt","w") or die("can't open");
fwrite($file, "Dinh Nhan");
fclose($file);
echo readfile("ndnhan.txt");

$file= fopen("ndnhan.txt", "a+") or die("can't open");
fwrite($file, "\nmyProject");
fclose($file);

$file= fopen("ndnhan.txt", "r") or die("die");
while (!feof($file)) {
    echo fgets($file) . "<br>";
    }
    fclose($file);