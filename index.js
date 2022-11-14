function sendmail() {
    var params ={
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value,
    };

    const serviceID = "service_p980mkj";
    const templateId ="template_9iwxkpe"

    emailjs.send(serviceID, templateId,params)
    .then(
        res =>{
            document.getElementById("name").value ="";
            document.getElementById("email").value ="";
            document.getElementById("message").value ="";
            console.log(res);
            alert("Message Sent Sucessfully!");

        }
    )
    .catch((err) => console.log(err));
}

