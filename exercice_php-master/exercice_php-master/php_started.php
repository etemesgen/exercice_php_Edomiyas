<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="classement des langages web">
    <title>Spécial arrow</title>
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="image/HTML_Logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/arrow.css">
</head>
<body>
    <header>
        <h1>Spécial arrow <i aria-hidden="true" class="arrow-left"></i></h1>
    </header>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th>Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                   
            <?php
           
               $table = array(
                1 => array("classement"=>"1",
                        "langage"=>"Python",
                        "type" => "Web application"),

                2 => array("classement"=>"2",
                        "langage"=>"C++",
                        "type" => "Application"),

                3 => array("classement"=>"3",
                        "langage"=>"Node js",
                        "type" => "Web application"),

                4 => array("classement"=>"4",
                        "langage"=>"Php",
                        "type" => "Web application"),        
            );
                

            foreach($table as $key => $index){
         //       print $key;
                print"<tr>";
                foreach ($index as $key_1 => $value){
                    echo "<td>".$value."</td>\n";
                }
                print"</tr>";
            }

          ?>
                </tbody>
                <tfoot>
                        <tr>
                            <th>Classement</th>
                            <th>Langage</th>
                            <th>Type</th>
                        </tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <p>&copy; - Giusmili <?php print date('Y') ?></p>
        </footer>
    </main>
</body>
</html>

