<?php
/**
 * Created by PhpStorm.
 * User: Daksh Sorathia
 * Date: 17-11-2017
 * Time: 03:08 PM
 */
function convert_number($number)
{
    $dictionary = array(
        0 => 'શૂન્ય',
        1 => 'એક',
        2 => 'બે',
        3 => 'ત્રણ',
        4 => 'ચાર',
        5 => 'પાંચ',
        6 => 'છ',
        7 => 'સાત',
        8 => 'આઠ',
        9 => 'નવ',
        10 => 'દસ',
        11 => 'અગિયાર',
        12 => 'બાર',
        13 => 'તેર',
        14 => 'ચૌદ',
        15 => 'પંદર',
        16 => 'સોળ',
        17 => 'સત્તર',
        18 => 'અઢાર',
        19 => 'ઓગણીસ',
        20 => 'વીસ',
        21 => 'એકવીસ',
        22 => 'બાવીસ',
        23 => 'તેવીસ',
        24 => 'ચોવીસ',
        25 => 'પચ્ચીસ',
        26 => 'છવીસ',
        27 => 'સત્તાવીસ',
        28 => 'અઠ્ઠાવીસ',
        29 => 'ઓગણત્રીસ',
        30 => 'ત્રીસ',
        31 => 'એકત્રીસ',
        32 => 'બત્રીસ',
        33 => 'તેત્રીસ',
        34 => 'ચોત્રીસ',
        35 => 'પાંત્રીસ',
        36 => 'છત્રીસ',
        37 => 'સડત્રીસ',
        38 => 'અડત્રીસ',
        39 => 'ઓગણચાલીસ',
        40 => 'ચાલીસ',
        41 => 'એકતાલીસ',
        42 => 'બેતાલીસ',
        43 => 'ત્રેતાલીસ',
        44 => 'ચુંમાલીસ',
        45 => 'પિસ્તાલીસ',
        46 => 'છેતાલીસ',
        47 => 'સુડતાલીસ',
        48 => 'અડતાલીસ',
        49 => 'ઓગણપચાસ',
        50 => 'પચાસ',
        51 => 'એકાવન',
        52 => 'બાવન',
        53 => 'ત્રેપન',
        54 => 'ત્રેપન',
        55 => 'પંચાવન',
        56 => 'છપ્પન',
        57 => 'સત્તાવન',
        58 => 'અઠ્ઠાવન',
        59 => 'ઓગણસાઠ',
        60 => 'સાઠ',
        61 => 'એકસઠ',
        62 => 'બાસઠ',
        63 => 'ત્રેસઠ',
        64 => 'ચોસઠ',
        65 => 'પાંસઠ',
        66 => 'છાસઠ',
        67 => 'સડસઠ',
        68 => 'અડસઠ',
        69 => 'અગણોસિત્તેર',
        70 => 'સિત્તેર',
        71 => 'એકોતેર',
        72 => 'બોતેર',
        73 => 'તોતેર',
        74 => 'ચુમોતેર',
        75 => 'પંચોતેર',
        76 => 'છોતેર',
        77 => 'સિત્યોતેર',
        78 => 'ઇઠ્યોતેર',
        79 => 'ઓગણાએંસી',
        80 => 'એંસી',
        81 => 'એક્યાસી',
        82 => 'બ્યાસી',
        83 => 'ત્યાસી',
        84 => 'ચોર્યાસી',
        85 => 'પંચાસી',
        86 => 'છ્યાસી',
        87 => 'સિત્યાસી',
        88 => 'ઈઠ્યાસી',
        89 => 'નેવ્યાસી',
        90 => 'નેવું',
        91 => 'એકાણું',
        92 => 'બાણું',
        93 => 'ત્રાણું',
        94 => 'ચોરાણું',
        95 => 'પંચાણું',
        96 => 'છન્નું',
        97 => 'સત્તાણું',
        98 => 'અઠ્ઠાણું',
        99 => 'નવ્વાણું',
        100 => 'સો',
        200 => 'બસો',
        300 => 'ત્રણસો ',
        400 => 'ચારસો',
        500 => 'પાંચસો',
        600 => 'છસો',
        700 => 'સાતસો',
        800 => 'આઠસો',
        900 => 'નવસો',
        1000 => 'હજાર',
        100000 => 'લાખ ',
        1000000 => 'મિલિયન',
        1000000000 => 'અબજ',
        1000000000000 => 'ટ્રિલિયન',
        1000000000000000 => 'ચતુર્ભુજ',
        1000000000000000000 => 'ક્વિન્ટીનયન',
    );

    if (!empty($dictionary[$number])) {
        if (substr($number, 0, 1) == 0) {
            $d = "";
        } elseif (strlen($number) == 1 || strlen($number) == 2) {
            $d = $dictionary[$number];
        } else {
            if (substr($number, 0, 1) == 1) {
                $d = $dictionary[substr($number, 0, 1)] . " " . $dictionary[$number];
            } else {
                $d = $dictionary[$number];
            }
        }
        return $d;
    } else {
        if (strlen($number) == 1) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
            } else {
                $d = $dictionary[$number];
            }
            return $d;
        } elseif (strlen($number) == 2) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
                $d1 = substr($number, 1, 1);
                return $d . " " . convert_number($d1);
            } else {
                $d = $dictionary[$number];
                return $d;
            }
        } elseif (strlen($number) == 3) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
            } else {
                if (substr($number, 0, 1) == 1) {
                    $d = $dictionary[substr($number, 0, 1)] . "  " . $dictionary[substr($number, 0, 1) . "00"];
                } else {
                    $d = $dictionary[substr($number, 0, 1) . "00"];
                }
            }
            return $d . " " . convert_number(substr($number, 1, 2));
        } elseif (strlen($number) == 4) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
            } else {
                $d = $dictionary[substr($number, 0, 1)] . " " . $dictionary['1000'];
            }
            return $d . " " . convert_number(substr($number, 1, 3));
        } elseif (strlen($number) == 5) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
                $d1 = substr($number, 1, 4);
            } else {
                $d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['1000'];
                $d1 = substr($number, 2, 3);
            }
            return $d . " " . convert_number($d1);
        } elseif (strlen($number) == 6) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
            } else {
                $d = $dictionary[substr($number, 0, 1)] . " " . $dictionary['100000'];
            }
            return $d . " " . convert_number(substr($number, 1, 5));
        } elseif (strlen($number) == 7) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
                $d1 = substr($number, 1, 6);
            } else {
                $d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['100000'];
                $d1 = substr($number, 2, 5);
            }
            return $d . " " . convert_number($d1);
        } elseif (strlen($number) == 8) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
                $d1 = substr($number, 1, 7);
            } else {
                $d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['1000000'];
                $d1 = substr($number, 2, 6);
            }
            return $d . " " . convert_number($d1);
        } elseif (strlen($number) == 9) {
            if (substr($number, 0, 1) == 0) {
                $d = "";
                $d1 = substr($number, 1, 8);
            } else {
                $d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['1000000'];
                $d1 = substr($number, 2, 7);
            }
            return $d . " " . convert_number($d1);
        }
    }
}

echo convert_number(100000000);