const form = document.getElementById("add-item-form")
const input = document.getElementById("name-item")
const itemscontainer = document.getElementById("tqedia-list")
const clean = document.getElementById("clear")

form.addEventListener('submit', (e) => {
    e.preventDefault()
Additem()
})


function Additem(item){
    var inputvalue = input.value

    if(item){
        inputvalue = item.text
    }
if(inputvalue){
    const displayitem = document.createElement('p')
    
        displayitem.classList.add('done')
   
    displayitem.innerText = inputvalue
    itemscontainer.appendChild(displayitem)
    input.value = ''
}
}

clean.addEventListener('click',()=> {
    document.querySelectorAll(".done").forEach(p => p.remove())
}
)

