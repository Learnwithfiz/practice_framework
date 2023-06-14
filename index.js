function OnSubmit(){
    
    var name =document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var dept = document.getElementById("dept").value;
     var dropd = document.getElementById("drop").value;
     if(name==""){
       alert('name is required');

     }else if(email==""){
      alert('email is required');
     }else if(dept==""){
      alert('dept is required');

     }else if(dropd==""){
      alert('select');
     }else{
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
   
}



function OnDelete(id){
   $.ajax({
       
      url:"delete.php",
      method:"GET",
      data:{
        id:id
     },
     
      success:function(x){
         console.log(x);
      }
   })
}
function OnSelect(){
   $.ajax({
       
      url:"index.php",
      method:"GET",
     
     
      success:function(x){
         $("#output").html(x)
      }
   })
}

window.onload=function(){
   $.ajax({
       
      url:"index.php",
      method:"GET",
     
     
      success:function(x){
         OnSelect()
      }
   })
}