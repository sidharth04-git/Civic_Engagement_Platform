function sendMail() {
    var params = { 
        message: document.getElementsByClassName("box-image").value = "LAN Cable Issue",
    };
    const serviceID = "service_3s5shtx";
    const templateID = "template_1tecdts";
    
    emailjs 
        .send(serviceID, templateID, params)
        .then((res) => { 
            document.getElementsByClassName("box-image").value = "LAN Cable Issue";
            console.log(res);
            alert("your message sent successfully");
        })
        .catch((err) => console.log(err));
}
