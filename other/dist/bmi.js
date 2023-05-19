var weight, height, age, gender;
var BMI, range;
var page = 1;
weight = 50;
age = 25;

$(".weightMinus").click(function(){
	weight--;
	$(".weightNum").text(weight);
})

$(".weightPlus").click(function(){
	weight++;
	$(".weightNum").text(weight);
})

$(".ageMinus").click(function(){
	age--;
	$(".ageNum").text(age);
})

$(".agePlus").click(function(){
	age++;
	$(".ageNum").text(age);
})

$(".male").click(function(){
	gender = 'male';
	$(".male").addClass("genderClicked");
	$(".female").removeClass("genderClicked");
})

$(".female").click(function(){
	gender = 'female';
	$(".female").addClass("genderClicked");
	$(".male").removeClass("genderClicked");
})

$(".calculateBtn").click(function(){
	if(page==1){
		height = $(".heightInput").val();
		$(".screen_2").css("left","0%");
		$(".screen_1").css("right","100%");
		BMI = weight/((height/100)*(height/100));
		BMI = Math.round(BMI*10)/10
		
		console.log('call function success!')
	if(BMI<18.5){
		range = 'Underweight';
		$(".resultRange").css("color","#E5235A");
		$(".suggestion").text("You have an underweight body weight. Be careful！");
	}else if(BMI>25){
		range = 'Overweight';
		$(".resultRange").css("color","#E5235A");
		$(".suggestion").text("You have an overweight body weight. Be careful！");
	}else{
		range = 'Normal';
		$(".resultRange").css("color","#32DC7C");
		$(".suggestion").text("You have a normal body weight. Good job!");
	}
	$(".resultRange").text(range);
		
		$(".resultBMI").text(BMI);
		$(".calculateBtn").text("RE-CALCULATE YOUR BMI");
		page = 2;
	}else{
		$(".screen_2").css("left","100%");
		$(".screen_1").css("right","0%");
		$(".calculateBtn").text("CALCULATE YOUR BMI");
		page = 1;
	}
})