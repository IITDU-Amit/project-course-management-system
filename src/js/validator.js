function login_form_validation(email, password) {
	
	if (email.length==0||password.length==0) {

		return "Sorry. Email or Password is empty!";
	}	

	return true;
}

function student_add_validation(name, email) {
	
	if (name.length==0||email.length==0) {

		return "Sorry. Name or email is empty!";
	}

	else{

		var re1='(bsse)';	// Word 1
		var re2='(\\d+)';	// Integer Number 1
		var re3='(@)';	// Any Single Character 1
		var re4='(iit\\.du\\.ac\\.bd)';	// Fully Qualified Domain Name 1

		var p = new RegExp(re1+re2+re3+re4,["i"]);

		if(!p.test(email)){

			return "Invalid Email!";
		}
	}

	return true;
}

function teacher_add_validation(name, email) {
	
	if (name.length==0||email.length==0) {

		return "Sorry. Name or email is empty!";
	}

	else{

		var re3='(@)';	// Any Single Character 1
		var re4='(iit\\.du\\.ac\\.bd)';	// Fully Qualified Domain Name 1

		var p = new RegExp(re3+re4,["i"]);

		if(!p.test(email)){

			return "Invalid Email!";
		}
	}

	return true;
}


function course_add_validation(course_name, course_code, course_description, user_id) {
	
	if (course_name.length==0||course_code.length==0||course_description.length==0||user_id.length==0) {

		return "Sorry. Something is empty or not selected!";
	}

	else{

		var re1='((?:[a-z][a-z]+))';	// Word 1
      	var re2='(-)';	// Any Single Character 1
      	var re3='(\\d)';	// Any Single Digit 1
      	var re4='(\\d)';	// Any Single Digit 2
      	var re5='(\\d)';	// Any Single Digit 3

      	var p = new RegExp(re1+re2+re3+re4+re5,["i"]);

		/*if(!p.test(course_code)){

			return "Invalid Course Code!";
		}*/
	}

	return true;
}


function set_date_validation(course_code, start_date, end_date){

	if (course_code.length==0||start_date.length==0||start_date.length==0) {

		return "Sorry. Something is empty or not selected!";
	}

	else{

		var re1='((?:(?:[1]{1}\\d{1}\\d{1}\\d{1})|(?:[2]{1}\\d{3}))[-:\\/.](?:[0]?[1-9]|[1][012])[-:\\/.](?:(?:[0-2]?\\d{1})|(?:[3][01]{1})))(?![\\d])';	// YYYYMMDD 1

      	var p = new RegExp(re1,["i"]);

		if(!p.test(start_date)||!p.test(end_date)){

			return "Invalid date format! Please use YYYY-MM-DD";
		}
	}

	return true;
}

function save_marks_validation(distribution_criteria, distribution_weight, marks){

	var number_of_distribution = distribution_criteria.length;

	for (var i = 0; i < marks.length; i++) {
		
		if(parseFloat(marks[i])<0){

			return "Sorry. You can't enter negative marks!";
		}

		else if (parseFloat(marks[i])>parseFloat(distribution_weight[i%number_of_distribution])){

			return "Mark of "+distribution_criteria[i%number_of_distribution]+" can't be more than "+distribution_weight[i%number_of_distribution];
		}
	}

	return true;
	
}

function change_password_validation(old_password, new_password, confirm_password){

	if(old_password.length==0||new_password.length==0||confirm_password.length==0){

		return "Sorry. Something is empty!";
	}

	else {

		var p = /^(?=.*\d)(?=.*[a-z]).{5,20}$/;

		if (!p.test(new_password)) {

			return "Password have to be alphanumeric and contains at least 5 characters!";
		}

		else if(new_password!=confirm_password){

			return "New password and Confirm password didn't match!";
		}
	}

	return true;
}

function marks_distribution_validation(criteria, weight){


	if(criteria.length!=weight.length){

		return "Number of distribution criteria and weight must be equal!";
	}

	else{

		var p = /^[a-zA-Z]+$/;
		for (var i = 0; i < criteria.length; i++) {
			
			if (!p.test(criteria[i])) {
				return "Criteria must be a Word! No digit please!";
			}
		}

		var p = /^[0-9]+$/;
		for (var i = 0; i < weight.length; i++) {
			
			if (!p.test(weight[i])) {
				return "Weight must be a number! No letter please!";
			}
		}

		var total = 0;

		for (var i = 0; i < weight.length; i++) {

			total = total + parseInt(weight[i]);
		}

		if (total!=100) {

			console.log(total);

			return "Total weight of marks distribution must be 100";
		}


	}

	return true;

}