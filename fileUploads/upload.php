<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="container">
    <h2>File Upload Form</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select file to upload:</label><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])) {
        $file = $_FILES["fileToUpload"];
        if(move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"])) {
            echo "<p style='color: #4CAF50;'>File uploaded successfully: " . $file["name"] . "</p>";
        } else {
            echo "<p style='color: #f44336;'>Error uploading file.</p>";
        }
    }
    ?>
    <button style="background-color: #4caf50; float: right; border-radius: 5px; padding: 20px 20px;">
    <a href="./uploads.php" style="text-decoration: none">View Uploads </a>
</button>
</div>
</body>
</html>