// add blocks to software table
function addCell(){
    var myTableDiv = document.getElementById("myDynamicTable");
    var box = document.createElement('DIV');
    
    box.setAttribute("class", "software-floating-box");      //<div class="floating-box">Floating box</div>
    box.innerHTML = "floating box";
    myTableDiv.appendChild(box);  
}