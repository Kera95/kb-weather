<?php

namespace Admin;

class KBW_Router {

    private $core_dir;

    private $admin_dir;

    public function __construct() {

        $this->core_dir = KBWEATHER_PATH;
        $this->admin_dir = trailingslashit( $this->core_dir ) . 'admin';

    }

    public function kbw_get( $where="", $what="" ) {
        if ( $where && $what ) {

            $where = (string)$where;
            $what = (string)$what;

            switch( $where ) {

                case "root": { return $this->core_dir . '/' . $what . '.php'; break; }
                case "admin": { return $this->admin_dir . $what . '.php'; break; }
                case "templates": { return $this->admin_dir . '/templates' . $what . '.php'; break; }
                default: { return ""; }

            }

        } else { return false; }
    }

}

?>