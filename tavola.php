<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tavola Pitagorica</title>
</head>
<body>
   <h1>Tavola Pitagorica</h1>
   <table border="1">
    <tr>
        <th>X</th>
        <?php
        for ($i=1; $i <=10 ; $i++) { 
            print("<th>$i</th>");
        } 
        ?>
    </tr>

    <?php
        for ($t=1; $t <=10 ; $t++) { 
            print("<tr>");
            print("<th>$t</th>");

            for ($k=1; $k <=10 ; $k++) {
                $risultato = $t * $k; 
                print("<th>$risultato</th>");
            }
            print("</tr>");
        }
    ?> 
   </table>
   
</body>
</html>