<?php

function plain( $str )
{
    return htmlspecialchars( $str, ENT_QUOTES );
}