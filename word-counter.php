<style type="text/css">
::-webkit-scrollbar {
    width: 12px;
}
 

 
::-webkit-scrollbar-thumb {
    background: #dadce0;
    background-clip: padding-box;
    border: 4px solid transparent;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: none;
    box-shadow: none;	
}


#ks{
font-family: Arial, Helvetica, sans-serif;	
}
#hhh{
font-family: Arial, Helvetica, sans-serif;		
}
#word11{
height:20px;
width:69%;
background-color:#293a4a;
border-radius:4px 4px 0px 0px  ;
color:#fff;
font-family: Arial, Helvetica, sans-serif;
padding:5px;	
}
#lp{
margin-left:3%;
height:330px;
width:95%;	
}
#lp .lll{
outline:none;
border-radius:0px 0px 4px 4px ;
font-family: Arial, Helvetica, sans-serif;
box-shadow: 0 2px 10px rgba(0,0,0,.2);
width:70%;
height:282px;
outline:none;
border:none;
}

textarea {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark-color(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    -webkit-appearance: textarea;
    background-color: -internal-light-dark-color(rgb(255, 255, 255), rgb(59, 59, 59));
    -webkit-rtl-ordering: logical;
    flex-direction: column;
    resize: auto;
    cursor: text;
    white-space: pre-wrap;
    overflow-wrap: break-word;
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark-color(rgb(118, 118, 118), rgb(195, 195, 195));
    border-image: initial;
    padding: 2px 0px 0px 2px;

}


button {
    border: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    background-color: skyblue;
    color: white;
    width: 100px;
    height: 30px;
    border-radius: 3px;
}
</style>



<!-- Word counter -->

<div id="lp">

<div id="word11">
Characters :<samp id="ks"> 0</samp>
Words : <samp id="hhh"> 0</samp>
</div>
<textarea id="lll"  class="lll" onkeyup="countwords()" onkeydown="countwords()" onmouseout="countwords()" >
</textarea>
<br>
<br>
<button onclick="document.getElementById('lll').value = ''">Clear text</button>


</div>



<script>
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
