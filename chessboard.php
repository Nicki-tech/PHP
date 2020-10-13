<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
      table {
         border: 1px solid black;
      }

      td {
         height: 30px;
         width: 30px;
      }

      .black {
         background: black;
      }
  </style>
  </head>
  <body> 
  <h3>Chess Board</h3>
  <table width="300px">
    <thead>
       <tr>
        <th>H</th>
        <th>G</th>
        <th>F</th>
        <th>E</th>
        <th>D</th>
        <th>C</th>
        <th>B</th>
        <th>A</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
        <th>E</th>
        <th>F</th>
        <th>G</th>
        <th>H</th>
      </tr> 
    </tfoot>

   <?php
      for($row = 1; $row <= 8; $row++){
         echo "<tr>";
            for($column = 1; $column <= 8; $column++){
               if(($row + $column) % 2 == 0){
                  echo "<td class='black'></td>";
               } else {
                  echo "<td></td>";
               }    
            }
         echo "</tr>";
      }
   ?>
</table>
  </body>
  </html>
