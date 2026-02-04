<?php
require '_base.php';

$_title = 'Index';
include '_head.php';
?>

<?php
for ($i = 1; $i <= 20; $i++) {
    echo "<div>I Love You ❤️ x $i time(s)</div>";
}
?>

<?php
include '_foot.php';

