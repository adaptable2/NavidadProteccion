

document.getElementById("preview-btn").addEventListener("click", function(e) {
    e.preventDefault();
	
	if (document.querySelector("#mensaje").value !== "") {
		document.getElementById("mensaje-formulario").innerHTML = document.querySelector("#mensaje").value;
    }else{
		document.getElementById("mensaje-formulario").innerHTML = "";
	}


});

document.getElementById("btn-enviar").addEventListener("click", function(e) {
    e.preventDefault();

	// document.getElementById("btn-enviar").disabled = true;
	// document.getElementById("btn-enviar").style.background = '#000000';

	window.scrollTo(0, 0);
    html2canvas(document.querySelector(".content-card"), {
        useCORS: true,
        logging: true,
        letterRendering: 1
    }).then(canvas => {
        var dataURL = canvas.toDataURL("image/jpeg", 1.0);
        var message = document.querySelector("#mensaje").value;
        var nombreRemitente = document.querySelector("#de").value;
        var nombreDestinatario = document.querySelector("#para").value;
        var mailDestinatario = document.querySelector("#email").value;

        console.log(dataURL);

        SendInfo(
            dataURL,
            nombreRemitente,
            message,
            nombreDestinatario,
            mailDestinatario
        );
    });
});



function SendInfo(
    img,
    nombreRemitente,
    message,
    nombreDestinatario,
    mailDestinatario
) {
    let url = "/receiveImage";
    let token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    fetch(url, {
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: "post",
        credentials: "same-origin",
        body: JSON.stringify({
            img,
            nombreRemitente,
            message,
            nombreDestinatario,
            mailDestinatario
        })
    })
        .then(response => response.json())
        .then(data => {
            //  document.querySelector(
            //      ".img-send"
            //  ).innerHTML = `<img src="${data.img.img}" alt=""/>`;
            console.log(data.data);

			// setTimeout(() =>{
			// document.getElementById("btn-enviar").disabled = false;

			// 	document.getElementById("btn-enviar").style.background =
            //         "#ffffff";
			// }, 2000)
        })
        .catch(function(error) {
            console.log(error);
        });
}
