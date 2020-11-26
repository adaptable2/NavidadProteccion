document.getElementById("btn-card").addEventListener("click", function(e) {
    e.preventDefault();

    html2canvas(document.getElementById("btn-card"), {
        useCORS: true
    }).then(canvas => {
        var dataURL = canvas.toDataURL("image/jpeg");
        var message = document.querySelector("#mensaje").value;
        var nombreRemitente = document.querySelector("#de").value;
        var nombreDestinatario = document.querySelector("#para").value;
        var mailDestinatario = document.querySelector("#email").value;

        console.log(dataURL);

        // SendInfo(
        //     dataURL,
        //     nombreRemitente,
        //     message,
        //     nombreDestinatario,
        //     mailDestinatario
        // );
    });
});

function SendInfo(img, nombreRemitente, message, nombreDestinatario, mailDestinatario) {
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
            console.log(data.data.img);
        })
        .catch(function(error) {
            console.log(error);
        });
}


