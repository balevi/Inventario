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
var opts_patri = document.querySelectorAll('.opt-patri');
var opts_descri = document.querySelectorAll('.opt-descri');
var opts_stat = document.querySelectorAll('.opt-stat');
var opts_propri = document.querySelectorAll('.opt-propri');
var opts_posic = document.querySelectorAll('.opt-posic');
var opts_usua = document.querySelectorAll('.opt-usua');
var addrows = document.getElementById('addrow');



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

 
           addrows.onclick = function addrow ()
           {
        
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

            
            for (var j = 0; j < 7; j++) {
                // Insere uma coluna na nova linha 
                newCell = newRow.insertCell(j);
                // Insere um conteúdo na coluna
                //newCell.innerHTML = "<td><p><select class ='selected'></select></p></td>";
                newCell.innerHTML = "<td><p><select class ='selected'></select></p></td>";                  

                    
              
                
                
                switch (j) {
                        case 0:
                            var cont = selec[0].options.length ;
                            newCell.innerHTML = "<td><p><select class ='selected' name = 'patri'></select></p></td>";
                        break;

                        case 1:
                            var cont = selec[1].options.length ;
                            newCell.innerHTML = "<td><p><select class ='selected' name = 'descri' id='descri'></select></p></td>";
                        break;

                        case 2:
                            var cont = selec[2].options.length ;
                            newCell.innerHTML = "<td><p><select class ='selected' name = 'stat'></select></p></td>";
                        break;

                        case 3:
                            var cont = selec[3].options.length ;
                            newCell.innerHTML = "<td><p><select class ='selected' name = 'propri'></select></p></td>"
                        break;
            
                        case 4:
                            var cont = selec[4].options.length ;
                            newCell.innerHTML = "<td><p><select class ='selected' name='posic'></select></p></td>";
                        break;
            
                        case 5:
                            var cont = selec[5].options.length ;
                            newCell.innerHTML = "<td><p><select class ='selected' name='usua'></select></p></td>";
                        break;
                        
                        case 6:
                           var cont = 1 ;
                        break;
                }
                  var selected = document.querySelectorAll('.selected');
                for (var i = 0; i<cont; i++){
                    var opti = document.createElement('option');

            
                    switch (j) {
                        case 0:
                            opti.innerHTML = opts_patri[i].value;
                        break;

                        case 1:
                            opti.innerHTML = opts_descri[i].value;
                        break;

                        case 2:
                            opti.innerHTML = opts_stat[i].value;
                        break;

                        case 3:
                            opti.innerHTML = opts_propri[i].value;
                        break;
            
                        case 4:
                            opti.innerHTML = opts_posic[i].value;
                        break;
            
                        case 5:
                            opti.innerHTML = opts_usua[i].value;
                        break;
                        
                        case 6:
                            newCell.innerHTML = "<td><button class= 'far fa-check-circle btn btn-outline-success ' style='font-size: 1.5em;'></button></td>";

            
                    }
                   
                    selected[j].appendChild(opti);
                    
                }
                
            }
            for(var i=0; i<selected.length; i++) {
                selected[i].setAttribute('class', '');
            }
            addrows.onclick = null;
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