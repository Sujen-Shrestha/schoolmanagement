
<!DOCTYPE html>
<html>
<body>

<script src="../js/sweetalert.min.js"></script>
<script>

swal({
  title: "Good job!",
  text: "Your form has been submitted",
  icon: "success",
  button: "Okay!",
}).then(function(value) {
      if (value) {
          //  Either true or null
          window.location.href = "../student_login.php";
        }

      });


</script>

</body>
</html>
