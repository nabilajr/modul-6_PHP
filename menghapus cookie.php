<html>
    <head>
        <titile>Hapus Cookie</title>
    </head>
    <body>
        <?php
        setcookie('nama_cookie', 'nilai_cookie');
        if (isset($_COOKIE['nama_cookie'])) {
            echo 'cookie di-set <br/>';

            //menghapus cookie, dengan masa berlaku 1 jam yang lalu setcookie('nama_ookie', '', time() - 1 * 3600);
            echo 'cookie dihapus';

        } else {
            echo 'unset';

        } ?>

        <p>
            Tekang Refresh (F5);
    </body>
</html>