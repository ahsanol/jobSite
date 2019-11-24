$(function() {

    $('#id_user_type').on('change', function(){
        // alert("change in radio button found");
        let userType = $(this);
        let business_name_container = document.getElementById('business_name_container');
        if(userType.val() === 'company'){

            business_name_container.style = "";
        }
        else if(userType.val() === 'applicant'){
            business_name_container.style.display = "none";
        }
        else {
            alert(userType.val());
        }
    });
});
