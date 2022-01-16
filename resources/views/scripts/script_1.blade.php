  <script>
function message(){
    Swal.fire({
    @if ($message=session()->get('message'))
    title: "{{$message }}",
    @endif
    showDenyButton: true,
    showCancelButton: true,
    allowOutsideClick: false,
    confirmButtonText: `OUI`,
    denyButtonText: `NON`,
  }).then((result) => {
    if (result.isConfirmed) { 
        document.getElementById("form").submit()
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
}
</script>