<?php
shell_exec("python /var/www/html/fpt/ctpn/demo_pb.py");
shell_exec("tesseract /var/www/html/fpt/Images/* output -l vie");
?>
<img src="ok.gif" width="40" height="40" alt="Ok"/>
