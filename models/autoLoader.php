<?php
    spl_autoload_register("autoLoader");

    function autoLoader($className) {
        $baseNamespace = "Martin";
        $baseDirectory = "./Users/Martin/";
        $extension = ".php";

        // Remove the base namespace from the class name
        $relativeClassName = str_replace($baseNamespace . "\\", "", $className);

        // Convert namespace separator to directory separator
        $relativeClassPath = str_replace("\\", "/", $relativeClassName);

        $relativeClassPath = strtolower($relativeClassPath);

        $fullPath = $baseDirectory . "class." . $relativeClassPath . $extension;

        include_once $fullPath;
    }