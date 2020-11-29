var sc=document.getElementById('sz'); //输出

var one,two;
function ac(){
	sc.value='0';
}

function one(){
	if (sc.value=='0') {
		sc.value='1';
	}
	else{
		sc.value+='1';
	}
}

function two(){
	if (sc.value=='0') {
		sc.value='2';
	}
	else{
		sc.value+='2';
	}
}

function three(){
	if (sc.value=='0') {
		sc.value='3';
	}
	else{
		sc.value+='3';
	}
}

function four(){
	if (sc.value=='0') {
		sc.value='4';
	}
	else{
		sc.value+='4';
	}
}

function five(){
	if (sc.value=='0') {
		sc.value='5';
	}
	else{
		sc.value+='5';
	}
}

function six(){
	if (sc.value=='0') {
		sc.value='6';
	}
	else{
		sc.value+='6';
	}
}

function seven(){
	if (sc.value=='0') {
		sc.value='7';
	}
	else{
		sc.value+='7';
	}
}

function eight(){
	if (sc.value=='0') {
		sc.value='8';
	}
	else{
		sc.value+='8';
	}
}

function nine(){
	if (sc.value=='0') {
		sc.value='9';
	}
	else{
		sc.value+='9';
	}
}

function zero(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='0';
	}
}

function jia(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='+';
	}
}

function jian(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='-';
	}
}

function cheng(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='×';
	}
}

function chu(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='÷';
	}
}

function yu(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='%';
	}
}

function dian(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value+='.';
	}
}

function jia_jian(){
	if (sc.value=='0') {
		sc.value='0';
	}
	else{
		sc.value=parseInt(sc.value)-parseInt(sc.value)*2;
	}
}

function ac(){
	sc.value='0';
}

function dengyu(){
	var zq=sc.value;
	if (zq.indexOf('+')!=-1) {
		var firjia=zq.split('+');
		var _firjia=Number(firjia[0])+Number(firjia[1]);
		sc.value=_firjia;
	}
	if (zq.indexOf('-')!=-1) {
		var firjian=zq.split('-');
		var _firjian=Number(firjian[0])-Number(firjian[1]);
		sc.value=_firjian;
	}
	if (zq.indexOf('×')!=-1) {
		var fircheng=zq.split('×');
		var _fircheng=Number(fircheng[0])*Number(fircheng[1]);
		sc.value=_fircheng;
	}
	if (zq.indexOf('÷')!=-1) {
		var firchu=zq.split('÷');
		var _firchu=Number(firchu[0])/Number(firchu[1]);
		sc.value=_firchu;
	}
	if (zq.indexOf('%')!=-1) {
		var firyu=zq.split('%');
		var _firyu=Number(firyu[0])%Number(firyu[1]);
		sc.value=_firyu;
	}
}