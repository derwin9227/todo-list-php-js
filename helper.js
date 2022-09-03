function buscar(){
        let search = document.getElementById('search').value;
        if(!search){
            alert("you must fill in the search");
        }else {
            window.location.href = "index.php" + "?search=" + search;
            
            header('location: index.php');
        }
}
function editar(id){
    let edit = prompt('ingresa valor: ');
    window.location.href = "index.php" + "?idTask="+id+ "&newTask="+edit;
}
