(function ($) {

	$('body').on('click', '.try-sweet-successMessage', function () {
		swal({ 
			title:"انجام شد!",
			text:"تغییر کد سرویس با موفقیت انجام شد",
			type:"success", 
			confirmButtonColor: "#039BE5",
			confirmButtonText: "بستن"
		})
	});

	$('body').on('click', '.try-sweet-delete', function () {
		swal({ 
			title: "حذف",
			text: "آیا تمایل به حذف سرویس خود دارید؟",
			type: "warning", 
			showCancelButton: true, 
			confirmButtonColor: "#039BE5", 
			confirmButtonText: "بله",
			cancelButtonText:"خیر",
			closeOnConfirm: false 
		}, function() { 
			swal({
				title:"حذف!",
				text: "سرویس شما با موفقیت حذف شد.",
				type:"success", 
				confirmButtonColor: "#039BE5",
				confirmButtonText: "بستن"
			}); 
		});
	});
	$('body').on('click', '.try-sweet-update', function () {
		swal({
			title: "تمدید",
			text: "آیا تمایل به تمدید سرویس خود دارید؟",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#039BE5",
			confirmButtonText: "بله",
			cancelButtonText:"خیر",
			closeOnConfirm: false
		}, function() {
			swal({
				title:"تمدید!",
				text: "سرویس شما با موفقیت تمدید شد.",
				type:"success",
				confirmButtonColor: "#039BE5",
				confirmButtonText: "بستن"
			});
		});
	});
	
}(jQuery));