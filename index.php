<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadanie - Dodanie do bazy</title>
    </head>
    <body>
 <?php
    $connect = mysqli_connect("localhost", "root", "", "zadanie"); 
             
        $query = '';
            $table_data = '';
            
            $filename = "countries.json";
            
            $data = file_get_contents($filename); 
            
            $array = json_decode($data, true); 
            
            foreach($array as $row) {
  
                $query .= 
                "INSERT INTO panstwa (panstwo) VALUES 
                ('".$row["country"]."'); "; 
               
                $table_data .= '
                <tr>
                    <td>'.$row["country"].'</td>
                </tr>
                ';
            }
  
            if(mysqli_multi_query($connect, $query)) {
                echo '<h3>Dane wprowadzone do bazy danych:</h3><br/>';
                echo '
                <table class="table table-bordered">
                <tr>
                    <th>Państwa</th>
                </tr>
                ';
                echo $table_data;  
                echo '</table>';
            }
          ?>
    </body>
</html>