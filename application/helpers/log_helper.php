<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login/index');
    } else {
        
    }
}