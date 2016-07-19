<div id='failure' class="alert alert-danger alert-dismissible" role="alert" style='display:none'>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" style="font-size: 20px"></span>
  <?php //echo $this->Html->image('../img/icons/25x25_Exclamation.png'); ?>
  &nbsp;&nbsp;&nbsp;<?php echo $message; ?>
</div>

<!-- ########################################################################################## -->

<script type='text/javascript' language='javascript'>
    $(document).ready(function () {
        //código a ejecutar cuando el DOM está listo para recibir instrucciones.
        $('#failure').show('slow');
        $('#failure').delay(8000);
        $('#failure').hide('slow');          
    });
</script>