function laheta() {
     var etunimi = myForm.etunimi.value;
       if(etunimi.length < 3) {
         alert("Asenna ETUnimesi tai...");
         myForm.etunimi.focus();
         return (false);
        }

      var sukunimi = myForm.sukunimi.value;
        if(sukunimi.length < 3) {
          alert("Asenna SUKUnimesi tai...");
          myForm.sukunimi.focus();
          return (false);
        }

      var ika = Number(myForm.ika.value);
        if(ika < 18 || ika > 200) {
          alert("asenna IKÄSI tai...");
          myForm.ikasyotto.focus();
          return (false);
        }

      var puhelinnro = myForm.puhelinnro.value;
        if(puhelinno.length < 9 || puhelinnro.length > 20) {
          alert("Asenna PUHELINNUMEROSI tai...")
          myForm.puhelinnro.focus();
          return (false);
          }
}
