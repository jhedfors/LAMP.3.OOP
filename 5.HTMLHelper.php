<?php
  //print_table stuff
  $people =  [["first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"],["first_name" => "Jeff", "last_name" => "Hedfors", "nick_name" => "Jeffers"]];
  $usersTable = new html_helper();
  $usersTable->print_table($people);
  //print_select stuff
  $selectName ="state";
  $states = ["CA", "WA", "UT", "TX", "AZ", "NY"];
  $stateDropdown = new html_helper();
  $stateDropdown->print_table($selectName,$states);


  class html_helper
  {
    public function print_table($arr){
      echo "<table><thead><tr>";
      $first = true;
      foreach ($arr as $row) {
        if ($first) {
          foreach ($row as $key => $value) {
              $formatted = ucwords(str_replace("_", " ", $key));
              echo "<th>$formatted</th>";
          }
        }
        $first = false;
      }
      echo "</tr></thead><tbody>";
      foreach ($arr as $row) {
          echo "<tr>";
          foreach ($row as $key => $value) {
              echo "<td>$value</td>";
          }
          echo "</tr>";
      }
        echo "</tbody></table>";
      }
      public function print_select($select_name,$select_option_arr){

      }
  }
 ?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML Helper</title>
    <style media="screen">
      table, td, th{
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">

    </div>
  </body>
</html>
