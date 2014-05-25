<?php
/**
 * searchform.php
 *              2013.10.14 treby
 */
?>
<form class="form-inline" role="form search" method="get" action="<?php echo home_url('/'); ?>">
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" name="s" id="search" placeholder="Keyword">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div>
  </div>
</form>

