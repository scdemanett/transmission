<div role="toolbar" class="btn-toolbar">
  <div role="group" class="btn-group  pull-right">
    <a role="button" class="btn btn-default" href="?op=logs" onclick="$('#pleaseWaitDialog').modal(); return true"><span class="glyphicon glyphicon-refresh"></span> Reload logs</a>
  </div>
</div>
<?php foreach ($applogs as $applog) { ?>
  <p>This is the content of <code><?php echo $applog; ?></code>:</p>
  <pre class="pre-scrollable">
<?php if (substr($applog, 0, 1) === ":") {
  echo shell_exec(substr($applog, 1));
} else {
  echo file_get_contents($applog);
} ?>
  </pre>
<?php } ?>