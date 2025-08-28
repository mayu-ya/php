<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a href="/php02/index.php" class="header_logo">
                World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="search-form_content">
            <div class="search-form_heading">
                <h2 class="seaech-form_content-title">日本と世界の時間を比較</h2>
            </div>
        </div>
        <form  class="search-form" action="result.php" method="get">
            <div class="search-form_item">
                <select name="city" class="search-form_item-select">
                    <option value="シドニ－">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
            </div>
            <div class="seach-form_button">
                <button class="seach-form_button-submit" type="submit">検索</button>
            </div>
        </form>
    </main>
</body>
</html>