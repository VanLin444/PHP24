<?php
    // Вывод введённых значений из формы
    // print_r($_POST['select_items']);
    
    // Вывод информации о загруженном файле из формы
    if(isset($_FILES['upload_file'])){
        $file = $_FILES['upload_file'];
        if($file['error'] === 0){
            echo "ЗАГРУЖЕН...";
            print_r($file);
        } else {
            echo $file['error'];
            echo "ОШИБКА...";
        }
        
    }
    // Информация о файле
    $fileName = $file['name'];          // Имя файла
    $fileTmpName = $file['tmp_name'];   // Временное расположение
    $fileSize = $file['size'];          // Размер в байтах
    $fileError = $file['error'];        // Код ошибки
    $fileType = $file['type'];          // MIME-тип

    // Перемещает загруженный файл в новое место. То есть из его временного расположения туда куда нам нужно.
    move_uploaded_file($file['tmp_name'], '../HTTP/upfile.jpg');
?>