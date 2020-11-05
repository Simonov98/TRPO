<?php
include "core/EquationInterface.php";
include "core/LogInterface.php";
include "core/LogAbstract.php";
include "Simonov/Equ.php";
include "Simonov/EquThird.php";
include "Simonov/MyLog.php";
include "Simonov/SimonovException.php";
ini_set("display_errors", 1);
error_reporting(-1);

try {
    $et = new \Simonov\EquThird();
    $data = array();
    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . " корень: ";
        $data[] = readline();
    }
    $da = $data[0];
    $db = $data[1];
    $dc = $data[2];

    $t = $et->solve($da, $db, $dc);
    $str = implode(", ", $t);
    \Simonov\MyLog::log("\nКорни уравнения: " . $str);

} catch (\Simonov\SimonovException $e) {
    \Simonov\MyLog::log($e->getMessage());
}

\Simonov\MyLog::write();