<?php
   function mysqlTest($dbinfo) {
      global $coreTableCount;
      ini_set('mysql.connect_timeout',120);
      require_once($dbinfo);
      $desc = 'MySQL Server Connection';
      echo '<tr>';
      echo '<td class="item">' . $desc . '</td>';
      echo '<td align="left">';
      echo @mysql_connect($dbhost,$dbuname,$dbpass) ? '<b><font color="green">Pass</font></b>' : '<b><font color="red">Fail - '.mysql_error().'</font></b>' . '</td>';
      echo '</tr>';

      $desc = 'Database Connection';
      echo '<tr>';
      echo '<td class="item">' . $desc . '</td>';
      echo '<td align="left">';
      echo @mysql_select_db($dbname) ? '<b><font color="green">Pass</font></b>' : '<b><font color="red">Fail - '.mysql_error().'</font></b>' . '</td>';
      echo '</tr>';

      $desc = 'Database Core Table Count';
      echo '<tr>';
      echo '<td class="item">' . $desc . '</td>';
      echo '<td align="left">';
      $rc = @mysql_query('SHOW TABLES');
      $cnt = 0;
      while ($row = @mysql_fetch_row($rc)) { $cnt++; }
      echo $coreTableCount==$cnt ? '<b><font color="green">Pass</font></b>' : '<b><font color="red">Fail - Expecting '.$coreTableCount.' - Counted '.$cnt.'</font></b>' . '</td>';
      echo '</tr>';
}
?>
