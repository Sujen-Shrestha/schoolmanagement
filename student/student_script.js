$(document).ready(function() {



    
    // setting date 
    let d_element = document.getElementById("date");
    let t_element = document.getElementById("time");
    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
    let today = new Date();
    let date = today.getDate()+' '+monthNames[(today.getMonth())]+ ', ' +today.getFullYear();
    let time = today.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
    d_element.innerHTML = date;
    t_element.innerHTML = time;


    

     $(".upload_btn_assign").click(function(){
        let id1 = $(this).attr('id'); 
        let asign_id = $(this).attr('assign_id'); 
        let std_id = $(this).attr('std_id'); 

        let ele= document.getElementById("save_btn");
        $(ele).attr('parent_btn_id' , id1); 
        $(ele).attr('assign_id' , asign_id); 
        $(ele).attr('std_id' , std_id); 

     });

          $("#save_btn").click(function(){
            var x = document.getElementById("myFile");
          
            if ('files' in x) {
              if (x.files.length == 0) 
              {
              } 
              else 
              {
                  var file = x.files[0];
                   if(file.size > 0)
                   {
                    let id1 = $(this).attr('parent_btn_id'); 
                    document.getElementById(id1).innerHTML = "SUBMITTED";
                    $(this).attr('data-dismiss' , 'modal');
                    document.getElementById(id1).disabled = true;
                    document.getElementById(id1).style.opacity = "0.5";
                    $.ajax({
                        type: "POST",
                        url: 'submit_assignment_action.php',
                        data: {assign_id: $(this).attr('assign_id') , std_id:$(this).attr('std_id') },
                        success: function(result) {
            
                        }
                    }); 
                   } 
              }
            } 

    
         });

});

 