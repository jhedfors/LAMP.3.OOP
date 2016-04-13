<?php

  $people =  [["first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"],["first_name" => "Jeff", "last_name" => "Hedfors", "nick_name" => "Jeffers"]];
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML Helper</title>
  </head>
  <body>
    <div class="wrapper">
      <table>
        <thead>
          <tr>
            <?php
              for ($i=0; $i < count($people); $i++) {
                foreach ($people as $key => $value) {
                    echo "Key: $key; Value: $value<br />\n";
                }

              }

            ?>
            <th> </th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              foreach ($array as $key => $value) {
            ?>
            <td> <?= $value ?>  </td>
            <?php
              }
             ?>
          </tr>
        </tbody>
      </table>


    </div>

  </body>
</html>
