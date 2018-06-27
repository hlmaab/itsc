// add blocks to software table
/*function addCell(name, link){
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
}*/

$('.dropdown-menu').on('click', function(event) {
	event.stopPropagation();
});

$('.selectpicker').selectpicker({
	container: 'body'
});

$('body').on('click', function(event) {
	var target = $(event.target);
	if (target.parents('.bootstrap-select').length) {
		event.stopPropagation();
		$('.bootstrap-select.open').removeClass('open');
	}
});	
