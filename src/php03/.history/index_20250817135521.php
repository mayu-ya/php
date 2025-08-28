<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);

foreach($random_numbers as $index){
$options[] = $status_codes[$index];
}
$question = $options[mt_rand(0, 3)];
echo ('<pre>');
var_dump($question);
echo ('</pre>');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<header class="header">
    <div class="header_inner">
        <a href="/php03" class="header_logo">
            Status Code Quiz
        </a>
    </div>
</header>

<main>
    <div class="quiz_content">
        <div class="question">
            <p class="question_text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
            <p class="question_text"></p>
        </div>
        <form action="result.css" method="post" class="quiz-form">
            <input type="hidden" name="answer_code" value="">
            <div class="quiz-form_item">
                <div class="quiz-form_group">
                    <input type="radio" id="" name="option" value="" class="quiz-form_radio">
                    <label for="" class="quiz-form_label">
                    </label>
                </div>
            </div>
            <div class="quiz-form_button">
                <button class="quiz-form_button-submt" type="submit">
                    回答
                </button>
            </div>
        </form>
    </div>
</main>
</body>
</html>