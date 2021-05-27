<?php

class FlashMsg
{

    public static function setFlash($msg, $aksi, $type)
    {
        $_SESSION['flash'] = [

            'msg' => $msg,
            'aksi' => $aksi,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-'.$_SESSION['flash']['type'].' alert-dismissible fade show" role="alert">
            <strong>Data mahasiswa</strong> '.$_SESSION['flash']['msg'].' '.$_SESSION['flash']['aksi'].'.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          unset($_SESSION['flash']);
        }
    }
}
