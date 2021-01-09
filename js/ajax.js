$(document).ready(function(){
            $("#butsave").click(function(event){
            	event.preventDefault();
                var platform=$("#platform").val();
                var user=$("#user").val();
                var password=$("#password").val();

                if(platform == "" || user == "" || password == "") {
                    Swal.fire(
                        'Error',
                        'Please fill in all fields.',
                        'error'
                    )
                    return;
                }

                $.ajax({
                    url:'addpassword.php',
                    method:'POST',
                    data:{
                        platform:platform,
                        user:user,
                        password:password
                    },
			    success: function(dataResult) {
                    Swal.fire(
                        'Success',
                        'Credentials have been saved.',
                        'success',
                    ).then(function(){
                        window.location.href = "index.php";
                    });
                    save.reset();

                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==2){
                        Swal.fire(
                            'Error',
                            'Credentials already exist in the database.',
                            'error'
                        )
                        return;
                    }

                }
                });
            });
        });