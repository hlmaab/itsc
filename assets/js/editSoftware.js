/**
 * File : editUser.js 
 * 
 * This file contain the validation of edit user form
 * 
 * @author Kishor Mali
 */
$(document).ready(function(){
	
	var editSoftwareForm = $("#editSoftware");
	
	var validator = editSoftwareForm.validate({
		
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