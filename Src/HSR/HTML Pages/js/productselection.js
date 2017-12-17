var productColors = {};
prouductColors.Enum('RED', 'WHITE', 'BLACK');

var selectedColor = productColors.RED;

function pic1(){
    document.getElementById("img").src = "Images/Bottom_Red.PNG";
    selectedColor = productColors.RED;
}
function pic2(){
    document.getElementById("img").src ="Images/Bottom_White.PNG";
    selectedColor = productColors.WHITE;
}
function pic3(){
    document.getElementById("img").src ="Images/Bottom_Black.PNG";
    selectedColor = productColors.BLACK;
} 
function pic4(){
    document.getElementById("img1").src = "Images/Bottom_Red_1.PNG";
    selectedColor = productColors.RED;
}
function pic5(){
    document.getElementById("img1").src ="Images/Bottom_White_1.PNG";
    selectedColor = productColors.WHITE;
}
function pic6(){
    document.getElementById("img1").src ="Images/Bottom_Black_1.PNG";
    selectedColor = productColors.BLACK;
} 

function demoShowS(){
     switch(selectedColor){
        case 'RED':
            pic4();
            break;
            
        case 'WHITE':
            pic5();
            break;
            
        case 'BLACK':
            pic6();
            break;
    }
    document.getElementById("p1").style.visibility="hidden";
    document.getElementById("p2").style.visibility="hidden";
    document.getElementById("p3").style.visibility="hidden";
    document.getElementById("p4").style.visibility="Visible";
    document.getElementById("p5").style.visibility="Visible";
    document.getElementById("p6").style.visibility="Visible";
    document.getElementById("img").style.visibility="hidden";
    document.getElementById("img1").style.visibility="visible";
}
function demoShow(){
    switch(selectedColor){
        case 'RED':
            pic1();
            break;
            
        case 'WHITE':
            pic2();
            break;
            
        case 'BLACK':
            pic3();
            break;
    }
    document.getElementById("p1").style.visibility="Visible";
    document.getElementById("p2").style.visibility="Visible";
    document.getElementById("p3").style.visibility="Visible";
    document.getElementById("p4").style.visibility="hidden";
    document.getElementById("p5").style.visibility="hidden";
    document.getElementById("p6").style.visibility="hidden";
    document.getElementById("img1").style.visibility="hidden";
    document.getElementById("img").style.visibility="visible";
}


function pic7(){
    document.getElementById("img2").src = "Images/Top_Red.PNG";
    selectedColor = productColors.RED;
}
function pic8(){
    document.getElementById("img2").src ="Images/Top_White.PNG";
    selectedColor = productColors.WHITE;
}
function pic9(){
    document.getElementById("img2").src ="Images/Top_Black.PNG";
    selectedColor = productColors.BLACK;
} 
function pic10(){
    document.getElementById("img3").src = "Images/Top_Red_1.PNG";
    selectedColor = productColors.RED;
}

function pic11(){
    document.getElementById("img3").src ="Images/Top_White_1.PNG";
    selectedColor = productColors.WHITE;
}
function pic12(){
    document.getElementById("img3").src ="Images/Top_Black_1.PNG";
    selectedColor = productColors.BLACK;
} 

function dShowS(){
    switch(selectedColor){
        case 'RED':
            pic10();
            break;
            
        case 'WHITE':
            pic11();
            break;
            
        case 'BLACK':
            pic12();
            break;
    }
    
    document.getElementById("p7").style.visibility="hidden";
    document.getElementById("p8").style.visibility="hidden";
    document.getElementById("p9").style.visibility="hidden";
    document.getElementById("p10").style.visibility="Visible";
    document.getElementById("p11").style.visibility="Visible";
    document.getElementById("p12").style.visibility="Visible";
    document.getElementById("img2").style.visibility="hidden";
    document.getElementById("img3").style.visibility="visible";
}
function dShow(){
     switch(selectedColor){
        case 'RED':
            pic7();
            break;
            
        case 'WHITE':
            pic8();
            break;
            
        case 'BLACK':
            pic9();
            break;
    }
    document.getElementById("p7").style.visibility="Visible";
    document.getElementById("p8").style.visibility="Visible";
    document.getElementById("p9").style.visibility="Visible";
    document.getElementById("p10").style.visibility="hidden";
    document.getElementById("p11").style.visibility="hidden";
    document.getElementById("p12").style.visibility="hidden";
    document.getElementById("img3").style.visibility="hidden";
    document.getElementById("img2").style.visibility="visible";
   
}