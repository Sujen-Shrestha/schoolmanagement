<!DOCTYPE html>
<html>
<body>

<script src="./js/sweetalert.min.js"></script>
<script>
swal ( "Oooops" ,  "Login fail , Please enter valid data" ,  "error" ).then(function(value) {
      if (value) {
          //  Either true or null
          window.location.href = "./module_leader_login.php";
        }

      });
</script>

</body>
</html>
