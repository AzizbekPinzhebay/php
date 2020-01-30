<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
echo 'Tsak 1. Создайте папку, добавьте в нее файлы. Выведите содержимое папки на экран.<br>';
    
    $dir  = 'unit_9';

        if(is_dir($dir)){
            
            $openDir = opendir($dir);

            while(($readDir = readdir($openDir)) !== false){
                echo $readDir.'<br>';
            }

            closedir($openDir);
        }
        echo '<hr>';



        echo 'Task 2. Создайте папку, добавьте в нее файлы. Выведите суммарный размер файлов в папке.';

        
        $fold = 'task2';

        if(is_dir($fold)){
           
            $openFold = opendir($fold);
            $cont =0;
            while(($readFold = readdir($openFold)) !== false){

                if($readFold !='.' && '..'){

                  $count += filesize($fold.'/'.$readFold);
                   
                }
                
            }
                echo $count;
            closedir($openFold);

        }
       
        echo  "<hr>";



?>



<?php
       echo  'Task 3. Создайте папку, добавьте в нее файлы. Выведите на страницу ссылки на эти файлы, чтобы при клике на них загружались сами файлы.<br>'
?>
        <img>


</body>
</html>
  

<!--


Сделайте сайт с обоями для рабочего стола, причем сами обои на странице сайта должны выводиться самостоятельно, на основе тех файлов, что заброшены в папку.
Создайте форму, которая принимает один параметр - имя папки, и по нажатию кнопки создает эту папку.
Создайте форму, которая принимает один параметр - имя папки, и по нажатию кнопки удаляет эту папку. Папки для удаления - пустые.
Создайте форму, которая принимает один параметр - имя файла, и после нажатия кнопки проверяет есть ли такой файл в папке.
Создайте скрипт, который читает содежримое папки, и в зависимости от типа файла выводит имя файла, иконку, размер. Скрипт должен воспринимать файлы doc, docx, txt, jpg, jpeg, png. Иконки для сайта возьмите на iconfinder.com -->



