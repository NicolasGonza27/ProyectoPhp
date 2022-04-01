function loginVerification() {
    
    $("#login_button").click(
        function () {
            alert("lala");

            $.post(
                "dashboard/proyectos/ProyectoPhp/Student/Adddd",
                {
                    'recordId': $("#recordId").text(),
                    'firstName': $("#firstName").text(),
                    'lastName': $("#lastName").text()
                },
                function (data) {
                    if (!data) {
                        console.log("error");
                    }
                    console.log("lalala");
                }
            ); 
        }
   );
}