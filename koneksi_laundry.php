<?php

$laundry = mysqli_connect('localhost', 'root', '', 'laundry_pwpb');

//check data laundry

if (mysqli_connect_errno()) {
    echo "gagal konek";
}