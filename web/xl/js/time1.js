function butt1(){

for(var i=1;i<autourl1.length;i++)document.write('<li><span class="span01" id=time1'+i+'></span><span class="input01" id=host1'+i+'></span><a class="a001" href="#" id=links1'+i+' target="_blank">打开链接</a></li>')

}
butt1()
function auto1(url){
//document.forms[0]["url"+b].value=url
document.getElementById("host1"+b1).innerHTML = url;
document.getElementById("links1"+b1).href = url;
if(tim1>200)
{
//document.forms[0]["txt"+b].value="���ӳ�ʱ"
document.getElementById("time1"+b1).innerHTML = "链接超时";
}
else
{
//document.forms[0]["txt"+b].value=tim*10+"ms"
document.getElementById("time1"+b1).innerHTML = tim1*10+"ms";
}
b1++
}
function run1(){for(var i=1;i<autourl1.length;i++)document.write("<img src="+autourl1[i]+"/"+Math.random()+" width=1 height=1 onerror=auto1('"+autourl1[i]+"') style='display:none'>")}
run1()