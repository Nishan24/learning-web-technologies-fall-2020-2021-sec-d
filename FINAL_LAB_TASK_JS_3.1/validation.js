"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


//let student = ['alamin', '123', 'CS'];

function nameValidation(){
	

      // var name = document.getElementById("name");
       let data= document.getElementById('name').value;
	
       
	if ( data == '' ) {
		
	
		if (data == trim(data) && strpos(data, " ") !== false) {
			if ((data[0] >= 'a' && data[0] <= 'z') || (data[0] >= 'A' && data[0] <= 'Z')) {
				for ($i = 0; $i < strlen(data); $i++) {
					if ((data[$i] >= 'a' && data[$i] <= 'z') || (data[$i] >= 'A' && data[$i] <= 'Z') 
					|| (data[$i] == ' ') || (data[$i] == '-') || (data[$i] == '.')) {
					} 
					
					else {
                        
                        alert("Must be letter between a-z & A-Z and 1");
					}
				}
                
                alert(data);
			} 
			
			else {
              
                alert( "Must be start with letter and 2");
			}
		} 
		
		else {
           
             alert("At least two words needed and 3");
		}
	}
	
	else {
        
        window.alert("Name fill required");
        
	}


}


function emailValidation(){
    
    let data = document.getElementById('email').value;
    
    if (data === "") {
        
        window.alert('Email is empty!');
        
    }
}

function genderValidation(){
    
    if(document.getElementById("male").checked|| document.getElementById("female").checked|| document.getElementById("other").checked){
        
        alert("Gender is selected");
        
    }
    
    else{
        
        alert("select one gender");
        
    }
    
}

function degreeValidation(){
    
    if(document.getElementById("ssc").checked|| document.getElementById("hsc").checked|| document.getElementById("Bsc").checked){
        
        alert("Degree is selected");
        
    }
    
    else{
        
        alert("select one degree");
        
    }
    
}

function bloodValidation(){
    
    if(document.getElementById("1").checked|| document.getElementById("2").checked|| document.getElementById("3").checked || document.getElementById("4").checked || document.getElementById("5").checked || document.getElementById("6").checked || document.getElementById("7").checked || document.getElementById("8").checked){
        
        alert("BloodGroup is selected");
        
    }
    
    else{
        
        alert("select one group");
        
    }
    
}
