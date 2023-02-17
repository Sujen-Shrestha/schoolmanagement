
$(document).ready(function(e){


    // setting date 
    let d_element = document.getElementById("date");
    let t_element = document.getElementById("time");
    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
    let today = new Date();
    let date = today.getDate()+' '+monthNames[(today.getMonth())]+ ', ' +today.getFullYear();
    let time = today.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
    d_element.innerHTML = date;
    t_element.innerHTML = time;






    //All Admin switches here
    {
      
        // deelting module leader 
        
        $('.adm-mod-l-del-btn').on('click', function () {
            let id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: 'phpActionFiles/adm_mod_l_delete_action.php',
                data: {mod_leder_id: id},
                success: function(result) {
                    location.replace("admin_panel.php");

                }
            });   
        });



        $('.adm-assoc-mod-delete-btn').on('click', function () {
            let id = $(this).attr('id');
            let c_id = $(this).attr('cource_id');
            $.ajax({
                type: "POST",
                url: 'phpActionFiles/associate_mod_delete.php',
                data: {mod_leder_id: id , cource_id : c_id},
                success: function(result) {
                    location.replace("admin_panel.php");

                }
            });   
        });


        $('.adm-mod-delete-btn').on('click', function () {
            let id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: 'phpActionFiles/adm_mod_del_action.php',
                data: {mod_leder_id: id },
                success: function(result) {
                    location.replace("admin_panel.php");

                }
            });   
        });


          
        $('#adm_sign_out_btn').on('click', function () {
           $.ajax({
            type: "POST",
            url: 'phpActionFiles/log_out_acion.php',
            data: {},
            success: function(result) {
                location.replace("index.php");

            }
        });     
        });



        ///// approved waiting student 

        $('.adm-add-std-aprove').on('click', function () {
            let id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: 'phpActionFiles/approved_std.php',
                data: {std_id: id},
                success: function(result) {
                    location.replace("admin_panel.php");

                }
            });   
        });

        ///// Delete waiting student request for admin

        $('.adm-del-std-aprove').on('click', function () {
            let id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: 'phpActionFiles/delete_std_admin_req.php',
                data: {std_id: id},
                success: function(result) {
                    location.replace("admin_panel.php");

                }
            });   
        });

    }


    // creating session here when user click on module leader edit btn this gets the of thats student 
    //in the id btn and send to php using ajax and inthe php it create session which store the id of that edit btn 
    // and also sending the id of edit mod leader window button
    // so when the page will refresh auto then buton clicker function will click on that buton and open edit window auto
    // and wil get id from session and get data from db using that id

    // admin edit module leader 
    $('.adm-mod-l-edit-btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/adm_edit_mod_l_action.php',
            data: {std_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });

    // admin edit module  
    $('.adm-mod-edit-btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/adm_edit_mod_btn_action.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });
    // admin edit course   

    $('.adm-course-edit-btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/adm_course_edit_btn_action.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });
    // admin delete course   

    $('.adm-course-del-btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/admin_del_course_action.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });

     // course view course      
    $('.course_eye_btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/adm_view_mod_link_with_course.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });


     // admin edit Announcements      
     $('.adm-anounc-edit-btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/adm_ann_edit_btn_action.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });

     // admin del Announcements      
     $('.adm-anounc-del-btn').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/admin_del_annoc_action.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });

    ////// night work here

    $('.menu_on_off_button').on('click', function () {
        //console.log("last_btn_id");

        let id = $(this).attr('button_for');
        console.log(id);
        let all_elements = document.getElementsByClassName("menu_on_off");
        for ( let i=0 ; i<all_elements.length ; i++)
        {
            if( $(all_elements[i]).attr('id') != id )
            {
                $(all_elements[i]).attr('style', 'display: none !important');
            }
            else
            {
                $(all_elements[i]).attr('style', 'display: flex !important');
            }
        }
        
    });


    
    //////next  night work here

    
    $('.radio_btn_adm_add_mod_l_in_c').on('click', function () {
        //console.log("last_btn_id");
        let all_elements = document.getElementsByClassName("radio_btn_adm_add_mod_l_in_c");
        for ( let i=0 ; i<all_elements.length ; i++)
        {
            $(all_elements[i]).prop( "checked", false );
        }
          $(this).prop( "checked", true );
        let id = $(this).attr('id');
        document.getElementById("add_id_save").value = id;
        
        
    });

    $('.radio_btn_adm_edit_mod_l_in_c').on('click', function () {
        //console.log("last_btn_id");
        let all_elements = document.getElementsByClassName("radio_btn_adm_edit_mod_l_in_c");
        for ( let i=0 ; i<all_elements.length ; i++)
        {
            $(all_elements[i]).prop( "checked", false );
        }
          $(this).prop( "checked", true );
        let id = $(this).attr('id');
        document.getElementById("edit_mod_id_save").value = id;
        
        
    });

    // saving id of all check in the string
    $('.adm_add_mod_to_c_check_btn').on('click', function () 
      {
        let id = $(this).attr('id');
        let tmp = document.getElementById("saving_id_of_all").value
        if(tmp == "+")
        {
            document.getElementById("saving_id_of_all").value = id;
        }
        else
        {
            if(tmp.includes(id))
            {
                //tmp = tmp.replace(id, "");
                if(tmp.length == 1)
                {
                    document.getElementById("saving_id_of_all").value = "+";
                }
                else
                {
                    let n = tmp.indexOf(id);
                    console.log(n);
                    console.log(tmp.length);
                    if(n==0 && tmp.length > 2)
                    {
                        id = id+"-";
                        tmp = tmp.replace(id, "");
                        document.getElementById("saving_id_of_all").value = tmp;
                    }
                    else
                    {
                        id = "-"+id;
                        tmp = tmp.replace(id, "");
                        document.getElementById("saving_id_of_all").value = tmp;
                    }
                }
            }
            else
            {
                document.getElementById("saving_id_of_all").value = tmp + "-" + id;
            }
        }
    });

        // saving id of all check in the string in the edit
        $('.adm_edit_mod_to_c_check_btn').on('click', function () 
        {
          let id = $(this).attr('id');
          let tmp = document.getElementById("saving_id_of_all_edit").value
          if(tmp == "+")
          {
              document.getElementById("saving_id_of_all_edit").value = id;
          }
          else
          {
              if(tmp.includes(id))
              {
                  //tmp = tmp.replace(id, "");
                  if(tmp.length == 1)
                  {
                      document.getElementById("saving_id_of_all_edit").value = "+";
                  }
                  else
                  {
                      let n = tmp.indexOf(id);
                      console.log(n);
                      console.log(tmp.length);
                      if(n==0 && tmp.length > 2)
                      {
                          id = id+"-";
                          tmp = tmp.replace(id, "");
                          document.getElementById("saving_id_of_all_edit").value = tmp;
                      }
                      else
                      {
                          id = "-"+id;
                          tmp = tmp.replace(id, "");
                          document.getElementById("saving_id_of_all_edit").value = tmp;
                      }
                  }
              }
              else
              {
                  document.getElementById("saving_id_of_all_edit").value = tmp + "-" + id;
              }
          }
      });




          // admin edit student
    $('.adm-edit-std').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/admin_edit_std_action.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });


    // admin delete student
    $('.adm-del-std').on('click', function () {

        let id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'phpActionFiles/admin_del_std.php',
            data: {mod_id: id},
            success: function(result) {
                location.replace("admin_panel.php");
            }
        });  
    });


    $(".timetable").change(function(){
        let id = $(this).attr('cource_id');
        let index_v = $(this).attr('index');
          let value = $(this).val();
          $.ajax({
              type: "POST",
              url: 'phpActionFiles/update_attendance.php',
              data: {cource_id: id , txt_value:value , index:index_v},
              success: function(result) {
                console.log("done");
              }
          });
      });



        // php will get id of last button click from db and then php will load the id into the value of div in the admin_panel 
    // these below lines will get that value 
    // then get element using that value and will click on that
    let last_btn_id_elemnt = document.getElementById("last-btn-id-saver");
    let last_btn_id =  $(last_btn_id_elemnt).attr('value');
    if(last_btn_id != "null")
    {
        console.log(last_btn_id);
        document.getElementById(last_btn_id).click();
    }

  });

