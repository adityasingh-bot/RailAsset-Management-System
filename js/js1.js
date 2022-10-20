// JavaScript Document
function makeUppercase()
   {
      document.date.name.value=document.date.name.value.toUpperCase();
   }
   function makeUppercase1()
   {
      document.date.fname.value=document.date.fname.value.toUpperCase();
   }
   function makeUppercase2()
   {
      document.date.mname.value=document.date.mname.value.toUpperCase();
   }
   function makeUppercase3()
   {
      document.date.add.value=document.date.add.value.toUpperCase();
   }
   function makeLowercase()
   {
      document.date.email.value=document.date.email.value.toLowerCase();
   }
function ValidateAlpha(evt)
   {
	   var keyCode=(evt.which)?evt.which:evt.keyCode
	   if ((keyCode >= 65 && keyCode <= 97) || keyCode == 32 || (keyCode >= 97 && keyCode <= 122 ||keyCode ==8 ))
      {
        return true;
      }
        return false;
   }
   function ValidateNum(evt1)
   {
	   var keyCode=(evt1.which)?evt1.which:evt1.keyCode
	   if ((keyCode >= 48 && keyCode <= 57) || keyCode == 32 || keyCode==8)
      {
        return true;
      }
        return false;
   }
   
  