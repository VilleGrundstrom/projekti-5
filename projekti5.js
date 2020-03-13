function validate() {
     var etunimis = myForm.etunimis.value;
       if(etunimis.length < 3)
       {
         alert("Asenna ETUnimesi tai tapahtuu hirveitä");
         myForm.etunimis.focus();
         return (false);
        }

      var sukunimis = (myForm.sukunimis.value);
        if(sukunimis.length < 3)
        {
          alert("Asenna SUKUnimesi tai tapahtuu hirveitä");
          myForm.sukunimis.focus();
          return (false);
        }

    /*  var syntymaaikas = Number(myForm.syntymaaikas.value);
        if(ika < 18 || ika > 90)
        {
          alert("asenna IKÄSI tai tapahtuu hirveitä");
          myForm.syntymaaikas.focus();
          return (false);
        }*/

      /*var puhelinnumero = (myForm.puhelinnumero.value);
        if(puhelinnumero.length > 13)
        {
          alert("Asenna PUHELINNUMEROSI tai tapahtuu hirveitä");
          myForm.puhelinnumero.focus();
          return (false);
        }*/
}
