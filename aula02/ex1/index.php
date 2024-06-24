<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // Definindo Timezone
        print "Today is " . date("d/m/y"); // Dia, mês e ano
        print " and the current hour is " . date("G:i:s") // Horas, minutos e segundos
    ?>  
</body>
</html>