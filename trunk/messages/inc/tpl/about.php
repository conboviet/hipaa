<?php
$filename = CACHE_PATH . CACHE_FILE;
$fh = fopen($filename, 'r');
$string = fread($fh, filesize($filename));
$options = unserialize($string);

$recipients = $options->Msg_about;

for($i = 0; $i < count($recipients); $i++) {
  $value = $recipients[$i];
  $selected = ($_POST['msg_about'] == $value) ? 'selected="selected"' : '';
  echo "<option value='$value' $selected> $value </option>\n";
}
?>
