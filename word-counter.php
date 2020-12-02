<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word counter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <!-- Word counter -->

<div id="lp">


<textarea id="lll" placeholder="Enter your text" class="lll" onkeyup="countwords()" onkeydown="countwords()" onmouseout="countwords()" ></textarea>
<br>
<br>
<button id="btn1" onclick="clear_text()">Clear</button>
<button id="btn2" onclick="copy_text()">Copy</button>
<div id="word11">
Characters :<samp id="ks"> 0</samp>
Words : <samp id="hhh"> 0</samp>
</div>
</div>



<script>

function clear_text(){

  document.getElementById('lll').value = '';
  document.getElementById('ks').innerHTML = '0';
  document.getElementById('hhh').innerHTML =  '0';

}    

function copy_text() {

  var copyText = document.getElementById("lll");
  copyText.select();
  copyText.setSelectionRange(0, 9999999999)
  document.execCommand("copy");

}

const countwords = () => {

let noc = document.getElementById('lll').value.length;
let now = document.getElementById('lll').value;

now = now.match( /\w+/g );
now = now.length;
console.log(now);


document.getElementById('ks').innerHTML =    + + noc;
document.getElementById('hhh').innerHTML =  + +  now;


}
</script>


</body>
</html>



