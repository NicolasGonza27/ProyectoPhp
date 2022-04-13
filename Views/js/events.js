function loginVerification() {
    
    $("#login_button").click(
        function () {
            alert("lala");

            $.post(
                "../ProyectoPhp/Student/Add",
                {
                    'recordId': $("#recordId").val(),
                    'firstName': $("#firstName").val(),
                    'lastName': $("#lastName").val()
                },
                function (data) {
                    if (!data) {
                        console.log("error");
                    }
                    console.log("lalala");
                    window.open("../ProyectoPhp/Student/ShowListView");
                }
            ); 
        }
   );
}