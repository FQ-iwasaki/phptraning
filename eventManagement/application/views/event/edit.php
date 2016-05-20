<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>イベント編集</title>
  <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="../../../js/bootstrap.min.js"></script>
</head>
<body>

 <div class="btn-group btn-group-justified">
    	<a class="btn btn-default">EventManager</a>
        <a class="btn btn-primary">本日のイベント</a>
        <a class="btn btn-success">イベント管理</a>
        <a class="btn btn-info">ユーザー管理</a>
        <a class="btn btn-warning">
        <select name="login" color="black">
		<option>ログイン者</option>
		<option>ログアウト</option>
		</select>
		</a>
    </div>



<!-- name値 value値 未設定-->
   <div class="col-md-9">
            <!-- form custom style -->
      <h1><strong>イベント編集</strong></h1>

      <form method="post" action="">
                <div class="form-group">
                    <label>タイトル(必須)</label>
                    <input type="text" name="" class="form-control" placeholder="必須">
                </div>

                <div class="form-group">
                    <label>開始日時(必須)</label>
                    <input type="text" name="" class="form-control" placeholder="必須">
                </div>

                <div class="form-group">
                    <label>終了日時</label>
                    <input type="text" name="" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>場所(必須)</label>
                    <input type="text" name="" class="form-control" placeholder="必須">
                </div>

                <!-- value値未設定 -->
                <div class="form-group">
                    <label>対象グループ</label>
                    <select name="" class="form-control">
                        <option value="">技術部</option>
                        <option value="">総務部</option>
                        <option value="">営業部</option>
                        <option value="">技術部</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>詳細</label>
                    <textarea class="form-control" rows=3 placeholder="100文字まで。"></textarea>
                </div>

                <button type="submit" class="btn btn-default">キャンセル</button>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
</body>
</html>
