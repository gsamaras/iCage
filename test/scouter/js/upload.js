$(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
	/*$(":file").change(function() {
		if (this.files && this.files[0]) {
		var file_data = $('#input_pic').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('file', file_data);
		alert(form_data);                             
		$.ajax({
			url: 'php/upload.php', // point to server-side PHP script 
			dataType: 'text',  // what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(php_script_response){
				alert(php_script_response); // display response from the PHP script, if any
			}
		});
	}
	});*/
	
});

$(document).ready(function(){
	$(".profile_pic").click(function() {
		$("#input_pic").trigger('click');
	});
});

function imageIsLoaded(e) {
    $('.profile_pic').attr('src', e.target.result);
};