const b=document.querySelector('#btn');
b.addEventListener('click',ajaxR);
function ajaxR()
{
	const x=new XMLHttpRequest();
	x.open('GET','user.json',true);
	x.send();
	x.onload=()=>{
		if(x.status==200)
		{
			const res=JSON.parse(x.responsText);
			//console.log(res[0].username);
			let response="";
			res.forEach(u=>response+='User:'+ u.username + 'Email:'+u.email+'<br>');
			document.getElementById('response').innerHTML=response;
		}
	};
}