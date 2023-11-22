<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Сотрудники</title>
    <style type="text/css">
        @font-face {
            font-family: "JuraLight";
            src: url("../fonts/JuraLight/JuraLight.eot");
            src: url("../fonts/JuraLight/JuraLight.eot?#iefix")format("embedded-opentype"),
            url("../fonts/JuraLight/JuraLight.woff") format("woff"),
            url("../fonts/JuraLight/JuraLight.ttf") format("truetype");
            font-style: normal;
            font-weight: 300;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "JuraLight";
            background-color: aliceblue;
        }

        .top {
            width: 100%;
            height: 77px;
            background-color: #1E4FFF;
            position: relative;
        }

        .top p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            text-align: center;
            font-size: 32px;
            color: white;
        }

        .block {
            background-color: #1E4FFF;
            width: 600px;
            height: 105px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 43px;
            position: relative;
            border-radius: 14px;
        }

        .block a {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .block1 a {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .block1 {
            background-color: #1E4FFF;
            width: 600px;
            height: 105px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 83px;
            position: relative;
            border-radius: 14px;
        }

        .block:hover {
            background-color: #577CFF;
        }

        .block1:hover {
            background-color: #577CFF;
        }



        /* сотрудники */
        .back {
            width: 1600px;
            min-height: 1290px;
            margin-left: auto;
            margin-right: auto;
            background-color: #3394de;
        }

        .block3_1{
            background-color: #1E4FFF;
            width: 295px;
            height: 86px;
            color: white;
            text-align: center;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 46px;
            border-radius: 14px;
            border: 1px solid black;
            font-size: 20px;
            margin-left: 30px;
            padding-top: 25px;
        }

        .block3 {
            background-color: #1E4FFF;
            width: 295px;
            height: 86px;
            color: white;
            text-align: center;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 46px;
            border-radius: 14px;
            border: 1px solid black;
            font-size: 20px;
            padding-top: 25px;
        }

        .block3:hover {
            background-color: #577CFF;
        }

        .block3_1:hover {
            background-color: #577CFF;
        }

        .block4 {
            border: 4px solid #868686;
            width: 1200px;
            min-height: 800px;
            border-radius: 14px;
            margin-top: 26px;
            float:left;
            margin-left: 30px;
        }

        .panel {
            width: 300px;
            min-height: 300px;
            border: 1px solid black;
            float:left;
            margin-top: 27px;
            margin-left: 36px;
        }

        .panel div {
            background-color: #1E4FFF;
            height: 74px;
            border: 1px solid black;
            text-align: center;
            padding-top: 34px;
        }

        .panel div:hover {
            background-color: #577CFF;
        }

        .panel a {
            color: white;
            text-decoration: none;
            font-size: 32px;
        }

        .amount {
            margin-left: 30px;
            font-size: 32px;
            margin-bottom: 0;
        }

        .people {
            background: white;
            min-width: 700px;
            height: 330px;
            float: left;
            margin-top: 30px;
            margin-left: 30px;b
            border:6px solid black;
            border-radius: 25px;

        }

        img {
            width: 150px;
            height: 190px;
            float: left;
        }

        .text1 {
            font-size: 32px;
            padding: 0;
            margin: 0;
            margin-top: 10px;
            margin-left: 172px;
            font-weight: 700;
        }

        .text2 {
            font-size: 24px;
            padding: 0;
            margin: 0;
            margin-top: 7px;
            margin-left: 172px;
        }

        .block5 {
            background-color: #1E4FFF;
            width: 600px;
            height: 105px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 43px;
            position: relative;
            border-radius: 14px;
        }

        .block5 p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .block5_1 p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .block5_1 {
            background-color: #1E4FFF;
            width: 600px;
            height: 105px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 83px;
            position: relative;
            border-radius: 14px;
        }

        .lock {
            background-color: #1E4FFF;
            width: 250px;
            height: 50px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-radius: 14px;
            margin-top: 50px;
            padding-top: 18px;
            font-size: 30px;
        }

        .lock:hover {
            background-color: #577CFF;
        }

        .block6 {
            background-color: #1E4FFF;
            width: 350px;
            height: 56px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-radius: 14px;
            margin-top: 50px;
            padding-top: 29px;
            font-size: 23px;
            display: inline-block;
            margin-left: 50px;
        }

        .block6 p {
            margin: 0;
        }

        .block6_1 {
            background-color: #1E4FFF;
            width: 350px;
            height: 56px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-radius: 14px;
            margin-top: 50px;
            padding-top: 29px;
            font-size: 23px;
            display: inline-block;
            margin-left: 215px;
        }

        .block6_1 p {
            margin: 0;
        }

        .text66 {
            text-align: center;
            color: black;
            font-size: 40px;
        }

        .block7_1 {
            background-color: #1E4FFF;
            width: 600px;
            height: 90px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 40px;
            position: relative;
            border-radius: 14px;
        }

        .block7 {
            background-color: #1E4FFF;
            width: 600px;
            height: 90px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 30px;
            position: relative;
            border-radius: 14px;
        }

        .block7_1 p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .block7 p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .nazad {
            background-color: #868686;
            width: 400px;
            height: 90px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 30px;
            position: relative;
            border-radius: 14px;
        }

        .nazad p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .block6:active {
            background-color: #D9D9D9;
            color: black;
        }

        .block6_1:active {
            background-color: #D9D9D9;
            color: black;
        }

        .nazad:active {
            background-color: #1E4FFF;
            color: white;
        }

        .pod {
            background-color: #1E4FFF;
            width: 600px;
            height: 90px;
            color: white;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            margin-top: 30px;
            position: relative;
            border-radius: 14px;
        }

        .pod p {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 50%;
            height: 30%;
            margin: auto;
            font-size: 30px;
            text-decoration: none;
            color: white;
        }

        .pod:active {
            background-color: #577CFF;
        }
        #nat{
            width: 150px;
        }
        #0 {
            column-count: 3;
        }
    </style>
</head>
<body>
<div class="back">
    <div class="top"><p>Учебно-методическое управление</p></div>

    <form action="" method="GET">
        <input  type="radio" id="0" name="radio" value="0">
        <label for="0">Все сотрудники</label>
        <?php
        foreach($subdivisions as $el) { ?>
            <input type="radio" id="<?= $el->id ?>" name="radio" value="<?= $el->id ?>">
            <label for="<?= $el->id ?>"><?= $el->name ?></label>
        <?php } ?>
        <br><input class="btn btn-primary" type="submit">
    </form>

    <form action="" method="post" class="login-form" enctype="multipart/form-data">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/><br>
        <input class="input-group-text" id="data" name="data" type="text" placeholder="Поиск по ФИО"/>
            <p class="Error"><?= $message['data'][0] ?? ''; ?></p>
        <input name="type_post" type="hidden" value="search"/><br>
        <br><button id="nat" class="btn btn-warning" value="search">Найти</button>
    </form>

    <div class="block4">
        <p class="amount">Количество: <?php echo count($employees)?></p>
        <?php
        $all_emp[0] = 'Пусто';
        $all_pos[0] = 'Пусто';
        foreach ($positions as $pos)
        {
            $all_pos[] = $pos->name;
        }
        $all_sub[0] = 'Пусто';
        foreach ($subdivisions as $sub)
        {
            $all_sub[] = $sub->name;
        }
        foreach ($employees as $el)
        { ?>
            <div class="people">
                <img src="/public/img/<?= $el->photo ?>">
                <div class="text">
                    <p class="text1"><?php echo $el->first_name . ' ' . $el->name . ' ' . $el->second_name ?></p>
                    <p class="text2">Подразделение: <?php echo $all_sub[$el->id_subdivision] ?></p>
                    <p class="text2">Должность: <?php echo $all_pos[$el->id_position] ?></p>
                    <p class="text2">Пол: <?php echo $el->sex ?></p>
                    <p class="text2">Дата рождения: <?php echo $el->date ?></p>
                    <p class="text2">Адрес прописки: <?php echo $el->address ?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>