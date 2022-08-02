function validateForm() {
    let x = document.getElementById("title").value;
    let y=document.getElementById("description").value;
    let z=document.getElementById("price").value;
    let text;
    if (x == ""&& y==""&& z=="") {
       document.getElementById("show").innerHTML = "insert title description and price";
       return false;
           
} else {
document.getElementById("show").innerHTML = "submitted";
return true;
}


}