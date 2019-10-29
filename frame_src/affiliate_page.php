<?php require
/*
 * Предполагаемая страница для привлечения партнёрского трафика
 */
$DB = @mysqli_connect('localhost', 'root', '', 'test') or die('Error connection with Database');
if (isset($_GET['partnerID'])) {
    $partnerID = $_GET['partnerID'];
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>Ваш шедевр готов!</title>
        <script src="apps.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Ваш шедевр готов!</h1>
            <p><?=$partnerID?></p>
            <div class="row">
                <div class="col-md-8">
                    <p>Разнообразный и богатый опыт реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Товарищи! сложившаяся структура организации требуют от нас анализа соответствующий условий активизации. Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации систем массового участия. Равным образом постоянный количественный рост и сфера нашей активности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Таким образом укрепление и развитие структуры требуют от нас анализа форм развития. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке дальнейших направлений развития.</p>

                    <p>С другой стороны реализация намеченных плановых заданий способствует подготовки и реализации систем массового участия. Равным образом дальнейшее развитие различных форм деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Равным образом дальнейшее развитие различных форм деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке модели развития. Идейные соображения высшего порядка, а также сложившаяся структура организации позволяет оценить значение систем массового участия.</p>                    
                </div>
                <div class="col-md-4">

                    <form action="" method="POST">
                        <input name="name" type="text" class="form-control mt-2 mb-2" placeholder="Your Name">
                        <input name="email" type="text" class="form-control mt-2 mb-2" placeholder="Your Email">
                        <button name="subscribe" class="btn btn-danger btn-lg text-uppercase">Submit</button>
                    </form>

                    <?php
                    if (isset($_POST['subscribe'])) {
                        

                        $subs = [
                            'leadName' => htmlspecialchars($_POST['name']),
                            'leadEmail' => htmlspecialchars($_POST['email']),
                            'partnerID' => $partnerID
                        ];
                        $sql = mysqli_query($DB, "INSERT INTO subscribers(name, email, partnerID) VALUES ('{$subs['leadName']}', '{$subs['leadEmail']}', '{$partnerID}')");
                    }
                    ?>
                </div>

            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>

