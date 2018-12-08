<?php

$initialDirectory = getcwd();

//Get current directory
echo "The current working directory is " . $initialDirectory. "<br>";

//Make a new directory
if (!mkdir ('newdir/mydir', 0666, true)) {
    throw new Exception ("Unable to create directory");
}

//Change current directory
$newDirectory = $initialDirectory."/newdir/mydir";
if (chdir($newDirectory))
{
    echo "Successfully changed the directory to: " . getcwd(). "<br>";
}
//Remove the created directory
$isChildDirectoryRemoved = rmdir($initialDirectory.'/newdir/mydir');
$isParentDirectoryRemoved = rmdir($initialDirectory.'/newdir');
if ($isChildDirectoryRemoved && $isParentDirectoryRemoved)
{
    echo "Successfully removed the directory: $initialDirectory/newdir";
}





