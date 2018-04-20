// add blocks to software table
function addCell(string, software_link, logo_path){
    var myTableDiv = document.getElementById("myDynamicTable");
    var box = document.createElement('DIV');
    
    box.setAttribute("class", "software-floating-box");   


    var link = document.createElement('a');
    link.setAttribute("href", software_link);

    var image = document.createElement('img');
    image.setAttribute("src", logo_path);

    image.setAttribute("class", "image-in-block");

        
    myTableDiv.appendChild(box);  
    box.appendChild(link);
    link.appendChild(image);
    box.append(string);
}
