<?php

echo "
<h2>Titkosítás</h2>
<p>A warning ne zavarjon!</p>
<form method='POST'>

<input type=password name='titkositas' placeholder='Írd be ide a jelszót!'>
<button type='submit'>Ide vele!</button>
</form>
";
echo sha1(md5(sha1(md5($_POST["titkositas"]))));

echo "
<h2>Beírt jelszó:</h2>
";
echo $_POST['titkositas'];


?>