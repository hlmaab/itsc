
function addSubscribeButton(){
    var myButtonDiv = document.getElementById("subscribe-button");
    var button = document.createElement('BUTTON');
    button.setAttribute("class", "sub-button");
    button.innerHTML = "Subscribe";

    var subscrible = document.createElement('SPAN');
    subscrible.innerHTML = "( Subscription is only available for HKUST staff. )";
    subscrible.setAttribute("class", "subscribe");

    myButtonDiv.appendChild(button);
    myButtonDiv.appendChild(subscrible);  
}