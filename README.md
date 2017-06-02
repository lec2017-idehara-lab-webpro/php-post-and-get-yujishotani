# PHP によるページ間の情報の送信

## 課題

hello.php、index.php を書き換え、index.php で入力した名前と学籍番号を、hello.php で画面に出力させなさい。

例：```29988777 の 多摩太郎さん、こんにちは```

## 送信側

FORM 中に入力用コントロールエレメントを記述する：

```
	<FORM ACTION="uri" METHOD="method">
		...
	</FORM>
```

uri : 	入力データの送信先。相対指定するのが普通
method : 	GET または POST

```<FORM>``` 中の入力コントロール
```<INPUT TYPE=type NAME=name VALUE=value>```
他に、```<TEXTAREA> <SELECT> <BUTTON>``` などがある。VALUE は省略可能

よく使われる type：
```text|password|radio|checkbox|hidden|submit|reset```
ボタン以外のコントロールの name と value のペアが送信される

例：　form.html
```
	<BODY>
		<H1>FORM テスト</H1>
		<FORM ACTION="get.php" METHOD="GET">
		<TABLE>
		<TR><TH>学籍番号</TH><TD><INPUT TYPE="TEXT" NAME="nr"></TD></TR>
		<TR><TH>　氏名　</TH><TD><INPUT TYPE="TEXT" NAME="name"></TD></TR>
		<TR><TH>　性別　</TH>
			<TD>
				<INPUT TYPE="radio" NAME="mf" value="M"> 男 <br>
				<INPUT TYPE="radio" NAME="mf" value="F"> 女
			</TD>
		</TR>
		<TR><TH>Password</TH><TD><INPUT TYPE="PASSWORD" NAME="pw"></TD></TR>
		</TABLE>
		<INPUT TYPE="submit" VALUE="送信する">
		</FORM>
	</BODY>
 ```

## PHP での変数の受け取り
フォームデータを送信された PHP ファイルでは、メソッドに応じて ```$_GET, $_POST``` 配列にデータが格納されている。各配列のキーが name に、値が value に相当する。isset 関数に複数の引数を渡すことで「すべての引数が定義されているかどうか」をチェックすることができる。

フォームデータから送信される GET/POST 配列には、値が入力されていない場合、「空文字列が入って定義されている」ので、「文字列長」でチェックする。

例：　get.php
```
<html>
<body>
<?php
	if( !isset($_GET['name'],$_GET['nr'],$_GET['mf'],$_GET['pw']) ||
		strlen($_GET['name']) == 0 ||
		strlen($_GET['nr']) == 0 ||
		strlen($_GET['mf']) == 0 ||
		strlen($_GET['pw']) == 0
	)
	{
		echo 'Missing Data';
	}
	else
	{
		foreach($_GET as $k => $v)
		{
			echo "$k is $v.";
			echo "<br>";
		}
		}
?>
</body>
</html>
``` 
