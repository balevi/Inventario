var celular = document.querySelectorAll('.cell');
var selec = document.querySelectorAll('.selec');
var parag = document.querySelectorAll('.parag');
var row = document.querySelectorAll('.linha');
var patri = document.querySelectorAll('.patri');
var buttons = document.querySelectorAll('.buttons');


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
           }
            });
}

var r;
var p;
p = 0;
r=0;
for(var i=0; i<celular.length; i++) {
      
      p = p+1;
    if(p==6){
        p=0;
        r= r+1;
        console.log(r);
    }
    
    selec[i].style.display = "none";
    visivel(i,r);

}

//for(var i=0; i<row.length; i++) {

    //buttons[i].addEventListener('click', save );
//}