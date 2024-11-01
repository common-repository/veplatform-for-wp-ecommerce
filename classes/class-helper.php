<?php

class VeHelper {

    private static $hasRun = 0;

    public static function veplatform_log($message, $level){
        $pluginDir = WP_PLUGIN_DIR . '/veplatformWPeCommerce';
        $file = $pluginDir . '/veplatform.log';
            if (is_writable($file) || (!file_exists($file) && is_writable($pluginDir)))
            {
                $formatted_message = '*' . $level . '* ' . "\t" . date('Y/m/d - H:i:s') . ': ' . $message . "\r\n";
                file_put_contents($file, $formatted_message, FILE_APPEND);
            }
        }

    public static function getHasRun(){
        return self::$hasRun;
    }

    public static function increaseHasRun(){
        self::$hasRun++;
    }
}
