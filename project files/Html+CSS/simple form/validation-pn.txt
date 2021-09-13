function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      $(document).on('keyup','your input element',function(){
   let text=$(this).val()                        
   text=text.replace(/\D/g,'')  
    
   if(text.length > 3) text=text.replace(/.{3}/,'$&-')  
   if(text.length > 6) text=text.replace(/.{6}/,'$&-')  
   $(this).val(text.substring(0,11));   
});
//For this type format 999-999-9999
$(document).on('keyup','Your input element',function(inputtxt){

   let text=$(this).val()                        
   text=text.replace(/\D/g,'')  
    
   text=text.replace(/.{0}/,'$& ( ' )
   text=text.replace(/.{6}/,'$& ) '); //Add hyphen at pos.4
   text=text.replace(/.{12}/,'$&-')   //Add hyphen at pos.8
   $(this).val(text.substring(0,17)); //Set the new text
});
      return true;
  }
  } 
 
