<?php
namespace crt;
$categories = opendir('category');
    $allcategories = [];
    $adsDict = [];
    while ($categoryName = readdir($categories))
    {
        if (is_dir('category/' . $categoryName) && $categoryName != '.' && $categoryName != '..') {
            $allcategories[] = $categoryName;
            $adsDict[$categoryName] = [];
        }
    }

    foreach ($allcategories as $categoryName)
    {
        $categoryDir = opendir('category/' . $categoryName);
        while ($fileName = readdir($categoryDir))
        {
            if ($fileName != '.' && $fileName != '..')
            {
                $filePathName = 'category/' . $categoryName . '/' . $fileName;
                $file = fopen($filePathName, 'r');
                $heading = substr($fileName, 0, strlen($fileName) );
                $email = fgets($file);
                $description = "";
                while (!feof($file)) {
                    $description .= fgets($file) . "<br>";
                }
                fclose($file);
                $adsDict[$categoryName][] = ['heading' => $heading, 'email' => $email, 'description' => $description];
            }
        }
    }
