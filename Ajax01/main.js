const b=document.querySelector('#btn');
//b.onclick=function(){
//	console.log("Chyba działa");
//}
var i=1;
b.addEventListener('click',ajaxR);
function ajaxR()
{
	i++;
	if(i>3)i=1;
	console.log("To działa");
	const x=new XMLHttpRequest();
	let dane="t0"+i+".txt"
	x.open('GET',`t0${i}.txt,true);
	x.send();
	x.onload=()=>{
		console.log(x.status);
		if(x.status==200)
		{
			//console.log(x.status);
			document.getElementById('response').innerHTML=x.response;
		}
	};
}