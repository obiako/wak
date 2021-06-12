var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var id = button.getAttribute('id');
  console.log(id);
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  fetch('submit.php?type=get_frog&id='+id)
      .then(response => response.json())
      .then(data => {
        console.log(data);
        editModal.querySelector('#editweight').value=data.weight;
        editModal.querySelector('#editdescription').value=data.description;
        editModal.querySelector('#editcolour').value=data.colour;
        editModal.querySelector('#edithatch_date').value=data.hatch_date;
        editModal.querySelector('#editid').value=data.id;
      });

  // var modalBodyInput = editModal.querySelector('.modal-body input')
  //
  // modalTitle.textContent = 'New message to ' + id
  // modalBodyInput.value = id
})

// function editFrog(id) {
//
//   fetch('submit.php?type=get_frog&id='+id)
//       .then(response => response.json())
//       .then(data => console.log(data));
//   var editModal = document.getElementById('editModal');
//   editModal.modal();
// }