function butt(){

for(var i=1;i<autourl.length;i++)document.write('<li><span class="span01" id=time'+i+'></span><span class="input01" id=host'+i+'></span><a class="a001" href="#" id=links'+i+' target="_blank">打开链接</a></li>')

}
butt()
function auto(url){
//document.forms[0]["url"+b].value=url
document.getElementById("host"+b).innerHTML = url;
document.getElementById("links"+b).href = url;
if(tim>200)
{
//document.forms[0]["txt"+b].value="���ӳ�ʱ"
document.getElementById("time"+b).innerHTML = "链接超时";
}
else
{
//document.forms[0]["txt"+b].value=tim*10+"ms"
document.getElementById("time"+b).innerHTML = tim*10+"ms";
}
b++
}
function run(){for(var i=1;i<autourl.length;i++)document.write("<img src="+autourl[i]+"/"+Math.random()+" width=1 height=1 onerror=auto('"+autourl[i]+"') style='display:none'>")}
run()