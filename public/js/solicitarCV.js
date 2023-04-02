function solicitarCV(){


    Swal.fire({
        title: 'Gracias por tu interes!',
        text: 'Dejame tu correo y me contactare contigo.',
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off',
            placeholder: 'correo electronico'
        },
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Enviar',
        showLoaderOnConfirm: true,

        preConfirm: (login) => {
            
            //Validation
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(login.match(mailformat)){
                console.log('Siiiii , Es un correo')
                axios.get(`${url}/solicitarCV` , {
                    params: {
                        login: login
                    }
                }).then(response => {
                    return response;
                })
            }else{
                console.log('Nooooo , No Es un correo')
                Swal.showValidationMessage(
                    `Correo electronico invalido`
                )
            }

            
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: `Muchas gracias`,
                text: 'Tan pronto como pueda me comunicaré contigo.',
            })
        }
    })

}

var ValidateEmail = function (inputText){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat)){
        alert("Valid email address!");
        document.form1.text1.focus();
        return true;
    }else{
        alert("You have entered an invalid email address!");
        document.form1.text1.focus();
        return false;
    }
}