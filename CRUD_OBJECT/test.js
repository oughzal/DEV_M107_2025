localStorage.setItem("name","nom1");
let nom = localStorage.getItem("name");
let json = "{....}"
localStorage.setItem("json",JSON.stringify(json))
json = JSON.parse(localStorage.getItem("json"))