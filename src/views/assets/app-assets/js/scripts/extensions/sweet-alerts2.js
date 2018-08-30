/*=========================================================================================
	File Name: sweet-alerts.js
	Description: A beautiful replacement for javascript alerts
	----------------------------------------------------------------------------------------
	Item Name: Modern Admin - Responsive Admin Theme
	Version: 1.0
	Author: Pixinvent
	Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function(){




	$('#confirm-text').on('click',function(){
		swal({
		    title: "Confirm Button Text",
		    text: "See the confirm button text! Have you noticed the Change?",
		    icon: "warning",
		    buttons: {
                cancel: {
                    text: "No, cancel plx!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Text Changed!!!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
		    }
		}).then(isConfirm => {
		    if (isConfirm) {
		        swal("Changed!", "Confirm button text was changed!!", "success");
		    } else {
		        swal("Cancelled", "It's safe.", "error");
		    }
		});
	});

	$('#confirm-color').on('click',function(){
		swal({
		    title: "Are you sure?",
		    text: "You will not be able to recover this imaginary file!",
		    icon: "warning",
		    showCancelButton: true,
		    buttons: {
                cancel: {
                    text: "No, cancel plx!",
                    value: null,
                    visible: true,
                    className: "btn-warning",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, delete it!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
		    }
		}).then(isConfirm => {
		    if (isConfirm) {
		        swal("Deleted!", "Your imaginary file has been deleted.", "success");
		    } else {
		        swal("Cancelled", "Your imaginary file is safe :)", "error");
		    }
		});
	});

});