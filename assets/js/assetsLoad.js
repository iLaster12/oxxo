const input_btn = document.getElementById("search")

    input_btn.addEventListener("click", getData)

    function getData(){
        let input = document.getElementById("assets-code").value
        let contet = document.getElementById("content")

        let url = "assets/php/assetsLoad.php"

        let formData = new FormData()
        formData.append('assets-code', input)

        fetch(url, {
            method: "POST",
            body: formData
        }).then(response => response.json())
        .then(data => {
            contet.innerHTML = data
        }).catch(err => console.log(err))

    }