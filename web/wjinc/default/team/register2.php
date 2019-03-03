<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<title>
<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>
</title>
<link href="/css/dialogUI2.css?v=20161121" media="all" type="text/css" rel="stylesheet">
</head>
<body youdao="bind">
<div class="blockUI" id="JS_blockUI" style="z-index:2000;"></div>
<div class="blockOverlay" id="JS_blockOverlay" style="z-index: 2001; opacity: 0.5; position: fixed; display: block; background-color: rgb(0, 0, 0);"></div>
<div class="blockMsg" id="JS_blockPage" style="z-index: 2002; position: fixed; display: block;">
  <h3 class="title">提示</h3>
  <div id="block_content" class="content">
    <div class="detail">注册链接已失效!</div>
  </div>
  <div id="block_bottom" class="bottom">
    <input type="button" value="点此继续注册" id="alert_close_button" class="submit" onClick="location.href='/user/register/'">
  </div>
</div>
</body>
</html>