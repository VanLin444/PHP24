<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с формой</title>
</head>

<body>
    <form action="output.php" method="POST" enctype="multipart/form-data">
        <div style="display: grid; justify-items: start;">
            <label for="txta">TEXT AREA - ТЕКСТОВАЯ ОБЛАСТЬ</label>
            <textarea name="txta" id="" cols="60px" rows="5px" wrap=""></textarea>
            <br>
        </div>
        <label for="chkbx">CHECKBOX - ФЛАЖКИ</label>
        <div style="display:flex;">
            <input type="checkbox" name="chkbx[]" value=1>
            <p>Ванильное</p>
            <input type="checkbox" name="chkbx[]" value=2>
            <p>Клубничное</p>
            <input type="checkbox" name="chkbx[]" value=3>
            <p>Банановое</p>
            <input type="checkbox" name="chkbx[]" value=4>
            <p>Шоколадное</p>
        </div>
        <br>
        <label for="radio">RADIO BUTTONS - ПЕРЕКЛЮЧАТЕЛИ</label>
        <div style="display:flex;">
            <p>ON</p><input type="radio" name="radio" id="" value="1" checked="checked">
            <p>OFF</p><input type="radio" name="radio" id="" value="2">
        </div>
        <label for="radio">РАСКРЫВАЮЩИЙСЯ СПИСОК</label>
        <div style="display:flex;">
            <select name="select_items[]" id="" multiple="multiple">
                <option value="Россия">Россия</option>
                <option value="Китай">Китай</option>
                <option value="США">США</option>
                <option value="Франция">Франция</option>
                <option value="Германия">Германия</option>
            </select>
        </div>
        <br>
        <div>
            <input type="file" name="upload_file" id="">
        </div>
        <br>
        <input type="submit">
    </form>
</body>

</html>