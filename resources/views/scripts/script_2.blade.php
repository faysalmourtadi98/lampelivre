<script>
@if ($message=session()->get('message'))
Swal.fire('{{$message}}', '', 'info');
@endif
</script>
