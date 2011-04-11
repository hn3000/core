
<!-- indexer::stop -->
<div class="<?php echo $this->class; ?><?php if (!$this->tableless): ?> tableform<?php endif; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<form action="<?php echo $this->action; ?>" id="<?php echo $this->formId; ?>" method="post" enctype="<?php echo $this->enctype; ?>">
<div class="formbody">
<input type="hidden" name="FORM_SUBMIT" value="<?php echo $this->formId; ?>" />
<?php if (!$this->tableless): ?>
<table>
<?php echo $this->fields; ?>
  <tr class="<?php echo $this->rowLast; ?> row_last">
    <td class="col_0 col_first">&nbsp;</td>
    <td class="col_1 col_last"><div class="submit_container"><input type="submit" class="submit" value="<?php echo $this->slabel; ?>" /></div></td>
  </tr>
</table>
<?php else: ?>
<div class="fields">
<?php echo $this->fields; ?>
</div>
<div class="submit_container">
  <input type="submit" class="submit" value="<?php echo $this->slabel; ?>" />
</div>
<?php endif; ?>
</div>
</form>
<?php if ($this->hasError): ?>

<script>
window.scrollTo(null, ($('<?php echo $this->formId; ?>').getElement('p.error').getPosition().y - 20));
</script>
<?php endif; ?>

</div>
<!-- indexer::continue -->
