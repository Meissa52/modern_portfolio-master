var p = document.createElement("p");

function clearFields(){
	$('#caloriesForm')[0].reset();
	document.getElementById("calorieIntake").removeChild(p);
}

function calcCals (){
	var Age = parseInt(document.getElementById("age").value);
	var Weight_Pounds = document.getElementById("weight").value;
	var Weight_Kg = parseInt(Weight_Pounds) * 0.453592;
	var Feet = document.getElementById("feet").value;
	var befInches = document.getElementById("inches").value
	var Inches = parseInt(Feet*12)+parseInt(befInches);
	var Centimeters = Inches * 2.54;
	var gender = document.querySelector('input[name="group1"]:checked').value;
	var e = document.getElementById("selectExercise");
	var value = e.options[e.selectedIndex].value;
	var atRestMale = 10 * Weight_Kg + 6.25 * Centimeters - 5 * Age + 5;
	var atRestFemale = 10 * Weight_Kg + 6.25 * Centimeters - 5 * Age -161;

	if (gender=="male"){
	switch(value){
		case '1':
		displayCals(parseInt(atRestMale*1.2))
		break;
		case '2':
		displayCals(parseInt(atRestMale*1.375))
		break;
		case '3':
		displayCals(parseInt(atRestMale*1.55))
		break;
		case '4':
		displayCals(parseInt(atRestMale*1.9))
		break;
	}
}

	if (gender=="female"){
	switch(value){
		case '1':
		displayCals(parseInt(atRestFemale*1.2))
		break;
		case '2':
		displayCals(parseInt(atRestFemale*1.375))
		break;
		case '3':
		displayCals(parseInt(atRestFemale*1.55))
		break;
		case '4':
		displayCals(parseInt(atRestFemale*1.9))
		break;
	}
}
	
}

function displayCals (TextNode){
	document.getElementById("calorieIntake").appendChild(p);
	p.textContent = "You must consume: "+TextNode+" Calories to maintain current weight!";
}