<?php
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{1,4}$#", "a@aa.com"))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>