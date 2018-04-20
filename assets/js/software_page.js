
function addSubscribeButton(){
    var myButtonDiv = document.getElementById("subscribe-button");
    var button = document.createElement('BUTTON');
    button.setAttribute("class", "sub-button")
    
    
    button.innerHTML = "Subscribe";
    myButtonDiv.appendChild(button);  
}