

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



    //This condition will check if form with id 'contact-form' is exist then only form reset code will execute.
    let count =0;
    $(".add_document_button").click(function(){
        $(' <input type="file" name="file'+count+'" placeholder="Select file" />').insertAfter('.after_file');
     });
    

     
     // deleteing the file from folder and database
     $(".cross_in_files").click(function(){
        let file = $(this).attr('value');
        let id1 = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'delete_file.php',
            data: {file_name: file , id:id1 },
            success: function(result) {
                location.replace("edit_module_content.php");

            }
        }); 
     });
    

          // deleteing the file from folder and database
          $(".cross_in_assign_files").click(function(){
            let file = $(this).attr('value');
            let id1 = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: 'delete_assignment_files.php',
                data: {file_name: file , id:id1 },
                success: function(result) {
                    location.replace("edit_assignment.php");
    
                }
            }); 
         });

    

     // changing the view status of module file content
    $(".module_c_view").click(function(){
        let id = $(this).attr('class');
        if(id.includes("fa-eye-slash"))
        {
            $(this).removeClass("fa-eye-slash");
            $(this).addClass("fa-eye");
        }
        else
        {
            $(this).removeClass("fa-eye");
            $(this).addClass("fa-eye-slash");
        }

     });


     $(".attendance").click(function(){
        let ele = document.getElementsByClassName("attendance");
    
      let id =  $(this).attr('id');
      let attendance =  $(this).attr('for');
      let all_icon =  $(this).attr('for2');

      let ele2 = document.getElementsByClassName(all_icon);
      for ( let i = 0 ; i < ele2.length ; i++)
      {
          let id2 = $(ele2[i]).attr('id');
          document.getElementById(id2).style.color = "white";

      }


      if(attendance == "first")
      {
        document.getElementById(id).style.color = "#09f309";

      }
      if(attendance == "second")
      {
        document.getElementById(id).style.color = "blue";

      }
    
      if(attendance == "third")
      {
        document.getElementById(id).style.color = "red";

      }
    
    
      let std_id = $(this).attr('std_id');
      let attend_value = $(this).attr('attend_value');
      console.log(std_id);
      console.log(attend_value);
 
        $.ajax({
            type: "POST",
            url: './attendance_submit.php',
            data: {std_idd : std_id , attend_v : attend_value },
            success: function(result) {
              

            }
        });   
    

        
     });



        $(".grade_mark").change(function(){
          let std_id1 = $(this).attr('std_id');
            let assign_id1 = $(this).attr('id');
            let marks = $(this).val();
            $.ajax({
                type: "POST",
                url: 'grade_upload_action.php',
                data: {std_id: std_id1 , assign_id:assign_id1 , mark:marks},
                success: function(result) {

                }
            });
        });

    
});

 