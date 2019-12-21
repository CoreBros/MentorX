<?php

$data = '<?php echo \'[[rand_str]]\';?>';
file_put_contents('[[suphp_file]]', $data);

?>