<?php 

const IMAGES_URL = 'assets/images/';
    const EXTRA_LIBS_URL = 'assets/extra-libs/';
    const LIBS_URL = 'assets/libs/';

    const CSS_URL = 'dist/css/';
    const JS_URL = 'dist/js/';

    const CONTROLLERS_URL = 'app/controllers/';
    const MODELS_URL = 'app/models/';
    const VIEWS_URL = 'app/views/';

    const LIBRARIES_URL = 'libraries/';

    function uploadFiles($name, $tmpName, $to) {
        move_uploaded_file($tmpName, IMAGES_URL . $to . "/" . $name);
        return $to . "/" . $name;
    }

    function checkLogin($message) {
        if(!isset($_COOKIE["maUser"])) {
            echo 
            "<script>
                alert('$message');
                window.location.href = 'index.php?url=dangnhap';
            </script>";
        }
        return true;
    }