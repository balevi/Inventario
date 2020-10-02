var celular = document.querySelectorAll('.cell');
var selec = document.querySelectorAll('.selec');
var parag = document.querySelectorAll('.parag');
var row = document.querySelectorAll('.row');
var patri = document.querySelectorAll('.patri');
var buttons = document.querySelectorAll('.buttons');


function visivel(j) {
    
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
  
                patri[j].value = opt.value;
            }
            });
}

var r;
for(var i=0; i<celular.length; i++) {
      r++;
    if(r==6){

        r=o;
    }
    
    selec[i].style.display = "none";

visivel(i);

}

//for(var i=0; i<row.length; i++) {

    //buttons[i].addEventListener('click', save );
//}