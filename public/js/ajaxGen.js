let btn = document.querySelector("#formBtn");
let svgDiv = document.querySelector(".svg");
let form = document.querySelector("form")
console.log(btn)

btn.addEventListener("click", onClickBtn)

function onClickBtn(e){


    let data = new FormData(form);
    e.preventDefault();
    fetch("http://localhost/Avatar/public/index.php?id=1", {method: "POST", body: data})
        .then((response)=> response.text())
        .then((data)=>{
            console.log("eee")
           svgDiv.innerHTML = data })


}

