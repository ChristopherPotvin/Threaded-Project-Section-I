function validate()
{
      
            var reg = /[a-zA-Z][a-zA-Z0-9.]+@([a-zA-Z][a-zA-Z0-9-]+\.)+[a-zA-Z]{2,100}/;
            if (!reg.test(document.forms[0].email.value))
            {
                  alert("Invalid email address");
                  return false;
            }
            document.forms[0].postal.value = document.forms[0].postal.value.toUpperCase();
            var reg2 = /(^[A-Z]\d[A-Z] ?\d[A-Z]\d$)|(^\d{5}( ?\d{4})?$)/i;
            if (!reg2.test(document.forms[0].postal.value))
            {
                  alert("Invalid postal code");
                  return false;
            }
            return confirm("Continue Submitting?");
 }   
// Chris Potvin's JS form validation for customer registration page