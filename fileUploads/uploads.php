<?php
$files = scandir("uploads");
for($a = 2; $a < count($files); $a++) {
?>
<p>
    <a download="<?php echo $files[$a]; ?>" href="uploads/<?php echo $files[$a]; ?>"><?php echo $files[$a]; ?></a>
</p>
<?php
}