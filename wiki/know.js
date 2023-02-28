//以下是 你知道吗 的js 
if(true){
//载入json
kjdata = JSON.parse(kjdata1);
var itxt = Math.floor(Math.random() * kjdata.knowtxts.length );//变量itxt取0~(句子数-1)之间整数
dgbyid("knowtxt").innerHTML=kjdata.knowtxts[itxt].jkt;
}else{
//载入xml
xmlDoc=loadXMLDoc("know.xml");
x=xmlDoc.getElementsByTagName("knowa");
var itxt = Math.floor(Math.random() * x.length);//变量itxt的值取0~句子数量-1之间整数
dgbyid("knowtxt").innerHTML=x[itxt].childNodes[0].nodeValue;
}
//为什么3D坦克上面的血条用什么方法都不能加长呢？？？充值不行，打几年也不行，增长经验值也不行，到底要怎么样才行呢？这个游戏本应公平，公正，合理，才对。大家应该是同一起跑线才合理，为什么很多玩家比我要多两倍的血条长度呢？这就有点太说不过去了。