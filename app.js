
var ul=document.getElementById("list");
removeAll=document.getElementById("removeAll");
add=document.getElementById("add");
add.onclick=function(){
	addLi(ul);

}

var todos = []
var todosFromStorage;
function loadTodos(){
	if(localStorage.getItem('todos')){
		let todosFromStorage = JSON.parse(localStorage.getItem('todos'))
		console.log(todosFromStorage)
	}

 document.write(JSON.parse(localStorage.getItem('todos')));
}


 //console.log(todosFromStorage);

 
var main_product_id;
var items=JSON.parse(localStorage.getItem("todos")); 
       items=items.filter(function(item) {
                   if(main_product_id!=todos.id)
                   {
                     return todos;
                   }
       });
   localStorage.setItem("todos", JSON.stringify(todos));


loadTodos()

function addLi(targetUi)
{
	var inputText=document.getElementById("text").value;
	todos.push(inputText);
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

     console.log(todos)
     localStorage.setItem('todos', JSON.stringify(todos))
		
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