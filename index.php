<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ハゲ調.com</title>
</head>
<body>
<header>
  <nav class="nav">
    <div class="container">
      <div class="navbar">
      <a href="select.php">データ一覧</a>
      </div>
    </div>
  </nav>
</header>
<h1>ハゲの生活習慣調査</h1>
<p>調査結果を元に薄毛の原因を推測し、改善策をご提案いたします！</p>

<form action="insert.php" method="post">
    <div>基本情報
        <ul>
            <li>氏名：<input type = "text" name = "name"></li>
            <li>薄毛スコア：<input type = "number" name = "score" placeholder="1〜100の数字でご入力ください"></li>
            <a href="#">薄毛スコアはここでチェック！</a>
            <li>
                性別：
                <br><input type = "radio" name = "sex" value = "男">男
                <br><input type = "radio" name = "sex" value = "女">女
                <br><input type = "radio" name = "sex" value = "その他">その他
            </li>
            <li>年齢：<input type = "number" name = "age" placeholder="数字でご入力ください"></li>
            <li>身長(cm)：<input type = "number" name = "height" placeholder="数字でご入力ください"></li>
            <li>体重(kg)：<input type = "number" name = "weight" placeholder="数字でご入力ください"></li>
            <li>職業：<input type = "text" name = "job"></li>
            <li>mail：<input type = "text" name = "mail"></li>
        </ul>
    </div>

    <div>アンケート
        <ul>
            <li>直近３ヶ月の平均的な睡眠時間を教えてください
                <br><select name="sleep" id="">
                    <option value="3時間以下">3時間以下</option>
                    <option value="4時間">4時間</option>
                    <option value="5時間">5時間</option>
                    <option value="6時間">6時間</option>
                    <option value="7時間">7時間</option>
                    <option value="8h時間以上">8時間以上</option>
                </select>
            </li>
            <li>直近３ヶ月の会社（学生の方は学校）での状況として当てはまるものはどれですか？
                <br><select name="work_stress" id="">
                    <option value="つらい">つらい</option>
                    <option value="普通">普通</option>
                    <option value="充実">充実</option>
                </select>
            </li>
            <li>直近３ヶ月の家庭やプライベートの状況として当てはまるものはどれですか？
                <br><select name="other_stress" id="">
                    <option value="つらい">つらい</option>
                    <option value="普通">普通</option>
                    <option value="充実">充実</option>
                </select>
            </li>
            <li>つぎの食べもののうち好んで食べるものを全て選択してください<br>
                <input type = "checkbox" name = "food[]" value="からあげ">からあげ
                <input type = "checkbox" name = "food[]" value="ハンバーグ">ハンバーグ
                <input type = "checkbox" name = "food[]" value="ステーキ">ステーキ
                <input type = "checkbox" name = "food[]" value="焼肉">焼肉
                <input type = "checkbox" name = "food[]" value="ギョウザ">ギョウザ
                <input type = "checkbox" name = "food[]" value="ラーメン">ラーメン
                <input type = "checkbox" name = "food[]" value="天ぷら">天ぷら
                <br><input type = "checkbox" name = "food[]" value="なし">上記に好きな食べものはない
            </li>
        </ul>
    </div>

    <div>その他
        <ul>
            <li>マンツーマンの面談によるより専門的なアドバイスを希望しますか？：
                <br><input type = "radio" name = "meeting" value="はい">はい
                <br><input type = "radio" name = "meeting" value="いいえ">いいえ
            </li>
            <li>ハゲ調.comからのメルマガ配信を希望しますか？：
                <br><input type = "radio" name = "mailmaga" value="はい">はい
                <br><input type = "radio" name = "mailmaga" value="いいえ">いいえ
            </li>
        </ul>
    </div>
<input type="submit" value="送信">
</form>



</body>
</html>