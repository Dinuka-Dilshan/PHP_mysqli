function getByID(ID){
    return document.getElementById(ID);
};

const rows = getByID("count").value;
const table = getByID("table");


for(x=1;x<rows;x++){
        addClickEvent(x);
};
    
function addClickEvent(x){
    table.rows[x].addEventListener("click",()=>{
        getByID("id").value = table.rows[x].cells[1].innerHTML; 
        getByID("firstName").value = table.rows[x].cells[2].innerHTML.split(" ")[0]; 
        getByID("lastName").value = table.rows[x].cells[2].innerHTML.split(" ")[1]; 
        getByID("email").value = table.rows[x].cells[3].innerHTML; 
        getByID("phone").value = table.rows[x].cells[4].innerHTML; 
    });
}

getByID("reset").addEventListener("click",()=>{
    getByID("id").value = ""; 
    getByID("firstName").value = ""; 
    getByID("lastName").value = ""; 
    getByID("email").value = ""; 
    getByID("phone").value = ""; 
})
