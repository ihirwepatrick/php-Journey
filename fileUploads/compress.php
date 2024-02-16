<?php
if(isset($_POST['submit'])) {
    //declare the path to store the zipped files
    $zipFileName = 'compressed_files.zip';

    // Delete the existing zip file if it exists
    if (file_exists($zipFileName)) {
        unlink($zipFileName);
    }

    // Create a new zip file
    $zip = new ZipArchive();

    if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['files']['name'][$key];
            $zip->addFile($tmp_nam-e, $file_name);
        }

        $zip->close();
        echo "Files compressed successfully. <a href='$zipFileName'>Download Zip</a>";
    } else {
        echo "Failed to create zip file.";
    }
}
?>