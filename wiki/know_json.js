//以下是 你知道吗 的js ( 载入json )
kjdata = JSON.parse(kjdata1);
var senma=kjdata.knowtxts.length//变量senma是句子数量
var itxt = Math.floor(Math.random() * senma );//变量itxt取0~senma-1之间整数
var knowtxt = document.getElementById("knowtxt");
for (var i=0; i<senma; i++){
      if(itxt==i){knowtxt.innerHTML=kjdata.knowtxts[i].jkt;}
}

//为什么3D坦克上面的血条用什么方法都不能加长呢？？？充值不行，打几年也不行，增长经验值也不行，到底要怎么样才行呢？这个游戏本应公平，公正，合理，才对。大家应该是同一起跑线才合理，为什么很多玩家比我要多两倍的血条长度呢？这就有点太说不过去了。