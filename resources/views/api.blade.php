<html>
<body>
    <style type = "text/css">
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-size: 62.5%;

}
body{
    background: #FADBD8;
}
.row{
    height: max-content;
}
.container{
    display: grid;
    place-items: center;
}
#header{
    margin-top: 20%;
    font-size: 7rem;
    color: #1ABC9C;
    z-index: 1;
}
#instruction{
    margin-top: 20%;
    font-size: 3rem;
    font-weight: bold;
    color: #78281F;
}
#box{
    display: grid;
}
input[type=text]{
    height: 2.8rem;
    margin-top: 4%;
    font-size: 2rem;
    background: #FCF3CF;
}
button{
    height: 2.8rem;
    border-radius: 2rem;
    background: rgb(171, 235, 198);
    background: linear-gradient(250deg, rgba(187, 143, 206,3) 0%, rgba(186, 74, 0,5) 70%);

}
button:hover{
    transform: scale(1.1);
    transition-duration: 0.5s;
    transition-timing-function: linear;
}
button p{
    font-size: 2rem;
}
#output{
    display: none;
    font-size: 2rem;
    z-index: 1;
}
    </style>
    <div class="container">
        <div class="row">
            <div id="header">
                <h1>Segun tu nombre,¿cuantos años tienes?</h1>
            </div>
            <div id="instruction">
                <p> Introduce tu nombre</p>
            </div>
            <div id="box">
                <input type="text"  id="nameInput"><br><br>
                <button id="btn"> <p>Calcular edad</p> </button>
            </div><br>
            <div id="output">

            </div>
            <br><br>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>
<script>
    var output = document.getElementById('output')
document.getElementById('btn').addEventListener('click',predictName);
let name = document.getElementById('nameInput');
document.getElementById('nameInput').addEventListener('change',checkName)
function predictName(){
         let name = nameInput.value;

         fetch('https://api.agify.io?name='+name,{ method:'GET'})
         .then(function(response){return response.json();})
         .then(data => {
             if (name != '') {
                output.innerHTML = "Creo que tu edad es de... " + data.age;
                output.style.display = 'block';
                 console.log(data.age);
             }else{
                output.style.display = 'none'; 
             }


         })
         .catch(err => console.log(err));
     }

 function checkName(){
     let name = nameInput.value;
     if (name == '') {
        output.style.display = 'none'; 
     }
}
</script>