function selectChange(val) {
    //Set the value of action in action attribute of form element.
    //Submit the form
    $('#myForm').submit();
}



window.onload = function() {
    var selItem = sessionStorage.getItem("SelItem");  
    var endstorage = sessionStorage.clear();  
    $('#selectgp').val(selItem);
    $('#goback').val(endstorage);
    }
    
    
    $('#selectgp').change(function() { 
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });
    
    
    