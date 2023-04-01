


/* window.onload = () => {
    // On va chercher la région
    let region = document.querySelector("#city_country");
    region.addEventListener("change", function(){
        let form = this.closest("form");
        let data = this.name + "=" + this.value;
        console.log(form.getAttribute("action"))
        console.log(form.action)
        fetch('/home', {
            method: form.getAttribute("method"),
            body: data,
            headers: {
                "Content-Type": "application/x-www-form-urlen
            }
        })
        .then(response => (response.text())).then(html=>{
        let content = document.createElement("html");
            content.innerHTML=html;
        let cities = content.querySelector(".cityClass")
            document.querySelector('.cityClass').replaceWith(
            //console.log(content.querySelector("form"))
            //console.log(document.querySelector("form"))
            //content.innerHTML = html;
            //console.log(content)
        })           
        .catch(error => {
            console.log(error)
        })
    });
}