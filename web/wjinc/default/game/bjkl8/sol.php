
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Welcome</title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/static/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/static/css/balls.css" rel="stylesheet" type="text/css" /> 
</head>
<body class="iframe-body">
<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript"> 
	var staticFileUrl = parent.getStaticDomain();
// 	var lunarDate = parent.lunarDate;
	var animalsYear = parent.animalsYear;
	var sysServerDate = parent.sysServerDate;
	var defaultSkin = parent.defaultSkin;
	var sysTrialGamePro = parent.sysTrialGamePro;
	var gameMap = parent.gameMap;
	var games = parent.games;
	var layer = parent.layer;
	parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript"> 
$.ajaxSetup ({
	cache: false //close AJAX cache
});
</script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js" async="async"></script>

<!--main-->
<div class="main clearfix">
	<div class="content">
		<div class="sub-wrap clearfix">
			<!--cont-main-->
			<div class="cont-main">
			
			
		    
  <div id="subpage"> 
   <div class="cont-col3"> 
                   <table class="u-table2 play_tab_1">
			      <thead> 
			        <th align="left" style="padding-left: 20px;border-right: none;">
			        	<span id="page_game_name"></span>&nbsp;&nbsp;-&nbsp;&nbsp;<span id="page_name">两面盘</span>
			        	<span>
			        	&nbsp;&nbsp
			        	当前彩种输赢：
			        	</span>
			        	<span id="total_sum_money" style="color: red;">0</span>
			        </th>
			        <th align="right" style="padding-right:20px; color:#fff; font-size:14px;font-weight:normal; border-left: none;">
			        	<span class="c-txt2" id="next_turn_num"></span>&nbsp;期
			        	距离封盘：<span class="c-txt1" id="bet-date">00:00</span>
			        	距离开奖：<span class="c-txt1" id="open-date">00:00</span>
			        </th>  
			      </thead> 
			     </table> 
    	<div class="cont-col3-hd clearfix"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
     <div class="cont-col3-box2"> 
<!--       <label> <input type="checkbox" class="u-cb1" /> 预设 </label>  -->
      	金额 
      <input id="bet_money1" type="text" class="bet-money" /> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div> 
    </div> 
     
    <div class="cont-col3-bd" id="bet_tab"> 
       <table class="u-table2 play_tab_26 table_ball"> 
        <thead> 
         <tr> 
          <th colspan="12">正码</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_652601" class="name"><b class="b01">01</b></td> 
          <td id="play_odds_652601" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652601" class="amount"><input type="text" /></td>
          
          <td id="play_name_652621" class="name"><b class="b21">21</b></td> 
          <td id="play_odds_652621" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652621" class="amount"><input type="text" /></td>
          
          <td id="play_name_652641" class="name"><b class="b41">41</b></td> 
          <td id="play_odds_652641" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652641" class="amount"><input type="text" /></td>
          
          <td id="play_name_652661" class="name"><b class="b61">61</b></td> 
          <td id="play_odds_652661" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652661" class="amount"><input type="text" /></td>
         </tr>
         <tr>
          <td id="play_name_652602" class="name"><b class="b02">02</b></td> 
          <td id="play_odds_652602" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652602" class="amount"><input type="text" /></td>
          
          <td id="play_name_652622" class="name"><b class="b22">22</b></td> 
          <td id="play_odds_652622" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652622" class="amount"><input type="text" /></td>
          
          <td id="play_name_652642" class="name"><b class="b42">42</b></td> 
          <td id="play_odds_652642" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652642" class="amount"><input type="text" /></td>
          
          <td id="play_name_652662" class="name"><b class="b62">62</b></td> 
          <td id="play_odds_652662" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652662" class="amount"><input type="text" /></td>
         </tr>
         <tr> 
          <td id="play_name_652603" class="name"><b class="b03">03</b></td> 
          <td id="play_odds_652603" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652603" class="amount"><input type="text" /></td>
          
          <td id="play_name_652623" class="name"><b class="b23">23</b></td> 
          <td id="play_odds_652623" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652623" class="amount"><input type="text" /></td>
          
          <td id="play_name_652643" class="name"><b class="b43">43</b></td> 
          <td id="play_odds_652643" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652643" class="amount"><input type="text" /></td>
          
          <td id="play_name_652663" class="name"><b class="b63">63</b></td> 
          <td id="play_odds_652663" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652663" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652604" class="name"><b class="b04">04</b></td> 
          <td id="play_odds_652604" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652604" class="amount"><input type="text" /></td>
          
          <td id="play_name_652624" class="name"><b class="b24">24</b></td> 
          <td id="play_odds_652624" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652624" class="amount"><input type="text" /></td>
          
          <td id="play_name_652644" class="name"><b class="b44">44</b></td> 
          <td id="play_odds_652644" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652644" class="amount"><input type="text" /></td>
          
          <td id="play_name_652664" class="name"><b class="b64">64</b></td> 
          <td id="play_odds_652664" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652664" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652605" class="name"><b class="b05">05</b></td> 
          <td id="play_odds_652605" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652605" class="amount"><input type="text" /></td>
          
          <td id="play_name_652625" class="name"><b class="b25">25</b></td> 
          <td id="play_odds_652625" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652625" class="amount"><input type="text" /></td>
          
          <td id="play_name_652645" class="name"><b class="b45">45</b></td> 
          <td id="play_odds_652645" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652645" class="amount"><input type="text" /></td>
          
          <td id="play_name_652665" class="name"><b class="b65">65</b></td> 
          <td id="play_odds_652665" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652665" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652606" class="name"><b class="b06">06</b></td> 
          <td id="play_odds_652606" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652606" class="amount"><input type="text" /></td>
          
          <td id="play_name_652626" class="name"><b class="b26">26</b></td> 
          <td id="play_odds_652626" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652626" class="amount"><input type="text" /></td>
          
          <td id="play_name_652646" class="name"><b class="b46">46</b></td> 
          <td id="play_odds_652646" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652646" class="amount"><input type="text" /></td>
          
          <td id="play_name_652666" class="name"><b class="b66">66</b></td> 
          <td id="play_odds_652666" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652666" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652607" class="name"><b class="b07">07</b></td> 
          <td id="play_odds_652607" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652607" class="amount"><input type="text" /></td>
          
          <td id="play_name_652627" class="name"><b class="b27">27</b></td> 
          <td id="play_odds_652627" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652627" class="amount"><input type="text" /></td>
          
          <td id="play_name_652647" class="name"><b class="b47">47</b></td> 
          <td id="play_odds_652647" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652647" class="amount"><input type="text" /></td>
          
          <td id="play_name_652667" class="name"><b class="b67">67</b></td> 
          <td id="play_odds_652667" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652667" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652608" class="name"><b class="b08">08</b></td> 
          <td id="play_odds_652608" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652608" class="amount"><input type="text" /></td>
          
          <td id="play_name_652628" class="name"><b class="b28">28</b></td> 
          <td id="play_odds_652628" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652628" class="amount"><input type="text" /></td>
          
          <td id="play_name_652648" class="name"><b class="b48">48</b></td> 
          <td id="play_odds_652648" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652648" class="amount"><input type="text" /></td>
          
          <td id="play_name_652668" class="name"><b class="b68">68</b></td> 
          <td id="play_odds_652668" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652668" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652609" class="name"><b class="b09">09</b></td> 
          <td id="play_odds_652609" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652609" class="amount"><input type="text" /></td>
          
          <td id="play_name_652629" class="name"><b class="b29">29</b></td> 
          <td id="play_odds_652629" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652629" class="amount"><input type="text" /></td>
          
          <td id="play_name_652649" class="name"><b class="b49">49</b></td> 
          <td id="play_odds_652649" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652649" class="amount"><input type="text" /></td>
          
          <td id="play_name_652669" class="name"><b class="b69">69</b></td> 
          <td id="play_odds_652669" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652669" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652610" class="name"><b class="b10">10</b></td> 
          <td id="play_odds_652610" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652610" class="amount"><input type="text" /></td>
          
          <td id="play_name_652630" class="name"><b class="b30">30</b></td> 
          <td id="play_odds_652630" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652630" class="amount"><input type="text" /></td>
          
          <td id="play_name_652650" class="name"><b class="b50">50</b></td> 
          <td id="play_odds_652650" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652650" class="amount"><input type="text" /></td>
          
          <td id="play_name_652670" class="name"><b class="b70">70</b></td> 
          <td id="play_odds_652670" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652670" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652611" class="name"><b class="b11">11</b></td> 
          <td id="play_odds_652611" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652611" class="amount"><input type="text" /></td>
          
          <td id="play_name_652631" class="name"><b class="b31">31</b></td> 
          <td id="play_odds_652631" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652631" class="amount"><input type="text" /></td>
          
          <td id="play_name_652651" class="name"><b class="b51">51</b></td> 
          <td id="play_odds_652651" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652651" class="amount"><input type="text" /></td>
          
          <td id="play_name_652671" class="name"><b class="b71">71</b></td> 
          <td id="play_odds_652671" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652671" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652612" class="name"><b class="b12">12</b></td> 
          <td id="play_odds_652612" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652612" class="amount"><input type="text" /></td>
          
          <td id="play_name_652632" class="name"><b class="b32">32</b></td> 
          <td id="play_odds_652632" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652632" class="amount"><input type="text" /></td>
          
          <td id="play_name_652652" class="name"><b class="b52">52</b></td> 
          <td id="play_odds_652652" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652652" class="amount"><input type="text" /></td>
          
          <td id="play_name_652672" class="name"><b class="b72">72</b></td> 
          <td id="play_odds_652672" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652672" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652613" class="name"><b class="b13">13</b></td> 
          <td id="play_odds_652613" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652613" class="amount"><input type="text" /></td>
          
          <td id="play_name_652633" class="name"><b class="b33">33</b></td> 
          <td id="play_odds_652633" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652633" class="amount"><input type="text" /></td>
          
          <td id="play_name_652653" class="name"><b class="b53">53</b></td> 
          <td id="play_odds_652653" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652653" class="amount"><input type="text" /></td>
          
          <td id="play_name_652673" class="name"><b class="b73">73</b></td> 
          <td id="play_odds_652673" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652673" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652614" class="name"><b class="b14">14</b></td> 
          <td id="play_odds_652614" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652614" class="amount"><input type="text" /></td>
          
          <td id="play_name_652634" class="name"><b class="b34">34</b></td> 
          <td id="play_odds_652634" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652634" class="amount"><input type="text" /></td>
          
          <td id="play_name_652654" class="name"><b class="b54">54</b></td> 
          <td id="play_odds_652654" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652654" class="amount"><input type="text" /></td>
          
          <td id="play_name_652674" class="name"><b class="b74">74</b></td> 
          <td id="play_odds_652674" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652674" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652615" class="name"><b class="b15">15</b></td> 
          <td id="play_odds_652615" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652615" class="amount"><input type="text" /></td>
          
          <td id="play_name_652635" class="name"><b class="b35">35</b></td> 
          <td id="play_odds_652635" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652635" class="amount"><input type="text" /></td>
          
          <td id="play_name_652655" class="name"><b class="b55">55</b></td> 
          <td id="play_odds_652655" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652655" class="amount"><input type="text" /></td>
          
          <td id="play_name_652675" class="name"><b class="b75">75</b></td> 
          <td id="play_odds_652675" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652675" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652616" class="name"><b class="b16">16</b></td> 
          <td id="play_odds_652616" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652616" class="amount"><input type="text" /></td>
          
          <td id="play_name_652636" class="name"><b class="b36">36</b></td> 
          <td id="play_odds_652636" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652636" class="amount"><input type="text" /></td>
          
          <td id="play_name_652656" class="name"><b class="b56">56</b></td> 
          <td id="play_odds_652656" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652656" class="amount"><input type="text" /></td>
          
          <td id="play_name_652676" class="name"><b class="b76">76</b></td> 
          <td id="play_odds_652676" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652676" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652617" class="name"><b class="b17">17</b></td> 
          <td id="play_odds_652617" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652617" class="amount"><input type="text" /></td>
          
          <td id="play_name_652637" class="name"><b class="b37">37</b></td> 
          <td id="play_odds_652637" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652637" class="amount"><input type="text" /></td>
          
          <td id="play_name_652657" class="name"><b class="b57">57</b></td> 
          <td id="play_odds_652657" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652657" class="amount"><input type="text" /></td>
          
          <td id="play_name_652677" class="name"><b class="b77">77</b></td> 
          <td id="play_odds_652677" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652677" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652618" class="name"><b class="b18">18</b></td> 
          <td id="play_odds_652618" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652618" class="amount"><input type="text" /></td>
          
          <td id="play_name_652638" class="name"><b class="b38">38</b></td> 
          <td id="play_odds_652638" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652638" class="amount"><input type="text" /></td>
          
          <td id="play_name_652658" class="name"><b class="b58">58</b></td> 
          <td id="play_odds_652658" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652658" class="amount"><input type="text" /></td>
          
          <td id="play_name_652678" class="name"><b class="b78">78</b></td> 
          <td id="play_odds_652678" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652678" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652619" class="name"><b class="b19">19</b></td> 
          <td id="play_odds_652619" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652619" class="amount"><input type="text" /></td>
          
          <td id="play_name_652639" class="name"><b class="b39">39</b></td> 
          <td id="play_odds_652639" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652639" class="amount"><input type="text" /></td>
          
          <td id="play_name_652659" class="name"><b class="b59">59</b></td> 
          <td id="play_odds_652659" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652659" class="amount"><input type="text" /></td>
          
          <td id="play_name_652679" class="name"><b class="b79">79</b></td> 
          <td id="play_odds_652679" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652679" class="amount"><input type="text" /></td>
          </tr>
         <tr>
          <td id="play_name_652620" class="name"><b class="b20">20</b></td> 
          <td id="play_odds_652620" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652620" class="amount"><input type="text" /></td>
          
          <td id="play_name_652640" class="name"><b class="b40">40</b></td> 
          <td id="play_odds_652640" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652640" class="amount"><input type="text" /></td>
          
          <td id="play_name_652660" class="name"><b class="b60">60</b></td> 
          <td id="play_odds_652660" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652660" class="amount"><input type="text" /></td>
          
          <td id="play_name_652680" class="name"><b class="b80">80</b></td> 
          <td id="play_odds_652680" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_652680" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> 
    <div class="cont-col3-hd clearfix" style="margin-top: 20px"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
     <div class="cont-col3-box2"> 
<!--       <label> <input type="checkbox" class="u-cb1" /> 预设 </label>  -->
      	金额 
      <input id="bet_money2" type="text" class="bet-money" /> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn2" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div> 
    </div> 
    </div> 
   </div> 
  </div> 
					    

					 <div id="game_count"> 
						<div class="count-wrap">
	<table class="u-table2">
		<thead>
			<tr id="stat_type">
				<th class="u-tb3-th2 select" id="stat_zhs_btn" type="zhs"
					onclick="StatGame.showStatType(this)">总和数</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_wx_btn" type="wx"
					onclick="StatGame.showStatType(this)">五行</th>
				<th class="u-tb3-th2" id="stat_qhh_btn" type="qhh"
					onclick="StatGame.showStatType(this)">前后和</th>
				<th class="u-tb3-th2" id="stat_dsh_btn" type="dsh"
					onclick="StatGame.showStatType(this)">单双和</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4 table-td-valign-top">
		<tbody>
			<tr id="qiu1_zhs" class="stattd "></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_wx" class="stattd hide"></tr>
			<tr id="qiu1_qhh" class="stattd hide"></tr>
			<tr id="qiu1_dsh" class="stattd hide"></tr>
		</tbody>
	</table>
</div>

					</div> 
			</div>
			<!--/cont-main-->
			
			<div id="right_page" class="cont-sider">
	<div class="sider-box1 mt5" id="stat_play_ctn">
		<table class="u-table2">
			<thead> 
	         <tr> 
	          <th id="stat_play_list_desc">第一球</th> 
	         </tr> 
	        </thead> 
		</table>
		<table class="u-table5">
			<tbody id="stat_play_list">
			</tbody>
		</table>
	</div>
	<div id="kjtz-ctn" class="mt5 hide">
	<table class="u-table2 play_tab_85">
		<thead>
			<tr>
				<th colspan="3">快捷投注</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DANMA_PLAYIDS')"><span>单码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAODAN_PLAYIDS')"><span>小单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDAN_PLAYIDS')"><span>合单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SHUANMA_PLAYIDS')"><span>双码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOSHUAN_PLAYIDS')"><span>小双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HESHUAN_PLAYIDS')"><span>合双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DAMA_PLAYIDS')"><span>大码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DADAN_PLAYIDS')"><span>大单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDA_PLAYIDS')"><span>合大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOMA_PLAYIDS')"><span>小码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DASHUAN_PLAYIDS')"><span>大双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEXIAO_PLAYIDS')"><span>合小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'LINTOU_PLAYIDS')"><span>0头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LINWEI_PLAYIDS')"><span>0尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'WUWEI_PLAYIDS')"><span>5尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'YITOU_PLAYIDS')"><span>1头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'YIWEI_PLAYIDS')"><span>1尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LIUWEI_PLAYIDS')"><span>6尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'ERTOU_PLAYIDS')"><span>2头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'ERWEI_PLAYIDS')"><span>2尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'QIWEI_PLAYIDS')"><span>7尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SANTOU_PLAYIDS')"><span>3头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SANWEI_PLAYIDS')"><span>3尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'BAWEI_PLAYIDS')"><span>8尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SITOU_PLAYIDS')"><span>4头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SIWEI_PLAYIDS')"><span>4尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'JIU_PLAYIDS')"><span>9尾</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鼠')"><span>鼠</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'龙')"><span>龙</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猴')"><span>猴</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'牛')"><span>牛</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'蛇')"><span>蛇</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鸡')"><span>鸡</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'虎')"><span>虎</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'马')"><span>马</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'狗')"><span>狗</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'兔')"><span>兔</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'羊')"><span>羊</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猪')"><span>猪</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONG')"><span>红</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN')"><span>蓝</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV')"><span>绿</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DAN')"><span>红单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DAN')"><span>蓝单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DAN')"><span>绿单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_SHUAN')"><span>红双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_SHUAN')"><span>蓝双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_SHUAN')"><span>绿双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DA')"><span>红大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DA')"><span>蓝大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DA')"><span>绿大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_XIAO')"><span>红小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_XIAO')"><span>蓝小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_XIAO')"><span>绿小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'QUANGXUAN')"><span>全选</span></td>
				<td onclick="LHC_KJTZ.reverseSel(this,'QUANGXUAN')"><span>反选</span></td>
				<td onclick="LHC_KJTZ.cancelAll(this)"><span>取消</span></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
		</div>
	</div>
	<!--/content-->
</div>
<!--/main-->

<script type="text/javascript">
window.onload = function() {
	document.onkeydown = function (e) {
		var theEvent = window.event || e;
		var code = theEvent.keyCode || theEvent.which;
		if (code == 13) {
			if(parent.UserBet.step==0) {
				parent.UserBet.openBetWindow();
			}else if(parent.UserBet.step==1){
				parent.UserBet.submitBet();
				if(parent.UserBet.step==0){
					setTimeout(function() {
						parent.layer.closeAll();
			        }, 200);
				}
			}
		}
	}
}
</script>
<script type="text/javascript" src="/static/js/lottery/bjkl8/stat.js" async="async"></script>
</body>
</html> 
 
 
