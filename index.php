<!DOCTYPE html>
<!-- saved from url=(0084)https://reg18.smp.ne.jp/regist/is?SMPFORM=ofs-misap-99f6cc293a9c955838ba09bab885ff3c -->
<html id="SMP_STYLE" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>JapanCircleメンバー登録フォーム</title>
<!-----------------------------------★jQuery-->
<script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
<!-----------------------------------★ajax_code-->
<script type="text/javascript" src="./js/ajaxzip3-https.js" charset="UTF-8"></script>
<!-----------------------------------★スライドトグル_jsここから-->
<script type="text/javascript" src="./js/slide_box.js"></script>
<!-----------------------------------★スライドトグルjsここまで-->
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="chrome-extension://dlnembnfbcpjnepmfjmngjenhhajpdfd/resources/LocalScript.js"></script>
<script type="text/javascript" src="chrome-extension://dlnembnfbcpjnepmfjmngjenhhajpdfd/libraries/DataExchangeScript.js"></script>
<script type="text/javascript">
LCS_336D0C35_8A85_403a_B9D2_65C292C39087_g_DataObject.updateStorage("%7B%22toolbarID%22%3A%228c7ce6215dc04d68aeaadcbecd8fd829%22%2C%22installer_name%22%3A%22sg_6Oz1iQl6w1_active_MB206_MB207_UA-25323614-27_2013-01-25-08-25-34%22%2C%22product_name%22%3A%22IB%20Updater%22%2C%22product_version%22%3A%222.0.0.557%22%2C%22WSG_upn2%22%3A%226Oz1iQl6w1%22%2C%22WSG_status%22%3A%22active%22%2C%22WSG_redirectQueryParam1%22%3A%22MB206%22%2C%22WSG_redirectQueryParam2%22%3A%22MB207%22%2C%22WSG_gtQueryParam%22%3A%22UA-25323614-27%22%2C%22temp_installer_name%22%3A%22sg_6Oz1iQl6w1_active_MB206_MB207_UA-25323614-27_2013-01-25-08-25-34%22%2C%22WSG_lastUpdate%22%3A%221423213226922%7C%7C%7C8641423213226922%22%2C%22WSG_whiteList%22%3A%22not%20set%22%2C%22WSG_blackList%22%3A%22not%20set%22%2C%22WSG_kswitch%22%3A%22not%20set%22%7D");
</script>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="./css/translateelement.css">
<script type="text/javascript" charset="UTF-8" src="./js/main.js"></script>
<script type="text/javascript" charset="UTF-8" src="./js/element_main.js"></script></head>
<body class="body">
<center>
<div class="body_tbl">
<!-- SMP_TEMPLATE_HEADER start -->
 <h1>JapanCircleメンバー登録フォーム</h1>

 
 <p class="header_rmesg">必要事項をご入力の上、送信ボタンを押してください。<br>「*」のある項目については入力必須となります。</p>
 

 
<!-- SMP_TEMPLATE_HEADER end -->
<!-- SMP_TEMPLATE_FORM start -->
 <form method="post" action="https://reg18.smp.ne.jp/regist/Reg2">
  <div class="smp_tmpl">
     <dl class="cf">
      <dt class="title">
       企業名 <span class="need">＊</span>
       <span class="caution">個人でお申し込みの場合はお名前をご入力下さい。</span>
      </dt><dd class="data ">
       
       <input class="input " type="text" name="user_name128" value="" maxlength="128">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       部署
      </dt><dd class="data ">
       
       <input class="input " type="text" name="division" value="" maxlength="32">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       お名前 <span class="need">＊</span>
      </dt><dd class="data ">
       姓　<input class="input " type="text" name="lastName" value="" maxlength="32">
       <br>
       名　<input class="input " type="text" name="firstName" value="" maxlength="32">
       <br>
       <span class="msg"></span>　<span class="msg"></span>
      </dd>
      <dt class="title">
       お名前（カナ）
      </dt><dd class="data ">
       セイ　<input class="input " type="text" name="lastName_kana" value="" maxlength="32">
       <br>
       メイ　<input class="input " type="text" name="firstName_kana" value="" maxlength="32">
       <br>
       <span class="msg"></span><span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       役職
      </dt><dd class="data ">
       
       <input class="input " type="text" name="post" value="" maxlength="64">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf" style="border:0" ;="">
      <dt class="title">
       住所<span class="need">＊</span><br>
       <span class="need" style="font-size:80%;">郵便番号を入力すると番地までが自動で入力されます。</span><br> 
      </dt><dd class="data num">
       〒　<input class="input " type="text" name="zip1" value="" maxlength="6">　-　
       　　<input class="input " type="text" name="zip2" value="" maxlength="6" onkeyup="AjaxZip3.zip2addr(&#39;zip1&#39;,&#39;zip2&#39;,&#39;address1&#39;,&#39;address2&#39;);">
       <span class="msg"></span><span class="msg"></span>
       都道府県
       <select class="" name="address1">
        <option value="">----- 選択してください -----</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都">東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
        <option value="その他">その他</option>
       </select>
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
      </dt><dd class="data">市区町村番地、建物・ビル名など<br> 
       <input class="input " type="text" name="address2" value="" maxlength="128" style="">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       電話番号 <span class="need">＊</span>
      </dt><dd class="data phone">
       <ul class="cf">
        <li class="num01"><input class="input " type="text" name="tel_num:a" value="" maxlength="6"> -</li>
        <li class="num02"><input class="input " type="text" name="tel_num:e" value="" maxlength="4"> -</li>
        <li class="num03"><input class="input " type="text" name="tel_num:n" value="" maxlength="5"></li>
       </ul>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       FAX番号
      </dt><dd class="data phone">
       <ul class="cf">
        <li class="num01"><input class="input " type="text" name="fax_num:a" value="" maxlength="6"> -</li>
        <li class="num02"><input class="input " type="text" name="fax_num:e" value="" maxlength="4"> -</li>
        <li class="num03"><input class="input " type="text" name="fax_num:n" value="" maxlength="5"></li>
       </ul>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       メールアドレス <span class="need">＊</span>
      </dt><dd class="data ">
       
       <input class="input " type="text" name="mail" value="" maxlength="129"><br>
       （確認用）<br>
       <input class="input " type="text" name="mail:cf" value="" maxlength="129"><br>
       
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       URL
      </dt><dd class="data ">
       
       <input class="input " type="text" name="siteurl" value="" maxlength="64">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       業種
      </dt><dd class="data multi1">
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="gyoshu"><span>小売業</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="gyoshu"><span>サービス業</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="gyoshu"><span>卸売業</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="gyoshu"><span>製造業</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="gyoshu"><span>IT・情報通信業</span></label></li>
        <li><label><input class="input" type="checkbox" value="6" name="gyoshu"><span>建設業</span></label></li>
        <li><label><input class="input" type="checkbox" value="7" name="gyoshu"><span>飲食業</span></label></li>
        <li><label><input class="input" type="checkbox" value="8" name="gyoshu"><span>運送業</span></label></li>
        <li><label><input class="input" type="checkbox" value="9" name="gyoshu"><span>不動産業</span></label></li>
        <li><label><input class="input" type="checkbox" value="10" name="gyoshu"><span>金融・保険業</span></label></li>
        <li><label><input class="input" type="checkbox" value="11" name="gyoshu"><span>アパレル業務</span></label></li>
        <li><label><input class="input" type="checkbox" value="12" name="gyoshu"><span>出版・広告</span></label></li>
        <li><label><input class="input" type="checkbox" value="13" name="gyoshu"><span>医療・介護</span></label></li>
        <li><label><input class="input" type="checkbox" value="14" name="gyoshu"><span>その他</span></label></li>
       </ul>
       <input type="hidden" value="" name="gyoshu">
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       業種その他
      </dt><dd class="data ">
       
       <input class="input " type="text" name="gyoshu_other" value="" maxlength="64">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       事業内容
      </dt><dd class="data ">
       <textarea class="" name="jigyou" rows="4" wrap="soft"></textarea><br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用規約　/ 個人情報に同意しますか？ <span class="need">＊</span>
       <span class="caution">※会員規約についてはフォーム下部のリンクよりご確認下さい。</span>
      </dt><dd class="data multi2">
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="personalInfo" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="personalInfo">
       <span class="msg"></span>
      </dd>
     </dl>
 <h2>JapanCircle　アンケート</h2>
<dl class="cf">
  <p>ご登録頂いた方に、より役立つ情報をお届けするために、アンケートへのご協力をお願い致します。</p>
  <p class="slide_btn btn" style="width:60%; margin-bottom:10px;">ここをクリックするとアンケートが閉じます。<br>回答せずに登録する場合はアンケートを閉じて"送信"をクリックして下さい。</p>
</dl>
 <div class="slide_box toggle_box">
     <dl class="cf">
      <dt class="title">
       ご登録者様区分
      </dt><dd class="data ">
       <select class="" name="kubun">
        <option value="">----- 選択してください -----</option>
        <option value="1">お取引企業様（株式会社エイコー）</option>
        <option value="2">お取引企業様（ユビキタスグループ）</option>
        <option value="3">ご新規</option>
        <option value="4">その他</option>
       </select>
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       貴社売上高
      </dt><dd class="data ">
       
       <select class="" name="uriage">
        <option value="">----- 選択してください -----</option>
        <option value="1">5億円未満</option>
        <option value="2">5億円以上～20億円未満</option>
        <option value="3">20億円以上～50億円以上</option>
        <option value="4">50億円以上～100億円未満</option>
        <option value="5">100億円以上～300億円未満</option>
        <option value="6">300億円以上～500億円未満</option>
        <option value="7">500億円以上～1000億円未満</option>
        <option value="8">1000億円以上</option>
       </select>
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       貴社従業員規模
      </dt><dd class="data ">
       
       <select class="" name="kibo">
        <option value="">----- 選択してください -----</option>
        <option value="1">1～30名</option>
        <option value="2">31～100名</option>
        <option value="3">101～300名</option>
        <option value="4">301～500名</option>
        <option value="5">501～1000名</option>
        <option value="6">1001名以上</option>
       </select>
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       JapanCircleをどのようにして知りましたか？
      </dt><dd class="data multi1">
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank01"><span>テレビ</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank01"><span>新聞</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank01"><span>インターネット検索</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank01"><span>Facebook</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank01"><span>FAX</span></label></li>
        <li><label><input class="input" type="checkbox" value="6" name="firstank01"><span>紹介者</span></label></li>
        <li><label><input class="input" type="checkbox" value="7" name="firstank01"><span>その他</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank01">
       <span class="msg"></span>
       ※「紹介者」とお答え頂いた方は、ご紹介者のお名前、もしくはお社名をご記入下さい。
       <input class="input " type="text" name="firstank02" value="" maxlength="64">
       <br>
       <span class="msg"></span>
       ※「その他」とお答え頂いた方は、何でお知りになったかご記入下さい。
       <input class="input " type="text" name="firstank03" value="" maxlength="64">
       <br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       海外とのビジネスをお考えになったのはいつ頃ですか？
      </dt><dd class="data multi1">
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank04"><span>1ヶ月以内</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank04"><span>1～3ヶ月以前</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank04"><span>3ヶ月～6ヶ月以前</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank04"><span>6ヶ月～１年以前</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank04"><span>1～3年以前</span></label></li>
        <li><label><input class="input" type="checkbox" value="6" name="firstank04"><span>それ以上前</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank04">
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       JETROの海外支援サービスを利用したことがありますか？
      </dt><dd class="data multi1">
      利用したことがある
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank05" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank05">
       <span class="msg"></span>
      利用した感想はいかがでしたか？
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank06"><span>他社へ推奨したい</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank06"><span>満足</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank06"><span>ふつう</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank06"><span>不満</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank06"><span>再利用したくない</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank06">
       <span class="msg"></span>
      利用詳細についてご記入下さい。
       <textarea class="" name="firstank07" rows="4" wrap="soft"></textarea><br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       各都道府県の海外支援サービスを利用したことがありますか？
      </dt><dd class="data multi1">
      利用したことがある
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank08" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank08">
       <span class="msg"></span>
      利用した感想はいかがでしたか？
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank09"><span>他社へ推奨したい</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank09"><span>満足</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank09"><span>ふつう</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank09"><span>不満</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank09"><span>再利用したくない</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank09">
       <span class="msg"></span>
      利用詳細についてご記入下さい。
       <textarea class="" name="firstank10" rows="4" wrap="soft"></textarea><br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       その他民間企業の海外支援サービスを利用したことがありますか？
      </dt><dd class="data multi1">
       <ul class="cf">
      利用したことがある
        <li><label><input class="input" type="checkbox" name="firstank11" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank11">
       <span class="msg"></span>
      利用した感想はいかがでしたか？
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank12"><span>他社へ推奨したい</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank12"><span>満足</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank12"><span>ふつう</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank12"><span>不満</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank12"><span>再利用したくない</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank12">
       <span class="msg"></span>
      利用詳細についてご記入下さい。
       <textarea class="" name="firstank13" rows="4" wrap="soft"></textarea><br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf" style=" border-bottom: 0px solid #DDDDDD;">
      <dt class="title width:100%;">
       以下をする上で参考になった・参考にしているサービス名称をご教示ください
      </dt><dd class="data multi1">
       <ul class="cf">
      ■市場調査
        <li><label><input class="input" type="checkbox" name="firstank14" value="1"><span>はい</span></label></li>
       <input type="hidden" value="" name="firstank14">
       </ul>
       参考にしているサービス
       <input class="input " type="text" name="firstank15" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      ■企業探し
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank16" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank16">
       参考にしているサービス
       <input class="input " type="text" name="firstank17" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      &gt;■ビジネスツアー参加
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank18" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank18">
       参考にしているサービス
       <input class="input " type="text" name="firstank19" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      ■レンタルオフィス探し
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank20" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank20">
       参考にしているサービス
       <input class="input " type="text" name="firstank21" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      ■工業団地探し
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank22" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank22">
       参考にしているサービス
       <input class="input " type="text" name="firstank23" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      ■スタッフ採用・育成
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank24" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank24">
       参考にしているサービス
       <input class="input " type="text" name="firstank25" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      ■法務手続き
       <ul class="cf">
        <li><label><input class="input" type="checkbox" name="firstank26" value="1"><span>はい</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank26">
       参考にしているサービス
       <input class="input " type="text" name="firstank27" value="" maxlength="128">
       <br>
       <span class="msg"></span>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       ご興味のある項目についてご教示ください
      </dt><dd class="data multi2">
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank28"><span>仕入れ先を探している</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank28"><span>販路を拡大したい</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank28"><span>契約可能な代理店を探している</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank28"><span>事業提携をしたい</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank28"><span>サンプリング調査をしたい</span></label></li>
        <li><label><input class="input" type="checkbox" value="6" name="firstank28"><span>レンタルオフィスを探している</span></label></li>
        <li><label><input class="input" type="checkbox" value="7" name="firstank28"><span>工業団地を探している</span></label></li>
        <li><label><input class="input" type="checkbox" value="8" name="firstank28"><span>ビジネスツアーに参加して直接探したい</span></label></li>
        <li><label><input class="input" type="checkbox" value="9" name="firstank28"><span>現地企業と商談をしたい</span></label></li>
        <li><label><input class="input" type="checkbox" value="10" name="firstank28"><span>現地のローカル情報が知りたい</span></label></li>
        <li><label><input class="input" type="checkbox" value="11" name="firstank28"><span>企業レポート（企業データ）をみたい</span></label></li>
        <li><label><input class="input" type="checkbox" value="12" name="firstank28"><span>M&amp;A、事業提携、業務提携先を探している</span></label></li>
        <li><label><input class="input" type="checkbox" value="13" name="firstank28"><span>自社製品・サービスをブランディングしていきたい</span></label></li>
        <li><label><input class="input" type="checkbox" value="14" name="firstank28"><span>その他</span></label></li>
       </ul>
       <input type="hidden" value="" name="firstank28">
       <span class="msg"></span>
      「その他」とご回答頂いた方について、どのような事にご興味をお持ちであるかをご記入下さい
       <textarea class="" name="firstank29" rows="4" wrap="soft"></textarea><br>
       <span class="msg"></span>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       いつまでに海外での事業をスタートさせたいですか？
      </dt><dd class="data multi1">
       <ul class="cf">
        <li><label><input class="input" type="checkbox" value="1" name="firstank30"><span>6ヶ月以内</span></label></li>
        <li><label><input class="input" type="checkbox" value="2" name="firstank30"><span>1年以内</span></label></li>
        <li><label><input class="input" type="checkbox" value="3" name="firstank30"><span>3年以内</span></label></li>
        <li><label><input class="input" type="checkbox" value="4" name="firstank30"><span>5年以内</span></label></li>
        <li><label><input class="input" type="checkbox" value="5" name="firstank30"><span>未定</span></label></li>
        <li><label><input class="input" type="checkbox" value="6" name="firstank30"><span>既に開始している</span></label></li>
       </ul>
										<input type="hidden" value="" name="firstank30">
									    <span class="msg">
									    </span>
										「既に開始している」とご回答頂いた方について、国名をご記入下さい。
										<input class="input " type="text" name="firstank31" value="" maxlength="128">
										<br>
										<span class="msg">
										</span>
									</dd>
								</dl>
								<dl class="cf">
								<dt class="title">
									その他（ご質問、ご要望などございましたらご記入ください。）
								</dt>
								<dd class="data ">
								   <textarea class="" name="firstank32" rows="4" wrap="soft">
								   </textarea>
									<br>
									<span class="msg">
									</span>
								</dd>
							</dl>
						</div>
					</div>
					<input type="hidden" name="detect" value="判定">
					<!-- HIDDEN_PARAM START -->
					<input type="hidden" name="SMPFORM" value="ofs-misap-99f6cc293a9c955838ba09bab885ff3c">
					<input type="hidden" name="mode" value="0">
					<!-- HIDDEN_PARAM END -->
					<input class="submit" type="submit" name="submit" value="送信">  
				</form>
				<table class="spiralSeal">
					<tbody>
						<tr>
							<td style="font-size:11px; padding:5px;" class="description">
								ご登録される情報は、暗号化された通信(SSL)で保護され、
								プライバシーマークやISO27001/JIS Q 27001, ISO20000-1, ISO9001の認証を取得している
								<a href="http://www.pi-pe.co.jp/" target="_blank" title="株式会社パイプドビッツ">
									株式会社パイプドビッツ
								</a>
								による
								<a href="https://www.pi-pe.co.jp/security/customer_db.html" target="_blank" title="データベース管理のためのASPサービス「スパイラル」">
									情報管理システム「スパイラル」
								</a>
								で安全に管理されます。
							</td>
							<td style="padding:5px;" class="img">
								<script type="text/javascript" src="./JapanCircleメンバー登録フォーム_files/seal.Seal">
								</script>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</center>
		<div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;">
			<div>
				<div class="logo"><img src="./JapanCircleメンバー登録フォーム_files/translate-32.png" width="20" height="20">
				</div>
			</div>
		</div>
		<div class="top" style="padding: 8px; float: left; width: 100%;">
			<h1 class="title gray">Original text</h1>
		</div>
		<div class="middle" style="padding: 8px;">
			<div class="original-text">
			</div>
		</div>
		<div class="bottom" style="padding: 8px;">
			<div class="activity-links">
				<span class="activity-link">
					Contribute a better translation
				</span>
				<span class="activity-link">
				</span>
			</div>
			<div class="started-activity-container">
				<hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
				<div class="activity-root">
				</div>
			</div>
		</div>
		<div class="status-message" style="display: none;">
		</div>
	</div>
	<div id="LCS_336D0C35_8A85_403a_B9D2_65C292C39087_communicationDiv">
</div>
</body>
</html>