/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addSoftwareForm = $("#addSoftware");
	
	var validator = addSoftwareForm.validate({
		
		rules:{
			name :{ required : true },
			location :{ required : true },
			category :{ required : true }
		},
		messages:{
			name :{ required : "This field is required" },
			location : { required : "This field is required" },
			category : { required : "This field is required" },				
		}
	});
});
