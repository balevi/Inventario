var lock = document.getElementById("lock");
var celular = document.querySelectorAll('.cell');
var selec = document.querySelectorAll('.selec');
var parag = document.querySelectorAll('.parag');
var row = document.querySelectorAll('.linha');
var patri = document.querySelectorAll('.patri');
var descri = document.querySelectorAll('.descri');
var stat = document.querySelectorAll('.stat');
var propri = document.querySelectorAll('.propri');
var posic = document.querySelectorAll('.posic');
var usua = document.querySelectorAll('.usua');
var buttons = document.querySelectorAll('.buttons');
var id = document.querySelectorAll('.id');
var opts = document.querySelectorAll('.opt');
var addrow = document.getElementById('addrow');



function fechado(){

    lock.addEventListener('click', function(){
        for(var i=0; i<celular.length; i++) {
           celular[i].style.pointerEvents = "none";
            
        }
        lock.setAttribute('class', 'fas fa-lock');
    })

    lock.addEventListener('dblclick', function(){
        for(var i=0; i<celular.length; i++) {
           celular[i].style.pointerEvents = "";
            
        }
        lock.setAttribute('class', 'fas fa-lock-open');
    })
}




function visivel(j,l) {
    
   celular[j].addEventListener('mouseover', function(){
   
    selec[j].style.display = "";
    
    });

    celular[j].addEventListener('mouseout', function(){
   
        selec[j].style.display = "none";

        
        });

        selec[j].addEventListener('click', function(){
            var opt = selec[j].options[selec[j].selectedIndex];
            parag[j].innerHTML = opt.value;
            if(selec[j].name == "patri"){
                patri[l].value = opt.value;
                id[l].value = parag[j].id;
           }
            if(selec[j].name == "descri"){
                descri[l].value = opt.value;
                id[l].value = parag[j].id;
           }
            if(selec[j].name == "stat"){
                stat[l].value = opt.value;
                id[l].value = parag[j].id;
           }
            if(selec[j].name == "propri"){
                propri[l].value = opt.value;
                id[l].value = parag[j].id;
           }
            if(selec[j].name == "posic"){
                posic[l].value = opt.value;
                id[l].value = parag[j].id;
           }
            if(selec[j].name == "usua"){
                usua[l].value = opt.value;
                id[l].value = parag[j].id;
           }
            });
}

 
           addrow.onclick = function addrow (){
                    // Captura a referência da tabela com id “minhaTabela”
            var table = document.getElementById("tabela");
            // Captura a quantidade de linhas já existentes na tabela
            var numOfRows = table.rows.length;
            // Captura a quantidade de colunas da última linha da tabela
            var numOfCols = table.rows[numOfRows-1].cells.length ;
            //numOfCols = numOfCols -1;
            // Insere uma linha no fim da tabela.
            var newRow = table.insertRow(numOfRows);
 
            // Faz um loop para criar as colunas
            
            for (var j = 0; j < 6; j++) {
                // Insere uma coluna na nova linha 
                newCell = newRow.insertCell(j);
                // Insere um conteúdo na coluna
                newCell.innerHTML = "<td><p><select class ='selected' ></select></p></td>";
                var selected = document.querySelectorAll('.selected');
                
                for (var i = 0; i<row.length; i++){
                    var opti = document.createElement('option');
                    //opti.value = opts[i].value;
                    opti.innerHTML = opts[i].value;
                    selected[j].appendChild(opti);
                    
                }
                
            }
            for(var i=0; i<selected.length; i++) {
            selected[i].setAttribute('class', '');
            }
        }

        
function calcopts(){
    for(var i=0; i<8; i++) {
    "<option>" + opts[i].value + "</option>";
    }
}


var r;
var p;
p = 0;
r=0;
for(var i=0; i<celular.length; i++) {
      
     
    if(p==6){
        p=0;
        r= r+1;
    }
    p = p+1;
    selec[i].style.display = "none";
    visivel(i,r);
    

}
fechado();