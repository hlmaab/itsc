// add blocks to software table
function addCell(name, link){
    var myTableDiv = document.getElementById("myDynamicTable");
    var box = document.createElement('div');
    var linkButton = document.createElement('button');
    
    box.appendChild(linkButton);
    myTableDiv.appendChild(box);

    $(box).attr(                                //<div class="floating-box">Floating box</div>
        {
          "class": "table-floating-box"
        });                             
                                                    

    $(linkButton).attr(
        {
          "value": name,
          "class": "link-block-btn" 
          //"background-image:": ""
        });
    
    $(linkButton).html(name);
}