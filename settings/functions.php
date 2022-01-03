<?php
include("connection.php");

function fail()
{
    $message = '
        <div class="alert alert-danger" role="alert">
            Yapılan işlemde bir hata oluştu. Lütfen tekrar deneyin.
        </div>
    ';
    return $message;
}
