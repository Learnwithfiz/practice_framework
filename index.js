function OnSubmit(){
    
    var name =document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var dept = document.getElementById("dept").value;
     var dropd = document.getElementById("drop").value;
     
    $.ajax({
       
       url:"insert.php",
       method:"POST",
       data:{
         name:name,
         email:email,
         dept:dept,
         dropd:dropd
      },
      
       success:function(x){
          console.log(x);
       }
    })
}