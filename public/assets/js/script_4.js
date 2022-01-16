function tagir(){
  Swal.fire({
    title: "<?php  echo session()->get('message') ?>",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Save`,
    denyButtonText: `Don't save`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) { 
      document.getElementById("form").submit().then(function() {
      Swal.fire('Saved!', '', 'success')});
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
}
