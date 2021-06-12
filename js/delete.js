function deleteFrog(id) {
    if(confirm('Are you sure you want to delete this frog?')){
        fetch('submit.php?type=delete_frog&id='+id)
      .then(response => response.json())
      .then(data => {
          console.log(data);
      if(data==true){
          location.reload();
      }
      });
    }
}