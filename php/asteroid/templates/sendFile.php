<?php
$sendFile = 
'
<!-- Begin Page Content -->
<div class="container-fluid">
';

$sendFile .= '
<form action="sendFile.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</form>
';

$sendFile .= '
</div>
<!-- /.container-fluid -->
';
