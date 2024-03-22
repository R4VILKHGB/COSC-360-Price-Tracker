  //check passwords

  function isBlank(inputField)
  {
      if (inputField.value=="")
      {
           return true;
      }
      return false;
  }
  
  function makeRed(inputDiv){
      inputDiv.style.borderColor="#AA0000";
  }
  
  function makeClean(inputDiv){
      inputDiv.style.borderColor="#FFFFFF";
  }
  
  window.onload = function()
  {
      var mainForm = document.getElementById("mainForm");
      var requiredInputs = document.querySelectorAll(".required");
  
      mainForm.onsubmit = function(e)
      {
           var requiredInputs = document.querySelectorAll(".required");
         var err = false;
  
           for (var i=0; i < requiredInputs.length; i++)
         {
              if( isBlank(requiredInputs[i]))
            {
                    err |= true;
                    makeRed(requiredInputs[i]);
              }
              else
            {
                    makeClean(requiredInputs[i]);
              }
          }
        if (err == true)
        {
          e.preventDefault();
        }
        else
        {
          console.log('checking match');
          checkPasswordMatch(e);
        }
      }
  }

function checkPasswordMatch (e) {
    var pass1 = document.getElementById ("password").value;
    var pass2 = document.getElementById ("password-check").value;
    //console.log ('checkPasswordMatch p1:', pass1, 'p2:', pass2);
   
    if (pass1 !== pass2) {
      makeRed (document.getElementById ("password-check"));
      window.alert ('Password mismatch - make sure the two password fields are same');
      e.preventDefault();
      e.stopPropagation();
      return false;
    }

    return true;
}
