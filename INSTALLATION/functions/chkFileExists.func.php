<?php
function chkFileExists($desc, $file, $good='Pass', $bad='Fail') {
   echo '<tr>';
   echo '<td class="item">' . $desc . '</td>';
   echo '<td align="left">';
   echo file_exists($file) ? '<b><font color="green">'.$good.'</font></b>' : '<b><font color="red">'.$bad.'</font></b>' . '</td>';
   echo '</tr>';
}
?>
