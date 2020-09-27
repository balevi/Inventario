var celular = document.querySelectorAll('.cell');
var selec = document.querySelectorAll('.selec');
var parag = document.querySelectorAll('.parag');


function visivel(j) {
    
   celular[j].addEventListener('mouseover', function(){
   
    selec[j].style.display = "";

    //selec[j].options[0].focus();
    
    });

    celular[j].addEventListener('mouseout', function(){
   
        selec[j].style.display = "none";
        //selec[j].options[0].focus();
        
        });

        selec[j].addEventListener('click', function(){
            var opt = selec[j].options[selec[j].selectedIndex];
            parag[j].innerHTML = opt.value;
            
            //selec[j].options[0].focus();
            
            });
}



for(var i=0; i<celular.length; i++) {
    selec[i].style.display = "none";
 
visivel(i);

}