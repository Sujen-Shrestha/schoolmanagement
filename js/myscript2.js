


$(document).ready(function(e){


// index buttons

{
    $('#inx_std_btn').on('click', function () {
       location.replace("student_login.php");
    });

    $('#inx_adm_btn').on('click', function () {
        location.replace("admin_login.php");
    });

    $('#inx_mod_btn').on('click', function () {
        location.replace("module_leader_login.php");
    });
}

// ALL login click clicks here

{
    $('#std_lgin_btn').on('click', function () {
    //  window.location.replace("index.html");
    });

    $('#adm_lgin_btn').on('click', function () {
      location.replace("admin_panel.php");
    });

    $('#mod_lgin_btn').on('click', function () {
      location.replace("module_leader_panel.php");
    });
}

});

