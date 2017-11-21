

var ul=document.getElementById("list");
removeAll=document.getElementById("removeAll");
add=document.getElementById("add");
add.onclick=function(){
	addLi(ul);
	
}

function addLi(targetUi)
{
	var inputText=document.getElementById("text").value,
	li=document.createElement("li"),
	textNode=document.createTextNode(inputText+" "),
	removeButton=document.createElement("button");
	document.getElementById("text").value=" ";

    if(inputText.length===0)
	{  
		alert("!!EMPTY TEXT WAS GIVEN!!");
		return false;
	}

    removeButton.className='delete';
    removeButton.innerHTML="remove me!!";
    removeButton.setAttribute("onclick","delete_item(this);");

     li.appendChild(textNode);
     li.appendChild(removeButton);

     targetUi.appendChild(li);
     
		
}
function delete_item(item)
     {
     	var parent=item.parentElement;
     	parent.parentElement.removeChild(parent);
     }


    
     removeAll.onclick=function()
     {
     	ul.innerHTML=" "; 
     }

     





//alert("Hi");