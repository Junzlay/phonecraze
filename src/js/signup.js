$(document).ready(function () {
    const labels = document.querySelectorAll('.label')
const formInputs = document.querySelectorAll('form div input')


formInputs.forEach(formInput => {

  formInput.addEventListener('mouseover',() => {
    formInput.previousElementSibling.classList.add('label-up')
  })

  formInput.addEventListener('mouseleave',() => {
    if(formInput.value !== ''){
      formInput.previousElementSibling.classList.add('label-up')
      return
    }
    if(document.activeElement === formInput){
      formInput.previousElementSibling.classList.add('label-up')
      return
    }
    formInput.previousElementSibling.classList.remove('label-up')
  })
  
   formInput.addEventListener('blur',() => {
     if(formInput.value !== ''){
       formInput.previousElementSibling.classList.add('label-up')
       return
     }
    formInput.previousElementSibling.classList.remove('label-up')
  })
  
})
    // let fname,lname,phone,city;
    // $('.registration-form fieldset:first-child').fadeIn('slow');

    // $('.registration-form input[type="text"]').on('focus', function () {
    //     $(this).removeClass('input-error');
    // });

    // // next step
    // $('.registration-form .btn-next').on('click', function () {
    //     var parent_fieldset = $(this).parents('fieldset');
    //     var next_step = true;

    //     parent_fieldset.find('input[type="text"],input[type="email"]').each(function () {
    //         if ($(this).val() == "") {
    //             $(this).addClass('input-error');
    //             next_step = false;
    //         } else {
    //             $(this).removeClass('input-error');
    //         }
    //     });

    //     if (next_step) {
    //         parent_fieldset.fadeOut(400, function () {
    //             $(this).next().fadeIn();
    //         });	
            
    //     fname = $('#fname').val();
	// 	 lname = $('#lname').val();
	// 	 phone = $('#phone').val();
	// 	 city = $('#address').val();
        
       
                
    //     }
       

    // });

    // // previous step
    // $('.registration-form .btn-previous').on('click', function () {
    //     $(this).parents('fieldset').fadeOut(400, function () {
    //         $(this).prev().fadeIn();
    //     });
    // });

    // // submit
    // $('.registration-form').on('submit', function (e) {
    //     $(this).find('input[type="email"],input[type="password"]').each(function () {
    //         if ($(this).val() == "") {
    //             e.preventDefault();
    //             $(this).addClass('input-error'); 
    //         }else{
    //             $(this).removeClass('input-error');
    //             $('.error').html('')
    //         }

    //         if($('#password').val()==$('#confirmPassword').val()){
    //               // ajax
    //               $.ajax({
    //                 url: "../database/save.php",
    //                 type: "POST",
    //                 dataType:'json', 
    //                 data: {
    //                     fname:fname,
    //                     lname:lname,
    //                     city:city,		
    //                     phone:phone
    //                 },
    //                 cache: false,
    //                 success: function(dataResult){
    //                     var dataResult = JSON.parse(dataResult);
    //                     if(dataResult.statusCode==200){
    //                         alert("Success!");
    //                     }
    //                     else if(dataResult.statusCode==201){
    //                        alert("Error occured !");
    //                     }
                        
    //                 }
                
    //         });
    //         // ajax end here

    //         }else{
    //             $('.error').html('Password did not match! Please try again.').addClass('text-warning')
    //         }
    //     });

    // });

   
});
