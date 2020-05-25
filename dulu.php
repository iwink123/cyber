
<html>
<head>
<title>Enkripsi dan Deskripsi</title>
</head>
<body>
<script language="javascript">
function enkripsi(form){
var a;
var b;
var c;
var d;
var i;
b=0;
var z;
c="";
z=(form.kalimat.value);
a=(z.length); 
for (i=1; i<=a;i++){
d=((form.kalimat.value).substr(b,1));
switch (d)
{
case "A": d="D";
break;
case "B": d="E";
break;
case "C": d="F";
break;
case "D": d="G";
break;
case "E": d="H";
break;
case "F": d="I";
break;
case "G": d="J";
break;
case "H": d="R";
break;
case "I": d="S";
break;
case "J": d="T";
break;
case "K": d="U";
break;
case "L": d="K";
break;
case "M": d="L";
break;
case "N": d="M";
break;
case "O": d="N";
break;
case "P": d="A";
break;
case "Q": d="B";
break;
case "R": d="C";
break;
case "S": d="O";
break;
case "T": d="P";
break;
case "U": d="Q";
break;
case "V": d="X";
break;
case "W": d="Y";
break;
case "X": d="Z";
break;
case "Y": d="V";
break;
case "Z": d="W";
break;
case "a": d="d";
break;
case "b": d="e";
break;
case "c": d="f";
break;
case "d": d="g";
break;
case "e": d="h";
break;
case "f": d="i";
break;
case "g": d="j";
break;
case "h": d="r";
break;
case "i": d="s";
break;
case "j": d="t";
break;
case "k": d="u";
break;
case "l": d="k";
break;
case "m": d="l";
break;
case "n": d="m";
break;
case "o": d="n";
break;
case "p": d="a";
break;
case "q": d="b";
break;
case "r": d="c";
break;
case "s": d="o";
break;
case "t": d="p";
break;
case "u": d="q";
break;
case "v": d="x";
break;
case "w": d="y";
break;
case "x": d="z";
break;
case "y": d="v";
break;
case"z" : d="w";
break;
}
b++
c=c+d
}
form.keluar.value=(c)
}
</script>
<script language="javascript">
function deskripsi(form){
var a;
var b;
var c;
var d;
var i;
b=0;
var z;
c="";
z=(form.kalimat.value);
a=(z.length); 
for (i=1; i<=a;i++){
d=((form.kalimat.value).substr(b,1));
switch (d)
{
case "A": d="P";
break;
case "B": d="Q";
break;
case "C": d="R";
break;
case "D": d="A";
break;
case "E": d="B";
break;
case "F": d="C";
break;
case "G": d="D";
break;
case "H": d="E";
break;
case "I": d="F";
break;
case "J": d="G";
break;
case "K": d="L";
break;
case "L": d="M";
break;
case "M": d="N";
break;
case "N": d="O";
break;
case "O": d="S";
break;
case "P": d="T";
break;
case "Q": d="U";
break;
case "R": d="H";
break;
case "S": d="I";
break;
case "T": d="J";
break;
case "U": d="K";
break;
case "V": d="Y";
break;
case "W": d="Z";
break;
case "X": d="V";
break;
case "Y": d="W";
break;
case "Z": d="X";
break;
case "a": d="p";
break;
case "b": d="q";
break;
case "c": d="r";
break;
case "d": d="a";
break;
case "e": d="b";
break;
case "f": d="c";
break;
case "g": d="d";
break;
case "h": d="e";
break;
case "i": d="f";
break;
case "j": d="g";
break;
case "k": d="l";
break;
case "l": d="m";
break;
case "m": d="n";
break;
case "n": d="o";
break;
case "o": d="s";
break;
case "p": d="t";
break;
case "q": d="u";
break;
case "r": d="h";
break;
case "s": d="i";
break;
case "t": d="j";
break;
case "u": d="k";
break;
case "v": d="y";
break;
case "w": d="z";
break;
case "x": d="v";
break;
case "y": d="w";
break;
case"z" : d="x";
break;
}
b++
c=c+d
}
form.keluar.value=(c)
}
function hapus(form){
form.kalimat.value="";
form.keluar.value="";
}
</script>

<table width="100%" align="center">

<tr>
<td>

<h1>Caesar Chiper</h1>

<form name="form1" method="post" action="">

<p>
<textarea rows="10" name="kalimat" cols="40"></textarea>

</p>

<p> 

<input maxlength="10000" onclick=enkripsi(form) value="enkripsi" type="button">

<input maxlength="10000" onclick=deskripsi(form) value="deskripsi" type="button">

<input maxlength="10000" onclick=hapus(form) value="reset" type="button">
</p>
<p>
<textarea rows="10" name="keluar" cols="40"></textarea>
<h1 align="center">DATA DIRI</h1>
<table width="500" border="1" cellspacing="0" cellpadding="5" align="center">
<tr align="center" bgcolor="#66CC33">
<td width="174">DATA DIRI</td>
<td width="174">KETERANGAN</td>

</tr>
<tr>
<td>Nama</td>
<td>ERWIN</td>
</tr>
<tr>
<td>Nim</td>
<td>42517031</td>
</tr>
<tr>
<td>Mata Kuliah</td>
<td>Cyber Security</td>
</tr>
<tr>
<td>Dosen</td>
<td>Irfan Syamsuddin, ST, PG.Dipl.BEC, M.Com.ISM,Ph.D</td>
</tr>
<tr>
<td>Program Studi</td>
<td>D4 Teknik Komputer Dan Jaringan</td>
</tr>

</table>

 </p>
</form>
</td>

</table>  
</body>
</html> 