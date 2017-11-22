
var ul=document.getElementById("list");
removeAll=document.getElementById("removeAll");
add=document.getElementById("add");
add.onclick=function(){
	addLi(ul);

}

var todos = [];
var todosFromStorage;
function loadTodos(){
	if(localStorage.getItem('todos')){
		let todosFromStorage = JSON.parse(localStorage.getItem('todos'));
		console.log(todosFromStorage);
    //document.write(JSON.parse(localStorage.getItem('todos',)));
    //document.write(JSON.parse(localStorage.getItem('id')));
    const LiTemplate=`<li>${JSON.parse(localStorage.getItem('todos'))}</li>`;
    document.write(LiTemplate);
    const LiTemplate1=`<li>${JSON.parse(localStorage.getItem('id'))}</li>`;
    document.write(LiTemplate1);
    console.log(todos);
    console.log(id);
	} 
}
//console.log(todosFromStorage);
//document.write(console.log(todosFromStorage));
 
/*var main_product_id;
var items=JSON.parse(localStorage.getItem("todos")); 
       items=items.filter(function(item) {
                   if(main_product_id!=todos.id)
                   {
                     return todos;
                   }
       });
   localStorage.setItem("todos", JSON.stringify(todos));
*/


//const LiTemplate = `<li>${name}</li>`


loadTodos()

var id=[]
function addLi(targetUi)
{
  var temp_id=+new Date()  
	var inputText=document.getElementById("text").value;
	todos.push(inputText);
  id.push(temp_id);
	li=document.createElement("li"),
	textNode=document.createTextNode("TEXT = "+inputText+",  id  =  "+temp_id),
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
     localStorage.setItem('todos',JSON.stringify(todos))
     localStorage.setItem('id', JSON.stringify(id))
		
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