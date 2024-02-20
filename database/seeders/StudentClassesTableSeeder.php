<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('student_classes')->delete();
        
        \DB::table('student_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 1,
                'date_enrolled' => 2024,
                'student_id' => 317,
                'class_id' => 1408,
            ),
            1 => 
            array (
                'sc_id' => 2,
                'date_enrolled' => 2024,
                'student_id' => 1019,
                'class_id' => 135,
            ),
            2 => 
            array (
                'sc_id' => 3,
                'date_enrolled' => 2024,
                'student_id' => 187,
                'class_id' => 564,
            ),
            3 => 
            array (
                'sc_id' => 4,
                'date_enrolled' => 2024,
                'student_id' => 1177,
                'class_id' => 541,
            ),
            4 => 
            array (
                'sc_id' => 5,
                'date_enrolled' => 2024,
                'student_id' => 900,
                'class_id' => 1035,
            ),
            5 => 
            array (
                'sc_id' => 6,
                'date_enrolled' => 2024,
                'student_id' => 1125,
                'class_id' => 596,
            ),
            6 => 
            array (
                'sc_id' => 7,
                'date_enrolled' => 2024,
                'student_id' => 469,
                'class_id' => 581,
            ),
            7 => 
            array (
                'sc_id' => 8,
                'date_enrolled' => 2024,
                'student_id' => 568,
                'class_id' => 1051,
            ),
            8 => 
            array (
                'sc_id' => 9,
                'date_enrolled' => 2024,
                'student_id' => 1467,
                'class_id' => 1284,
            ),
            9 => 
            array (
                'sc_id' => 10,
                'date_enrolled' => 2024,
                'student_id' => 1575,
                'class_id' => 546,
            ),
            10 => 
            array (
                'sc_id' => 11,
                'date_enrolled' => 2024,
                'student_id' => 1017,
                'class_id' => 1444,
            ),
            11 => 
            array (
                'sc_id' => 12,
                'date_enrolled' => 2024,
                'student_id' => 1201,
                'class_id' => 1259,
            ),
            12 => 
            array (
                'sc_id' => 13,
                'date_enrolled' => 2024,
                'student_id' => 1096,
                'class_id' => 1223,
            ),
            13 => 
            array (
                'sc_id' => 14,
                'date_enrolled' => 2024,
                'student_id' => 340,
                'class_id' => 632,
            ),
            14 => 
            array (
                'sc_id' => 15,
                'date_enrolled' => 2024,
                'student_id' => 353,
                'class_id' => 364,
            ),
            15 => 
            array (
                'sc_id' => 16,
                'date_enrolled' => 2024,
                'student_id' => 731,
                'class_id' => 885,
            ),
            16 => 
            array (
                'sc_id' => 17,
                'date_enrolled' => 2024,
                'student_id' => 1366,
                'class_id' => 1168,
            ),
            17 => 
            array (
                'sc_id' => 18,
                'date_enrolled' => 2024,
                'student_id' => 1089,
                'class_id' => 1010,
            ),
            18 => 
            array (
                'sc_id' => 19,
                'date_enrolled' => 2024,
                'student_id' => 678,
                'class_id' => 37,
            ),
            19 => 
            array (
                'sc_id' => 20,
                'date_enrolled' => 2024,
                'student_id' => 741,
                'class_id' => 673,
            ),
            20 => 
            array (
                'sc_id' => 21,
                'date_enrolled' => 2024,
                'student_id' => 1370,
                'class_id' => 100,
            ),
            21 => 
            array (
                'sc_id' => 22,
                'date_enrolled' => 2024,
                'student_id' => 1066,
                'class_id' => 476,
            ),
            22 => 
            array (
                'sc_id' => 23,
                'date_enrolled' => 2024,
                'student_id' => 1303,
                'class_id' => 235,
            ),
            23 => 
            array (
                'sc_id' => 24,
                'date_enrolled' => 2024,
                'student_id' => 402,
                'class_id' => 384,
            ),
            24 => 
            array (
                'sc_id' => 25,
                'date_enrolled' => 2024,
                'student_id' => 404,
                'class_id' => 625,
            ),
            25 => 
            array (
                'sc_id' => 26,
                'date_enrolled' => 2024,
                'student_id' => 458,
                'class_id' => 1289,
            ),
            26 => 
            array (
                'sc_id' => 27,
                'date_enrolled' => 2024,
                'student_id' => 1393,
                'class_id' => 988,
            ),
            27 => 
            array (
                'sc_id' => 28,
                'date_enrolled' => 2024,
                'student_id' => 1538,
                'class_id' => 1152,
            ),
            28 => 
            array (
                'sc_id' => 29,
                'date_enrolled' => 2024,
                'student_id' => 1334,
                'class_id' => 26,
            ),
            29 => 
            array (
                'sc_id' => 30,
                'date_enrolled' => 2024,
                'student_id' => 1018,
                'class_id' => 1364,
            ),
            30 => 
            array (
                'sc_id' => 31,
                'date_enrolled' => 2024,
                'student_id' => 190,
                'class_id' => 1439,
            ),
            31 => 
            array (
                'sc_id' => 32,
                'date_enrolled' => 2024,
                'student_id' => 596,
                'class_id' => 490,
            ),
            32 => 
            array (
                'sc_id' => 33,
                'date_enrolled' => 2024,
                'student_id' => 775,
                'class_id' => 1450,
            ),
            33 => 
            array (
                'sc_id' => 34,
                'date_enrolled' => 2024,
                'student_id' => 595,
                'class_id' => 1361,
            ),
            34 => 
            array (
                'sc_id' => 35,
                'date_enrolled' => 2024,
                'student_id' => 636,
                'class_id' => 1246,
            ),
            35 => 
            array (
                'sc_id' => 36,
                'date_enrolled' => 2024,
                'student_id' => 73,
                'class_id' => 165,
            ),
            36 => 
            array (
                'sc_id' => 37,
                'date_enrolled' => 2024,
                'student_id' => 471,
                'class_id' => 913,
            ),
            37 => 
            array (
                'sc_id' => 38,
                'date_enrolled' => 2024,
                'student_id' => 1342,
                'class_id' => 1420,
            ),
            38 => 
            array (
                'sc_id' => 39,
                'date_enrolled' => 2024,
                'student_id' => 183,
                'class_id' => 296,
            ),
            39 => 
            array (
                'sc_id' => 40,
                'date_enrolled' => 2024,
                'student_id' => 1241,
                'class_id' => 786,
            ),
            40 => 
            array (
                'sc_id' => 41,
                'date_enrolled' => 2024,
                'student_id' => 1288,
                'class_id' => 1528,
            ),
            41 => 
            array (
                'sc_id' => 42,
                'date_enrolled' => 2024,
                'student_id' => 491,
                'class_id' => 1440,
            ),
            42 => 
            array (
                'sc_id' => 43,
                'date_enrolled' => 2024,
                'student_id' => 1274,
                'class_id' => 482,
            ),
            43 => 
            array (
                'sc_id' => 44,
                'date_enrolled' => 2024,
                'student_id' => 387,
                'class_id' => 1593,
            ),
            44 => 
            array (
                'sc_id' => 45,
                'date_enrolled' => 2024,
                'student_id' => 177,
                'class_id' => 469,
            ),
            45 => 
            array (
                'sc_id' => 46,
                'date_enrolled' => 2024,
                'student_id' => 908,
                'class_id' => 1591,
            ),
            46 => 
            array (
                'sc_id' => 47,
                'date_enrolled' => 2024,
                'student_id' => 794,
                'class_id' => 784,
            ),
            47 => 
            array (
                'sc_id' => 48,
                'date_enrolled' => 2024,
                'student_id' => 1445,
                'class_id' => 854,
            ),
            48 => 
            array (
                'sc_id' => 49,
                'date_enrolled' => 2024,
                'student_id' => 412,
                'class_id' => 436,
            ),
            49 => 
            array (
                'sc_id' => 50,
                'date_enrolled' => 2024,
                'student_id' => 1560,
                'class_id' => 1189,
            ),
            50 => 
            array (
                'sc_id' => 51,
                'date_enrolled' => 2024,
                'student_id' => 34,
                'class_id' => 1525,
            ),
            51 => 
            array (
                'sc_id' => 52,
                'date_enrolled' => 2024,
                'student_id' => 1466,
                'class_id' => 909,
            ),
            52 => 
            array (
                'sc_id' => 53,
                'date_enrolled' => 2024,
                'student_id' => 799,
                'class_id' => 335,
            ),
            53 => 
            array (
                'sc_id' => 54,
                'date_enrolled' => 2024,
                'student_id' => 686,
                'class_id' => 860,
            ),
            54 => 
            array (
                'sc_id' => 55,
                'date_enrolled' => 2024,
                'student_id' => 247,
                'class_id' => 530,
            ),
            55 => 
            array (
                'sc_id' => 56,
                'date_enrolled' => 2024,
                'student_id' => 860,
                'class_id' => 851,
            ),
            56 => 
            array (
                'sc_id' => 57,
                'date_enrolled' => 2024,
                'student_id' => 114,
                'class_id' => 231,
            ),
            57 => 
            array (
                'sc_id' => 58,
                'date_enrolled' => 2024,
                'student_id' => 1574,
                'class_id' => 1476,
            ),
            58 => 
            array (
                'sc_id' => 59,
                'date_enrolled' => 2024,
                'student_id' => 847,
                'class_id' => 166,
            ),
            59 => 
            array (
                'sc_id' => 60,
                'date_enrolled' => 2024,
                'student_id' => 106,
                'class_id' => 742,
            ),
            60 => 
            array (
                'sc_id' => 61,
                'date_enrolled' => 2024,
                'student_id' => 1567,
                'class_id' => 1370,
            ),
            61 => 
            array (
                'sc_id' => 62,
                'date_enrolled' => 2024,
                'student_id' => 1081,
                'class_id' => 194,
            ),
            62 => 
            array (
                'sc_id' => 63,
                'date_enrolled' => 2024,
                'student_id' => 699,
                'class_id' => 687,
            ),
            63 => 
            array (
                'sc_id' => 64,
                'date_enrolled' => 2024,
                'student_id' => 1284,
                'class_id' => 315,
            ),
            64 => 
            array (
                'sc_id' => 65,
                'date_enrolled' => 2024,
                'student_id' => 935,
                'class_id' => 545,
            ),
            65 => 
            array (
                'sc_id' => 66,
                'date_enrolled' => 2024,
                'student_id' => 934,
                'class_id' => 1534,
            ),
            66 => 
            array (
                'sc_id' => 67,
                'date_enrolled' => 2024,
                'student_id' => 230,
                'class_id' => 222,
            ),
            67 => 
            array (
                'sc_id' => 68,
                'date_enrolled' => 2024,
                'student_id' => 237,
                'class_id' => 922,
            ),
            68 => 
            array (
                'sc_id' => 69,
                'date_enrolled' => 2024,
                'student_id' => 1534,
                'class_id' => 1305,
            ),
            69 => 
            array (
                'sc_id' => 70,
                'date_enrolled' => 2024,
                'student_id' => 749,
                'class_id' => 663,
            ),
            70 => 
            array (
                'sc_id' => 71,
                'date_enrolled' => 2024,
                'student_id' => 1028,
                'class_id' => 790,
            ),
            71 => 
            array (
                'sc_id' => 72,
                'date_enrolled' => 2024,
                'student_id' => 1152,
                'class_id' => 108,
            ),
            72 => 
            array (
                'sc_id' => 73,
                'date_enrolled' => 2024,
                'student_id' => 165,
                'class_id' => 474,
            ),
            73 => 
            array (
                'sc_id' => 74,
                'date_enrolled' => 2024,
                'student_id' => 322,
                'class_id' => 631,
            ),
            74 => 
            array (
                'sc_id' => 75,
                'date_enrolled' => 2024,
                'student_id' => 764,
                'class_id' => 1045,
            ),
            75 => 
            array (
                'sc_id' => 76,
                'date_enrolled' => 2024,
                'student_id' => 1385,
                'class_id' => 566,
            ),
            76 => 
            array (
                'sc_id' => 77,
                'date_enrolled' => 2024,
                'student_id' => 1222,
                'class_id' => 1041,
            ),
            77 => 
            array (
                'sc_id' => 78,
                'date_enrolled' => 2024,
                'student_id' => 1404,
                'class_id' => 411,
            ),
            78 => 
            array (
                'sc_id' => 79,
                'date_enrolled' => 2024,
                'student_id' => 1265,
                'class_id' => 1424,
            ),
            79 => 
            array (
                'sc_id' => 80,
                'date_enrolled' => 2024,
                'student_id' => 745,
                'class_id' => 1015,
            ),
            80 => 
            array (
                'sc_id' => 81,
                'date_enrolled' => 2024,
                'student_id' => 54,
                'class_id' => 1413,
            ),
            81 => 
            array (
                'sc_id' => 82,
                'date_enrolled' => 2024,
                'student_id' => 1048,
                'class_id' => 1254,
            ),
            82 => 
            array (
                'sc_id' => 83,
                'date_enrolled' => 2024,
                'student_id' => 1053,
                'class_id' => 454,
            ),
            83 => 
            array (
                'sc_id' => 84,
                'date_enrolled' => 2024,
                'student_id' => 1225,
                'class_id' => 162,
            ),
            84 => 
            array (
                'sc_id' => 85,
                'date_enrolled' => 2024,
                'student_id' => 157,
                'class_id' => 1459,
            ),
            85 => 
            array (
                'sc_id' => 86,
                'date_enrolled' => 2024,
                'student_id' => 1431,
                'class_id' => 858,
            ),
            86 => 
            array (
                'sc_id' => 87,
                'date_enrolled' => 2024,
                'student_id' => 423,
                'class_id' => 747,
            ),
            87 => 
            array (
                'sc_id' => 88,
                'date_enrolled' => 2024,
                'student_id' => 395,
                'class_id' => 1372,
            ),
            88 => 
            array (
                'sc_id' => 89,
                'date_enrolled' => 2024,
                'student_id' => 668,
                'class_id' => 640,
            ),
            89 => 
            array (
                'sc_id' => 90,
                'date_enrolled' => 2024,
                'student_id' => 1389,
                'class_id' => 1527,
            ),
            90 => 
            array (
                'sc_id' => 91,
                'date_enrolled' => 2024,
                'student_id' => 263,
                'class_id' => 94,
            ),
            91 => 
            array (
                'sc_id' => 92,
                'date_enrolled' => 2024,
                'student_id' => 312,
                'class_id' => 789,
            ),
            92 => 
            array (
                'sc_id' => 93,
                'date_enrolled' => 2024,
                'student_id' => 1338,
                'class_id' => 1565,
            ),
            93 => 
            array (
                'sc_id' => 94,
                'date_enrolled' => 2024,
                'student_id' => 822,
                'class_id' => 1396,
            ),
            94 => 
            array (
                'sc_id' => 95,
                'date_enrolled' => 2024,
                'student_id' => 1525,
                'class_id' => 1177,
            ),
            95 => 
            array (
                'sc_id' => 96,
                'date_enrolled' => 2024,
                'student_id' => 1077,
                'class_id' => 683,
            ),
            96 => 
            array (
                'sc_id' => 97,
                'date_enrolled' => 2024,
                'student_id' => 1112,
                'class_id' => 869,
            ),
            97 => 
            array (
                'sc_id' => 98,
                'date_enrolled' => 2024,
                'student_id' => 864,
                'class_id' => 1312,
            ),
            98 => 
            array (
                'sc_id' => 99,
                'date_enrolled' => 2024,
                'student_id' => 1181,
                'class_id' => 672,
            ),
            99 => 
            array (
                'sc_id' => 100,
                'date_enrolled' => 2024,
                'student_id' => 1275,
                'class_id' => 422,
            ),
            100 => 
            array (
                'sc_id' => 101,
                'date_enrolled' => 2024,
                'student_id' => 446,
                'class_id' => 1226,
            ),
            101 => 
            array (
                'sc_id' => 102,
                'date_enrolled' => 2024,
                'student_id' => 758,
                'class_id' => 1448,
            ),
            102 => 
            array (
                'sc_id' => 103,
                'date_enrolled' => 2024,
                'student_id' => 607,
                'class_id' => 757,
            ),
            103 => 
            array (
                'sc_id' => 104,
                'date_enrolled' => 2024,
                'student_id' => 1434,
                'class_id' => 739,
            ),
            104 => 
            array (
                'sc_id' => 105,
                'date_enrolled' => 2024,
                'student_id' => 201,
                'class_id' => 963,
            ),
            105 => 
            array (
                'sc_id' => 106,
                'date_enrolled' => 2024,
                'student_id' => 663,
                'class_id' => 795,
            ),
            106 => 
            array (
                'sc_id' => 107,
                'date_enrolled' => 2024,
                'student_id' => 748,
                'class_id' => 75,
            ),
            107 => 
            array (
                'sc_id' => 108,
                'date_enrolled' => 2024,
                'student_id' => 629,
                'class_id' => 948,
            ),
            108 => 
            array (
                'sc_id' => 109,
                'date_enrolled' => 2024,
                'student_id' => 801,
                'class_id' => 376,
            ),
            109 => 
            array (
                'sc_id' => 110,
                'date_enrolled' => 2024,
                'student_id' => 613,
                'class_id' => 65,
            ),
            110 => 
            array (
                'sc_id' => 111,
                'date_enrolled' => 2024,
                'student_id' => 221,
                'class_id' => 1598,
            ),
            111 => 
            array (
                'sc_id' => 112,
                'date_enrolled' => 2024,
                'student_id' => 419,
                'class_id' => 1308,
            ),
            112 => 
            array (
                'sc_id' => 113,
                'date_enrolled' => 2024,
                'student_id' => 293,
                'class_id' => 902,
            ),
            113 => 
            array (
                'sc_id' => 114,
                'date_enrolled' => 2024,
                'student_id' => 1102,
                'class_id' => 28,
            ),
            114 => 
            array (
                'sc_id' => 115,
                'date_enrolled' => 2024,
                'student_id' => 503,
                'class_id' => 844,
            ),
            115 => 
            array (
                'sc_id' => 116,
                'date_enrolled' => 2024,
                'student_id' => 1473,
                'class_id' => 221,
            ),
            116 => 
            array (
                'sc_id' => 117,
                'date_enrolled' => 2024,
                'student_id' => 82,
                'class_id' => 1464,
            ),
            117 => 
            array (
                'sc_id' => 118,
                'date_enrolled' => 2024,
                'student_id' => 292,
                'class_id' => 762,
            ),
            118 => 
            array (
                'sc_id' => 119,
                'date_enrolled' => 2024,
                'student_id' => 773,
                'class_id' => 1266,
            ),
            119 => 
            array (
                'sc_id' => 120,
                'date_enrolled' => 2024,
                'student_id' => 476,
                'class_id' => 962,
            ),
            120 => 
            array (
                'sc_id' => 121,
                'date_enrolled' => 2024,
                'student_id' => 630,
                'class_id' => 234,
            ),
            121 => 
            array (
                'sc_id' => 122,
                'date_enrolled' => 2024,
                'student_id' => 1427,
                'class_id' => 1596,
            ),
            122 => 
            array (
                'sc_id' => 123,
                'date_enrolled' => 2024,
                'student_id' => 792,
                'class_id' => 1311,
            ),
            123 => 
            array (
                'sc_id' => 124,
                'date_enrolled' => 2024,
                'student_id' => 938,
                'class_id' => 576,
            ),
            124 => 
            array (
                'sc_id' => 125,
                'date_enrolled' => 2024,
                'student_id' => 1402,
                'class_id' => 146,
            ),
            125 => 
            array (
                'sc_id' => 126,
                'date_enrolled' => 2024,
                'student_id' => 993,
                'class_id' => 255,
            ),
            126 => 
            array (
                'sc_id' => 127,
                'date_enrolled' => 2024,
                'student_id' => 991,
                'class_id' => 498,
            ),
            127 => 
            array (
                'sc_id' => 128,
                'date_enrolled' => 2024,
                'student_id' => 565,
                'class_id' => 862,
            ),
            128 => 
            array (
                'sc_id' => 129,
                'date_enrolled' => 2024,
                'student_id' => 666,
                'class_id' => 1382,
            ),
            129 => 
            array (
                'sc_id' => 130,
                'date_enrolled' => 2024,
                'student_id' => 172,
                'class_id' => 693,
            ),
            130 => 
            array (
                'sc_id' => 131,
                'date_enrolled' => 2024,
                'student_id' => 740,
                'class_id' => 938,
            ),
            131 => 
            array (
                'sc_id' => 132,
                'date_enrolled' => 2024,
                'student_id' => 255,
                'class_id' => 420,
            ),
            132 => 
            array (
                'sc_id' => 133,
                'date_enrolled' => 2024,
                'student_id' => 1200,
                'class_id' => 615,
            ),
            133 => 
            array (
                'sc_id' => 134,
                'date_enrolled' => 2024,
                'student_id' => 215,
                'class_id' => 248,
            ),
            134 => 
            array (
                'sc_id' => 135,
                'date_enrolled' => 2024,
                'student_id' => 846,
                'class_id' => 608,
            ),
            135 => 
            array (
                'sc_id' => 136,
                'date_enrolled' => 2024,
                'student_id' => 1117,
                'class_id' => 298,
            ),
            136 => 
            array (
                'sc_id' => 137,
                'date_enrolled' => 2024,
                'student_id' => 324,
                'class_id' => 843,
            ),
            137 => 
            array (
                'sc_id' => 138,
                'date_enrolled' => 2024,
                'student_id' => 978,
                'class_id' => 1600,
            ),
            138 => 
            array (
                'sc_id' => 139,
                'date_enrolled' => 2024,
                'student_id' => 481,
                'class_id' => 1104,
            ),
            139 => 
            array (
                'sc_id' => 140,
                'date_enrolled' => 2024,
                'student_id' => 655,
                'class_id' => 478,
            ),
            140 => 
            array (
                'sc_id' => 141,
                'date_enrolled' => 2024,
                'student_id' => 207,
                'class_id' => 850,
            ),
            141 => 
            array (
                'sc_id' => 142,
                'date_enrolled' => 2024,
                'student_id' => 1115,
                'class_id' => 730,
            ),
            142 => 
            array (
                'sc_id' => 143,
                'date_enrolled' => 2024,
                'student_id' => 222,
                'class_id' => 414,
            ),
            143 => 
            array (
                'sc_id' => 144,
                'date_enrolled' => 2024,
                'student_id' => 209,
                'class_id' => 626,
            ),
            144 => 
            array (
                'sc_id' => 145,
                'date_enrolled' => 2024,
                'student_id' => 386,
                'class_id' => 1481,
            ),
            145 => 
            array (
                'sc_id' => 146,
                'date_enrolled' => 2024,
                'student_id' => 783,
                'class_id' => 448,
            ),
            146 => 
            array (
                'sc_id' => 147,
                'date_enrolled' => 2024,
                'student_id' => 313,
                'class_id' => 1309,
            ),
            147 => 
            array (
                'sc_id' => 148,
                'date_enrolled' => 2024,
                'student_id' => 587,
                'class_id' => 371,
            ),
            148 => 
            array (
                'sc_id' => 149,
                'date_enrolled' => 2024,
                'student_id' => 782,
                'class_id' => 460,
            ),
            149 => 
            array (
                'sc_id' => 150,
                'date_enrolled' => 2024,
                'student_id' => 723,
                'class_id' => 78,
            ),
            150 => 
            array (
                'sc_id' => 151,
                'date_enrolled' => 2024,
                'student_id' => 45,
                'class_id' => 1500,
            ),
            151 => 
            array (
                'sc_id' => 152,
                'date_enrolled' => 2024,
                'student_id' => 854,
                'class_id' => 660,
            ),
            152 => 
            array (
                'sc_id' => 153,
                'date_enrolled' => 2024,
                'student_id' => 914,
                'class_id' => 261,
            ),
            153 => 
            array (
                'sc_id' => 154,
                'date_enrolled' => 2024,
                'student_id' => 825,
                'class_id' => 399,
            ),
            154 => 
            array (
                'sc_id' => 155,
                'date_enrolled' => 2024,
                'student_id' => 184,
                'class_id' => 74,
            ),
            155 => 
            array (
                'sc_id' => 156,
                'date_enrolled' => 2024,
                'student_id' => 1313,
                'class_id' => 1062,
            ),
            156 => 
            array (
                'sc_id' => 157,
                'date_enrolled' => 2024,
                'student_id' => 1227,
                'class_id' => 1114,
            ),
            157 => 
            array (
                'sc_id' => 158,
                'date_enrolled' => 2024,
                'student_id' => 113,
                'class_id' => 1108,
            ),
            158 => 
            array (
                'sc_id' => 159,
                'date_enrolled' => 2024,
                'student_id' => 232,
                'class_id' => 1514,
            ),
            159 => 
            array (
                'sc_id' => 160,
                'date_enrolled' => 2024,
                'student_id' => 1189,
                'class_id' => 1221,
            ),
            160 => 
            array (
                'sc_id' => 161,
                'date_enrolled' => 2024,
                'student_id' => 104,
                'class_id' => 8,
            ),
            161 => 
            array (
                'sc_id' => 162,
                'date_enrolled' => 2024,
                'student_id' => 1085,
                'class_id' => 1442,
            ),
            162 => 
            array (
                'sc_id' => 163,
                'date_enrolled' => 2024,
                'student_id' => 1436,
                'class_id' => 77,
            ),
            163 => 
            array (
                'sc_id' => 164,
                'date_enrolled' => 2024,
                'student_id' => 1121,
                'class_id' => 801,
            ),
            164 => 
            array (
                'sc_id' => 165,
                'date_enrolled' => 2024,
                'student_id' => 632,
                'class_id' => 69,
            ),
            165 => 
            array (
                'sc_id' => 166,
                'date_enrolled' => 2024,
                'student_id' => 496,
                'class_id' => 1474,
            ),
            166 => 
            array (
                'sc_id' => 167,
                'date_enrolled' => 2024,
                'student_id' => 1039,
                'class_id' => 536,
            ),
            167 => 
            array (
                'sc_id' => 168,
                'date_enrolled' => 2024,
                'student_id' => 706,
                'class_id' => 590,
            ),
            168 => 
            array (
                'sc_id' => 169,
                'date_enrolled' => 2024,
                'student_id' => 192,
                'class_id' => 1027,
            ),
            169 => 
            array (
                'sc_id' => 170,
                'date_enrolled' => 2024,
                'student_id' => 1203,
                'class_id' => 849,
            ),
            170 => 
            array (
                'sc_id' => 171,
                'date_enrolled' => 2024,
                'student_id' => 487,
                'class_id' => 1515,
            ),
            171 => 
            array (
                'sc_id' => 172,
                'date_enrolled' => 2024,
                'student_id' => 1091,
                'class_id' => 852,
            ),
            172 => 
            array (
                'sc_id' => 173,
                'date_enrolled' => 2024,
                'student_id' => 694,
                'class_id' => 1337,
            ),
            173 => 
            array (
                'sc_id' => 174,
                'date_enrolled' => 2024,
                'student_id' => 466,
                'class_id' => 961,
            ),
            174 => 
            array (
                'sc_id' => 175,
                'date_enrolled' => 2024,
                'student_id' => 409,
                'class_id' => 1046,
            ),
            175 => 
            array (
                'sc_id' => 176,
                'date_enrolled' => 2024,
                'student_id' => 1191,
                'class_id' => 598,
            ),
            176 => 
            array (
                'sc_id' => 177,
                'date_enrolled' => 2024,
                'student_id' => 211,
                'class_id' => 1376,
            ),
            177 => 
            array (
                'sc_id' => 178,
                'date_enrolled' => 2024,
                'student_id' => 526,
                'class_id' => 1212,
            ),
            178 => 
            array (
                'sc_id' => 179,
                'date_enrolled' => 2024,
                'student_id' => 892,
                'class_id' => 191,
            ),
            179 => 
            array (
                'sc_id' => 180,
                'date_enrolled' => 2024,
                'student_id' => 178,
                'class_id' => 1023,
            ),
            180 => 
            array (
                'sc_id' => 181,
                'date_enrolled' => 2024,
                'student_id' => 1496,
                'class_id' => 1471,
            ),
            181 => 
            array (
                'sc_id' => 182,
                'date_enrolled' => 2024,
                'student_id' => 693,
                'class_id' => 115,
            ),
            182 => 
            array (
                'sc_id' => 183,
                'date_enrolled' => 2024,
                'student_id' => 865,
                'class_id' => 224,
            ),
            183 => 
            array (
                'sc_id' => 184,
                'date_enrolled' => 2024,
                'student_id' => 1076,
                'class_id' => 554,
            ),
            184 => 
            array (
                'sc_id' => 185,
                'date_enrolled' => 2024,
                'student_id' => 850,
                'class_id' => 1210,
            ),
            185 => 
            array (
                'sc_id' => 186,
                'date_enrolled' => 2024,
                'student_id' => 624,
                'class_id' => 567,
            ),
            186 => 
            array (
                'sc_id' => 187,
                'date_enrolled' => 2024,
                'student_id' => 1026,
                'class_id' => 66,
            ),
            187 => 
            array (
                'sc_id' => 188,
                'date_enrolled' => 2024,
                'student_id' => 1570,
                'class_id' => 1342,
            ),
            188 => 
            array (
                'sc_id' => 189,
                'date_enrolled' => 2024,
                'student_id' => 817,
                'class_id' => 12,
            ),
            189 => 
            array (
                'sc_id' => 190,
                'date_enrolled' => 2024,
                'student_id' => 200,
                'class_id' => 394,
            ),
            190 => 
            array (
                'sc_id' => 191,
                'date_enrolled' => 2024,
                'student_id' => 1545,
                'class_id' => 1089,
            ),
            191 => 
            array (
                'sc_id' => 192,
                'date_enrolled' => 2024,
                'student_id' => 1041,
                'class_id' => 80,
            ),
            192 => 
            array (
                'sc_id' => 193,
                'date_enrolled' => 2024,
                'student_id' => 68,
                'class_id' => 1074,
            ),
            193 => 
            array (
                'sc_id' => 194,
                'date_enrolled' => 2024,
                'student_id' => 1573,
                'class_id' => 1549,
            ),
            194 => 
            array (
                'sc_id' => 195,
                'date_enrolled' => 2024,
                'student_id' => 527,
                'class_id' => 325,
            ),
            195 => 
            array (
                'sc_id' => 196,
                'date_enrolled' => 2024,
                'student_id' => 1441,
                'class_id' => 1378,
            ),
            196 => 
            array (
                'sc_id' => 197,
                'date_enrolled' => 2024,
                'student_id' => 872,
                'class_id' => 875,
            ),
            197 => 
            array (
                'sc_id' => 198,
                'date_enrolled' => 2024,
                'student_id' => 16,
                'class_id' => 1416,
            ),
            198 => 
            array (
                'sc_id' => 199,
                'date_enrolled' => 2024,
                'student_id' => 1418,
                'class_id' => 1049,
            ),
            199 => 
            array (
                'sc_id' => 200,
                'date_enrolled' => 2024,
                'student_id' => 1120,
                'class_id' => 504,
            ),
            200 => 
            array (
                'sc_id' => 201,
                'date_enrolled' => 2024,
                'student_id' => 633,
                'class_id' => 1373,
            ),
            201 => 
            array (
                'sc_id' => 202,
                'date_enrolled' => 2024,
                'student_id' => 298,
                'class_id' => 275,
            ),
            202 => 
            array (
                'sc_id' => 203,
                'date_enrolled' => 2024,
                'student_id' => 1071,
                'class_id' => 643,
            ),
            203 => 
            array (
                'sc_id' => 204,
                'date_enrolled' => 2024,
                'student_id' => 529,
                'class_id' => 570,
            ),
            204 => 
            array (
                'sc_id' => 205,
                'date_enrolled' => 2024,
                'student_id' => 524,
                'class_id' => 444,
            ),
            205 => 
            array (
                'sc_id' => 206,
                'date_enrolled' => 2024,
                'student_id' => 370,
                'class_id' => 1577,
            ),
            206 => 
            array (
                'sc_id' => 207,
                'date_enrolled' => 2024,
                'student_id' => 1600,
                'class_id' => 1293,
            ),
            207 => 
            array (
                'sc_id' => 208,
                'date_enrolled' => 2024,
                'student_id' => 1024,
                'class_id' => 254,
            ),
            208 => 
            array (
                'sc_id' => 209,
                'date_enrolled' => 2024,
                'student_id' => 1022,
                'class_id' => 391,
            ),
            209 => 
            array (
                'sc_id' => 210,
                'date_enrolled' => 2024,
                'student_id' => 1486,
                'class_id' => 57,
            ),
            210 => 
            array (
                'sc_id' => 211,
                'date_enrolled' => 2024,
                'student_id' => 925,
                'class_id' => 559,
            ),
            211 => 
            array (
                'sc_id' => 212,
                'date_enrolled' => 2024,
                'student_id' => 1323,
                'class_id' => 1235,
            ),
            212 => 
            array (
                'sc_id' => 213,
                'date_enrolled' => 2024,
                'student_id' => 428,
                'class_id' => 1455,
            ),
            213 => 
            array (
                'sc_id' => 214,
                'date_enrolled' => 2024,
                'student_id' => 11,
                'class_id' => 1544,
            ),
            214 => 
            array (
                'sc_id' => 215,
                'date_enrolled' => 2024,
                'student_id' => 1186,
                'class_id' => 1141,
            ),
            215 => 
            array (
                'sc_id' => 216,
                'date_enrolled' => 2024,
                'student_id' => 542,
                'class_id' => 282,
            ),
            216 => 
            array (
                'sc_id' => 217,
                'date_enrolled' => 2024,
                'student_id' => 250,
                'class_id' => 358,
            ),
            217 => 
            array (
                'sc_id' => 218,
                'date_enrolled' => 2024,
                'student_id' => 69,
                'class_id' => 1317,
            ),
            218 => 
            array (
                'sc_id' => 219,
                'date_enrolled' => 2024,
                'student_id' => 119,
                'class_id' => 1060,
            ),
            219 => 
            array (
                'sc_id' => 220,
                'date_enrolled' => 2024,
                'student_id' => 1143,
                'class_id' => 941,
            ),
            220 => 
            array (
                'sc_id' => 221,
                'date_enrolled' => 2024,
                'student_id' => 1400,
                'class_id' => 350,
            ),
            221 => 
            array (
                'sc_id' => 222,
                'date_enrolled' => 2024,
                'student_id' => 468,
                'class_id' => 223,
            ),
            222 => 
            array (
                'sc_id' => 223,
                'date_enrolled' => 2024,
                'student_id' => 196,
                'class_id' => 1545,
            ),
            223 => 
            array (
                'sc_id' => 224,
                'date_enrolled' => 2024,
                'student_id' => 1333,
                'class_id' => 332,
            ),
            224 => 
            array (
                'sc_id' => 225,
                'date_enrolled' => 2024,
                'student_id' => 1499,
                'class_id' => 304,
            ),
            225 => 
            array (
                'sc_id' => 226,
                'date_enrolled' => 2024,
                'student_id' => 1016,
                'class_id' => 171,
            ),
            226 => 
            array (
                'sc_id' => 227,
                'date_enrolled' => 2024,
                'student_id' => 823,
                'class_id' => 227,
            ),
            227 => 
            array (
                'sc_id' => 228,
                'date_enrolled' => 2024,
                'student_id' => 61,
                'class_id' => 1063,
            ),
            228 => 
            array (
                'sc_id' => 229,
                'date_enrolled' => 2024,
                'student_id' => 1057,
                'class_id' => 177,
            ),
            229 => 
            array (
                'sc_id' => 230,
                'date_enrolled' => 2024,
                'student_id' => 1532,
                'class_id' => 311,
            ),
            230 => 
            array (
                'sc_id' => 231,
                'date_enrolled' => 2024,
                'student_id' => 1521,
                'class_id' => 728,
            ),
            231 => 
            array (
                'sc_id' => 232,
                'date_enrolled' => 2024,
                'student_id' => 361,
                'class_id' => 245,
            ),
            232 => 
            array (
                'sc_id' => 233,
                'date_enrolled' => 2024,
                'student_id' => 418,
                'class_id' => 895,
            ),
            233 => 
            array (
                'sc_id' => 234,
                'date_enrolled' => 2024,
                'student_id' => 451,
                'class_id' => 705,
            ),
            234 => 
            array (
                'sc_id' => 235,
                'date_enrolled' => 2024,
                'student_id' => 105,
                'class_id' => 71,
            ),
            235 => 
            array (
                'sc_id' => 236,
                'date_enrolled' => 2024,
                'student_id' => 169,
                'class_id' => 578,
            ),
            236 => 
            array (
                'sc_id' => 237,
                'date_enrolled' => 2024,
                'student_id' => 109,
                'class_id' => 515,
            ),
            237 => 
            array (
                'sc_id' => 238,
                'date_enrolled' => 2024,
                'student_id' => 734,
                'class_id' => 1209,
            ),
            238 => 
            array (
                'sc_id' => 239,
                'date_enrolled' => 2024,
                'student_id' => 675,
                'class_id' => 164,
            ),
            239 => 
            array (
                'sc_id' => 240,
                'date_enrolled' => 2024,
                'student_id' => 1243,
                'class_id' => 70,
            ),
            240 => 
            array (
                'sc_id' => 241,
                'date_enrolled' => 2024,
                'student_id' => 843,
                'class_id' => 1057,
            ),
            241 => 
            array (
                'sc_id' => 242,
                'date_enrolled' => 2024,
                'student_id' => 943,
                'class_id' => 438,
            ),
            242 => 
            array (
                'sc_id' => 243,
                'date_enrolled' => 2024,
                'student_id' => 1122,
                'class_id' => 385,
            ),
            243 => 
            array (
                'sc_id' => 244,
                'date_enrolled' => 2024,
                'student_id' => 272,
                'class_id' => 1107,
            ),
            244 => 
            array (
                'sc_id' => 245,
                'date_enrolled' => 2024,
                'student_id' => 150,
                'class_id' => 1054,
            ),
            245 => 
            array (
                'sc_id' => 246,
                'date_enrolled' => 2024,
                'student_id' => 839,
                'class_id' => 1251,
            ),
            246 => 
            array (
                'sc_id' => 247,
                'date_enrolled' => 2024,
                'student_id' => 1522,
                'class_id' => 39,
            ),
            247 => 
            array (
                'sc_id' => 248,
                'date_enrolled' => 2024,
                'student_id' => 767,
                'class_id' => 584,
            ),
            248 => 
            array (
                'sc_id' => 249,
                'date_enrolled' => 2024,
                'student_id' => 979,
                'class_id' => 916,
            ),
            249 => 
            array (
                'sc_id' => 250,
                'date_enrolled' => 2024,
                'student_id' => 738,
                'class_id' => 1417,
            ),
            250 => 
            array (
                'sc_id' => 251,
                'date_enrolled' => 2024,
                'student_id' => 378,
                'class_id' => 1431,
            ),
            251 => 
            array (
                'sc_id' => 252,
                'date_enrolled' => 2024,
                'student_id' => 276,
                'class_id' => 1343,
            ),
            252 => 
            array (
                'sc_id' => 253,
                'date_enrolled' => 2024,
                'student_id' => 8,
                'class_id' => 443,
            ),
            253 => 
            array (
                'sc_id' => 254,
                'date_enrolled' => 2024,
                'student_id' => 866,
                'class_id' => 1085,
            ),
            254 => 
            array (
                'sc_id' => 255,
                'date_enrolled' => 2024,
                'student_id' => 539,
                'class_id' => 528,
            ),
            255 => 
            array (
                'sc_id' => 256,
                'date_enrolled' => 2024,
                'student_id' => 724,
                'class_id' => 1414,
            ),
            256 => 
            array (
                'sc_id' => 257,
                'date_enrolled' => 2024,
                'student_id' => 902,
                'class_id' => 568,
            ),
            257 => 
            array (
                'sc_id' => 258,
                'date_enrolled' => 2024,
                'student_id' => 819,
                'class_id' => 1428,
            ),
            258 => 
            array (
                'sc_id' => 259,
                'date_enrolled' => 2024,
                'student_id' => 1403,
                'class_id' => 1061,
            ),
            259 => 
            array (
                'sc_id' => 260,
                'date_enrolled' => 2024,
                'student_id' => 1180,
                'class_id' => 847,
            ),
            260 => 
            array (
                'sc_id' => 261,
                'date_enrolled' => 2024,
                'student_id' => 980,
                'class_id' => 440,
            ),
            261 => 
            array (
                'sc_id' => 262,
                'date_enrolled' => 2024,
                'student_id' => 411,
                'class_id' => 148,
            ),
            262 => 
            array (
                'sc_id' => 263,
                'date_enrolled' => 2024,
                'student_id' => 103,
                'class_id' => 1295,
            ),
            263 => 
            array (
                'sc_id' => 264,
                'date_enrolled' => 2024,
                'student_id' => 1327,
                'class_id' => 1230,
            ),
            264 => 
            array (
                'sc_id' => 265,
                'date_enrolled' => 2024,
                'student_id' => 1132,
                'class_id' => 1566,
            ),
            265 => 
            array (
                'sc_id' => 266,
                'date_enrolled' => 2024,
                'student_id' => 1396,
                'class_id' => 1393,
            ),
            266 => 
            array (
                'sc_id' => 267,
                'date_enrolled' => 2024,
                'student_id' => 1477,
                'class_id' => 22,
            ),
            267 => 
            array (
                'sc_id' => 268,
                'date_enrolled' => 2024,
                'student_id' => 1167,
                'class_id' => 1563,
            ),
            268 => 
            array (
                'sc_id' => 269,
                'date_enrolled' => 2024,
                'student_id' => 447,
                'class_id' => 116,
            ),
            269 => 
            array (
                'sc_id' => 270,
                'date_enrolled' => 2024,
                'student_id' => 808,
                'class_id' => 1532,
            ),
            270 => 
            array (
                'sc_id' => 271,
                'date_enrolled' => 2024,
                'student_id' => 1530,
                'class_id' => 169,
            ),
            271 => 
            array (
                'sc_id' => 272,
                'date_enrolled' => 2024,
                'student_id' => 436,
                'class_id' => 943,
            ),
            272 => 
            array (
                'sc_id' => 273,
                'date_enrolled' => 2024,
                'student_id' => 804,
                'class_id' => 1097,
            ),
            273 => 
            array (
                'sc_id' => 274,
                'date_enrolled' => 2024,
                'student_id' => 1515,
                'class_id' => 318,
            ),
            274 => 
            array (
                'sc_id' => 275,
                'date_enrolled' => 2024,
                'student_id' => 1572,
                'class_id' => 1064,
            ),
            275 => 
            array (
                'sc_id' => 276,
                'date_enrolled' => 2024,
                'student_id' => 25,
                'class_id' => 1421,
            ),
            276 => 
            array (
                'sc_id' => 277,
                'date_enrolled' => 2024,
                'student_id' => 1596,
                'class_id' => 1326,
            ),
            277 => 
            array (
                'sc_id' => 278,
                'date_enrolled' => 2024,
                'student_id' => 1414,
                'class_id' => 1430,
            ),
            278 => 
            array (
                'sc_id' => 279,
                'date_enrolled' => 2024,
                'student_id' => 1391,
                'class_id' => 984,
            ),
            279 => 
            array (
                'sc_id' => 280,
                'date_enrolled' => 2024,
                'student_id' => 228,
                'class_id' => 1580,
            ),
            280 => 
            array (
                'sc_id' => 281,
                'date_enrolled' => 2024,
                'student_id' => 593,
                'class_id' => 533,
            ),
            281 => 
            array (
                'sc_id' => 282,
                'date_enrolled' => 2024,
                'student_id' => 1031,
                'class_id' => 1283,
            ),
            282 => 
            array (
                'sc_id' => 283,
                'date_enrolled' => 2024,
                'student_id' => 90,
                'class_id' => 176,
            ),
            283 => 
            array (
                'sc_id' => 284,
                'date_enrolled' => 2024,
                'student_id' => 990,
                'class_id' => 659,
            ),
            284 => 
            array (
                'sc_id' => 285,
                'date_enrolled' => 2024,
                'student_id' => 789,
                'class_id' => 1485,
            ),
            285 => 
            array (
                'sc_id' => 286,
                'date_enrolled' => 2024,
                'student_id' => 1399,
                'class_id' => 1518,
            ),
            286 => 
            array (
                'sc_id' => 287,
                'date_enrolled' => 2024,
                'student_id' => 785,
                'class_id' => 1249,
            ),
            287 => 
            array (
                'sc_id' => 288,
                'date_enrolled' => 2024,
                'student_id' => 1013,
                'class_id' => 322,
            ),
            288 => 
            array (
                'sc_id' => 289,
                'date_enrolled' => 2024,
                'student_id' => 1577,
                'class_id' => 594,
            ),
            289 => 
            array (
                'sc_id' => 290,
                'date_enrolled' => 2024,
                'student_id' => 549,
                'class_id' => 430,
            ),
            290 => 
            array (
                'sc_id' => 291,
                'date_enrolled' => 2024,
                'student_id' => 829,
                'class_id' => 791,
            ),
            291 => 
            array (
                'sc_id' => 292,
                'date_enrolled' => 2024,
                'student_id' => 1174,
                'class_id' => 113,
            ),
            292 => 
            array (
                'sc_id' => 293,
                'date_enrolled' => 2024,
                'student_id' => 1262,
                'class_id' => 49,
            ),
            293 => 
            array (
                'sc_id' => 294,
                'date_enrolled' => 2024,
                'student_id' => 52,
                'class_id' => 1282,
            ),
            294 => 
            array (
                'sc_id' => 295,
                'date_enrolled' => 2024,
                'student_id' => 1080,
                'class_id' => 152,
            ),
            295 => 
            array (
                'sc_id' => 296,
                'date_enrolled' => 2024,
                'student_id' => 1171,
                'class_id' => 910,
            ),
            296 => 
            array (
                'sc_id' => 297,
                'date_enrolled' => 2024,
                'student_id' => 1401,
                'class_id' => 840,
            ),
            297 => 
            array (
                'sc_id' => 298,
                'date_enrolled' => 2024,
                'student_id' => 1377,
                'class_id' => 542,
            ),
            298 => 
            array (
                'sc_id' => 299,
                'date_enrolled' => 2024,
                'student_id' => 1426,
                'class_id' => 1171,
            ),
            299 => 
            array (
                'sc_id' => 300,
                'date_enrolled' => 2024,
                'student_id' => 985,
                'class_id' => 480,
            ),
            300 => 
            array (
                'sc_id' => 301,
                'date_enrolled' => 2024,
                'student_id' => 995,
                'class_id' => 121,
            ),
            301 => 
            array (
                'sc_id' => 302,
                'date_enrolled' => 2024,
                'student_id' => 1419,
                'class_id' => 558,
            ),
            302 => 
            array (
                'sc_id' => 303,
                'date_enrolled' => 2024,
                'student_id' => 1586,
                'class_id' => 1178,
            ),
            303 => 
            array (
                'sc_id' => 304,
                'date_enrolled' => 2024,
                'student_id' => 1395,
                'class_id' => 830,
            ),
            304 => 
            array (
                'sc_id' => 305,
                'date_enrolled' => 2024,
                'student_id' => 667,
                'class_id' => 103,
            ),
            305 => 
            array (
                'sc_id' => 306,
                'date_enrolled' => 2024,
                'student_id' => 1546,
                'class_id' => 799,
            ),
            306 => 
            array (
                'sc_id' => 307,
                'date_enrolled' => 2024,
                'student_id' => 1208,
                'class_id' => 853,
            ),
            307 => 
            array (
                'sc_id' => 308,
                'date_enrolled' => 2024,
                'student_id' => 1237,
                'class_id' => 1351,
            ),
            308 => 
            array (
                'sc_id' => 309,
                'date_enrolled' => 2024,
                'student_id' => 917,
                'class_id' => 1446,
            ),
            309 => 
            array (
                'sc_id' => 310,
                'date_enrolled' => 2024,
                'student_id' => 518,
                'class_id' => 544,
            ),
            310 => 
            array (
                'sc_id' => 311,
                'date_enrolled' => 2024,
                'student_id' => 1488,
                'class_id' => 1479,
            ),
            311 => 
            array (
                'sc_id' => 312,
                'date_enrolled' => 2024,
                'student_id' => 770,
                'class_id' => 23,
            ),
            312 => 
            array (
                'sc_id' => 313,
                'date_enrolled' => 2024,
                'student_id' => 842,
                'class_id' => 1478,
            ),
            313 => 
            array (
                'sc_id' => 314,
                'date_enrolled' => 2024,
                'student_id' => 1388,
                'class_id' => 1318,
            ),
            314 => 
            array (
                'sc_id' => 315,
                'date_enrolled' => 2024,
                'student_id' => 107,
                'class_id' => 175,
            ),
            315 => 
            array (
                'sc_id' => 316,
                'date_enrolled' => 2024,
                'student_id' => 1353,
                'class_id' => 1548,
            ),
            316 => 
            array (
                'sc_id' => 317,
                'date_enrolled' => 2024,
                'student_id' => 203,
                'class_id' => 1588,
            ),
            317 => 
            array (
                'sc_id' => 318,
                'date_enrolled' => 2024,
                'student_id' => 1224,
                'class_id' => 1109,
            ),
            318 => 
            array (
                'sc_id' => 319,
                'date_enrolled' => 2024,
                'student_id' => 1297,
                'class_id' => 1019,
            ),
            319 => 
            array (
                'sc_id' => 320,
                'date_enrolled' => 2024,
                'student_id' => 986,
                'class_id' => 915,
            ),
            320 => 
            array (
                'sc_id' => 321,
                'date_enrolled' => 2024,
                'student_id' => 362,
                'class_id' => 372,
            ),
            321 => 
            array (
                'sc_id' => 322,
                'date_enrolled' => 2024,
                'student_id' => 146,
                'class_id' => 1150,
            ),
            322 => 
            array (
                'sc_id' => 323,
                'date_enrolled' => 2024,
                'student_id' => 96,
                'class_id' => 811,
            ),
            323 => 
            array (
                'sc_id' => 324,
                'date_enrolled' => 2024,
                'student_id' => 522,
                'class_id' => 846,
            ),
            324 => 
            array (
                'sc_id' => 325,
                'date_enrolled' => 2024,
                'student_id' => 405,
                'class_id' => 33,
            ),
            325 => 
            array (
                'sc_id' => 326,
                'date_enrolled' => 2024,
                'student_id' => 754,
                'class_id' => 1456,
            ),
            326 => 
            array (
                'sc_id' => 327,
                'date_enrolled' => 2024,
                'student_id' => 1194,
                'class_id' => 130,
            ),
            327 => 
            array (
                'sc_id' => 328,
                'date_enrolled' => 2024,
                'student_id' => 1539,
                'class_id' => 684,
            ),
            328 => 
            array (
                'sc_id' => 329,
                'date_enrolled' => 2024,
                'student_id' => 1523,
                'class_id' => 1316,
            ),
            329 => 
            array (
                'sc_id' => 330,
                'date_enrolled' => 2024,
                'student_id' => 1528,
                'class_id' => 344,
            ),
            330 => 
            array (
                'sc_id' => 331,
                'date_enrolled' => 2024,
                'student_id' => 1097,
                'class_id' => 274,
            ),
            331 => 
            array (
                'sc_id' => 332,
                'date_enrolled' => 2024,
                'student_id' => 830,
                'class_id' => 1092,
            ),
            332 => 
            array (
                'sc_id' => 333,
                'date_enrolled' => 2024,
                'student_id' => 194,
                'class_id' => 1329,
            ),
            333 => 
            array (
                'sc_id' => 334,
                'date_enrolled' => 2024,
                'student_id' => 356,
                'class_id' => 83,
            ),
            334 => 
            array (
                'sc_id' => 335,
                'date_enrolled' => 2024,
                'student_id' => 1104,
                'class_id' => 238,
            ),
            335 => 
            array (
                'sc_id' => 336,
                'date_enrolled' => 2024,
                'student_id' => 1155,
                'class_id' => 305,
            ),
            336 => 
            array (
                'sc_id' => 337,
                'date_enrolled' => 2024,
                'student_id' => 1535,
                'class_id' => 1058,
            ),
            337 => 
            array (
                'sc_id' => 338,
                'date_enrolled' => 2024,
                'student_id' => 72,
                'class_id' => 919,
            ),
            338 => 
            array (
                'sc_id' => 339,
                'date_enrolled' => 2024,
                'student_id' => 37,
                'class_id' => 839,
            ),
            339 => 
            array (
                'sc_id' => 340,
                'date_enrolled' => 2024,
                'student_id' => 145,
                'class_id' => 1167,
            ),
            340 => 
            array (
                'sc_id' => 341,
                'date_enrolled' => 2024,
                'student_id' => 820,
                'class_id' => 635,
            ),
            341 => 
            array (
                'sc_id' => 342,
                'date_enrolled' => 2024,
                'student_id' => 670,
                'class_id' => 58,
            ),
            342 => 
            array (
                'sc_id' => 343,
                'date_enrolled' => 2024,
                'student_id' => 884,
                'class_id' => 1299,
            ),
            343 => 
            array (
                'sc_id' => 344,
                'date_enrolled' => 2024,
                'student_id' => 1103,
                'class_id' => 117,
            ),
            344 => 
            array (
                'sc_id' => 345,
                'date_enrolled' => 2024,
                'student_id' => 368,
                'class_id' => 964,
            ),
            345 => 
            array (
                'sc_id' => 346,
                'date_enrolled' => 2024,
                'student_id' => 1394,
                'class_id' => 1357,
            ),
            346 => 
            array (
                'sc_id' => 347,
                'date_enrolled' => 2024,
                'student_id' => 158,
                'class_id' => 338,
            ),
            347 => 
            array (
                'sc_id' => 348,
                'date_enrolled' => 2024,
                'student_id' => 777,
                'class_id' => 447,
            ),
            348 => 
            array (
                'sc_id' => 349,
                'date_enrolled' => 2024,
                'student_id' => 516,
                'class_id' => 802,
            ),
            349 => 
            array (
                'sc_id' => 350,
                'date_enrolled' => 2024,
                'student_id' => 1371,
                'class_id' => 6,
            ),
            350 => 
            array (
                'sc_id' => 351,
                'date_enrolled' => 2024,
                'student_id' => 304,
                'class_id' => 138,
            ),
            351 => 
            array (
                'sc_id' => 352,
                'date_enrolled' => 2024,
                'student_id' => 626,
                'class_id' => 1275,
            ),
            352 => 
            array (
                'sc_id' => 353,
                'date_enrolled' => 2024,
                'student_id' => 1409,
                'class_id' => 949,
            ),
            353 => 
            array (
                'sc_id' => 354,
                'date_enrolled' => 2024,
                'student_id' => 1207,
                'class_id' => 905,
            ),
            354 => 
            array (
                'sc_id' => 355,
                'date_enrolled' => 2024,
                'student_id' => 64,
                'class_id' => 1038,
            ),
            355 => 
            array (
                'sc_id' => 356,
                'date_enrolled' => 2024,
                'student_id' => 1090,
                'class_id' => 1354,
            ),
            356 => 
            array (
                'sc_id' => 357,
                'date_enrolled' => 2024,
                'student_id' => 138,
                'class_id' => 1488,
            ),
            357 => 
            array (
                'sc_id' => 358,
                'date_enrolled' => 2024,
                'student_id' => 40,
                'class_id' => 826,
            ),
            358 => 
            array (
                'sc_id' => 359,
                'date_enrolled' => 2024,
                'student_id' => 648,
                'class_id' => 638,
            ),
            359 => 
            array (
                'sc_id' => 360,
                'date_enrolled' => 2024,
                'student_id' => 779,
                'class_id' => 48,
            ),
            360 => 
            array (
                'sc_id' => 361,
                'date_enrolled' => 2024,
                'student_id' => 442,
                'class_id' => 507,
            ),
            361 => 
            array (
                'sc_id' => 362,
                'date_enrolled' => 2024,
                'student_id' => 1440,
                'class_id' => 599,
            ),
            362 => 
            array (
                'sc_id' => 363,
                'date_enrolled' => 2024,
                'student_id' => 1597,
                'class_id' => 606,
            ),
            363 => 
            array (
                'sc_id' => 364,
                'date_enrolled' => 2024,
                'student_id' => 10,
                'class_id' => 1298,
            ),
            364 => 
            array (
                'sc_id' => 365,
                'date_enrolled' => 2024,
                'student_id' => 50,
                'class_id' => 589,
            ),
            365 => 
            array (
                'sc_id' => 366,
                'date_enrolled' => 2024,
                'student_id' => 600,
                'class_id' => 756,
            ),
            366 => 
            array (
                'sc_id' => 367,
                'date_enrolled' => 2024,
                'student_id' => 416,
                'class_id' => 998,
            ),
            367 => 
            array (
                'sc_id' => 368,
                'date_enrolled' => 2024,
                'student_id' => 1442,
                'class_id' => 1472,
            ),
            368 => 
            array (
                'sc_id' => 369,
                'date_enrolled' => 2024,
                'student_id' => 559,
                'class_id' => 86,
            ),
            369 => 
            array (
                'sc_id' => 370,
                'date_enrolled' => 2024,
                'student_id' => 1109,
                'class_id' => 1001,
            ),
            370 => 
            array (
                'sc_id' => 371,
                'date_enrolled' => 2024,
                'student_id' => 1150,
                'class_id' => 1553,
            ),
            371 => 
            array (
                'sc_id' => 372,
                'date_enrolled' => 2024,
                'student_id' => 75,
                'class_id' => 38,
            ),
            372 => 
            array (
                'sc_id' => 373,
                'date_enrolled' => 2024,
                'student_id' => 638,
                'class_id' => 433,
            ),
            373 => 
            array (
                'sc_id' => 374,
                'date_enrolled' => 2024,
                'student_id' => 625,
                'class_id' => 816,
            ),
            374 => 
            array (
                'sc_id' => 375,
                'date_enrolled' => 2024,
                'student_id' => 1133,
                'class_id' => 1575,
            ),
            375 => 
            array (
                'sc_id' => 376,
                'date_enrolled' => 2024,
                'student_id' => 1276,
                'class_id' => 368,
            ),
            376 => 
            array (
                'sc_id' => 377,
                'date_enrolled' => 2024,
                'student_id' => 603,
                'class_id' => 1180,
            ),
            377 => 
            array (
                'sc_id' => 378,
                'date_enrolled' => 2024,
                'student_id' => 890,
                'class_id' => 1454,
            ),
            378 => 
            array (
                'sc_id' => 379,
                'date_enrolled' => 2024,
                'student_id' => 1387,
                'class_id' => 924,
            ),
            379 => 
            array (
                'sc_id' => 380,
                'date_enrolled' => 2024,
                'student_id' => 143,
                'class_id' => 198,
            ),
            380 => 
            array (
                'sc_id' => 381,
                'date_enrolled' => 2024,
                'student_id' => 234,
                'class_id' => 1090,
            ),
            381 => 
            array (
                'sc_id' => 382,
                'date_enrolled' => 2024,
                'student_id' => 1584,
                'class_id' => 463,
            ),
            382 => 
            array (
                'sc_id' => 383,
                'date_enrolled' => 2024,
                'student_id' => 571,
                'class_id' => 1033,
            ),
            383 => 
            array (
                'sc_id' => 384,
                'date_enrolled' => 2024,
                'student_id' => 13,
                'class_id' => 386,
            ),
            384 => 
            array (
                'sc_id' => 385,
                'date_enrolled' => 2024,
                'student_id' => 1215,
                'class_id' => 147,
            ),
            385 => 
            array (
                'sc_id' => 386,
                'date_enrolled' => 2024,
                'student_id' => 721,
                'class_id' => 1111,
            ),
            386 => 
            array (
                'sc_id' => 387,
                'date_enrolled' => 2024,
                'student_id' => 774,
                'class_id' => 339,
            ),
            387 => 
            array (
                'sc_id' => 388,
                'date_enrolled' => 2024,
                'student_id' => 752,
                'class_id' => 1232,
            ),
            388 => 
            array (
                'sc_id' => 389,
                'date_enrolled' => 2024,
                'student_id' => 614,
                'class_id' => 1589,
            ),
            389 => 
            array (
                'sc_id' => 390,
                'date_enrolled' => 2024,
                'student_id' => 1289,
                'class_id' => 1120,
            ),
            390 => 
            array (
                'sc_id' => 391,
                'date_enrolled' => 2024,
                'student_id' => 1505,
                'class_id' => 46,
            ),
            391 => 
            array (
                'sc_id' => 392,
                'date_enrolled' => 2024,
                'student_id' => 347,
                'class_id' => 217,
            ),
            392 => 
            array (
                'sc_id' => 393,
                'date_enrolled' => 2024,
                'student_id' => 352,
                'class_id' => 1077,
            ),
            393 => 
            array (
                'sc_id' => 394,
                'date_enrolled' => 2024,
                'student_id' => 46,
                'class_id' => 1302,
            ),
            394 => 
            array (
                'sc_id' => 395,
                'date_enrolled' => 2024,
                'student_id' => 598,
                'class_id' => 1183,
            ),
            395 => 
            array (
                'sc_id' => 396,
                'date_enrolled' => 2024,
                'student_id' => 398,
                'class_id' => 1473,
            ),
            396 => 
            array (
                'sc_id' => 397,
                'date_enrolled' => 2024,
                'student_id' => 291,
                'class_id' => 1197,
            ),
            397 => 
            array (
                'sc_id' => 398,
                'date_enrolled' => 2024,
                'student_id' => 1423,
                'class_id' => 455,
            ),
            398 => 
            array (
                'sc_id' => 399,
                'date_enrolled' => 2024,
                'student_id' => 136,
                'class_id' => 511,
            ),
            399 => 
            array (
                'sc_id' => 400,
                'date_enrolled' => 2024,
                'student_id' => 1148,
                'class_id' => 950,
            ),
            400 => 
            array (
                'sc_id' => 401,
                'date_enrolled' => 2024,
                'student_id' => 430,
                'class_id' => 585,
            ),
            401 => 
            array (
                'sc_id' => 402,
                'date_enrolled' => 2024,
                'student_id' => 1037,
                'class_id' => 1599,
            ),
            402 => 
            array (
                'sc_id' => 403,
                'date_enrolled' => 2024,
                'student_id' => 634,
                'class_id' => 828,
            ),
            403 => 
            array (
                'sc_id' => 404,
                'date_enrolled' => 2024,
                'student_id' => 1510,
                'class_id' => 1258,
            ),
            404 => 
            array (
                'sc_id' => 405,
                'date_enrolled' => 2024,
                'student_id' => 1170,
                'class_id' => 345,
            ),
            405 => 
            array (
                'sc_id' => 406,
                'date_enrolled' => 2024,
                'student_id' => 1088,
                'class_id' => 76,
            ),
            406 => 
            array (
                'sc_id' => 407,
                'date_enrolled' => 2024,
                'student_id' => 388,
                'class_id' => 1349,
            ),
            407 => 
            array (
                'sc_id' => 408,
                'date_enrolled' => 2024,
                'student_id' => 1252,
                'class_id' => 343,
            ),
            408 => 
            array (
                'sc_id' => 409,
                'date_enrolled' => 2024,
                'student_id' => 65,
                'class_id' => 884,
            ),
            409 => 
            array (
                'sc_id' => 410,
                'date_enrolled' => 2024,
                'student_id' => 1,
                'class_id' => 841,
            ),
            410 => 
            array (
                'sc_id' => 411,
                'date_enrolled' => 2024,
                'student_id' => 284,
                'class_id' => 788,
            ),
            411 => 
            array (
                'sc_id' => 412,
                'date_enrolled' => 2024,
                'student_id' => 751,
                'class_id' => 51,
            ),
            412 => 
            array (
                'sc_id' => 413,
                'date_enrolled' => 2024,
                'student_id' => 901,
                'class_id' => 1360,
            ),
            413 => 
            array (
                'sc_id' => 414,
                'date_enrolled' => 2024,
                'student_id' => 1485,
                'class_id' => 1273,
            ),
            414 => 
            array (
                'sc_id' => 415,
                'date_enrolled' => 2024,
                'student_id' => 716,
                'class_id' => 1004,
            ),
            415 => 
            array (
                'sc_id' => 416,
                'date_enrolled' => 2024,
                'student_id' => 70,
                'class_id' => 928,
            ),
            416 => 
            array (
                'sc_id' => 417,
                'date_enrolled' => 2024,
                'student_id' => 652,
                'class_id' => 666,
            ),
            417 => 
            array (
                'sc_id' => 418,
                'date_enrolled' => 2024,
                'student_id' => 1390,
                'class_id' => 437,
            ),
            418 => 
            array (
                'sc_id' => 419,
                'date_enrolled' => 2024,
                'student_id' => 1416,
                'class_id' => 44,
            ),
            419 => 
            array (
                'sc_id' => 420,
                'date_enrolled' => 2024,
                'student_id' => 122,
                'class_id' => 1142,
            ),
            420 => 
            array (
                'sc_id' => 421,
                'date_enrolled' => 2024,
                'student_id' => 610,
                'class_id' => 132,
            ),
            421 => 
            array (
                'sc_id' => 422,
                'date_enrolled' => 2024,
                'student_id' => 810,
                'class_id' => 406,
            ),
            422 => 
            array (
                'sc_id' => 423,
                'date_enrolled' => 2024,
                'student_id' => 233,
                'class_id' => 495,
            ),
            423 => 
            array (
                'sc_id' => 424,
                'date_enrolled' => 2024,
                'student_id' => 506,
                'class_id' => 445,
            ),
            424 => 
            array (
                'sc_id' => 425,
                'date_enrolled' => 2024,
                'student_id' => 1261,
                'class_id' => 892,
            ),
            425 => 
            array (
                'sc_id' => 426,
                'date_enrolled' => 2024,
                'student_id' => 20,
                'class_id' => 883,
            ),
            426 => 
            array (
                'sc_id' => 427,
                'date_enrolled' => 2024,
                'student_id' => 1184,
                'class_id' => 239,
            ),
            427 => 
            array (
                'sc_id' => 428,
                'date_enrolled' => 2024,
                'student_id' => 1027,
                'class_id' => 1132,
            ),
            428 => 
            array (
                'sc_id' => 429,
                'date_enrolled' => 2024,
                'student_id' => 1187,
                'class_id' => 644,
            ),
            429 => 
            array (
                'sc_id' => 430,
                'date_enrolled' => 2024,
                'student_id' => 546,
                'class_id' => 588,
            ),
            430 => 
            array (
                'sc_id' => 431,
                'date_enrolled' => 2024,
                'student_id' => 1322,
                'class_id' => 601,
            ),
            431 => 
            array (
                'sc_id' => 432,
                'date_enrolled' => 2024,
                'student_id' => 1195,
                'class_id' => 434,
            ),
            432 => 
            array (
                'sc_id' => 433,
                'date_enrolled' => 2024,
                'student_id' => 460,
                'class_id' => 211,
            ),
            433 => 
            array (
                'sc_id' => 434,
                'date_enrolled' => 2024,
                'student_id' => 363,
                'class_id' => 89,
            ),
            434 => 
            array (
                'sc_id' => 435,
                'date_enrolled' => 2024,
                'student_id' => 327,
                'class_id' => 1561,
            ),
            435 => 
            array (
                'sc_id' => 436,
                'date_enrolled' => 2024,
                'student_id' => 1141,
                'class_id' => 1115,
            ),
            436 => 
            array (
                'sc_id' => 437,
                'date_enrolled' => 2024,
                'student_id' => 74,
                'class_id' => 160,
            ),
            437 => 
            array (
                'sc_id' => 438,
                'date_enrolled' => 2024,
                'student_id' => 253,
                'class_id' => 1173,
            ),
            438 => 
            array (
                'sc_id' => 439,
                'date_enrolled' => 2024,
                'student_id' => 1235,
                'class_id' => 30,
            ),
            439 => 
            array (
                'sc_id' => 440,
                'date_enrolled' => 2024,
                'student_id' => 602,
                'class_id' => 1451,
            ),
            440 => 
            array (
                'sc_id' => 441,
                'date_enrolled' => 2024,
                'student_id' => 382,
                'class_id' => 552,
            ),
            441 => 
            array (
                'sc_id' => 442,
                'date_enrolled' => 2024,
                'student_id' => 816,
                'class_id' => 1495,
            ),
            442 => 
            array (
                'sc_id' => 443,
                'date_enrolled' => 2024,
                'student_id' => 1144,
                'class_id' => 653,
            ),
            443 => 
            array (
                'sc_id' => 444,
                'date_enrolled' => 2024,
                'student_id' => 1156,
                'class_id' => 479,
            ),
            444 => 
            array (
                'sc_id' => 445,
                'date_enrolled' => 2024,
                'student_id' => 1581,
                'class_id' => 354,
            ),
            445 => 
            array (
                'sc_id' => 446,
                'date_enrolled' => 2024,
                'student_id' => 975,
                'class_id' => 1536,
            ),
            446 => 
            array (
                'sc_id' => 447,
                'date_enrolled' => 2024,
                'student_id' => 1472,
                'class_id' => 648,
            ),
            447 => 
            array (
                'sc_id' => 448,
                'date_enrolled' => 2024,
                'student_id' => 499,
                'class_id' => 1272,
            ),
            448 => 
            array (
                'sc_id' => 449,
                'date_enrolled' => 2024,
                'student_id' => 618,
                'class_id' => 562,
            ),
            449 => 
            array (
                'sc_id' => 450,
                'date_enrolled' => 2024,
                'student_id' => 218,
                'class_id' => 777,
            ),
            450 => 
            array (
                'sc_id' => 451,
                'date_enrolled' => 2024,
                'student_id' => 1294,
                'class_id' => 1559,
            ),
            451 => 
            array (
                'sc_id' => 452,
                'date_enrolled' => 2024,
                'student_id' => 339,
                'class_id' => 293,
            ),
            452 => 
            array (
                'sc_id' => 453,
                'date_enrolled' => 2024,
                'student_id' => 1079,
                'class_id' => 956,
            ),
            453 => 
            array (
                'sc_id' => 454,
                'date_enrolled' => 2024,
                'student_id' => 128,
                'class_id' => 748,
            ),
            454 => 
            array (
                'sc_id' => 455,
                'date_enrolled' => 2024,
                'student_id' => 1242,
                'class_id' => 185,
            ),
            455 => 
            array (
                'sc_id' => 456,
                'date_enrolled' => 2024,
                'student_id' => 193,
                'class_id' => 410,
            ),
            456 => 
            array (
                'sc_id' => 457,
                'date_enrolled' => 2024,
                'student_id' => 1296,
                'class_id' => 1099,
            ),
            457 => 
            array (
                'sc_id' => 458,
                'date_enrolled' => 2024,
                'student_id' => 691,
                'class_id' => 272,
            ),
            458 => 
            array (
                'sc_id' => 459,
                'date_enrolled' => 2024,
                'student_id' => 1468,
                'class_id' => 93,
            ),
            459 => 
            array (
                'sc_id' => 460,
                'date_enrolled' => 2024,
                'student_id' => 791,
                'class_id' => 1112,
            ),
            460 => 
            array (
                'sc_id' => 461,
                'date_enrolled' => 2024,
                'student_id' => 358,
                'class_id' => 937,
            ),
            461 => 
            array (
                'sc_id' => 462,
                'date_enrolled' => 2024,
                'student_id' => 780,
                'class_id' => 1016,
            ),
            462 => 
            array (
                'sc_id' => 463,
                'date_enrolled' => 2024,
                'student_id' => 125,
                'class_id' => 87,
            ),
            463 => 
            array (
                'sc_id' => 464,
                'date_enrolled' => 2024,
                'student_id' => 1056,
                'class_id' => 32,
            ),
            464 => 
            array (
                'sc_id' => 465,
                'date_enrolled' => 2024,
                'student_id' => 1157,
                'class_id' => 1278,
            ),
            465 => 
            array (
                'sc_id' => 466,
                'date_enrolled' => 2024,
                'student_id' => 283,
                'class_id' => 763,
            ),
            466 => 
            array (
                'sc_id' => 467,
                'date_enrolled' => 2024,
                'student_id' => 881,
                'class_id' => 746,
            ),
            467 => 
            array (
                'sc_id' => 468,
                'date_enrolled' => 2024,
                'student_id' => 929,
                'class_id' => 947,
            ),
            468 => 
            array (
                'sc_id' => 469,
                'date_enrolled' => 2024,
                'student_id' => 736,
                'class_id' => 1281,
            ),
            469 => 
            array (
                'sc_id' => 470,
                'date_enrolled' => 2024,
                'student_id' => 28,
                'class_id' => 1522,
            ),
            470 => 
            array (
                'sc_id' => 471,
                'date_enrolled' => 2024,
                'student_id' => 1050,
                'class_id' => 212,
            ),
            471 => 
            array (
                'sc_id' => 472,
                'date_enrolled' => 2024,
                'student_id' => 1331,
                'class_id' => 688,
            ),
            472 => 
            array (
                'sc_id' => 473,
                'date_enrolled' => 2024,
                'student_id' => 1146,
                'class_id' => 1127,
            ),
            473 => 
            array (
                'sc_id' => 474,
                'date_enrolled' => 2024,
                'student_id' => 1164,
                'class_id' => 1583,
            ),
            474 => 
            array (
                'sc_id' => 475,
                'date_enrolled' => 2024,
                'student_id' => 1197,
                'class_id' => 163,
            ),
            475 => 
            array (
                'sc_id' => 476,
                'date_enrolled' => 2024,
                'student_id' => 498,
                'class_id' => 614,
            ),
            476 => 
            array (
                'sc_id' => 477,
                'date_enrolled' => 2024,
                'student_id' => 1020,
                'class_id' => 110,
            ),
            477 => 
            array (
                'sc_id' => 478,
                'date_enrolled' => 2024,
                'student_id' => 1030,
                'class_id' => 1262,
            ),
            478 => 
            array (
                'sc_id' => 479,
                'date_enrolled' => 2024,
                'student_id' => 1361,
                'class_id' => 1504,
            ),
            479 => 
            array (
                'sc_id' => 480,
                'date_enrolled' => 2024,
                'student_id' => 335,
                'class_id' => 381,
            ),
            480 => 
            array (
                'sc_id' => 481,
                'date_enrolled' => 2024,
                'student_id' => 1183,
                'class_id' => 1555,
            ),
            481 => 
            array (
                'sc_id' => 482,
                'date_enrolled' => 2024,
                'student_id' => 1498,
                'class_id' => 1052,
            ),
            482 => 
            array (
                'sc_id' => 483,
                'date_enrolled' => 2024,
                'student_id' => 560,
                'class_id' => 724,
            ),
            483 => 
            array (
                'sc_id' => 484,
                'date_enrolled' => 2024,
                'student_id' => 116,
                'class_id' => 692,
            ),
            484 => 
            array (
                'sc_id' => 485,
                'date_enrolled' => 2024,
                'student_id' => 1263,
                'class_id' => 604,
            ),
            485 => 
            array (
                'sc_id' => 486,
                'date_enrolled' => 2024,
                'student_id' => 692,
                'class_id' => 953,
            ),
            486 => 
            array (
                'sc_id' => 487,
                'date_enrolled' => 2024,
                'student_id' => 894,
                'class_id' => 880,
            ),
            487 => 
            array (
                'sc_id' => 488,
                'date_enrolled' => 2024,
                'student_id' => 513,
                'class_id' => 524,
            ),
            488 => 
            array (
                'sc_id' => 489,
                'date_enrolled' => 2024,
                'student_id' => 449,
                'class_id' => 1204,
            ),
            489 => 
            array (
                'sc_id' => 490,
                'date_enrolled' => 2024,
                'student_id' => 838,
                'class_id' => 1271,
            ),
            490 => 
            array (
                'sc_id' => 491,
                'date_enrolled' => 2024,
                'student_id' => 545,
                'class_id' => 529,
            ),
            491 => 
            array (
                'sc_id' => 492,
                'date_enrolled' => 2024,
                'student_id' => 994,
                'class_id' => 1118,
            ),
            492 => 
            array (
                'sc_id' => 493,
                'date_enrolled' => 2024,
                'student_id' => 354,
                'class_id' => 452,
            ),
            493 => 
            array (
                'sc_id' => 494,
                'date_enrolled' => 2024,
                'student_id' => 1450,
                'class_id' => 139,
            ),
            494 => 
            array (
                'sc_id' => 495,
                'date_enrolled' => 2024,
                'student_id' => 1084,
                'class_id' => 1277,
            ),
            495 => 
            array (
                'sc_id' => 496,
                'date_enrolled' => 2024,
                'student_id' => 1470,
                'class_id' => 1496,
            ),
            496 => 
            array (
                'sc_id' => 497,
                'date_enrolled' => 2024,
                'student_id' => 605,
                'class_id' => 926,
            ),
            497 => 
            array (
                'sc_id' => 498,
                'date_enrolled' => 2024,
                'student_id' => 1264,
                'class_id' => 766,
            ),
            498 => 
            array (
                'sc_id' => 499,
                'date_enrolled' => 2024,
                'student_id' => 308,
                'class_id' => 1030,
            ),
            499 => 
            array (
                'sc_id' => 500,
                'date_enrolled' => 2024,
                'student_id' => 786,
                'class_id' => 1126,
            ),
        ));
        \DB::table('student_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 501,
                'date_enrolled' => 2024,
                'student_id' => 261,
                'class_id' => 587,
            ),
            1 => 
            array (
                'sc_id' => 502,
                'date_enrolled' => 2024,
                'student_id' => 1554,
                'class_id' => 1388,
            ),
            2 => 
            array (
                'sc_id' => 503,
                'date_enrolled' => 2024,
                'student_id' => 671,
                'class_id' => 731,
            ),
            3 => 
            array (
                'sc_id' => 504,
                'date_enrolled' => 2024,
                'student_id' => 531,
                'class_id' => 1425,
            ),
            4 => 
            array (
                'sc_id' => 505,
                'date_enrolled' => 2024,
                'student_id' => 1083,
                'class_id' => 308,
            ),
            5 => 
            array (
                'sc_id' => 506,
                'date_enrolled' => 2024,
                'student_id' => 1490,
                'class_id' => 141,
            ),
            6 => 
            array (
                'sc_id' => 507,
                'date_enrolled' => 2024,
                'student_id' => 182,
                'class_id' => 247,
            ),
            7 => 
            array (
                'sc_id' => 508,
                'date_enrolled' => 2024,
                'student_id' => 1285,
                'class_id' => 539,
            ),
            8 => 
            array (
                'sc_id' => 509,
                'date_enrolled' => 2024,
                'student_id' => 323,
                'class_id' => 153,
            ),
            9 => 
            array (
                'sc_id' => 510,
                'date_enrolled' => 2024,
                'student_id' => 572,
                'class_id' => 1542,
            ),
            10 => 
            array (
                'sc_id' => 511,
                'date_enrolled' => 2024,
                'student_id' => 1064,
                'class_id' => 806,
            ),
            11 => 
            array (
                'sc_id' => 512,
                'date_enrolled' => 2024,
                'student_id' => 1233,
                'class_id' => 290,
            ),
            12 => 
            array (
                'sc_id' => 513,
                'date_enrolled' => 2024,
                'student_id' => 974,
                'class_id' => 702,
            ),
            13 => 
            array (
                'sc_id' => 514,
                'date_enrolled' => 2024,
                'student_id' => 254,
                'class_id' => 458,
            ),
            14 => 
            array (
                'sc_id' => 515,
                'date_enrolled' => 2024,
                'student_id' => 672,
                'class_id' => 980,
            ),
            15 => 
            array (
                'sc_id' => 516,
                'date_enrolled' => 2024,
                'student_id' => 558,
                'class_id' => 1494,
            ),
            16 => 
            array (
                'sc_id' => 517,
                'date_enrolled' => 2024,
                'student_id' => 168,
                'class_id' => 531,
            ),
            17 => 
            array (
                'sc_id' => 518,
                'date_enrolled' => 2024,
                'student_id' => 302,
                'class_id' => 195,
            ),
            18 => 
            array (
                'sc_id' => 519,
                'date_enrolled' => 2024,
                'student_id' => 1217,
                'class_id' => 716,
            ),
            19 => 
            array (
                'sc_id' => 520,
                'date_enrolled' => 2024,
                'student_id' => 530,
                'class_id' => 446,
            ),
            20 => 
            array (
                'sc_id' => 521,
                'date_enrolled' => 2024,
                'student_id' => 295,
                'class_id' => 316,
            ),
            21 => 
            array (
                'sc_id' => 522,
                'date_enrolled' => 2024,
                'student_id' => 92,
                'class_id' => 181,
            ),
            22 => 
            array (
                'sc_id' => 523,
                'date_enrolled' => 2024,
                'student_id' => 162,
                'class_id' => 874,
            ),
            23 => 
            array (
                'sc_id' => 524,
                'date_enrolled' => 2024,
                'student_id' => 1551,
                'class_id' => 959,
            ),
            24 => 
            array (
                'sc_id' => 525,
                'date_enrolled' => 2024,
                'student_id' => 977,
                'class_id' => 1419,
            ),
            25 => 
            array (
                'sc_id' => 526,
                'date_enrolled' => 2024,
                'student_id' => 289,
                'class_id' => 914,
            ),
            26 => 
            array (
                'sc_id' => 527,
                'date_enrolled' => 2024,
                'student_id' => 797,
                'class_id' => 617,
            ),
            27 => 
            array (
                'sc_id' => 528,
                'date_enrolled' => 2024,
                'student_id' => 907,
                'class_id' => 499,
            ),
            28 => 
            array (
                'sc_id' => 529,
                'date_enrolled' => 2024,
                'student_id' => 708,
                'class_id' => 655,
            ),
            29 => 
            array (
                'sc_id' => 530,
                'date_enrolled' => 2024,
                'student_id' => 511,
                'class_id' => 586,
            ),
            30 => 
            array (
                'sc_id' => 531,
                'date_enrolled' => 2024,
                'student_id' => 1548,
                'class_id' => 263,
            ),
            31 => 
            array (
                'sc_id' => 532,
                'date_enrolled' => 2024,
                'student_id' => 102,
                'class_id' => 487,
            ),
            32 => 
            array (
                'sc_id' => 533,
                'date_enrolled' => 2024,
                'student_id' => 486,
                'class_id' => 740,
            ),
            33 => 
            array (
                'sc_id' => 534,
                'date_enrolled' => 2024,
                'student_id' => 586,
                'class_id' => 1071,
            ),
            34 => 
            array (
                'sc_id' => 535,
                'date_enrolled' => 2024,
                'student_id' => 916,
                'class_id' => 987,
            ),
            35 => 
            array (
                'sc_id' => 536,
                'date_enrolled' => 2024,
                'student_id' => 326,
                'class_id' => 654,
            ),
            36 => 
            array (
                'sc_id' => 537,
                'date_enrolled' => 2024,
                'student_id' => 1106,
                'class_id' => 327,
            ),
            37 => 
            array (
                'sc_id' => 538,
                'date_enrolled' => 2024,
                'student_id' => 946,
                'class_id' => 1397,
            ),
            38 => 
            array (
                'sc_id' => 539,
                'date_enrolled' => 2024,
                'student_id' => 139,
                'class_id' => 1014,
            ),
            39 => 
            array (
                'sc_id' => 540,
                'date_enrolled' => 2024,
                'student_id' => 101,
                'class_id' => 289,
            ),
            40 => 
            array (
                'sc_id' => 541,
                'date_enrolled' => 2024,
                'student_id' => 477,
                'class_id' => 649,
            ),
            41 => 
            array (
                'sc_id' => 542,
                'date_enrolled' => 2024,
                'student_id' => 408,
                'class_id' => 775,
            ),
            42 => 
            array (
                'sc_id' => 543,
                'date_enrolled' => 2024,
                'student_id' => 258,
                'class_id' => 832,
            ),
            43 => 
            array (
                'sc_id' => 544,
                'date_enrolled' => 2024,
                'student_id' => 147,
                'class_id' => 808,
            ),
            44 => 
            array (
                'sc_id' => 545,
                'date_enrolled' => 2024,
                'student_id' => 443,
                'class_id' => 340,
            ),
            45 => 
            array (
                'sc_id' => 546,
                'date_enrolled' => 2024,
                'student_id' => 297,
                'class_id' => 25,
            ),
            46 => 
            array (
                'sc_id' => 547,
                'date_enrolled' => 2024,
                'student_id' => 1137,
                'class_id' => 1017,
            ),
            47 => 
            array (
                'sc_id' => 548,
                'date_enrolled' => 2024,
                'student_id' => 867,
                'class_id' => 825,
            ),
            48 => 
            array (
                'sc_id' => 549,
                'date_enrolled' => 2024,
                'student_id' => 432,
                'class_id' => 845,
            ),
            49 => 
            array (
                'sc_id' => 550,
                'date_enrolled' => 2024,
                'student_id' => 1452,
                'class_id' => 1194,
            ),
            50 => 
            array (
                'sc_id' => 551,
                'date_enrolled' => 2024,
                'student_id' => 89,
                'class_id' => 522,
            ),
            51 => 
            array (
                'sc_id' => 552,
                'date_enrolled' => 2024,
                'student_id' => 1295,
                'class_id' => 925,
            ),
            52 => 
            array (
                'sc_id' => 553,
                'date_enrolled' => 2024,
                'student_id' => 1231,
                'class_id' => 1432,
            ),
            53 => 
            array (
                'sc_id' => 554,
                'date_enrolled' => 2024,
                'student_id' => 1451,
                'class_id' => 1482,
            ),
            54 => 
            array (
                'sc_id' => 555,
                'date_enrolled' => 2024,
                'student_id' => 1380,
                'class_id' => 473,
            ),
            55 => 
            array (
                'sc_id' => 556,
                'date_enrolled' => 2024,
                'student_id' => 214,
                'class_id' => 1427,
            ),
            56 => 
            array (
                'sc_id' => 557,
                'date_enrolled' => 2024,
                'student_id' => 702,
                'class_id' => 877,
            ),
            57 => 
            array (
                'sc_id' => 558,
                'date_enrolled' => 2024,
                'student_id' => 650,
                'class_id' => 1012,
            ),
            58 => 
            array (
                'sc_id' => 559,
                'date_enrolled' => 2024,
                'student_id' => 1341,
                'class_id' => 1426,
            ),
            59 => 
            array (
                'sc_id' => 560,
                'date_enrolled' => 2024,
                'student_id' => 1258,
                'class_id' => 1570,
            ),
            60 => 
            array (
                'sc_id' => 561,
                'date_enrolled' => 2024,
                'student_id' => 1006,
                'class_id' => 1403,
            ),
            61 => 
            array (
                'sc_id' => 562,
                'date_enrolled' => 2024,
                'student_id' => 1110,
                'class_id' => 1113,
            ),
            62 => 
            array (
                'sc_id' => 563,
                'date_enrolled' => 2024,
                'student_id' => 609,
                'class_id' => 1480,
            ),
            63 => 
            array (
                'sc_id' => 564,
                'date_enrolled' => 2024,
                'student_id' => 281,
                'class_id' => 383,
            ),
            64 => 
            array (
                'sc_id' => 565,
                'date_enrolled' => 2024,
                'student_id' => 1465,
                'class_id' => 516,
            ),
            65 => 
            array (
                'sc_id' => 566,
                'date_enrolled' => 2024,
                'student_id' => 155,
                'class_id' => 34,
            ),
            66 => 
            array (
                'sc_id' => 567,
                'date_enrolled' => 2024,
                'student_id' => 756,
                'class_id' => 894,
            ),
            67 => 
            array (
                'sc_id' => 568,
                'date_enrolled' => 2024,
                'student_id' => 129,
                'class_id' => 96,
            ),
            68 => 
            array (
                'sc_id' => 569,
                'date_enrolled' => 2024,
                'student_id' => 132,
                'class_id' => 1521,
            ),
            69 => 
            array (
                'sc_id' => 570,
                'date_enrolled' => 2024,
                'student_id' => 63,
                'class_id' => 366,
            ),
            70 => 
            array (
                'sc_id' => 571,
                'date_enrolled' => 2024,
                'student_id' => 962,
                'class_id' => 1130,
            ),
            71 => 
            array (
                'sc_id' => 572,
                'date_enrolled' => 2024,
                'student_id' => 1544,
                'class_id' => 674,
            ),
            72 => 
            array (
                'sc_id' => 573,
                'date_enrolled' => 2024,
                'student_id' => 1407,
                'class_id' => 1394,
            ),
            73 => 
            array (
                'sc_id' => 574,
                'date_enrolled' => 2024,
                'student_id' => 1226,
                'class_id' => 84,
            ),
            74 => 
            array (
                'sc_id' => 575,
                'date_enrolled' => 2024,
                'student_id' => 141,
                'class_id' => 491,
            ),
            75 => 
            array (
                'sc_id' => 576,
                'date_enrolled' => 2024,
                'student_id' => 7,
                'class_id' => 829,
            ),
            76 => 
            array (
                'sc_id' => 577,
                'date_enrolled' => 2024,
                'student_id' => 1580,
                'class_id' => 780,
            ),
            77 => 
            array (
                'sc_id' => 578,
                'date_enrolled' => 2024,
                'student_id' => 328,
                'class_id' => 719,
            ),
            78 => 
            array (
                'sc_id' => 579,
                'date_enrolled' => 2024,
                'student_id' => 422,
                'class_id' => 1164,
            ),
            79 => 
            array (
                'sc_id' => 580,
                'date_enrolled' => 2024,
                'student_id' => 23,
                'class_id' => 952,
            ),
            80 => 
            array (
                'sc_id' => 581,
                'date_enrolled' => 2024,
                'student_id' => 836,
                'class_id' => 722,
            ),
            81 => 
            array (
                'sc_id' => 582,
                'date_enrolled' => 2024,
                'student_id' => 425,
                'class_id' => 1213,
            ),
            82 => 
            array (
                'sc_id' => 583,
                'date_enrolled' => 2024,
                'student_id' => 1576,
                'class_id' => 53,
            ),
            83 => 
            array (
                'sc_id' => 584,
                'date_enrolled' => 2024,
                'student_id' => 417,
                'class_id' => 800,
            ),
            84 => 
            array (
                'sc_id' => 585,
                'date_enrolled' => 2024,
                'student_id' => 1199,
                'class_id' => 779,
            ),
            85 => 
            array (
                'sc_id' => 586,
                'date_enrolled' => 2024,
                'student_id' => 31,
                'class_id' => 500,
            ),
            86 => 
            array (
                'sc_id' => 587,
                'date_enrolled' => 2024,
                'student_id' => 248,
                'class_id' => 142,
            ),
            87 => 
            array (
                'sc_id' => 588,
                'date_enrolled' => 2024,
                'student_id' => 5,
                'class_id' => 219,
            ),
            88 => 
            array (
                'sc_id' => 589,
                'date_enrolled' => 2024,
                'student_id' => 44,
                'class_id' => 1244,
            ),
            89 => 
            array (
                'sc_id' => 590,
                'date_enrolled' => 2024,
                'student_id' => 1165,
                'class_id' => 971,
            ),
            90 => 
            array (
                'sc_id' => 591,
                'date_enrolled' => 2024,
                'student_id' => 976,
                'class_id' => 521,
            ),
            91 => 
            array (
                'sc_id' => 592,
                'date_enrolled' => 2024,
                'student_id' => 507,
                'class_id' => 1050,
            ),
            92 => 
            array (
                'sc_id' => 593,
                'date_enrolled' => 2024,
                'student_id' => 1205,
                'class_id' => 985,
            ),
            93 => 
            array (
                'sc_id' => 594,
                'date_enrolled' => 2024,
                'student_id' => 1153,
                'class_id' => 1179,
            ),
            94 => 
            array (
                'sc_id' => 595,
                'date_enrolled' => 2024,
                'student_id' => 403,
                'class_id' => 85,
            ),
            95 => 
            array (
                'sc_id' => 596,
                'date_enrolled' => 2024,
                'student_id' => 937,
                'class_id' => 710,
            ),
            96 => 
            array (
                'sc_id' => 597,
                'date_enrolled' => 2024,
                'student_id' => 60,
                'class_id' => 1338,
            ),
            97 => 
            array (
                'sc_id' => 598,
                'date_enrolled' => 2024,
                'student_id' => 1128,
                'class_id' => 774,
            ),
            98 => 
            array (
                'sc_id' => 599,
                'date_enrolled' => 2024,
                'student_id' => 504,
                'class_id' => 1110,
            ),
            99 => 
            array (
                'sc_id' => 600,
                'date_enrolled' => 2024,
                'student_id' => 41,
                'class_id' => 462,
            ),
            100 => 
            array (
                'sc_id' => 601,
                'date_enrolled' => 2024,
                'student_id' => 424,
                'class_id' => 918,
            ),
            101 => 
            array (
                'sc_id' => 602,
                'date_enrolled' => 2024,
                'student_id' => 757,
                'class_id' => 14,
            ),
            102 => 
            array (
                'sc_id' => 603,
                'date_enrolled' => 2024,
                'student_id' => 538,
                'class_id' => 1070,
            ),
            103 => 
            array (
                'sc_id' => 604,
                'date_enrolled' => 2024,
                'student_id' => 1340,
                'class_id' => 426,
            ),
            104 => 
            array (
                'sc_id' => 605,
                'date_enrolled' => 2024,
                'student_id' => 274,
                'class_id' => 320,
            ),
            105 => 
            array (
                'sc_id' => 606,
                'date_enrolled' => 2024,
                'student_id' => 1469,
                'class_id' => 288,
            ),
            106 => 
            array (
                'sc_id' => 607,
                'date_enrolled' => 2024,
                'student_id' => 877,
                'class_id' => 1325,
            ),
            107 => 
            array (
                'sc_id' => 608,
                'date_enrolled' => 2024,
                'student_id' => 341,
                'class_id' => 136,
            ),
            108 => 
            array (
                'sc_id' => 609,
                'date_enrolled' => 2024,
                'student_id' => 1159,
                'class_id' => 52,
            ),
            109 => 
            array (
                'sc_id' => 610,
                'date_enrolled' => 2024,
                'student_id' => 1318,
                'class_id' => 1039,
            ),
            110 => 
            array (
                'sc_id' => 611,
                'date_enrolled' => 2024,
                'student_id' => 365,
                'class_id' => 1069,
            ),
            111 => 
            array (
                'sc_id' => 612,
                'date_enrolled' => 2024,
                'student_id' => 445,
                'class_id' => 1569,
            ),
            112 => 
            array (
                'sc_id' => 613,
                'date_enrolled' => 2024,
                'student_id' => 719,
                'class_id' => 667,
            ),
            113 => 
            array (
                'sc_id' => 614,
                'date_enrolled' => 2024,
                'student_id' => 590,
                'class_id' => 18,
            ),
            114 => 
            array (
                'sc_id' => 615,
                'date_enrolled' => 2024,
                'student_id' => 271,
                'class_id' => 1036,
            ),
            115 => 
            array (
                'sc_id' => 616,
                'date_enrolled' => 2024,
                'student_id' => 599,
                'class_id' => 983,
            ),
            116 => 
            array (
                'sc_id' => 617,
                'date_enrolled' => 2024,
                'student_id' => 457,
                'class_id' => 700,
            ),
            117 => 
            array (
                'sc_id' => 618,
                'date_enrolled' => 2024,
                'student_id' => 433,
                'class_id' => 493,
            ),
            118 => 
            array (
                'sc_id' => 619,
                'date_enrolled' => 2024,
                'student_id' => 321,
                'class_id' => 119,
            ),
            119 => 
            array (
                'sc_id' => 620,
                'date_enrolled' => 2024,
                'student_id' => 86,
                'class_id' => 186,
            ),
            120 => 
            array (
                'sc_id' => 621,
                'date_enrolled' => 2024,
                'student_id' => 1011,
                'class_id' => 1256,
            ),
            121 => 
            array (
                'sc_id' => 622,
                'date_enrolled' => 2024,
                'student_id' => 697,
                'class_id' => 1352,
            ),
            122 => 
            array (
                'sc_id' => 623,
                'date_enrolled' => 2024,
                'student_id' => 15,
                'class_id' => 982,
            ),
            123 => 
            array (
                'sc_id' => 624,
                'date_enrolled' => 2024,
                'student_id' => 1579,
                'class_id' => 1159,
            ),
            124 => 
            array (
                'sc_id' => 625,
                'date_enrolled' => 2024,
                'student_id' => 790,
                'class_id' => 989,
            ),
            125 => 
            array (
                'sc_id' => 626,
                'date_enrolled' => 2024,
                'student_id' => 1139,
                'class_id' => 283,
            ),
            126 => 
            array (
                'sc_id' => 627,
                'date_enrolled' => 2024,
                'student_id' => 739,
                'class_id' => 1470,
            ),
            127 => 
            array (
                'sc_id' => 628,
                'date_enrolled' => 2024,
                'student_id' => 330,
                'class_id' => 1530,
            ),
            128 => 
            array (
                'sc_id' => 629,
                'date_enrolled' => 2024,
                'student_id' => 1138,
                'class_id' => 819,
            ),
            129 => 
            array (
                'sc_id' => 630,
                'date_enrolled' => 2024,
                'student_id' => 1386,
                'class_id' => 79,
            ),
            130 => 
            array (
                'sc_id' => 631,
                'date_enrolled' => 2024,
                'student_id' => 574,
                'class_id' => 91,
            ),
            131 => 
            array (
                'sc_id' => 632,
                'date_enrolled' => 2024,
                'student_id' => 743,
                'class_id' => 1395,
            ),
            132 => 
            array (
                'sc_id' => 633,
                'date_enrolled' => 2024,
                'student_id' => 224,
                'class_id' => 755,
            ),
            133 => 
            array (
                'sc_id' => 634,
                'date_enrolled' => 2024,
                'student_id' => 581,
                'class_id' => 393,
            ),
            134 => 
            array (
                'sc_id' => 635,
                'date_enrolled' => 2024,
                'student_id' => 921,
                'class_id' => 378,
            ),
            135 => 
            array (
                'sc_id' => 636,
                'date_enrolled' => 2024,
                'student_id' => 910,
                'class_id' => 72,
            ),
            136 => 
            array (
                'sc_id' => 637,
                'date_enrolled' => 2024,
                'student_id' => 1302,
                'class_id' => 628,
            ),
            137 => 
            array (
                'sc_id' => 638,
                'date_enrolled' => 2024,
                'student_id' => 1218,
                'class_id' => 449,
            ),
            138 => 
            array (
                'sc_id' => 639,
                'date_enrolled' => 2024,
                'student_id' => 452,
                'class_id' => 814,
            ),
            139 => 
            array (
                'sc_id' => 640,
                'date_enrolled' => 2024,
                'student_id' => 911,
                'class_id' => 81,
            ),
            140 => 
            array (
                'sc_id' => 641,
                'date_enrolled' => 2024,
                'student_id' => 828,
                'class_id' => 793,
            ),
            141 => 
            array (
                'sc_id' => 642,
                'date_enrolled' => 2024,
                'student_id' => 1320,
                'class_id' => 505,
            ),
            142 => 
            array (
                'sc_id' => 643,
                'date_enrolled' => 2024,
                'student_id' => 282,
                'class_id' => 942,
            ),
            143 => 
            array (
                'sc_id' => 644,
                'date_enrolled' => 2024,
                'student_id' => 589,
                'class_id' => 1008,
            ),
            144 => 
            array (
                'sc_id' => 645,
                'date_enrolled' => 2024,
                'student_id' => 750,
                'class_id' => 627,
            ),
            145 => 
            array (
                'sc_id' => 646,
                'date_enrolled' => 2024,
                'student_id' => 1356,
                'class_id' => 317,
            ),
            146 => 
            array (
                'sc_id' => 647,
                'date_enrolled' => 2024,
                'student_id' => 1270,
                'class_id' => 131,
            ),
            147 => 
            array (
                'sc_id' => 648,
                'date_enrolled' => 2024,
                'student_id' => 1447,
                'class_id' => 934,
            ),
            148 => 
            array (
                'sc_id' => 649,
                'date_enrolled' => 2024,
                'student_id' => 216,
                'class_id' => 1475,
            ),
            149 => 
            array (
                'sc_id' => 650,
                'date_enrolled' => 2024,
                'student_id' => 729,
                'class_id' => 1158,
            ),
            150 => 
            array (
                'sc_id' => 651,
                'date_enrolled' => 2024,
                'student_id' => 855,
                'class_id' => 1319,
            ),
            151 => 
            array (
                'sc_id' => 652,
                'date_enrolled' => 2024,
                'student_id' => 202,
                'class_id' => 1032,
            ),
            152 => 
            array (
                'sc_id' => 653,
                'date_enrolled' => 2024,
                'student_id' => 759,
                'class_id' => 634,
            ),
            153 => 
            array (
                'sc_id' => 654,
                'date_enrolled' => 2024,
                'student_id' => 390,
                'class_id' => 307,
            ),
            154 => 
            array (
                'sc_id' => 655,
                'date_enrolled' => 2024,
                'student_id' => 227,
                'class_id' => 388,
            ),
            155 => 
            array (
                'sc_id' => 656,
                'date_enrolled' => 2024,
                'student_id' => 766,
                'class_id' => 285,
            ),
            156 => 
            array (
                'sc_id' => 657,
                'date_enrolled' => 2024,
                'student_id' => 1055,
                'class_id' => 597,
            ),
            157 => 
            array (
                'sc_id' => 658,
                'date_enrolled' => 2024,
                'student_id' => 1437,
                'class_id' => 1537,
            ),
            158 => 
            array (
                'sc_id' => 659,
                'date_enrolled' => 2024,
                'student_id' => 314,
                'class_id' => 1578,
            ),
            159 => 
            array (
                'sc_id' => 660,
                'date_enrolled' => 2024,
                'student_id' => 544,
                'class_id' => 431,
            ),
            160 => 
            array (
                'sc_id' => 661,
                'date_enrolled' => 2024,
                'student_id' => 992,
                'class_id' => 1332,
            ),
            161 => 
            array (
                'sc_id' => 662,
                'date_enrolled' => 2024,
                'student_id' => 903,
                'class_id' => 196,
            ),
            162 => 
            array (
                'sc_id' => 663,
                'date_enrolled' => 2024,
                'student_id' => 1589,
                'class_id' => 1184,
            ),
            163 => 
            array (
                'sc_id' => 664,
                'date_enrolled' => 2024,
                'student_id' => 17,
                'class_id' => 957,
            ),
            164 => 
            array (
                'sc_id' => 665,
                'date_enrolled' => 2024,
                'student_id' => 583,
                'class_id' => 1399,
            ),
            165 => 
            array (
                'sc_id' => 666,
                'date_enrolled' => 2024,
                'student_id' => 606,
                'class_id' => 729,
            ),
            166 => 
            array (
                'sc_id' => 667,
                'date_enrolled' => 2024,
                'student_id' => 1475,
                'class_id' => 1546,
            ),
            167 => 
            array (
                'sc_id' => 668,
                'date_enrolled' => 2024,
                'student_id' => 535,
                'class_id' => 1509,
            ),
            168 => 
            array (
                'sc_id' => 669,
                'date_enrolled' => 2024,
                'student_id' => 725,
                'class_id' => 508,
            ),
            169 => 
            array (
                'sc_id' => 670,
                'date_enrolled' => 2024,
                'student_id' => 849,
                'class_id' => 1215,
            ),
            170 => 
            array (
                'sc_id' => 671,
                'date_enrolled' => 2024,
                'student_id' => 695,
                'class_id' => 1205,
            ),
            171 => 
            array (
                'sc_id' => 672,
                'date_enrolled' => 2024,
                'student_id' => 287,
                'class_id' => 149,
            ),
            172 => 
            array (
                'sc_id' => 673,
                'date_enrolled' => 2024,
                'student_id' => 127,
                'class_id' => 572,
            ),
            173 => 
            array (
                'sc_id' => 674,
                'date_enrolled' => 2024,
                'student_id' => 1457,
                'class_id' => 9,
            ),
            174 => 
            array (
                'sc_id' => 675,
                'date_enrolled' => 2024,
                'student_id' => 857,
                'class_id' => 67,
            ),
            175 => 
            array (
                'sc_id' => 676,
                'date_enrolled' => 2024,
                'student_id' => 1040,
                'class_id' => 1409,
            ),
            176 => 
            array (
                'sc_id' => 677,
                'date_enrolled' => 2024,
                'student_id' => 1230,
                'class_id' => 1487,
            ),
            177 => 
            array (
                'sc_id' => 678,
                'date_enrolled' => 2024,
                'student_id' => 311,
                'class_id' => 1402,
            ),
            178 => 
            array (
                'sc_id' => 679,
                'date_enrolled' => 2024,
                'student_id' => 42,
                'class_id' => 159,
            ),
            179 => 
            array (
                'sc_id' => 680,
                'date_enrolled' => 2024,
                'student_id' => 769,
                'class_id' => 1253,
            ),
            180 => 
            array (
                'sc_id' => 681,
                'date_enrolled' => 2024,
                'student_id' => 1273,
                'class_id' => 145,
            ),
            181 => 
            array (
                'sc_id' => 682,
                'date_enrolled' => 2024,
                'student_id' => 375,
                'class_id' => 1269,
            ),
            182 => 
            array (
                'sc_id' => 683,
                'date_enrolled' => 2024,
                'student_id' => 778,
                'class_id' => 205,
            ),
            183 => 
            array (
                'sc_id' => 684,
                'date_enrolled' => 2024,
                'student_id' => 1002,
                'class_id' => 645,
            ),
            184 => 
            array (
                'sc_id' => 685,
                'date_enrolled' => 2024,
                'student_id' => 1118,
                'class_id' => 1122,
            ),
            185 => 
            array (
                'sc_id' => 686,
                'date_enrolled' => 2024,
                'student_id' => 776,
                'class_id' => 821,
            ),
            186 => 
            array (
                'sc_id' => 687,
                'date_enrolled' => 2024,
                'student_id' => 453,
                'class_id' => 1368,
            ),
            187 => 
            array (
                'sc_id' => 688,
                'date_enrolled' => 2024,
                'student_id' => 1176,
                'class_id' => 527,
            ),
            188 => 
            array (
                'sc_id' => 689,
                'date_enrolled' => 2024,
                'student_id' => 953,
                'class_id' => 1214,
            ),
            189 => 
            array (
                'sc_id' => 690,
                'date_enrolled' => 2024,
                'student_id' => 1245,
                'class_id' => 1201,
            ),
            190 => 
            array (
                'sc_id' => 691,
                'date_enrolled' => 2024,
                'student_id' => 1021,
                'class_id' => 365,
            ),
            191 => 
            array (
                'sc_id' => 692,
                'date_enrolled' => 2024,
                'student_id' => 220,
                'class_id' => 1552,
            ),
            192 => 
            array (
                'sc_id' => 693,
                'date_enrolled' => 2024,
                'student_id' => 1193,
                'class_id' => 611,
            ),
            193 => 
            array (
                'sc_id' => 694,
                'date_enrolled' => 2024,
                'student_id' => 987,
                'class_id' => 1292,
            ),
            194 => 
            array (
                'sc_id' => 695,
                'date_enrolled' => 2024,
                'student_id' => 77,
                'class_id' => 1009,
            ),
            195 => 
            array (
                'sc_id' => 696,
                'date_enrolled' => 2024,
                'student_id' => 137,
                'class_id' => 817,
            ),
            196 => 
            array (
                'sc_id' => 697,
                'date_enrolled' => 2024,
                'student_id' => 1107,
                'class_id' => 803,
            ),
            197 => 
            array (
                'sc_id' => 698,
                'date_enrolled' => 2024,
                'student_id' => 551,
                'class_id' => 31,
            ),
            198 => 
            array (
                'sc_id' => 699,
                'date_enrolled' => 2024,
                'student_id' => 833,
                'class_id' => 1028,
            ),
            199 => 
            array (
                'sc_id' => 700,
                'date_enrolled' => 2024,
                'student_id' => 334,
                'class_id' => 61,
            ),
            200 => 
            array (
                'sc_id' => 701,
                'date_enrolled' => 2024,
                'student_id' => 1136,
                'class_id' => 931,
            ),
            201 => 
            array (
                'sc_id' => 702,
                'date_enrolled' => 2024,
                'student_id' => 1072,
                'class_id' => 972,
            ),
            202 => 
            array (
                'sc_id' => 703,
                'date_enrolled' => 2024,
                'student_id' => 528,
                'class_id' => 787,
            ),
            203 => 
            array (
                'sc_id' => 704,
                'date_enrolled' => 2024,
                'student_id' => 961,
                'class_id' => 472,
            ),
            204 => 
            array (
                'sc_id' => 705,
                'date_enrolled' => 2024,
                'student_id' => 1244,
                'class_id' => 257,
            ),
            205 => 
            array (
                'sc_id' => 706,
                'date_enrolled' => 2024,
                'student_id' => 637,
                'class_id' => 225,
            ),
            206 => 
            array (
                'sc_id' => 707,
                'date_enrolled' => 2024,
                'student_id' => 863,
                'class_id' => 193,
            ),
            207 => 
            array (
                'sc_id' => 708,
                'date_enrolled' => 2024,
                'student_id' => 176,
                'class_id' => 2,
            ),
            208 => 
            array (
                'sc_id' => 709,
                'date_enrolled' => 2024,
                'student_id' => 1397,
                'class_id' => 337,
            ),
            209 => 
            array (
                'sc_id' => 710,
                'date_enrolled' => 2024,
                'student_id' => 1249,
                'class_id' => 413,
            ),
            210 => 
            array (
                'sc_id' => 711,
                'date_enrolled' => 2024,
                'student_id' => 474,
                'class_id' => 1491,
            ),
            211 => 
            array (
                'sc_id' => 712,
                'date_enrolled' => 2024,
                'student_id' => 852,
                'class_id' => 324,
            ),
            212 => 
            array (
                'sc_id' => 713,
                'date_enrolled' => 2024,
                'student_id' => 351,
                'class_id' => 898,
            ),
            213 => 
            array (
                'sc_id' => 714,
                'date_enrolled' => 2024,
                'student_id' => 984,
                'class_id' => 574,
            ),
            214 => 
            array (
                'sc_id' => 715,
                'date_enrolled' => 2024,
                'student_id' => 1529,
                'class_id' => 167,
            ),
            215 => 
            array (
                'sc_id' => 716,
                'date_enrolled' => 2024,
                'student_id' => 2,
                'class_id' => 1153,
            ),
            216 => 
            array (
                'sc_id' => 717,
                'date_enrolled' => 2024,
                'student_id' => 873,
                'class_id' => 1161,
            ),
            217 => 
            array (
                'sc_id' => 718,
                'date_enrolled' => 2024,
                'student_id' => 332,
                'class_id' => 15,
            ),
            218 => 
            array (
                'sc_id' => 719,
                'date_enrolled' => 2024,
                'student_id' => 664,
                'class_id' => 90,
            ),
            219 => 
            array (
                'sc_id' => 720,
                'date_enrolled' => 2024,
                'student_id' => 567,
                'class_id' => 1377,
            ),
            220 => 
            array (
                'sc_id' => 721,
                'date_enrolled' => 2024,
                'student_id' => 1514,
                'class_id' => 334,
            ),
            221 => 
            array (
                'sc_id' => 722,
                'date_enrolled' => 2024,
                'student_id' => 1168,
                'class_id' => 579,
            ),
            222 => 
            array (
                'sc_id' => 723,
                'date_enrolled' => 2024,
                'student_id' => 265,
                'class_id' => 158,
            ),
            223 => 
            array (
                'sc_id' => 724,
                'date_enrolled' => 2024,
                'student_id' => 1317,
                'class_id' => 1386,
            ),
            224 => 
            array (
                'sc_id' => 725,
                'date_enrolled' => 2024,
                'student_id' => 1375,
                'class_id' => 696,
            ),
            225 => 
            array (
                'sc_id' => 726,
                'date_enrolled' => 2024,
                'student_id' => 121,
                'class_id' => 630,
            ),
            226 => 
            array (
                'sc_id' => 727,
                'date_enrolled' => 2024,
                'student_id' => 591,
                'class_id' => 1169,
            ),
            227 => 
            array (
                'sc_id' => 728,
                'date_enrolled' => 2024,
                'student_id' => 1588,
                'class_id' => 1359,
            ),
            228 => 
            array (
                'sc_id' => 729,
                'date_enrolled' => 2024,
                'student_id' => 1232,
                'class_id' => 523,
            ),
            229 => 
            array (
                'sc_id' => 730,
                'date_enrolled' => 2024,
                'student_id' => 726,
                'class_id' => 1003,
            ),
            230 => 
            array (
                'sc_id' => 731,
                'date_enrolled' => 2024,
                'student_id' => 219,
                'class_id' => 244,
            ),
            231 => 
            array (
                'sc_id' => 732,
                'date_enrolled' => 2024,
                'student_id' => 781,
                'class_id' => 1134,
            ),
            232 => 
            array (
                'sc_id' => 733,
                'date_enrolled' => 2024,
                'student_id' => 1455,
                'class_id' => 501,
            ),
            233 => 
            array (
                'sc_id' => 734,
                'date_enrolled' => 2024,
                'student_id' => 229,
                'class_id' => 999,
            ),
            234 => 
            array (
                'sc_id' => 735,
                'date_enrolled' => 2024,
                'student_id' => 48,
                'class_id' => 243,
            ),
            235 => 
            array (
                'sc_id' => 736,
                'date_enrolled' => 2024,
                'student_id' => 1599,
                'class_id' => 557,
            ),
            236 => 
            array (
                'sc_id' => 737,
                'date_enrolled' => 2024,
                'student_id' => 1269,
                'class_id' => 1091,
            ),
            237 => 
            array (
                'sc_id' => 738,
                'date_enrolled' => 2024,
                'student_id' => 1300,
                'class_id' => 548,
            ),
            238 => 
            array (
                'sc_id' => 739,
                'date_enrolled' => 2024,
                'student_id' => 784,
                'class_id' => 319,
            ),
            239 => 
            array (
                'sc_id' => 740,
                'date_enrolled' => 2024,
                'student_id' => 1561,
                'class_id' => 1445,
            ),
            240 => 
            array (
                'sc_id' => 741,
                'date_enrolled' => 2024,
                'student_id' => 862,
                'class_id' => 550,
            ),
            241 => 
            array (
                'sc_id' => 742,
                'date_enrolled' => 2024,
                'student_id' => 1267,
                'class_id' => 1411,
            ),
            242 => 
            array (
                'sc_id' => 743,
                'date_enrolled' => 2024,
                'student_id' => 97,
                'class_id' => 1155,
            ),
            243 => 
            array (
                'sc_id' => 744,
                'date_enrolled' => 2024,
                'student_id' => 805,
                'class_id' => 1594,
            ),
            244 => 
            array (
                'sc_id' => 745,
                'date_enrolled' => 2024,
                'student_id' => 1105,
                'class_id' => 664,
            ),
            245 => 
            array (
                'sc_id' => 746,
                'date_enrolled' => 2024,
                'student_id' => 570,
                'class_id' => 435,
            ),
            246 => 
            array (
                'sc_id' => 747,
                'date_enrolled' => 2024,
                'student_id' => 421,
                'class_id' => 416,
            ),
            247 => 
            array (
                'sc_id' => 748,
                'date_enrolled' => 2024,
                'student_id' => 1501,
                'class_id' => 813,
            ),
            248 => 
            array (
                'sc_id' => 749,
                'date_enrolled' => 2024,
                'student_id' => 1422,
                'class_id' => 1384,
            ),
            249 => 
            array (
                'sc_id' => 750,
                'date_enrolled' => 2024,
                'student_id' => 1175,
                'class_id' => 838,
            ),
            250 => 
            array (
                'sc_id' => 751,
                'date_enrolled' => 2024,
                'student_id' => 1500,
                'class_id' => 459,
            ),
            251 => 
            array (
                'sc_id' => 752,
                'date_enrolled' => 2024,
                'student_id' => 56,
                'class_id' => 1344,
            ),
            252 => 
            array (
                'sc_id' => 753,
                'date_enrolled' => 2024,
                'student_id' => 331,
                'class_id' => 758,
            ),
            253 => 
            array (
                'sc_id' => 754,
                'date_enrolled' => 2024,
                'student_id' => 1562,
                'class_id' => 29,
            ),
            254 => 
            array (
                'sc_id' => 755,
                'date_enrolled' => 2024,
                'student_id' => 379,
                'class_id' => 1081,
            ),
            255 => 
            array (
                'sc_id' => 756,
                'date_enrolled' => 2024,
                'student_id' => 1111,
                'class_id' => 1477,
            ),
            256 => 
            array (
                'sc_id' => 757,
                'date_enrolled' => 2024,
                'student_id' => 649,
                'class_id' => 266,
            ),
            257 => 
            array (
                'sc_id' => 758,
                'date_enrolled' => 2024,
                'student_id' => 704,
                'class_id' => 506,
            ),
            258 => 
            array (
                'sc_id' => 759,
                'date_enrolled' => 2024,
                'student_id' => 1094,
                'class_id' => 1513,
            ),
            259 => 
            array (
                'sc_id' => 760,
                'date_enrolled' => 2024,
                'student_id' => 236,
                'class_id' => 1234,
            ),
            260 => 
            array (
                'sc_id' => 761,
                'date_enrolled' => 2024,
                'student_id' => 969,
                'class_id' => 301,
            ),
            261 => 
            array (
                'sc_id' => 762,
                'date_enrolled' => 2024,
                'student_id' => 919,
                'class_id' => 911,
            ),
            262 => 
            array (
                'sc_id' => 763,
                'date_enrolled' => 2024,
                'student_id' => 95,
                'class_id' => 1497,
            ),
            263 => 
            array (
                'sc_id' => 764,
                'date_enrolled' => 2024,
                'student_id' => 1536,
                'class_id' => 1564,
            ),
            264 => 
            array (
                'sc_id' => 765,
                'date_enrolled' => 2024,
                'student_id' => 149,
                'class_id' => 736,
            ),
            265 => 
            array (
                'sc_id' => 766,
                'date_enrolled' => 2024,
                'student_id' => 788,
                'class_id' => 1095,
            ),
            266 => 
            array (
                'sc_id' => 767,
                'date_enrolled' => 2024,
                'student_id' => 376,
                'class_id' => 1334,
            ),
            267 => 
            array (
                'sc_id' => 768,
                'date_enrolled' => 2024,
                'student_id' => 280,
                'class_id' => 818,
            ),
            268 => 
            array (
                'sc_id' => 769,
                'date_enrolled' => 2024,
                'student_id' => 1073,
                'class_id' => 215,
            ),
            269 => 
            array (
                'sc_id' => 770,
                'date_enrolled' => 2024,
                'student_id' => 1367,
                'class_id' => 992,
            ),
            270 => 
            array (
                'sc_id' => 771,
                'date_enrolled' => 2024,
                'student_id' => 1054,
                'class_id' => 827,
            ),
            271 => 
            array (
                'sc_id' => 772,
                'date_enrolled' => 2024,
                'student_id' => 29,
                'class_id' => 737,
            ),
            272 => 
            array (
                'sc_id' => 773,
                'date_enrolled' => 2024,
                'student_id' => 932,
                'class_id' => 1198,
            ),
            273 => 
            array (
                'sc_id' => 774,
                'date_enrolled' => 2024,
                'student_id' => 1359,
                'class_id' => 1162,
            ),
            274 => 
            array (
                'sc_id' => 775,
                'date_enrolled' => 2024,
                'student_id' => 997,
                'class_id' => 331,
            ),
            275 => 
            array (
                'sc_id' => 776,
                'date_enrolled' => 2024,
                'student_id' => 861,
                'class_id' => 537,
            ),
            276 => 
            array (
                'sc_id' => 777,
                'date_enrolled' => 2024,
                'student_id' => 835,
                'class_id' => 532,
            ),
            277 => 
            array (
                'sc_id' => 778,
                'date_enrolled' => 2024,
                'student_id' => 156,
                'class_id' => 1250,
            ),
            278 => 
            array (
                'sc_id' => 779,
                'date_enrolled' => 2024,
                'student_id' => 1306,
                'class_id' => 547,
            ),
            279 => 
            array (
                'sc_id' => 780,
                'date_enrolled' => 2024,
                'student_id' => 485,
                'class_id' => 1401,
            ),
            280 => 
            array (
                'sc_id' => 781,
                'date_enrolled' => 2024,
                'student_id' => 1383,
                'class_id' => 1101,
            ),
            281 => 
            array (
                'sc_id' => 782,
                'date_enrolled' => 2024,
                'student_id' => 676,
                'class_id' => 1355,
            ),
            282 => 
            array (
                'sc_id' => 783,
                'date_enrolled' => 2024,
                'student_id' => 679,
                'class_id' => 122,
            ),
            283 => 
            array (
                'sc_id' => 784,
                'date_enrolled' => 2024,
                'student_id' => 1214,
                'class_id' => 56,
            ),
            284 => 
            array (
                'sc_id' => 785,
                'date_enrolled' => 2024,
                'student_id' => 541,
                'class_id' => 940,
            ),
            285 => 
            array (
                'sc_id' => 786,
                'date_enrolled' => 2024,
                'student_id' => 188,
                'class_id' => 878,
            ),
            286 => 
            array (
                'sc_id' => 787,
                'date_enrolled' => 2024,
                'student_id' => 400,
                'class_id' => 1199,
            ),
            287 => 
            array (
                'sc_id' => 788,
                'date_enrolled' => 2024,
                'student_id' => 1332,
                'class_id' => 424,
            ),
            288 => 
            array (
                'sc_id' => 789,
                'date_enrolled' => 2024,
                'student_id' => 1291,
                'class_id' => 717,
            ),
            289 => 
            array (
                'sc_id' => 790,
                'date_enrolled' => 2024,
                'student_id' => 1502,
                'class_id' => 35,
            ),
            290 => 
            array (
                'sc_id' => 791,
                'date_enrolled' => 2024,
                'student_id' => 320,
                'class_id' => 1261,
            ),
            291 => 
            array (
                'sc_id' => 792,
                'date_enrolled' => 2024,
                'student_id' => 489,
                'class_id' => 1484,
            ),
            292 => 
            array (
                'sc_id' => 793,
                'date_enrolled' => 2024,
                'student_id' => 57,
                'class_id' => 951,
            ),
            293 => 
            array (
                'sc_id' => 794,
                'date_enrolled' => 2024,
                'student_id' => 520,
                'class_id' => 202,
            ),
            294 => 
            array (
                'sc_id' => 795,
                'date_enrolled' => 2024,
                'student_id' => 1192,
                'class_id' => 1217,
            ),
            295 => 
            array (
                'sc_id' => 796,
                'date_enrolled' => 2024,
                'student_id' => 58,
                'class_id' => 1294,
            ),
            296 => 
            array (
                'sc_id' => 797,
                'date_enrolled' => 2024,
                'student_id' => 1010,
                'class_id' => 805,
            ),
            297 => 
            array (
                'sc_id' => 798,
                'date_enrolled' => 2024,
                'student_id' => 806,
                'class_id' => 1341,
            ),
            298 => 
            array (
                'sc_id' => 799,
                'date_enrolled' => 2024,
                'student_id' => 91,
                'class_id' => 735,
            ),
            299 => 
            array (
                'sc_id' => 800,
                'date_enrolled' => 2024,
                'student_id' => 1202,
                'class_id' => 1276,
            ),
            300 => 
            array (
                'sc_id' => 801,
                'date_enrolled' => 2024,
                'student_id' => 384,
                'class_id' => 242,
            ),
            301 => 
            array (
                'sc_id' => 802,
                'date_enrolled' => 2024,
                'student_id' => 124,
                'class_id' => 265,
            ),
            302 => 
            array (
                'sc_id' => 803,
                'date_enrolled' => 2024,
                'student_id' => 1061,
                'class_id' => 468,
            ),
            303 => 
            array (
                'sc_id' => 804,
                'date_enrolled' => 2024,
                'student_id' => 1478,
                'class_id' => 893,
            ),
            304 => 
            array (
                'sc_id' => 805,
                'date_enrolled' => 2024,
                'student_id' => 1023,
                'class_id' => 260,
            ),
            305 => 
            array (
                'sc_id' => 806,
                'date_enrolled' => 2024,
                'student_id' => 18,
                'class_id' => 323,
            ),
            306 => 
            array (
                'sc_id' => 807,
                'date_enrolled' => 2024,
                'student_id' => 1337,
                'class_id' => 503,
            ),
            307 => 
            array (
                'sc_id' => 808,
                'date_enrolled' => 2024,
                'student_id' => 688,
                'class_id' => 1374,
            ),
            308 => 
            array (
                'sc_id' => 809,
                'date_enrolled' => 2024,
                'student_id' => 366,
                'class_id' => 1181,
            ),
            309 => 
            array (
                'sc_id' => 810,
                'date_enrolled' => 2024,
                'student_id' => 223,
                'class_id' => 253,
            ),
            310 => 
            array (
                'sc_id' => 811,
                'date_enrolled' => 2024,
                'student_id' => 508,
                'class_id' => 973,
            ),
            311 => 
            array (
                'sc_id' => 812,
                'date_enrolled' => 2024,
                'student_id' => 1513,
                'class_id' => 1493,
            ),
            312 => 
            array (
                'sc_id' => 813,
                'date_enrolled' => 2024,
                'student_id' => 329,
                'class_id' => 1407,
            ),
            313 => 
            array (
                'sc_id' => 814,
                'date_enrolled' => 2024,
                'student_id' => 1099,
                'class_id' => 349,
            ),
            314 => 
            array (
                'sc_id' => 815,
                'date_enrolled' => 2024,
                'student_id' => 936,
                'class_id' => 7,
            ),
            315 => 
            array (
                'sc_id' => 816,
                'date_enrolled' => 2024,
                'student_id' => 1493,
                'class_id' => 457,
            ),
            316 => 
            array (
                'sc_id' => 817,
                'date_enrolled' => 2024,
                'student_id' => 479,
                'class_id' => 669,
            ),
            317 => 
            array (
                'sc_id' => 818,
                'date_enrolled' => 2024,
                'student_id' => 1587,
                'class_id' => 183,
            ),
            318 => 
            array (
                'sc_id' => 819,
                'date_enrolled' => 2024,
                'student_id' => 1483,
                'class_id' => 387,
            ),
            319 => 
            array (
                'sc_id' => 820,
                'date_enrolled' => 2024,
                'student_id' => 231,
                'class_id' => 1024,
            ),
            320 => 
            array (
                'sc_id' => 821,
                'date_enrolled' => 2024,
                'student_id' => 967,
                'class_id' => 668,
            ),
            321 => 
            array (
                'sc_id' => 822,
                'date_enrolled' => 2024,
                'student_id' => 1142,
                'class_id' => 328,
            ),
            322 => 
            array (
                'sc_id' => 823,
                'date_enrolled' => 2024,
                'student_id' => 899,
                'class_id' => 698,
            ),
            323 => 
            array (
                'sc_id' => 824,
                'date_enrolled' => 2024,
                'student_id' => 492,
                'class_id' => 759,
            ),
            324 => 
            array (
                'sc_id' => 825,
                'date_enrolled' => 2024,
                'student_id' => 1593,
                'class_id' => 313,
            ),
            325 => 
            array (
                'sc_id' => 826,
                'date_enrolled' => 2024,
                'student_id' => 349,
                'class_id' => 258,
            ),
            326 => 
            array (
                'sc_id' => 827,
                'date_enrolled' => 2024,
                'student_id' => 87,
                'class_id' => 1438,
            ),
            327 => 
            array (
                'sc_id' => 828,
                'date_enrolled' => 2024,
                'student_id' => 1087,
                'class_id' => 665,
            ),
            328 => 
            array (
                'sc_id' => 829,
                'date_enrolled' => 2024,
                'student_id' => 1518,
                'class_id' => 1412,
            ),
            329 => 
            array (
                'sc_id' => 830,
                'date_enrolled' => 2024,
                'student_id' => 1100,
                'class_id' => 1076,
            ),
            330 => 
            array (
                'sc_id' => 831,
                'date_enrolled' => 2024,
                'student_id' => 1557,
                'class_id' => 346,
            ),
            331 => 
            array (
                'sc_id' => 832,
                'date_enrolled' => 2024,
                'student_id' => 303,
                'class_id' => 929,
            ),
            332 => 
            array (
                'sc_id' => 833,
                'date_enrolled' => 2024,
                'student_id' => 345,
                'class_id' => 602,
            ),
            333 => 
            array (
                'sc_id' => 834,
                'date_enrolled' => 2024,
                'student_id' => 360,
                'class_id' => 686,
            ),
            334 => 
            array (
                'sc_id' => 835,
                'date_enrolled' => 2024,
                'student_id' => 118,
                'class_id' => 273,
            ),
            335 => 
            array (
                'sc_id' => 836,
                'date_enrolled' => 2024,
                'student_id' => 755,
                'class_id' => 348,
            ),
            336 => 
            array (
                'sc_id' => 837,
                'date_enrolled' => 2024,
                'student_id' => 1059,
                'class_id' => 741,
            ),
            337 => 
            array (
                'sc_id' => 838,
                'date_enrolled' => 2024,
                'student_id' => 1454,
                'class_id' => 451,
            ),
            338 => 
            array (
                'sc_id' => 839,
                'date_enrolled' => 2024,
                'student_id' => 212,
                'class_id' => 362,
            ),
            339 => 
            array (
                'sc_id' => 840,
                'date_enrolled' => 2024,
                'student_id' => 623,
                'class_id' => 1489,
            ),
            340 => 
            array (
                'sc_id' => 841,
                'date_enrolled' => 2024,
                'student_id' => 437,
                'class_id' => 1328,
            ),
            341 => 
            array (
                'sc_id' => 842,
                'date_enrolled' => 2024,
                'student_id' => 241,
                'class_id' => 144,
            ),
            342 => 
            array (
                'sc_id' => 843,
                'date_enrolled' => 2024,
                'student_id' => 747,
                'class_id' => 352,
            ),
            343 => 
            array (
                'sc_id' => 844,
                'date_enrolled' => 2024,
                'student_id' => 394,
                'class_id' => 682,
            ),
            344 => 
            array (
                'sc_id' => 845,
                'date_enrolled' => 2024,
                'student_id' => 904,
                'class_id' => 415,
            ),
            345 => 
            array (
                'sc_id' => 846,
                'date_enrolled' => 2024,
                'student_id' => 771,
                'class_id' => 565,
            ),
            346 => 
            array (
                'sc_id' => 847,
                'date_enrolled' => 2024,
                'student_id' => 930,
                'class_id' => 543,
            ),
            347 => 
            array (
                'sc_id' => 848,
                'date_enrolled' => 2024,
                'student_id' => 262,
                'class_id' => 483,
            ),
            348 => 
            array (
                'sc_id' => 849,
                'date_enrolled' => 2024,
                'student_id' => 268,
                'class_id' => 1507,
            ),
            349 => 
            array (
                'sc_id' => 850,
                'date_enrolled' => 2024,
                'student_id' => 300,
                'class_id' => 107,
            ),
            350 => 
            array (
                'sc_id' => 851,
                'date_enrolled' => 2024,
                'student_id' => 1413,
                'class_id' => 1242,
            ),
            351 => 
            array (
                'sc_id' => 852,
                'date_enrolled' => 2024,
                'student_id' => 1519,
                'class_id' => 676,
            ),
            352 => 
            array (
                'sc_id' => 853,
                'date_enrolled' => 2024,
                'student_id' => 1272,
                'class_id' => 1539,
            ),
            353 => 
            array (
                'sc_id' => 854,
                'date_enrolled' => 2024,
                'student_id' => 669,
                'class_id' => 379,
            ),
            354 => 
            array (
                'sc_id' => 855,
                'date_enrolled' => 2024,
                'student_id' => 1266,
                'class_id' => 629,
            ),
            355 => 
            array (
                'sc_id' => 856,
                'date_enrolled' => 2024,
                'student_id' => 396,
                'class_id' => 97,
            ),
            356 => 
            array (
                'sc_id' => 857,
                'date_enrolled' => 2024,
                'student_id' => 397,
                'class_id' => 1172,
            ),
            357 => 
            array (
                'sc_id' => 858,
                'date_enrolled' => 2024,
                'student_id' => 703,
                'class_id' => 1059,
            ),
            358 => 
            array (
                'sc_id' => 859,
                'date_enrolled' => 2024,
                'student_id' => 639,
                'class_id' => 1579,
            ),
            359 => 
            array (
                'sc_id' => 860,
                'date_enrolled' => 2024,
                'student_id' => 621,
                'class_id' => 1517,
            ),
            360 => 
            array (
                'sc_id' => 861,
                'date_enrolled' => 2024,
                'student_id' => 1491,
                'class_id' => 1567,
            ),
            361 => 
            array (
                'sc_id' => 862,
                'date_enrolled' => 2024,
                'student_id' => 886,
                'class_id' => 16,
            ),
            362 => 
            array (
                'sc_id' => 863,
                'date_enrolled' => 2024,
                'student_id' => 1590,
                'class_id' => 1540,
            ),
            363 => 
            array (
                'sc_id' => 864,
                'date_enrolled' => 2024,
                'student_id' => 519,
                'class_id' => 703,
            ),
            364 => 
            array (
                'sc_id' => 865,
                'date_enrolled' => 2024,
                'student_id' => 1417,
                'class_id' => 782,
            ),
            365 => 
            array (
                'sc_id' => 866,
                'date_enrolled' => 2024,
                'student_id' => 62,
                'class_id' => 1263,
            ),
            366 => 
            array (
                'sc_id' => 867,
                'date_enrolled' => 2024,
                'student_id' => 733,
                'class_id' => 1465,
            ),
            367 => 
            array (
                'sc_id' => 868,
                'date_enrolled' => 2024,
                'student_id' => 949,
                'class_id' => 1157,
            ),
            368 => 
            array (
                'sc_id' => 869,
                'date_enrolled' => 2024,
                'student_id' => 1151,
                'class_id' => 901,
            ),
            369 => 
            array (
                'sc_id' => 870,
                'date_enrolled' => 2024,
                'student_id' => 277,
                'class_id' => 834,
            ),
            370 => 
            array (
                'sc_id' => 871,
                'date_enrolled' => 2024,
                'student_id' => 1124,
                'class_id' => 1313,
            ),
            371 => 
            array (
                'sc_id' => 872,
                'date_enrolled' => 2024,
                'student_id' => 1247,
                'class_id' => 1176,
            ),
            372 => 
            array (
                'sc_id' => 873,
                'date_enrolled' => 2024,
                'student_id' => 1506,
                'class_id' => 680,
            ),
            373 => 
            array (
                'sc_id' => 874,
                'date_enrolled' => 2024,
                'student_id' => 266,
                'class_id' => 633,
            ),
            374 => 
            array (
                'sc_id' => 875,
                'date_enrolled' => 2024,
                'student_id' => 76,
                'class_id' => 306,
            ),
            375 => 
            array (
                'sc_id' => 876,
                'date_enrolled' => 2024,
                'student_id' => 1078,
                'class_id' => 1322,
            ),
            376 => 
            array (
                'sc_id' => 877,
                'date_enrolled' => 2024,
                'student_id' => 566,
                'class_id' => 233,
            ),
            377 => 
            array (
                'sc_id' => 878,
                'date_enrolled' => 2024,
                'student_id' => 111,
                'class_id' => 713,
            ),
            378 => 
            array (
                'sc_id' => 879,
                'date_enrolled' => 2024,
                'student_id' => 1140,
                'class_id' => 252,
            ),
            379 => 
            array (
                'sc_id' => 880,
                'date_enrolled' => 2024,
                'student_id' => 380,
                'class_id' => 1188,
            ),
            380 => 
            array (
                'sc_id' => 881,
                'date_enrolled' => 2024,
                'student_id' => 1392,
                'class_id' => 580,
            ),
            381 => 
            array (
                'sc_id' => 882,
                'date_enrolled' => 2024,
                'student_id' => 753,
                'class_id' => 751,
            ),
            382 => 
            array (
                'sc_id' => 883,
                'date_enrolled' => 2024,
                'student_id' => 406,
                'class_id' => 1568,
            ),
            383 => 
            array (
                'sc_id' => 884,
                'date_enrolled' => 2024,
                'student_id' => 1398,
                'class_id' => 134,
            ),
            384 => 
            array (
                'sc_id' => 885,
                'date_enrolled' => 2024,
                'student_id' => 197,
                'class_id' => 651,
            ),
            385 => 
            array (
                'sc_id' => 886,
                'date_enrolled' => 2024,
                'student_id' => 367,
                'class_id' => 1346,
            ),
            386 => 
            array (
                'sc_id' => 887,
                'date_enrolled' => 2024,
                'student_id' => 763,
                'class_id' => 960,
            ),
            387 => 
            array (
                'sc_id' => 888,
                'date_enrolled' => 2024,
                'student_id' => 1316,
                'class_id' => 230,
            ),
            388 => 
            array (
                'sc_id' => 889,
                'date_enrolled' => 2024,
                'student_id' => 510,
                'class_id' => 966,
            ),
            389 => 
            array (
                'sc_id' => 890,
                'date_enrolled' => 2024,
                'student_id' => 186,
                'class_id' => 481,
            ),
            390 => 
            array (
                'sc_id' => 891,
                'date_enrolled' => 2024,
                'student_id' => 1354,
                'class_id' => 712,
            ),
            391 => 
            array (
                'sc_id' => 892,
                'date_enrolled' => 2024,
                'student_id' => 495,
                'class_id' => 1585,
            ),
            392 => 
            array (
                'sc_id' => 893,
                'date_enrolled' => 2024,
                'student_id' => 665,
                'class_id' => 1505,
            ),
            393 => 
            array (
                'sc_id' => 894,
                'date_enrolled' => 2024,
                'student_id' => 868,
                'class_id' => 1466,
            ),
            394 => 
            array (
                'sc_id' => 895,
                'date_enrolled' => 2024,
                'student_id' => 88,
                'class_id' => 47,
            ),
            395 => 
            array (
                'sc_id' => 896,
                'date_enrolled' => 2024,
                'student_id' => 275,
                'class_id' => 373,
            ),
            396 => 
            array (
                'sc_id' => 897,
                'date_enrolled' => 2024,
                'student_id' => 964,
                'class_id' => 720,
            ),
            397 => 
            array (
                'sc_id' => 898,
                'date_enrolled' => 2024,
                'student_id' => 1363,
                'class_id' => 3,
            ),
            398 => 
            array (
                'sc_id' => 899,
                'date_enrolled' => 2024,
                'student_id' => 957,
                'class_id' => 872,
            ),
            399 => 
            array (
                'sc_id' => 900,
                'date_enrolled' => 2024,
                'student_id' => 1495,
                'class_id' => 392,
            ),
            400 => 
            array (
                'sc_id' => 901,
                'date_enrolled' => 2024,
                'student_id' => 687,
                'class_id' => 1066,
            ),
            401 => 
            array (
                'sc_id' => 902,
                'date_enrolled' => 2024,
                'student_id' => 1365,
                'class_id' => 647,
            ),
            402 => 
            array (
                'sc_id' => 903,
                'date_enrolled' => 2024,
                'student_id' => 264,
                'class_id' => 382,
            ),
            403 => 
            array (
                'sc_id' => 904,
                'date_enrolled' => 2024,
                'student_id' => 874,
                'class_id' => 1433,
            ),
            404 => 
            array (
                'sc_id' => 905,
                'date_enrolled' => 2024,
                'student_id' => 191,
                'class_id' => 1096,
            ),
            405 => 
            array (
                'sc_id' => 906,
                'date_enrolled' => 2024,
                'student_id' => 373,
                'class_id' => 210,
            ),
            406 => 
            array (
                'sc_id' => 907,
                'date_enrolled' => 2024,
                'student_id' => 714,
                'class_id' => 302,
            ),
            407 => 
            array (
                'sc_id' => 908,
                'date_enrolled' => 2024,
                'student_id' => 1188,
                'class_id' => 1307,
            ),
            408 => 
            array (
                'sc_id' => 909,
                'date_enrolled' => 2024,
                'student_id' => 555,
                'class_id' => 143,
            ),
            409 => 
            array (
                'sc_id' => 910,
                'date_enrolled' => 2024,
                'student_id' => 278,
                'class_id' => 1137,
            ),
            410 => 
            array (
                'sc_id' => 911,
                'date_enrolled' => 2024,
                'student_id' => 393,
                'class_id' => 886,
            ),
            411 => 
            array (
                'sc_id' => 912,
                'date_enrolled' => 2024,
                'student_id' => 1211,
                'class_id' => 917,
            ),
            412 => 
            array (
                'sc_id' => 913,
                'date_enrolled' => 2024,
                'student_id' => 1421,
                'class_id' => 1083,
            ),
            413 => 
            array (
                'sc_id' => 914,
                'date_enrolled' => 2024,
                'student_id' => 550,
                'class_id' => 419,
            ),
            414 => 
            array (
                'sc_id' => 915,
                'date_enrolled' => 2024,
                'student_id' => 1135,
                'class_id' => 178,
            ),
            415 => 
            array (
                'sc_id' => 916,
                'date_enrolled' => 2024,
                'student_id' => 809,
                'class_id' => 563,
            ),
            416 => 
            array (
                'sc_id' => 917,
                'date_enrolled' => 2024,
                'student_id' => 154,
                'class_id' => 1558,
            ),
            417 => 
            array (
                'sc_id' => 918,
                'date_enrolled' => 2024,
                'student_id' => 619,
                'class_id' => 450,
            ),
            418 => 
            array (
                'sc_id' => 919,
                'date_enrolled' => 2024,
                'student_id' => 1556,
                'class_id' => 1123,
            ),
            419 => 
            array (
                'sc_id' => 920,
                'date_enrolled' => 2024,
                'student_id' => 1219,
                'class_id' => 1367,
            ),
            420 => 
            array (
                'sc_id' => 921,
                'date_enrolled' => 2024,
                'student_id' => 802,
                'class_id' => 249,
            ),
            421 => 
            array (
                'sc_id' => 922,
                'date_enrolled' => 2024,
                'student_id' => 1345,
                'class_id' => 1297,
            ),
            422 => 
            array (
                'sc_id' => 923,
                'date_enrolled' => 2024,
                'student_id' => 217,
                'class_id' => 1356,
            ),
            423 => 
            array (
                'sc_id' => 924,
                'date_enrolled' => 2024,
                'student_id' => 1432,
                'class_id' => 20,
            ),
            424 => 
            array (
                'sc_id' => 925,
                'date_enrolled' => 2024,
                'student_id' => 1508,
                'class_id' => 456,
            ),
            425 => 
            array (
                'sc_id' => 926,
                'date_enrolled' => 2024,
                'student_id' => 1206,
                'class_id' => 168,
            ),
            426 => 
            array (
                'sc_id' => 927,
                'date_enrolled' => 2024,
                'student_id' => 988,
                'class_id' => 1387,
            ),
            427 => 
            array (
                'sc_id' => 928,
                'date_enrolled' => 2024,
                'student_id' => 1098,
                'class_id' => 484,
            ),
            428 => 
            array (
                'sc_id' => 929,
                'date_enrolled' => 2024,
                'student_id' => 1213,
                'class_id' => 927,
            ),
            429 => 
            array (
                'sc_id' => 930,
                'date_enrolled' => 2024,
                'student_id' => 1038,
                'class_id' => 603,
            ),
            430 => 
            array (
                'sc_id' => 931,
                'date_enrolled' => 2024,
                'student_id' => 1464,
                'class_id' => 974,
            ),
            431 => 
            array (
                'sc_id' => 932,
                'date_enrolled' => 2024,
                'student_id' => 912,
                'class_id' => 1247,
            ),
            432 => 
            array (
                'sc_id' => 933,
                'date_enrolled' => 2024,
                'student_id' => 392,
                'class_id' => 810,
            ),
            433 => 
            array (
                'sc_id' => 934,
                'date_enrolled' => 2024,
                'student_id' => 110,
                'class_id' => 1371,
            ),
            434 => 
            array (
                'sc_id' => 935,
                'date_enrolled' => 2024,
                'student_id' => 1166,
                'class_id' => 1327,
            ),
            435 => 
            array (
                'sc_id' => 936,
                'date_enrolled' => 2024,
                'student_id' => 1444,
                'class_id' => 621,
            ),
            436 => 
            array (
                'sc_id' => 937,
                'date_enrolled' => 2024,
                'student_id' => 1248,
                'class_id' => 1265,
            ),
            437 => 
            array (
                'sc_id' => 938,
                'date_enrolled' => 2024,
                'student_id' => 730,
                'class_id' => 412,
            ),
            438 => 
            array (
                'sc_id' => 939,
                'date_enrolled' => 2024,
                'student_id' => 6,
                'class_id' => 1449,
            ),
            439 => 
            array (
                'sc_id' => 940,
                'date_enrolled' => 2024,
                'student_id' => 963,
                'class_id' => 873,
            ),
            440 => 
            array (
                'sc_id' => 941,
                'date_enrolled' => 2024,
                'student_id' => 472,
                'class_id' => 620,
            ),
            441 => 
            array (
                'sc_id' => 942,
                'date_enrolled' => 2024,
                'student_id' => 346,
                'class_id' => 395,
            ),
            442 => 
            array (
                'sc_id' => 943,
                'date_enrolled' => 2024,
                'student_id' => 1339,
                'class_id' => 1055,
            ),
            443 => 
            array (
                'sc_id' => 944,
                'date_enrolled' => 2024,
                'student_id' => 532,
                'class_id' => 1243,
            ),
            444 => 
            array (
                'sc_id' => 945,
                'date_enrolled' => 2024,
                'student_id' => 1326,
                'class_id' => 1462,
            ),
            445 => 
            array (
                'sc_id' => 946,
                'date_enrolled' => 2024,
                'student_id' => 658,
                'class_id' => 1314,
            ),
            446 => 
            array (
                'sc_id' => 947,
                'date_enrolled' => 2024,
                'student_id' => 1438,
                'class_id' => 622,
            ),
            447 => 
            array (
                'sc_id' => 948,
                'date_enrolled' => 2024,
                'student_id' => 1160,
                'class_id' => 1526,
            ),
            448 => 
            array (
                'sc_id' => 949,
                'date_enrolled' => 2024,
                'student_id' => 1086,
                'class_id' => 269,
            ),
            449 => 
            array (
                'sc_id' => 950,
                'date_enrolled' => 2024,
                'student_id' => 768,
                'class_id' => 1034,
            ),
            450 => 
            array (
                'sc_id' => 951,
                'date_enrolled' => 2024,
                'student_id' => 951,
                'class_id' => 1128,
            ),
            451 => 
            array (
                'sc_id' => 952,
                'date_enrolled' => 2024,
                'student_id' => 1001,
                'class_id' => 1492,
            ),
            452 => 
            array (
                'sc_id' => 953,
                'date_enrolled' => 2024,
                'student_id' => 1009,
                'class_id' => 264,
            ),
            453 => 
            array (
                'sc_id' => 954,
                'date_enrolled' => 2024,
                'student_id' => 1049,
                'class_id' => 1516,
            ),
            454 => 
            array (
                'sc_id' => 955,
                'date_enrolled' => 2024,
                'student_id' => 870,
                'class_id' => 955,
            ),
            455 => 
            array (
                'sc_id' => 956,
                'date_enrolled' => 2024,
                'student_id' => 1070,
                'class_id' => 1022,
            ),
            456 => 
            array (
                'sc_id' => 957,
                'date_enrolled' => 2024,
                'student_id' => 1503,
                'class_id' => 428,
            ),
            457 => 
            array (
                'sc_id' => 958,
                'date_enrolled' => 2024,
                'student_id' => 450,
                'class_id' => 711,
            ),
            458 => 
            array (
                'sc_id' => 959,
                'date_enrolled' => 2024,
                'student_id' => 115,
                'class_id' => 1547,
            ),
            459 => 
            array (
                'sc_id' => 960,
                'date_enrolled' => 2024,
                'student_id' => 1364,
                'class_id' => 441,
            ),
            460 => 
            array (
                'sc_id' => 961,
                'date_enrolled' => 2024,
                'student_id' => 1000,
                'class_id' => 1072,
            ),
            461 => 
            array (
                'sc_id' => 962,
                'date_enrolled' => 2024,
                'student_id' => 1325,
                'class_id' => 513,
            ),
            462 => 
            array (
                'sc_id' => 963,
                'date_enrolled' => 2024,
                'student_id' => 1456,
                'class_id' => 1100,
            ),
            463 => 
            array (
                'sc_id' => 964,
                'date_enrolled' => 2024,
                'student_id' => 1541,
                'class_id' => 888,
            ),
            464 => 
            array (
                'sc_id' => 965,
                'date_enrolled' => 2024,
                'student_id' => 259,
                'class_id' => 1324,
            ),
            465 => 
            array (
                'sc_id' => 966,
                'date_enrolled' => 2024,
                'student_id' => 1210,
                'class_id' => 1501,
            ),
            466 => 
            array (
                'sc_id' => 967,
                'date_enrolled' => 2024,
                'student_id' => 554,
                'class_id' => 661,
            ),
            467 => 
            array (
                'sc_id' => 968,
                'date_enrolled' => 2024,
                'student_id' => 1463,
                'class_id' => 518,
            ),
            468 => 
            array (
                'sc_id' => 969,
                'date_enrolled' => 2024,
                'student_id' => 928,
                'class_id' => 1512,
            ),
            469 => 
            array (
                'sc_id' => 970,
                'date_enrolled' => 2024,
                'student_id' => 1204,
                'class_id' => 855,
            ),
            470 => 
            array (
                'sc_id' => 971,
                'date_enrolled' => 2024,
                'student_id' => 465,
                'class_id' => 489,
            ),
            471 => 
            array (
                'sc_id' => 972,
                'date_enrolled' => 2024,
                'student_id' => 556,
                'class_id' => 1148,
            ),
            472 => 
            array (
                'sc_id' => 973,
                'date_enrolled' => 2024,
                'student_id' => 1549,
                'class_id' => 494,
            ),
            473 => 
            array (
                'sc_id' => 974,
                'date_enrolled' => 2024,
                'student_id' => 728,
                'class_id' => 1075,
            ),
            474 => 
            array (
                'sc_id' => 975,
                'date_enrolled' => 2024,
                'student_id' => 803,
                'class_id' => 1151,
            ),
            475 => 
            array (
                'sc_id' => 976,
                'date_enrolled' => 2024,
                'student_id' => 81,
                'class_id' => 624,
            ),
            476 => 
            array (
                'sc_id' => 977,
                'date_enrolled' => 2024,
                'student_id' => 374,
                'class_id' => 418,
            ),
            477 => 
            array (
                'sc_id' => 978,
                'date_enrolled' => 2024,
                'student_id' => 540,
                'class_id' => 1467,
            ),
            478 => 
            array (
                'sc_id' => 979,
                'date_enrolled' => 2024,
                'student_id' => 1460,
                'class_id' => 1436,
            ),
            479 => 
            array (
                'sc_id' => 980,
                'date_enrolled' => 2024,
                'student_id' => 712,
                'class_id' => 575,
            ),
            480 => 
            array (
                'sc_id' => 981,
                'date_enrolled' => 2024,
                'student_id' => 348,
                'class_id' => 1400,
            ),
            481 => 
            array (
                'sc_id' => 982,
                'date_enrolled' => 2024,
                'student_id' => 875,
                'class_id' => 1274,
            ),
            482 => 
            array (
                'sc_id' => 983,
                'date_enrolled' => 2024,
                'student_id' => 1343,
                'class_id' => 1533,
            ),
            483 => 
            array (
                'sc_id' => 984,
                'date_enrolled' => 2024,
                'student_id' => 500,
                'class_id' => 1195,
            ),
            484 => 
            array (
                'sc_id' => 985,
                'date_enrolled' => 2024,
                'student_id' => 941,
                'class_id' => 738,
            ),
            485 => 
            array (
                'sc_id' => 986,
                'date_enrolled' => 2024,
                'student_id' => 674,
                'class_id' => 1286,
            ),
            486 => 
            array (
                'sc_id' => 987,
                'date_enrolled' => 2024,
                'student_id' => 939,
                'class_id' => 292,
            ),
            487 => 
            array (
                'sc_id' => 988,
                'date_enrolled' => 2024,
                'student_id' => 98,
                'class_id' => 954,
            ),
            488 => 
            array (
                'sc_id' => 989,
                'date_enrolled' => 2024,
                'student_id' => 83,
                'class_id' => 823,
            ),
            489 => 
            array (
                'sc_id' => 990,
                'date_enrolled' => 2024,
                'student_id' => 814,
                'class_id' => 1529,
            ),
            490 => 
            array (
                'sc_id' => 991,
                'date_enrolled' => 2024,
                'student_id' => 1032,
                'class_id' => 336,
            ),
            491 => 
            array (
                'sc_id' => 992,
                'date_enrolled' => 2024,
                'student_id' => 1212,
                'class_id' => 997,
            ),
            492 => 
            array (
                'sc_id' => 993,
                'date_enrolled' => 2024,
                'student_id' => 213,
                'class_id' => 312,
            ),
            493 => 
            array (
                'sc_id' => 994,
                'date_enrolled' => 2024,
                'student_id' => 171,
                'class_id' => 321,
            ),
            494 => 
            array (
                'sc_id' => 995,
                'date_enrolled' => 2024,
                'student_id' => 945,
                'class_id' => 743,
            ),
            495 => 
            array (
                'sc_id' => 996,
                'date_enrolled' => 2024,
                'student_id' => 798,
                'class_id' => 936,
            ),
            496 => 
            array (
                'sc_id' => 997,
                'date_enrolled' => 2024,
                'student_id' => 493,
                'class_id' => 1231,
            ),
            497 => 
            array (
                'sc_id' => 998,
                'date_enrolled' => 2024,
                'student_id' => 164,
                'class_id' => 1330,
            ),
            498 => 
            array (
                'sc_id' => 999,
                'date_enrolled' => 2024,
                'student_id' => 49,
                'class_id' => 1463,
            ),
            499 => 
            array (
                'sc_id' => 1000,
                'date_enrolled' => 2024,
                'student_id' => 1239,
                'class_id' => 190,
            ),
        ));
        \DB::table('student_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 1001,
                'date_enrolled' => 2024,
                'student_id' => 612,
                'class_id' => 662,
            ),
            1 => 
            array (
                'sc_id' => 1002,
                'date_enrolled' => 2024,
                'student_id' => 1330,
                'class_id' => 380,
            ),
            2 => 
            array (
                'sc_id' => 1003,
                'date_enrolled' => 2024,
                'student_id' => 99,
                'class_id' => 595,
            ),
            3 => 
            array (
                'sc_id' => 1004,
                'date_enrolled' => 2024,
                'student_id' => 407,
                'class_id' => 582,
            ),
            4 => 
            array (
                'sc_id' => 1005,
                'date_enrolled' => 2024,
                'student_id' => 871,
                'class_id' => 968,
            ),
            5 => 
            array (
                'sc_id' => 1006,
                'date_enrolled' => 2024,
                'student_id' => 80,
                'class_id' => 470,
            ),
            6 => 
            array (
                'sc_id' => 1007,
                'date_enrolled' => 2024,
                'student_id' => 1298,
                'class_id' => 41,
            ),
            7 => 
            array (
                'sc_id' => 1008,
                'date_enrolled' => 2024,
                'student_id' => 1279,
                'class_id' => 421,
            ),
            8 => 
            array (
                'sc_id' => 1009,
                'date_enrolled' => 2024,
                'student_id' => 470,
                'class_id' => 114,
            ),
            9 => 
            array (
                'sc_id' => 1010,
                'date_enrolled' => 2024,
                'student_id' => 662,
                'class_id' => 374,
            ),
            10 => 
            array (
                'sc_id' => 1011,
                'date_enrolled' => 2024,
                'student_id' => 1305,
                'class_id' => 465,
            ),
            11 => 
            array (
                'sc_id' => 1012,
                'date_enrolled' => 2024,
                'student_id' => 594,
                'class_id' => 933,
            ),
            12 => 
            array (
                'sc_id' => 1013,
                'date_enrolled' => 2024,
                'student_id' => 1074,
                'class_id' => 17,
            ),
            13 => 
            array (
                'sc_id' => 1014,
                'date_enrolled' => 2024,
                'student_id' => 369,
                'class_id' => 783,
            ),
            14 => 
            array (
                'sc_id' => 1015,
                'date_enrolled' => 2024,
                'student_id' => 208,
                'class_id' => 794,
            ),
            15 => 
            array (
                'sc_id' => 1016,
                'date_enrolled' => 2024,
                'student_id' => 1293,
                'class_id' => 1211,
            ),
            16 => 
            array (
                'sc_id' => 1017,
                'date_enrolled' => 2024,
                'student_id' => 93,
                'class_id' => 1383,
            ),
            17 => 
            array (
                'sc_id' => 1018,
                'date_enrolled' => 2024,
                'student_id' => 1052,
                'class_id' => 897,
            ),
            18 => 
            array (
                'sc_id' => 1019,
                'date_enrolled' => 2024,
                'student_id' => 434,
                'class_id' => 1007,
            ),
            19 => 
            array (
                'sc_id' => 1020,
                'date_enrolled' => 2024,
                'student_id' => 14,
                'class_id' => 509,
            ),
            20 => 
            array (
                'sc_id' => 1021,
                'date_enrolled' => 2024,
                'student_id' => 140,
                'class_id' => 140,
            ),
            21 => 
            array (
                'sc_id' => 1022,
                'date_enrolled' => 2024,
                'student_id' => 973,
                'class_id' => 592,
            ),
            22 => 
            array (
                'sc_id' => 1023,
                'date_enrolled' => 2024,
                'student_id' => 533,
                'class_id' => 59,
            ),
            23 => 
            array (
                'sc_id' => 1024,
                'date_enrolled' => 2024,
                'student_id' => 1093,
                'class_id' => 98,
            ),
            24 => 
            array (
                'sc_id' => 1025,
                'date_enrolled' => 2024,
                'student_id' => 760,
                'class_id' => 1163,
            ),
            25 => 
            array (
                'sc_id' => 1026,
                'date_enrolled' => 2024,
                'student_id' => 1228,
                'class_id' => 1078,
            ),
            26 => 
            array (
                'sc_id' => 1027,
                'date_enrolled' => 2024,
                'student_id' => 448,
                'class_id' => 369,
            ),
            27 => 
            array (
                'sc_id' => 1028,
                'date_enrolled' => 2024,
                'student_id' => 94,
                'class_id' => 715,
            ),
            28 => 
            array (
                'sc_id' => 1029,
                'date_enrolled' => 2024,
                'student_id' => 1524,
                'class_id' => 560,
            ),
            29 => 
            array (
                'sc_id' => 1030,
                'date_enrolled' => 2024,
                'student_id' => 1185,
                'class_id' => 1461,
            ),
            30 => 
            array (
                'sc_id' => 1031,
                'date_enrolled' => 2024,
                'student_id' => 490,
                'class_id' => 995,
            ),
            31 => 
            array (
                'sc_id' => 1032,
                'date_enrolled' => 2024,
                'student_id' => 837,
                'class_id' => 314,
            ),
            32 => 
            array (
                'sc_id' => 1033,
                'date_enrolled' => 2024,
                'student_id' => 927,
                'class_id' => 360,
            ),
            33 => 
            array (
                'sc_id' => 1034,
                'date_enrolled' => 2024,
                'student_id' => 130,
                'class_id' => 1291,
            ),
            34 => 
            array (
                'sc_id' => 1035,
                'date_enrolled' => 2024,
                'student_id' => 1351,
                'class_id' => 571,
            ),
            35 => 
            array (
                'sc_id' => 1036,
                'date_enrolled' => 2024,
                'student_id' => 66,
                'class_id' => 1279,
            ),
            36 => 
            array (
                'sc_id' => 1037,
                'date_enrolled' => 2024,
                'student_id' => 59,
                'class_id' => 467,
            ),
            37 => 
            array (
                'sc_id' => 1038,
                'date_enrolled' => 2024,
                'student_id' => 1149,
                'class_id' => 1340,
            ),
            38 => 
            array (
                'sc_id' => 1039,
                'date_enrolled' => 2024,
                'student_id' => 244,
                'class_id' => 577,
            ),
            39 => 
            array (
                'sc_id' => 1040,
                'date_enrolled' => 2024,
                'student_id' => 307,
                'class_id' => 1067,
            ),
            40 => 
            array (
                'sc_id' => 1041,
                'date_enrolled' => 2024,
                'student_id' => 906,
                'class_id' => 734,
            ),
            41 => 
            array (
                'sc_id' => 1042,
                'date_enrolled' => 2024,
                'student_id' => 897,
                'class_id' => 60,
            ),
            42 => 
            array (
                'sc_id' => 1043,
                'date_enrolled' => 2024,
                'student_id' => 315,
                'class_id' => 771,
            ),
            43 => 
            array (
                'sc_id' => 1044,
                'date_enrolled' => 2024,
                'student_id' => 955,
                'class_id' => 156,
            ),
            44 => 
            array (
                'sc_id' => 1045,
                'date_enrolled' => 2024,
                'student_id' => 879,
                'class_id' => 1073,
            ),
            45 => 
            array (
                'sc_id' => 1046,
                'date_enrolled' => 2024,
                'student_id' => 1569,
                'class_id' => 1375,
            ),
            46 => 
            array (
                'sc_id' => 1047,
                'date_enrolled' => 2024,
                'student_id' => 965,
                'class_id' => 1166,
            ),
            47 => 
            array (
                'sc_id' => 1048,
                'date_enrolled' => 2024,
                'student_id' => 885,
                'class_id' => 50,
            ),
            48 => 
            array (
                'sc_id' => 1049,
                'date_enrolled' => 2024,
                'student_id' => 1527,
                'class_id' => 593,
            ),
            49 => 
            array (
                'sc_id' => 1050,
                'date_enrolled' => 2024,
                'student_id' => 1169,
                'class_id' => 408,
            ),
            50 => 
            array (
                'sc_id' => 1051,
                'date_enrolled' => 2024,
                'student_id' => 1566,
                'class_id' => 1093,
            ),
            51 => 
            array (
                'sc_id' => 1052,
                'date_enrolled' => 2024,
                'student_id' => 410,
                'class_id' => 1252,
            ),
            52 => 
            array (
                'sc_id' => 1053,
                'date_enrolled' => 2024,
                'student_id' => 924,
                'class_id' => 118,
            ),
            53 => 
            array (
                'sc_id' => 1054,
                'date_enrolled' => 2024,
                'student_id' => 55,
                'class_id' => 1000,
            ),
            54 => 
            array (
                'sc_id' => 1055,
                'date_enrolled' => 2024,
                'student_id' => 47,
                'class_id' => 695,
            ),
            55 => 
            array (
                'sc_id' => 1056,
                'date_enrolled' => 2024,
                'student_id' => 761,
                'class_id' => 295,
            ),
            56 => 
            array (
                'sc_id' => 1057,
                'date_enrolled' => 2024,
                'student_id' => 1374,
                'class_id' => 1087,
            ),
            57 => 
            array (
                'sc_id' => 1058,
                'date_enrolled' => 2024,
                'student_id' => 640,
                'class_id' => 831,
            ),
            58 => 
            array (
                'sc_id' => 1059,
                'date_enrolled' => 2024,
                'student_id' => 856,
                'class_id' => 1483,
            ),
            59 => 
            array (
                'sc_id' => 1060,
                'date_enrolled' => 2024,
                'student_id' => 318,
                'class_id' => 1119,
            ),
            60 => 
            array (
                'sc_id' => 1061,
                'date_enrolled' => 2024,
                'student_id' => 166,
                'class_id' => 1572,
            ),
            61 => 
            array (
                'sc_id' => 1062,
                'date_enrolled' => 2024,
                'student_id' => 431,
                'class_id' => 678,
            ),
            62 => 
            array (
                'sc_id' => 1063,
                'date_enrolled' => 2024,
                'student_id' => 831,
                'class_id' => 1576,
            ),
            63 => 
            array (
                'sc_id' => 1064,
                'date_enrolled' => 2024,
                'student_id' => 1246,
                'class_id' => 1315,
            ),
            64 => 
            array (
                'sc_id' => 1065,
                'date_enrolled' => 2024,
                'student_id' => 319,
                'class_id' => 675,
            ),
            65 => 
            array (
                'sc_id' => 1066,
                'date_enrolled' => 2024,
                'student_id' => 1283,
                'class_id' => 36,
            ),
            66 => 
            array (
                'sc_id' => 1067,
                'date_enrolled' => 2024,
                'student_id' => 926,
                'class_id' => 1535,
            ),
            67 => 
            array (
                'sc_id' => 1068,
                'date_enrolled' => 2024,
                'student_id' => 628,
                'class_id' => 815,
            ),
            68 => 
            array (
                'sc_id' => 1069,
                'date_enrolled' => 2024,
                'student_id' => 1492,
                'class_id' => 1145,
            ),
            69 => 
            array (
                'sc_id' => 1070,
                'date_enrolled' => 2024,
                'student_id' => 1443,
                'class_id' => 697,
            ),
            70 => 
            array (
                'sc_id' => 1071,
                'date_enrolled' => 2024,
                'student_id' => 576,
                'class_id' => 1595,
            ),
            71 => 
            array (
                'sc_id' => 1072,
                'date_enrolled' => 2024,
                'student_id' => 1344,
                'class_id' => 1143,
            ),
            72 => 
            array (
                'sc_id' => 1073,
                'date_enrolled' => 2024,
                'student_id' => 1458,
                'class_id' => 859,
            ),
            73 => 
            array (
                'sc_id' => 1074,
                'date_enrolled' => 2024,
                'student_id' => 1520,
                'class_id' => 1229,
            ),
            74 => 
            array (
                'sc_id' => 1075,
                'date_enrolled' => 2024,
                'student_id' => 249,
                'class_id' => 1498,
            ),
            75 => 
            array (
                'sc_id' => 1076,
                'date_enrolled' => 2024,
                'student_id' => 744,
                'class_id' => 1270,
            ),
            76 => 
            array (
                'sc_id' => 1077,
                'date_enrolled' => 2024,
                'student_id' => 1446,
                'class_id' => 184,
            ),
            77 => 
            array (
                'sc_id' => 1078,
                'date_enrolled' => 2024,
                'student_id' => 1376,
                'class_id' => 1206,
            ),
            78 => 
            array (
                'sc_id' => 1079,
                'date_enrolled' => 2024,
                'student_id' => 815,
                'class_id' => 1310,
            ),
            79 => 
            array (
                'sc_id' => 1080,
                'date_enrolled' => 2024,
                'student_id' => 1256,
                'class_id' => 842,
            ),
            80 => 
            array (
                'sc_id' => 1081,
                'date_enrolled' => 2024,
                'student_id' => 1163,
                'class_id' => 1239,
            ),
            81 => 
            array (
                'sc_id' => 1082,
                'date_enrolled' => 2024,
                'student_id' => 126,
                'class_id' => 1429,
            ),
            82 => 
            array (
                'sc_id' => 1083,
                'date_enrolled' => 2024,
                'student_id' => 1134,
                'class_id' => 82,
            ),
            83 => 
            array (
                'sc_id' => 1084,
                'date_enrolled' => 2024,
                'student_id' => 821,
                'class_id' => 890,
            ),
            84 => 
            array (
                'sc_id' => 1085,
                'date_enrolled' => 2024,
                'student_id' => 1526,
                'class_id' => 1415,
            ),
            85 => 
            array (
                'sc_id' => 1086,
                'date_enrolled' => 2024,
                'student_id' => 1408,
                'class_id' => 400,
            ),
            86 => 
            array (
                'sc_id' => 1087,
                'date_enrolled' => 2024,
                'student_id' => 1533,
                'class_id' => 1043,
            ),
            87 => 
            array (
                'sc_id' => 1088,
                'date_enrolled' => 2024,
                'student_id' => 488,
                'class_id' => 744,
            ),
            88 => 
            array (
                'sc_id' => 1089,
                'date_enrolled' => 2024,
                'student_id' => 1429,
                'class_id' => 1531,
            ),
            89 => 
            array (
                'sc_id' => 1090,
                'date_enrolled' => 2024,
                'student_id' => 579,
                'class_id' => 192,
            ),
            90 => 
            array (
                'sc_id' => 1091,
                'date_enrolled' => 2024,
                'student_id' => 185,
                'class_id' => 1193,
            ),
            91 => 
            array (
                'sc_id' => 1092,
                'date_enrolled' => 2024,
                'student_id' => 1420,
                'class_id' => 1443,
            ),
            92 => 
            array (
                'sc_id' => 1093,
                'date_enrolled' => 2024,
                'student_id' => 342,
                'class_id' => 807,
            ),
            93 => 
            array (
                'sc_id' => 1094,
                'date_enrolled' => 2024,
                'student_id' => 53,
                'class_id' => 19,
            ),
            94 => 
            array (
                'sc_id' => 1095,
                'date_enrolled' => 2024,
                'student_id' => 174,
                'class_id' => 1336,
            ),
            95 => 
            array (
                'sc_id' => 1096,
                'date_enrolled' => 2024,
                'student_id' => 536,
                'class_id' => 694,
            ),
            96 => 
            array (
                'sc_id' => 1097,
                'date_enrolled' => 2024,
                'student_id' => 653,
                'class_id' => 439,
            ),
            97 => 
            array (
                'sc_id' => 1098,
                'date_enrolled' => 2024,
                'student_id' => 1068,
                'class_id' => 591,
            ),
            98 => 
            array (
                'sc_id' => 1099,
                'date_enrolled' => 2024,
                'student_id' => 1552,
                'class_id' => 1268,
            ),
            99 => 
            array (
                'sc_id' => 1100,
                'date_enrolled' => 2024,
                'student_id' => 51,
                'class_id' => 538,
            ),
            100 => 
            array (
                'sc_id' => 1101,
                'date_enrolled' => 2024,
                'student_id' => 654,
                'class_id' => 297,
            ),
            101 => 
            array (
                'sc_id' => 1102,
                'date_enrolled' => 2024,
                'student_id' => 427,
                'class_id' => 262,
            ),
            102 => 
            array (
                'sc_id' => 1103,
                'date_enrolled' => 2024,
                'student_id' => 1147,
                'class_id' => 704,
            ),
            103 => 
            array (
                'sc_id' => 1104,
                'date_enrolled' => 2024,
                'student_id' => 1035,
                'class_id' => 228,
            ),
            104 => 
            array (
                'sc_id' => 1105,
                'date_enrolled' => 2024,
                'student_id' => 635,
                'class_id' => 127,
            ),
            105 => 
            array (
                'sc_id' => 1106,
                'date_enrolled' => 2024,
                'student_id' => 1015,
                'class_id' => 442,
            ),
            106 => 
            array (
                'sc_id' => 1107,
                'date_enrolled' => 2024,
                'student_id' => 296,
                'class_id' => 471,
            ),
            107 => 
            array (
                'sc_id' => 1108,
                'date_enrolled' => 2024,
                'student_id' => 1003,
                'class_id' => 1056,
            ),
            108 => 
            array (
                'sc_id' => 1109,
                'date_enrolled' => 2024,
                'student_id' => 1476,
                'class_id' => 1219,
            ),
            109 => 
            array (
                'sc_id' => 1110,
                'date_enrolled' => 2024,
                'student_id' => 915,
                'class_id' => 1021,
            ),
            110 => 
            array (
                'sc_id' => 1111,
                'date_enrolled' => 2024,
                'student_id' => 288,
                'class_id' => 785,
            ),
            111 => 
            array (
                'sc_id' => 1112,
                'date_enrolled' => 2024,
                'student_id' => 1158,
                'class_id' => 377,
            ),
            112 => 
            array (
                'sc_id' => 1113,
                'date_enrolled' => 2024,
                'student_id' => 966,
                'class_id' => 1306,
            ),
            113 => 
            array (
                'sc_id' => 1114,
                'date_enrolled' => 2024,
                'student_id' => 1196,
                'class_id' => 405,
            ),
            114 => 
            array (
                'sc_id' => 1115,
                'date_enrolled' => 2024,
                'student_id' => 1255,
                'class_id' => 256,
            ),
            115 => 
            array (
                'sc_id' => 1116,
                'date_enrolled' => 2024,
                'student_id' => 1424,
                'class_id' => 13,
            ),
            116 => 
            array (
                'sc_id' => 1117,
                'date_enrolled' => 2024,
                'student_id' => 683,
                'class_id' => 151,
            ),
            117 => 
            array (
                'sc_id' => 1118,
                'date_enrolled' => 2024,
                'student_id' => 1095,
                'class_id' => 300,
            ),
            118 => 
            array (
                'sc_id' => 1119,
                'date_enrolled' => 2024,
                'student_id' => 746,
                'class_id' => 754,
            ),
            119 => 
            array (
                'sc_id' => 1120,
                'date_enrolled' => 2024,
                'student_id' => 1591,
                'class_id' => 1105,
            ),
            120 => 
            array (
                'sc_id' => 1121,
                'date_enrolled' => 2024,
                'student_id' => 372,
                'class_id' => 124,
            ),
            121 => 
            array (
                'sc_id' => 1122,
                'date_enrolled' => 2024,
                'student_id' => 1292,
                'class_id' => 361,
            ),
            122 => 
            array (
                'sc_id' => 1123,
                'date_enrolled' => 2024,
                'student_id' => 1123,
                'class_id' => 174,
            ),
            123 => 
            array (
                'sc_id' => 1124,
                'date_enrolled' => 2024,
                'student_id' => 108,
                'class_id' => 461,
            ),
            124 => 
            array (
                'sc_id' => 1125,
                'date_enrolled' => 2024,
                'student_id' => 509,
                'class_id' => 1227,
            ),
            125 => 
            array (
                'sc_id' => 1126,
                'date_enrolled' => 2024,
                'student_id' => 832,
                'class_id' => 887,
            ),
            126 => 
            array (
                'sc_id' => 1127,
                'date_enrolled' => 2024,
                'student_id' => 256,
                'class_id' => 1538,
            ),
            127 => 
            array (
                'sc_id' => 1128,
                'date_enrolled' => 2024,
                'student_id' => 123,
                'class_id' => 920,
            ),
            128 => 
            array (
                'sc_id' => 1129,
                'date_enrolled' => 2024,
                'student_id' => 1571,
                'class_id' => 1165,
            ),
            129 => 
            array (
                'sc_id' => 1130,
                'date_enrolled' => 2024,
                'student_id' => 1014,
                'class_id' => 861,
            ),
            130 => 
            array (
                'sc_id' => 1131,
                'date_enrolled' => 2024,
                'student_id' => 1046,
                'class_id' => 958,
            ),
            131 => 
            array (
                'sc_id' => 1132,
                'date_enrolled' => 2024,
                'student_id' => 968,
                'class_id' => 1146,
            ),
            132 => 
            array (
                'sc_id' => 1133,
                'date_enrolled' => 2024,
                'student_id' => 1553,
                'class_id' => 1185,
            ),
            133 => 
            array (
                'sc_id' => 1134,
                'date_enrolled' => 2024,
                'student_id' => 435,
                'class_id' => 63,
            ),
            134 => 
            array (
                'sc_id' => 1135,
                'date_enrolled' => 2024,
                'student_id' => 642,
                'class_id' => 226,
            ),
            135 => 
            array (
                'sc_id' => 1136,
                'date_enrolled' => 2024,
                'student_id' => 996,
                'class_id' => 1506,
            ),
            136 => 
            array (
                'sc_id' => 1137,
                'date_enrolled' => 2024,
                'student_id' => 889,
                'class_id' => 1434,
            ),
            137 => 
            array (
                'sc_id' => 1138,
                'date_enrolled' => 2024,
                'student_id' => 923,
                'class_id' => 679,
            ),
            138 => 
            array (
                'sc_id' => 1139,
                'date_enrolled' => 2024,
                'student_id' => 484,
                'class_id' => 1392,
            ),
            139 => 
            array (
                'sc_id' => 1140,
                'date_enrolled' => 2024,
                'student_id' => 1547,
                'class_id' => 1044,
            ),
            140 => 
            array (
                'sc_id' => 1141,
                'date_enrolled' => 2024,
                'student_id' => 1406,
                'class_id' => 206,
            ),
            141 => 
            array (
                'sc_id' => 1142,
                'date_enrolled' => 2024,
                'student_id' => 455,
                'class_id' => 639,
            ),
            142 => 
            array (
                'sc_id' => 1143,
                'date_enrolled' => 2024,
                'student_id' => 246,
                'class_id' => 1264,
            ),
            143 => 
            array (
                'sc_id' => 1144,
                'date_enrolled' => 2024,
                'student_id' => 1025,
                'class_id' => 355,
            ),
            144 => 
            array (
                'sc_id' => 1145,
                'date_enrolled' => 2024,
                'student_id' => 1494,
                'class_id' => 409,
            ),
            145 => 
            array (
                'sc_id' => 1146,
                'date_enrolled' => 2024,
                'student_id' => 1126,
                'class_id' => 970,
            ),
            146 => 
            array (
                'sc_id' => 1147,
                'date_enrolled' => 2024,
                'student_id' => 920,
                'class_id' => 1287,
            ),
            147 => 
            array (
                'sc_id' => 1148,
                'date_enrolled' => 2024,
                'student_id' => 1348,
                'class_id' => 833,
            ),
            148 => 
            array (
                'sc_id' => 1149,
                'date_enrolled' => 2024,
                'student_id' => 260,
                'class_id' => 768,
            ),
            149 => 
            array (
                'sc_id' => 1150,
                'date_enrolled' => 2024,
                'student_id' => 1075,
                'class_id' => 287,
            ),
            150 => 
            array (
                'sc_id' => 1151,
                'date_enrolled' => 2024,
                'student_id' => 1425,
                'class_id' => 417,
            ),
            151 => 
            array (
                'sc_id' => 1152,
                'date_enrolled' => 2024,
                'student_id' => 617,
                'class_id' => 1200,
            ),
            152 => 
            array (
                'sc_id' => 1153,
                'date_enrolled' => 2024,
                'student_id' => 700,
                'class_id' => 310,
            ),
            153 => 
            array (
                'sc_id' => 1154,
                'date_enrolled' => 2024,
                'student_id' => 1346,
                'class_id' => 836,
            ),
            154 => 
            array (
                'sc_id' => 1155,
                'date_enrolled' => 2024,
                'student_id' => 707,
                'class_id' => 772,
            ),
            155 => 
            array (
                'sc_id' => 1156,
                'date_enrolled' => 2024,
                'student_id' => 441,
                'class_id' => 99,
            ),
            156 => 
            array (
                'sc_id' => 1157,
                'date_enrolled' => 2024,
                'student_id' => 983,
                'class_id' => 526,
            ),
            157 => 
            array (
                'sc_id' => 1158,
                'date_enrolled' => 2024,
                'student_id' => 569,
                'class_id' => 1350,
            ),
            158 => 
            array (
                'sc_id' => 1159,
                'date_enrolled' => 2024,
                'student_id' => 1277,
                'class_id' => 1154,
            ),
            159 => 
            array (
                'sc_id' => 1160,
                'date_enrolled' => 2024,
                'student_id' => 548,
                'class_id' => 187,
            ),
            160 => 
            array (
                'sc_id' => 1161,
                'date_enrolled' => 2024,
                'student_id' => 39,
                'class_id' => 1457,
            ),
            161 => 
            array (
                'sc_id' => 1162,
                'date_enrolled' => 2024,
                'student_id' => 1481,
                'class_id' => 1358,
            ),
            162 => 
            array (
                'sc_id' => 1163,
                'date_enrolled' => 2024,
                'student_id' => 1082,
                'class_id' => 1080,
            ),
            163 => 
            array (
                'sc_id' => 1164,
                'date_enrolled' => 2024,
                'student_id' => 1260,
                'class_id' => 62,
            ),
            164 => 
            array (
                'sc_id' => 1165,
                'date_enrolled' => 2024,
                'student_id' => 1583,
                'class_id' => 1363,
            ),
            165 => 
            array (
                'sc_id' => 1166,
                'date_enrolled' => 2024,
                'student_id' => 959,
                'class_id' => 613,
            ),
            166 => 
            array (
                'sc_id' => 1167,
                'date_enrolled' => 2024,
                'student_id' => 257,
                'class_id' => 525,
            ),
            167 => 
            array (
                'sc_id' => 1168,
                'date_enrolled' => 2024,
                'student_id' => 834,
                'class_id' => 1469,
            ),
            168 => 
            array (
                'sc_id' => 1169,
                'date_enrolled' => 2024,
                'student_id' => 1113,
                'class_id' => 251,
            ),
            169 => 
            array (
                'sc_id' => 1170,
                'date_enrolled' => 2024,
                'student_id' => 21,
                'class_id' => 540,
            ),
            170 => 
            array (
                'sc_id' => 1171,
                'date_enrolled' => 2024,
                'student_id' => 1314,
                'class_id' => 88,
            ),
            171 => 
            array (
                'sc_id' => 1172,
                'date_enrolled' => 2024,
                'student_id' => 762,
                'class_id' => 891,
            ),
            172 => 
            array (
                'sc_id' => 1173,
                'date_enrolled' => 2024,
                'student_id' => 181,
                'class_id' => 1138,
            ),
            173 => 
            array (
                'sc_id' => 1174,
                'date_enrolled' => 2024,
                'student_id' => 1453,
                'class_id' => 1192,
            ),
            174 => 
            array (
                'sc_id' => 1175,
                'date_enrolled' => 2024,
                'student_id' => 841,
                'class_id' => 477,
            ),
            175 => 
            array (
                'sc_id' => 1176,
                'date_enrolled' => 2024,
                'student_id' => 1007,
                'class_id' => 896,
            ),
            176 => 
            array (
                'sc_id' => 1177,
                'date_enrolled' => 2024,
                'student_id' => 818,
                'class_id' => 106,
            ),
            177 => 
            array (
                'sc_id' => 1178,
                'date_enrolled' => 2024,
                'student_id' => 1594,
                'class_id' => 11,
            ),
            178 => 
            array (
                'sc_id' => 1179,
                'date_enrolled' => 2024,
                'student_id' => 1430,
                'class_id' => 1571,
            ),
            179 => 
            array (
                'sc_id' => 1180,
                'date_enrolled' => 2024,
                'student_id' => 1482,
                'class_id' => 1220,
            ),
            180 => 
            array (
                'sc_id' => 1181,
                'date_enrolled' => 2024,
                'student_id' => 459,
                'class_id' => 1586,
            ),
            181 => 
            array (
                'sc_id' => 1182,
                'date_enrolled' => 2024,
                'student_id' => 478,
                'class_id' => 822,
            ),
            182 => 
            array (
                'sc_id' => 1183,
                'date_enrolled' => 2024,
                'student_id' => 371,
                'class_id' => 1562,
            ),
            183 => 
            array (
                'sc_id' => 1184,
                'date_enrolled' => 2024,
                'student_id' => 737,
                'class_id' => 1437,
            ),
            184 => 
            array (
                'sc_id' => 1185,
                'date_enrolled' => 2024,
                'student_id' => 611,
                'class_id' => 792,
            ),
            185 => 
            array (
                'sc_id' => 1186,
                'date_enrolled' => 2024,
                'student_id' => 79,
                'class_id' => 616,
            ),
            186 => 
            array (
                'sc_id' => 1187,
                'date_enrolled' => 2024,
                'student_id' => 399,
                'class_id' => 1523,
            ),
            187 => 
            array (
                'sc_id' => 1188,
                'date_enrolled' => 2024,
                'student_id' => 245,
                'class_id' => 1131,
            ),
            188 => 
            array (
                'sc_id' => 1189,
                'date_enrolled' => 2024,
                'student_id' => 179,
                'class_id' => 967,
            ),
            189 => 
            array (
                'sc_id' => 1190,
                'date_enrolled' => 2024,
                'student_id' => 1507,
                'class_id' => 1499,
            ),
            190 => 
            array (
                'sc_id' => 1191,
                'date_enrolled' => 2024,
                'student_id' => 887,
                'class_id' => 1460,
            ),
            191 => 
            array (
                'sc_id' => 1192,
                'date_enrolled' => 2024,
                'student_id' => 1209,
                'class_id' => 607,
            ),
            192 => 
            array (
                'sc_id' => 1193,
                'date_enrolled' => 2024,
                'student_id' => 1329,
                'class_id' => 1582,
            ),
            193 => 
            array (
                'sc_id' => 1194,
                'date_enrolled' => 2024,
                'student_id' => 1304,
                'class_id' => 691,
            ),
            194 => 
            array (
                'sc_id' => 1195,
                'date_enrolled' => 2024,
                'student_id' => 1489,
                'class_id' => 281,
            ),
            195 => 
            array (
                'sc_id' => 1196,
                'date_enrolled' => 2024,
                'student_id' => 772,
                'class_id' => 1065,
            ),
            196 => 
            array (
                'sc_id' => 1197,
                'date_enrolled' => 2024,
                'student_id' => 385,
                'class_id' => 1196,
            ),
            197 => 
            array (
                'sc_id' => 1198,
                'date_enrolled' => 2024,
                'student_id' => 1131,
                'class_id' => 837,
            ),
            198 => 
            array (
                'sc_id' => 1199,
                'date_enrolled' => 2024,
                'student_id' => 26,
                'class_id' => 658,
            ),
            199 => 
            array (
                'sc_id' => 1200,
                'date_enrolled' => 2024,
                'student_id' => 627,
                'class_id' => 10,
            ),
            200 => 
            array (
                'sc_id' => 1201,
                'date_enrolled' => 2024,
                'student_id' => 1051,
                'class_id' => 1404,
            ),
            201 => 
            array (
                'sc_id' => 1202,
                'date_enrolled' => 2024,
                'student_id' => 956,
                'class_id' => 240,
            ),
            202 => 
            array (
                'sc_id' => 1203,
                'date_enrolled' => 2024,
                'student_id' => 848,
                'class_id' => 64,
            ),
            203 => 
            array (
                'sc_id' => 1204,
                'date_enrolled' => 2024,
                'student_id' => 173,
                'class_id' => 1447,
            ),
            204 => 
            array (
                'sc_id' => 1205,
                'date_enrolled' => 2024,
                'student_id' => 1435,
                'class_id' => 1398,
            ),
            205 => 
            array (
                'sc_id' => 1206,
                'date_enrolled' => 2024,
                'student_id' => 24,
                'class_id' => 908,
            ),
            206 => 
            array (
                'sc_id' => 1207,
                'date_enrolled' => 2024,
                'student_id' => 33,
                'class_id' => 423,
            ),
            207 => 
            array (
                'sc_id' => 1208,
                'date_enrolled' => 2024,
                'student_id' => 439,
                'class_id' => 1006,
            ),
            208 => 
            array (
                'sc_id' => 1209,
                'date_enrolled' => 2024,
                'student_id' => 239,
                'class_id' => 129,
            ),
            209 => 
            array (
                'sc_id' => 1210,
                'date_enrolled' => 2024,
                'student_id' => 1229,
                'class_id' => 520,
            ),
            210 => 
            array (
                'sc_id' => 1211,
                'date_enrolled' => 2024,
                'student_id' => 659,
                'class_id' => 375,
            ),
            211 => 
            array (
                'sc_id' => 1212,
                'date_enrolled' => 2024,
                'student_id' => 494,
                'class_id' => 551,
            ),
            212 => 
            array (
                'sc_id' => 1213,
                'date_enrolled' => 2024,
                'student_id' => 523,
                'class_id' => 250,
            ),
            213 => 
            array (
                'sc_id' => 1214,
                'date_enrolled' => 2024,
                'student_id' => 67,
                'class_id' => 867,
            ),
            214 => 
            array (
                'sc_id' => 1215,
                'date_enrolled' => 2024,
                'student_id' => 1042,
                'class_id' => 341,
            ),
            215 => 
            array (
                'sc_id' => 1216,
                'date_enrolled' => 2024,
                'student_id' => 1127,
                'class_id' => 514,
            ),
            216 => 
            array (
                'sc_id' => 1217,
                'date_enrolled' => 2024,
                'student_id' => 501,
                'class_id' => 133,
            ),
            217 => 
            array (
                'sc_id' => 1218,
                'date_enrolled' => 2024,
                'student_id' => 888,
                'class_id' => 42,
            ),
            218 => 
            array (
                'sc_id' => 1219,
                'date_enrolled' => 2024,
                'student_id' => 475,
                'class_id' => 102,
            ),
            219 => 
            array (
                'sc_id' => 1220,
                'date_enrolled' => 2024,
                'student_id' => 1379,
                'class_id' => 40,
            ),
            220 => 
            array (
                'sc_id' => 1221,
                'date_enrolled' => 2024,
                'student_id' => 1537,
                'class_id' => 220,
            ),
            221 => 
            array (
                'sc_id' => 1222,
                'date_enrolled' => 2024,
                'student_id' => 1487,
                'class_id' => 977,
            ),
            222 => 
            array (
                'sc_id' => 1223,
                'date_enrolled' => 2024,
                'student_id' => 608,
                'class_id' => 569,
            ),
            223 => 
            array (
                'sc_id' => 1224,
                'date_enrolled' => 2024,
                'student_id' => 588,
                'class_id' => 556,
            ),
            224 => 
            array (
                'sc_id' => 1225,
                'date_enrolled' => 2024,
                'student_id' => 391,
                'class_id' => 1042,
            ),
            225 => 
            array (
                'sc_id' => 1226,
                'date_enrolled' => 2024,
                'student_id' => 1484,
                'class_id' => 1025,
            ),
            226 => 
            array (
                'sc_id' => 1227,
                'date_enrolled' => 2024,
                'student_id' => 727,
                'class_id' => 170,
            ),
            227 => 
            array (
                'sc_id' => 1228,
                'date_enrolled' => 2024,
                'student_id' => 552,
                'class_id' => 991,
            ),
            228 => 
            array (
                'sc_id' => 1229,
                'date_enrolled' => 2024,
                'student_id' => 440,
                'class_id' => 432,
            ),
            229 => 
            array (
                'sc_id' => 1230,
                'date_enrolled' => 2024,
                'student_id' => 645,
                'class_id' => 1102,
            ),
            230 => 
            array (
                'sc_id' => 1231,
                'date_enrolled' => 2024,
                'student_id' => 78,
                'class_id' => 1020,
            ),
            231 => 
            array (
                'sc_id' => 1232,
                'date_enrolled' => 2024,
                'student_id' => 1280,
                'class_id' => 1304,
            ),
            232 => 
            array (
                'sc_id' => 1233,
                'date_enrolled' => 2024,
                'student_id' => 383,
                'class_id' => 179,
            ),
            233 => 
            array (
                'sc_id' => 1234,
                'date_enrolled' => 2024,
                'student_id' => 32,
                'class_id' => 1144,
            ),
            234 => 
            array (
                'sc_id' => 1235,
                'date_enrolled' => 2024,
                'student_id' => 735,
                'class_id' => 732,
            ),
            235 => 
            array (
                'sc_id' => 1236,
                'date_enrolled' => 2024,
                'student_id' => 1412,
                'class_id' => 863,
            ),
            236 => 
            array (
                'sc_id' => 1237,
                'date_enrolled' => 2024,
                'student_id' => 656,
                'class_id' => 1379,
            ),
            237 => 
            array (
                'sc_id' => 1238,
                'date_enrolled' => 2024,
                'student_id' => 859,
                'class_id' => 510,
            ),
            238 => 
            array (
                'sc_id' => 1239,
                'date_enrolled' => 2024,
                'student_id' => 159,
                'class_id' => 708,
            ),
            239 => 
            array (
                'sc_id' => 1240,
                'date_enrolled' => 2024,
                'student_id' => 235,
                'class_id' => 1554,
            ),
            240 => 
            array (
                'sc_id' => 1241,
                'date_enrolled' => 2024,
                'student_id' => 1307,
                'class_id' => 745,
            ),
            241 => 
            array (
                'sc_id' => 1242,
                'date_enrolled' => 2024,
                'student_id' => 563,
                'class_id' => 534,
            ),
            242 => 
            array (
                'sc_id' => 1243,
                'date_enrolled' => 2024,
                'student_id' => 454,
                'class_id' => 809,
            ),
            243 => 
            array (
                'sc_id' => 1244,
                'date_enrolled' => 2024,
                'student_id' => 117,
                'class_id' => 727,
            ),
            244 => 
            array (
                'sc_id' => 1245,
                'date_enrolled' => 2024,
                'student_id' => 142,
                'class_id' => 1124,
            ),
            245 => 
            array (
                'sc_id' => 1246,
                'date_enrolled' => 2024,
                'student_id' => 413,
                'class_id' => 1182,
            ),
            246 => 
            array (
                'sc_id' => 1247,
                'date_enrolled' => 2024,
                'student_id' => 909,
                'class_id' => 610,
            ),
            247 => 
            array (
                'sc_id' => 1248,
                'date_enrolled' => 2024,
                'student_id' => 1036,
                'class_id' => 1240,
            ),
            248 => 
            array (
                'sc_id' => 1249,
                'date_enrolled' => 2024,
                'student_id' => 813,
                'class_id' => 935,
            ),
            249 => 
            array (
                'sc_id' => 1250,
                'date_enrolled' => 2024,
                'student_id' => 377,
                'class_id' => 1233,
            ),
            250 => 
            array (
                'sc_id' => 1251,
                'date_enrolled' => 2024,
                'student_id' => 170,
                'class_id' => 1390,
            ),
            251 => 
            array (
                'sc_id' => 1252,
                'date_enrolled' => 2024,
                'student_id' => 426,
                'class_id' => 1391,
            ),
            252 => 
            array (
                'sc_id' => 1253,
                'date_enrolled' => 2024,
                'student_id' => 584,
                'class_id' => 1094,
            ),
            253 => 
            array (
                'sc_id' => 1254,
                'date_enrolled' => 2024,
                'student_id' => 306,
                'class_id' => 209,
            ),
            254 => 
            array (
                'sc_id' => 1255,
                'date_enrolled' => 2024,
                'student_id' => 1029,
                'class_id' => 1423,
            ),
            255 => 
            array (
                'sc_id' => 1256,
                'date_enrolled' => 2024,
                'student_id' => 167,
                'class_id' => 618,
            ),
            256 => 
            array (
                'sc_id' => 1257,
                'date_enrolled' => 2024,
                'student_id' => 30,
                'class_id' => 1207,
            ),
            257 => 
            array (
                'sc_id' => 1258,
                'date_enrolled' => 2024,
                'student_id' => 1257,
                'class_id' => 137,
            ),
            258 => 
            array (
                'sc_id' => 1259,
                'date_enrolled' => 2024,
                'student_id' => 1310,
                'class_id' => 1245,
            ),
            259 => 
            array (
                'sc_id' => 1260,
                'date_enrolled' => 2024,
                'student_id' => 1543,
                'class_id' => 778,
            ),
            260 => 
            array (
                'sc_id' => 1261,
                'date_enrolled' => 2024,
                'student_id' => 1384,
                'class_id' => 876,
            ),
            261 => 
            array (
                'sc_id' => 1262,
                'date_enrolled' => 2024,
                'student_id' => 793,
                'class_id' => 353,
            ),
            262 => 
            array (
                'sc_id' => 1263,
                'date_enrolled' => 2024,
                'student_id' => 582,
                'class_id' => 796,
            ),
            263 => 
            array (
                'sc_id' => 1264,
                'date_enrolled' => 2024,
                'student_id' => 660,
                'class_id' => 1222,
            ),
            264 => 
            array (
                'sc_id' => 1265,
                'date_enrolled' => 2024,
                'student_id' => 701,
                'class_id' => 1362,
            ),
            265 => 
            array (
                'sc_id' => 1266,
                'date_enrolled' => 2024,
                'student_id' => 429,
                'class_id' => 1084,
            ),
            266 => 
            array (
                'sc_id' => 1267,
                'date_enrolled' => 2024,
                'student_id' => 120,
                'class_id' => 1149,
            ),
            267 => 
            array (
                'sc_id' => 1268,
                'date_enrolled' => 2024,
                'student_id' => 597,
                'class_id' => 200,
            ),
            268 => 
            array (
                'sc_id' => 1269,
                'date_enrolled' => 2024,
                'student_id' => 631,
                'class_id' => 573,
            ),
            269 => 
            array (
                'sc_id' => 1270,
                'date_enrolled' => 2024,
                'student_id' => 1240,
                'class_id' => 291,
            ),
            270 => 
            array (
                'sc_id' => 1271,
                'date_enrolled' => 2024,
                'student_id' => 473,
                'class_id' => 1236,
            ),
            271 => 
            array (
                'sc_id' => 1272,
                'date_enrolled' => 2024,
                'student_id' => 1221,
                'class_id' => 241,
            ),
            272 => 
            array (
                'sc_id' => 1273,
                'date_enrolled' => 2024,
                'student_id' => 444,
                'class_id' => 975,
            ),
            273 => 
            array (
                'sc_id' => 1274,
                'date_enrolled' => 2024,
                'student_id' => 1250,
                'class_id' => 502,
            ),
            274 => 
            array (
                'sc_id' => 1275,
                'date_enrolled' => 2024,
                'student_id' => 252,
                'class_id' => 182,
            ),
            275 => 
            array (
                'sc_id' => 1276,
                'date_enrolled' => 2024,
                'student_id' => 1312,
                'class_id' => 750,
            ),
            276 => 
            array (
                'sc_id' => 1277,
                'date_enrolled' => 2024,
                'student_id' => 238,
                'class_id' => 1524,
            ),
            277 => 
            array (
                'sc_id' => 1278,
                'date_enrolled' => 2024,
                'student_id' => 1461,
                'class_id' => 396,
            ),
            278 => 
            array (
                'sc_id' => 1279,
                'date_enrolled' => 2024,
                'student_id' => 153,
                'class_id' => 1519,
            ),
            279 => 
            array (
                'sc_id' => 1280,
                'date_enrolled' => 2024,
                'student_id' => 1362,
                'class_id' => 1381,
            ),
            280 => 
            array (
                'sc_id' => 1281,
                'date_enrolled' => 2024,
                'student_id' => 585,
                'class_id' => 1369,
            ),
            281 => 
            array (
                'sc_id' => 1282,
                'date_enrolled' => 2024,
                'student_id' => 684,
                'class_id' => 68,
            ),
            282 => 
            array (
                'sc_id' => 1283,
                'date_enrolled' => 2024,
                'student_id' => 463,
                'class_id' => 1418,
            ),
            283 => 
            array (
                'sc_id' => 1284,
                'date_enrolled' => 2024,
                'student_id' => 9,
                'class_id' => 866,
            ),
            284 => 
            array (
                'sc_id' => 1285,
                'date_enrolled' => 2024,
                'student_id' => 1358,
                'class_id' => 1190,
            ),
            285 => 
            array (
                'sc_id' => 1286,
                'date_enrolled' => 2024,
                'student_id' => 343,
                'class_id' => 1380,
            ),
            286 => 
            array (
                'sc_id' => 1287,
                'date_enrolled' => 2024,
                'student_id' => 851,
                'class_id' => 752,
            ),
            287 => 
            array (
                'sc_id' => 1288,
                'date_enrolled' => 2024,
                'student_id' => 742,
                'class_id' => 214,
            ),
            288 => 
            array (
                'sc_id' => 1289,
                'date_enrolled' => 2024,
                'student_id' => 1471,
                'class_id' => 652,
            ),
            289 => 
            array (
                'sc_id' => 1290,
                'date_enrolled' => 2024,
                'student_id' => 279,
                'class_id' => 1347,
            ),
            290 => 
            array (
                'sc_id' => 1291,
                'date_enrolled' => 2024,
                'student_id' => 131,
                'class_id' => 128,
            ),
            291 => 
            array (
                'sc_id' => 1292,
                'date_enrolled' => 2024,
                'student_id' => 161,
                'class_id' => 1280,
            ),
            292 => 
            array (
                'sc_id' => 1293,
                'date_enrolled' => 2024,
                'student_id' => 1190,
                'class_id' => 718,
            ),
            293 => 
            array (
                'sc_id' => 1294,
                'date_enrolled' => 2024,
                'student_id' => 1480,
                'class_id' => 965,
            ),
            294 => 
            array (
                'sc_id' => 1295,
                'date_enrolled' => 2024,
                'student_id' => 338,
                'class_id' => 1468,
            ),
            295 => 
            array (
                'sc_id' => 1296,
                'date_enrolled' => 2024,
                'student_id' => 971,
                'class_id' => 1490,
            ),
            296 => 
            array (
                'sc_id' => 1297,
                'date_enrolled' => 2024,
                'student_id' => 389,
                'class_id' => 969,
            ),
            297 => 
            array (
                'sc_id' => 1298,
                'date_enrolled' => 2024,
                'student_id' => 958,
                'class_id' => 1117,
            ),
            298 => 
            array (
                'sc_id' => 1299,
                'date_enrolled' => 2024,
                'student_id' => 710,
                'class_id' => 1103,
            ),
            299 => 
            array (
                'sc_id' => 1300,
                'date_enrolled' => 2024,
                'student_id' => 1373,
                'class_id' => 517,
            ),
            300 => 
            array (
                'sc_id' => 1301,
                'date_enrolled' => 2024,
                'student_id' => 537,
                'class_id' => 180,
            ),
            301 => 
            array (
                'sc_id' => 1302,
                'date_enrolled' => 2024,
                'student_id' => 294,
                'class_id' => 1510,
            ),
            302 => 
            array (
                'sc_id' => 1303,
                'date_enrolled' => 2024,
                'student_id' => 647,
                'class_id' => 865,
            ),
            303 => 
            array (
                'sc_id' => 1304,
                'date_enrolled' => 2024,
                'student_id' => 480,
                'class_id' => 1187,
            ),
            304 => 
            array (
                'sc_id' => 1305,
                'date_enrolled' => 2024,
                'student_id' => 135,
                'class_id' => 1441,
            ),
            305 => 
            array (
                'sc_id' => 1306,
                'date_enrolled' => 2024,
                'student_id' => 226,
                'class_id' => 519,
            ),
            306 => 
            array (
                'sc_id' => 1307,
                'date_enrolled' => 2024,
                'student_id' => 717,
                'class_id' => 1333,
            ),
            307 => 
            array (
                'sc_id' => 1308,
                'date_enrolled' => 2024,
                'student_id' => 4,
                'class_id' => 101,
            ),
            308 => 
            array (
                'sc_id' => 1309,
                'date_enrolled' => 2024,
                'student_id' => 1198,
                'class_id' => 1136,
            ),
            309 => 
            array (
                'sc_id' => 1310,
                'date_enrolled' => 2024,
                'student_id' => 337,
                'class_id' => 54,
            ),
            310 => 
            array (
                'sc_id' => 1311,
                'date_enrolled' => 2024,
                'student_id' => 1474,
                'class_id' => 1228,
            ),
            311 => 
            array (
                'sc_id' => 1312,
                'date_enrolled' => 2024,
                'student_id' => 643,
                'class_id' => 619,
            ),
            312 => 
            array (
                'sc_id' => 1313,
                'date_enrolled' => 2024,
                'student_id' => 195,
                'class_id' => 733,
            ),
            313 => 
            array (
                'sc_id' => 1314,
                'date_enrolled' => 2024,
                'student_id' => 564,
                'class_id' => 1365,
            ),
            314 => 
            array (
                'sc_id' => 1315,
                'date_enrolled' => 2024,
                'student_id' => 206,
                'class_id' => 1053,
            ),
            315 => 
            array (
                'sc_id' => 1316,
                'date_enrolled' => 2024,
                'student_id' => 718,
                'class_id' => 1260,
            ),
            316 => 
            array (
                'sc_id' => 1317,
                'date_enrolled' => 2024,
                'student_id' => 1282,
                'class_id' => 761,
            ),
            317 => 
            array (
                'sc_id' => 1318,
                'date_enrolled' => 2024,
                'student_id' => 812,
                'class_id' => 268,
            ),
            318 => 
            array (
                'sc_id' => 1319,
                'date_enrolled' => 2024,
                'student_id' => 364,
                'class_id' => 781,
            ),
            319 => 
            array (
                'sc_id' => 1320,
                'date_enrolled' => 2024,
                'student_id' => 514,
                'class_id' => 1218,
            ),
            320 => 
            array (
                'sc_id' => 1321,
                'date_enrolled' => 2024,
                'student_id' => 1328,
                'class_id' => 1203,
            ),
            321 => 
            array (
                'sc_id' => 1322,
                'date_enrolled' => 2024,
                'student_id' => 3,
                'class_id' => 605,
            ),
            322 => 
            array (
                'sc_id' => 1323,
                'date_enrolled' => 2024,
                'student_id' => 1410,
                'class_id' => 1410,
            ),
            323 => 
            array (
                'sc_id' => 1324,
                'date_enrolled' => 2024,
                'student_id' => 682,
                'class_id' => 1224,
            ),
            324 => 
            array (
                'sc_id' => 1325,
                'date_enrolled' => 2024,
                'student_id' => 796,
                'class_id' => 342,
            ),
            325 => 
            array (
                'sc_id' => 1326,
                'date_enrolled' => 2024,
                'student_id' => 517,
                'class_id' => 333,
            ),
            326 => 
            array (
                'sc_id' => 1327,
                'date_enrolled' => 2024,
                'student_id' => 71,
                'class_id' => 397,
            ),
            327 => 
            array (
                'sc_id' => 1328,
                'date_enrolled' => 2024,
                'student_id' => 1299,
                'class_id' => 1031,
            ),
            328 => 
            array (
                'sc_id' => 1329,
                'date_enrolled' => 2024,
                'student_id' => 845,
                'class_id' => 1248,
            ),
            329 => 
            array (
                'sc_id' => 1330,
                'date_enrolled' => 2024,
                'student_id' => 151,
                'class_id' => 714,
            ),
            330 => 
            array (
                'sc_id' => 1331,
                'date_enrolled' => 2024,
                'student_id' => 152,
                'class_id' => 650,
            ),
            331 => 
            array (
                'sc_id' => 1332,
                'date_enrolled' => 2024,
                'student_id' => 948,
                'class_id' => 279,
            ),
            332 => 
            array (
                'sc_id' => 1333,
                'date_enrolled' => 2024,
                'student_id' => 144,
                'class_id' => 1156,
            ),
            333 => 
            array (
                'sc_id' => 1334,
                'date_enrolled' => 2024,
                'student_id' => 641,
                'class_id' => 1303,
            ),
            334 => 
            array (
                'sc_id' => 1335,
                'date_enrolled' => 2024,
                'student_id' => 1045,
                'class_id' => 1174,
            ),
            335 => 
            array (
                'sc_id' => 1336,
                'date_enrolled' => 2024,
                'student_id' => 464,
                'class_id' => 203,
            ),
            336 => 
            array (
                'sc_id' => 1337,
                'date_enrolled' => 2024,
                'student_id' => 1381,
                'class_id' => 879,
            ),
            337 => 
            array (
                'sc_id' => 1338,
                'date_enrolled' => 2024,
                'student_id' => 689,
                'class_id' => 1458,
            ),
            338 => 
            array (
                'sc_id' => 1339,
                'date_enrolled' => 2024,
                'student_id' => 561,
                'class_id' => 812,
            ),
            339 => 
            array (
                'sc_id' => 1340,
                'date_enrolled' => 2024,
                'student_id' => 456,
                'class_id' => 1435,
            ),
            340 => 
            array (
                'sc_id' => 1341,
                'date_enrolled' => 2024,
                'student_id' => 497,
                'class_id' => 994,
            ),
            341 => 
            array (
                'sc_id' => 1342,
                'date_enrolled' => 2024,
                'student_id' => 1357,
                'class_id' => 280,
            ),
            342 => 
            array (
                'sc_id' => 1343,
                'date_enrolled' => 2024,
                'student_id' => 1130,
                'class_id' => 427,
            ),
            343 => 
            array (
                'sc_id' => 1344,
                'date_enrolled' => 2024,
                'student_id' => 573,
                'class_id' => 797,
            ),
            344 => 
            array (
                'sc_id' => 1345,
                'date_enrolled' => 2024,
                'student_id' => 163,
                'class_id' => 1511,
            ),
            345 => 
            array (
                'sc_id' => 1346,
                'date_enrolled' => 2024,
                'student_id' => 1067,
                'class_id' => 1202,
            ),
            346 => 
            array (
                'sc_id' => 1347,
                'date_enrolled' => 2024,
                'student_id' => 1008,
                'class_id' => 1147,
            ),
            347 => 
            array (
                'sc_id' => 1348,
                'date_enrolled' => 2024,
                'student_id' => 240,
                'class_id' => 351,
            ),
            348 => 
            array (
                'sc_id' => 1349,
                'date_enrolled' => 2024,
                'student_id' => 577,
                'class_id' => 208,
            ),
            349 => 
            array (
                'sc_id' => 1350,
                'date_enrolled' => 2024,
                'student_id' => 38,
                'class_id' => 689,
            ),
            350 => 
            array (
                'sc_id' => 1351,
                'date_enrolled' => 2024,
                'student_id' => 1516,
                'class_id' => 1385,
            ),
            351 => 
            array (
                'sc_id' => 1352,
                'date_enrolled' => 2024,
                'student_id' => 1004,
                'class_id' => 1541,
            ),
            352 => 
            array (
                'sc_id' => 1353,
                'date_enrolled' => 2024,
                'student_id' => 1352,
                'class_id' => 706,
            ),
            353 => 
            array (
                'sc_id' => 1354,
                'date_enrolled' => 2024,
                'student_id' => 1568,
                'class_id' => 1106,
            ),
            354 => 
            array (
                'sc_id' => 1355,
                'date_enrolled' => 2024,
                'student_id' => 461,
                'class_id' => 1011,
            ),
            355 => 
            array (
                'sc_id' => 1356,
                'date_enrolled' => 2024,
                'student_id' => 534,
                'class_id' => 271,
            ),
            356 => 
            array (
                'sc_id' => 1357,
                'date_enrolled' => 2024,
                'student_id' => 1439,
                'class_id' => 1026,
            ),
            357 => 
            array (
                'sc_id' => 1358,
                'date_enrolled' => 2024,
                'student_id' => 1369,
                'class_id' => 930,
            ),
            358 => 
            array (
                'sc_id' => 1359,
                'date_enrolled' => 2024,
                'student_id' => 944,
                'class_id' => 583,
            ),
            359 => 
            array (
                'sc_id' => 1360,
                'date_enrolled' => 2024,
                'student_id' => 869,
                'class_id' => 996,
            ),
            360 => 
            array (
                'sc_id' => 1361,
                'date_enrolled' => 2024,
                'student_id' => 1251,
                'class_id' => 986,
            ),
            361 => 
            array (
                'sc_id' => 1362,
                'date_enrolled' => 2024,
                'student_id' => 765,
                'class_id' => 981,
            ),
            362 => 
            array (
                'sc_id' => 1363,
                'date_enrolled' => 2024,
                'student_id' => 893,
                'class_id' => 1237,
            ),
            363 => 
            array (
                'sc_id' => 1364,
                'date_enrolled' => 2024,
                'student_id' => 1259,
                'class_id' => 398,
            ),
            364 => 
            array (
                'sc_id' => 1365,
                'date_enrolled' => 2024,
                'student_id' => 1415,
                'class_id' => 95,
            ),
            365 => 
            array (
                'sc_id' => 1366,
                'date_enrolled' => 2024,
                'student_id' => 1433,
                'class_id' => 770,
            ),
            366 => 
            array (
                'sc_id' => 1367,
                'date_enrolled' => 2024,
                'student_id' => 673,
                'class_id' => 1560,
            ),
            367 => 
            array (
                'sc_id' => 1368,
                'date_enrolled' => 2024,
                'student_id' => 1315,
                'class_id' => 900,
            ),
            368 => 
            array (
                'sc_id' => 1369,
                'date_enrolled' => 2024,
                'student_id' => 1060,
                'class_id' => 1,
            ),
            369 => 
            array (
                'sc_id' => 1370,
                'date_enrolled' => 2024,
                'student_id' => 160,
                'class_id' => 848,
            ),
            370 => 
            array (
                'sc_id' => 1371,
                'date_enrolled' => 2024,
                'student_id' => 880,
                'class_id' => 207,
            ),
            371 => 
            array (
                'sc_id' => 1372,
                'date_enrolled' => 2024,
                'student_id' => 685,
                'class_id' => 1135,
            ),
            372 => 
            array (
                'sc_id' => 1373,
                'date_enrolled' => 2024,
                'student_id' => 12,
                'class_id' => 1139,
            ),
            373 => 
            array (
                'sc_id' => 1374,
                'date_enrolled' => 2024,
                'student_id' => 1047,
                'class_id' => 976,
            ),
            374 => 
            array (
                'sc_id' => 1375,
                'date_enrolled' => 2024,
                'student_id' => 515,
                'class_id' => 726,
            ),
            375 => 
            array (
                'sc_id' => 1376,
                'date_enrolled' => 2024,
                'student_id' => 242,
                'class_id' => 870,
            ),
            376 => 
            array (
                'sc_id' => 1377,
                'date_enrolled' => 2024,
                'student_id' => 982,
                'class_id' => 1323,
            ),
            377 => 
            array (
                'sc_id' => 1378,
                'date_enrolled' => 2024,
                'student_id' => 1578,
                'class_id' => 923,
            ),
            378 => 
            array (
                'sc_id' => 1379,
                'date_enrolled' => 2024,
                'student_id' => 273,
                'class_id' => 612,
            ),
            379 => 
            array (
                'sc_id' => 1380,
                'date_enrolled' => 2024,
                'student_id' => 1542,
                'class_id' => 1029,
            ),
            380 => 
            array (
                'sc_id' => 1381,
                'date_enrolled' => 2024,
                'student_id' => 960,
                'class_id' => 407,
            ),
            381 => 
            array (
                'sc_id' => 1382,
                'date_enrolled' => 2024,
                'student_id' => 210,
                'class_id' => 1520,
            ),
            382 => 
            array (
                'sc_id' => 1383,
                'date_enrolled' => 2024,
                'student_id' => 1154,
                'class_id' => 1208,
            ),
            383 => 
            array (
                'sc_id' => 1384,
                'date_enrolled' => 2024,
                'student_id' => 467,
                'class_id' => 389,
            ),
            384 => 
            array (
                'sc_id' => 1385,
                'date_enrolled' => 2024,
                'student_id' => 1005,
                'class_id' => 555,
            ),
            385 => 
            array (
                'sc_id' => 1386,
                'date_enrolled' => 2024,
                'student_id' => 1349,
                'class_id' => 1048,
            ),
            386 => 
            array (
                'sc_id' => 1387,
                'date_enrolled' => 2024,
                'student_id' => 1378,
                'class_id' => 1018,
            ),
            387 => 
            array (
                'sc_id' => 1388,
                'date_enrolled' => 2024,
                'student_id' => 381,
                'class_id' => 1320,
            ),
            388 => 
            array (
                'sc_id' => 1389,
                'date_enrolled' => 2024,
                'student_id' => 270,
                'class_id' => 347,
            ),
            389 => 
            array (
                'sc_id' => 1390,
                'date_enrolled' => 2024,
                'student_id' => 620,
                'class_id' => 1098,
            ),
            390 => 
            array (
                'sc_id' => 1391,
                'date_enrolled' => 2024,
                'student_id' => 998,
                'class_id' => 857,
            ),
            391 => 
            array (
                'sc_id' => 1392,
                'date_enrolled' => 2024,
                'student_id' => 344,
                'class_id' => 553,
            ),
            392 => 
            array (
                'sc_id' => 1393,
                'date_enrolled' => 2024,
                'student_id' => 285,
                'class_id' => 21,
            ),
            393 => 
            array (
                'sc_id' => 1394,
                'date_enrolled' => 2024,
                'student_id' => 401,
                'class_id' => 549,
            ),
            394 => 
            array (
                'sc_id' => 1395,
                'date_enrolled' => 2024,
                'student_id' => 1172,
                'class_id' => 1082,
            ),
            395 => 
            array (
                'sc_id' => 1396,
                'date_enrolled' => 2024,
                'student_id' => 180,
                'class_id' => 201,
            ),
            396 => 
            array (
                'sc_id' => 1397,
                'date_enrolled' => 2024,
                'student_id' => 1509,
                'class_id' => 45,
            ),
            397 => 
            array (
                'sc_id' => 1398,
                'date_enrolled' => 2024,
                'student_id' => 1324,
                'class_id' => 237,
            ),
            398 => 
            array (
                'sc_id' => 1399,
                'date_enrolled' => 2024,
                'student_id' => 1347,
                'class_id' => 671,
            ),
            399 => 
            array (
                'sc_id' => 1400,
                'date_enrolled' => 2024,
                'student_id' => 112,
                'class_id' => 1422,
            ),
            400 => 
            array (
                'sc_id' => 1401,
                'date_enrolled' => 2024,
                'student_id' => 1173,
                'class_id' => 642,
            ),
            401 => 
            array (
                'sc_id' => 1402,
                'date_enrolled' => 2024,
                'student_id' => 1479,
                'class_id' => 188,
            ),
            402 => 
            array (
                'sc_id' => 1403,
                'date_enrolled' => 2024,
                'student_id' => 43,
                'class_id' => 677,
            ),
            403 => 
            array (
                'sc_id' => 1404,
                'date_enrolled' => 2024,
                'student_id' => 1504,
                'class_id' => 1088,
            ),
            404 => 
            array (
                'sc_id' => 1405,
                'date_enrolled' => 2024,
                'student_id' => 1253,
                'class_id' => 685,
            ),
            405 => 
            array (
                'sc_id' => 1406,
                'date_enrolled' => 2024,
                'student_id' => 1268,
                'class_id' => 804,
            ),
            406 => 
            array (
                'sc_id' => 1407,
                'date_enrolled' => 2024,
                'student_id' => 269,
                'class_id' => 236,
            ),
            407 => 
            array (
                'sc_id' => 1408,
                'date_enrolled' => 2024,
                'student_id' => 1216,
                'class_id' => 1121,
            ),
            408 => 
            array (
                'sc_id' => 1409,
                'date_enrolled' => 2024,
                'student_id' => 1058,
                'class_id' => 944,
            ),
            409 => 
            array (
                'sc_id' => 1410,
                'date_enrolled' => 2024,
                'student_id' => 1592,
                'class_id' => 1590,
            ),
            410 => 
            array (
                'sc_id' => 1411,
                'date_enrolled' => 2024,
                'student_id' => 696,
                'class_id' => 1225,
            ),
            411 => 
            array (
                'sc_id' => 1412,
                'date_enrolled' => 2024,
                'student_id' => 305,
                'class_id' => 497,
            ),
            412 => 
            array (
                'sc_id' => 1413,
                'date_enrolled' => 2024,
                'student_id' => 199,
                'class_id' => 496,
            ),
            413 => 
            array (
                'sc_id' => 1414,
                'date_enrolled' => 2024,
                'student_id' => 1355,
                'class_id' => 1037,
            ),
            414 => 
            array (
                'sc_id' => 1415,
                'date_enrolled' => 2024,
                'student_id' => 1336,
                'class_id' => 670,
            ),
            415 => 
            array (
                'sc_id' => 1416,
                'date_enrolled' => 2024,
                'student_id' => 713,
                'class_id' => 1557,
            ),
            416 => 
            array (
                'sc_id' => 1417,
                'date_enrolled' => 2024,
                'student_id' => 553,
                'class_id' => 277,
            ),
            417 => 
            array (
                'sc_id' => 1418,
                'date_enrolled' => 2024,
                'student_id' => 1550,
                'class_id' => 881,
            ),
            418 => 
            array (
                'sc_id' => 1419,
                'date_enrolled' => 2024,
                'student_id' => 970,
                'class_id' => 475,
            ),
            419 => 
            array (
                'sc_id' => 1420,
                'date_enrolled' => 2024,
                'student_id' => 1281,
                'class_id' => 979,
            ),
            420 => 
            array (
                'sc_id' => 1421,
                'date_enrolled' => 2024,
                'student_id' => 876,
                'class_id' => 767,
            ),
            421 => 
            array (
                'sc_id' => 1422,
                'date_enrolled' => 2024,
                'student_id' => 680,
                'class_id' => 105,
            ),
            422 => 
            array (
                'sc_id' => 1423,
                'date_enrolled' => 2024,
                'student_id' => 1540,
                'class_id' => 276,
            ),
            423 => 
            array (
                'sc_id' => 1424,
                'date_enrolled' => 2024,
                'student_id' => 681,
                'class_id' => 776,
            ),
            424 => 
            array (
                'sc_id' => 1425,
                'date_enrolled' => 2024,
                'student_id' => 1063,
                'class_id' => 1556,
            ),
            425 => 
            array (
                'sc_id' => 1426,
                'date_enrolled' => 2024,
                'student_id' => 651,
                'class_id' => 1331,
            ),
            426 => 
            array (
                'sc_id' => 1427,
                'date_enrolled' => 2024,
                'student_id' => 310,
                'class_id' => 1140,
            ),
            427 => 
            array (
                'sc_id' => 1428,
                'date_enrolled' => 2024,
                'student_id' => 1101,
                'class_id' => 707,
            ),
            428 => 
            array (
                'sc_id' => 1429,
                'date_enrolled' => 2024,
                'student_id' => 205,
                'class_id' => 882,
            ),
            429 => 
            array (
                'sc_id' => 1430,
                'date_enrolled' => 2024,
                'student_id' => 807,
                'class_id' => 993,
            ),
            430 => 
            array (
                'sc_id' => 1431,
                'date_enrolled' => 2024,
                'student_id' => 787,
                'class_id' => 55,
            ),
            431 => 
            array (
                'sc_id' => 1432,
                'date_enrolled' => 2024,
                'student_id' => 299,
                'class_id' => 1267,
            ),
            432 => 
            array (
                'sc_id' => 1433,
                'date_enrolled' => 2024,
                'student_id' => 286,
                'class_id' => 1389,
            ),
            433 => 
            array (
                'sc_id' => 1434,
                'date_enrolled' => 2024,
                'student_id' => 1179,
                'class_id' => 367,
            ),
            434 => 
            array (
                'sc_id' => 1435,
                'date_enrolled' => 2024,
                'student_id' => 543,
                'class_id' => 488,
            ),
            435 => 
            array (
                'sc_id' => 1436,
                'date_enrolled' => 2024,
                'student_id' => 622,
                'class_id' => 232,
            ),
            436 => 
            array (
                'sc_id' => 1437,
                'date_enrolled' => 2024,
                'student_id' => 1223,
                'class_id' => 1040,
            ),
            437 => 
            array (
                'sc_id' => 1438,
                'date_enrolled' => 2024,
                'student_id' => 355,
                'class_id' => 764,
            ),
            438 => 
            array (
                'sc_id' => 1439,
                'date_enrolled' => 2024,
                'student_id' => 795,
                'class_id' => 5,
            ),
            439 => 
            array (
                'sc_id' => 1440,
                'date_enrolled' => 2024,
                'student_id' => 711,
                'class_id' => 1581,
            ),
            440 => 
            array (
                'sc_id' => 1441,
                'date_enrolled' => 2024,
                'student_id' => 720,
                'class_id' => 856,
            ),
            441 => 
            array (
                'sc_id' => 1442,
                'date_enrolled' => 2024,
                'student_id' => 85,
                'class_id' => 1366,
            ),
            442 => 
            array (
                'sc_id' => 1443,
                'date_enrolled' => 2024,
                'student_id' => 1254,
                'class_id' => 835,
            ),
            443 => 
            array (
                'sc_id' => 1444,
                'date_enrolled' => 2024,
                'student_id' => 896,
                'class_id' => 303,
            ),
            444 => 
            array (
                'sc_id' => 1445,
                'date_enrolled' => 2024,
                'student_id' => 1321,
                'class_id' => 912,
            ),
            445 => 
            array (
                'sc_id' => 1446,
                'date_enrolled' => 2024,
                'student_id' => 1449,
                'class_id' => 425,
            ),
            446 => 
            array (
                'sc_id' => 1447,
                'date_enrolled' => 2024,
                'student_id' => 1448,
                'class_id' => 123,
            ),
            447 => 
            array (
                'sc_id' => 1448,
                'date_enrolled' => 2024,
                'student_id' => 722,
                'class_id' => 1285,
            ),
            448 => 
            array (
                'sc_id' => 1449,
                'date_enrolled' => 2024,
                'student_id' => 1559,
                'class_id' => 1047,
            ),
            449 => 
            array (
                'sc_id' => 1450,
                'date_enrolled' => 2024,
                'student_id' => 1145,
                'class_id' => 150,
            ),
            450 => 
            array (
                'sc_id' => 1451,
                'date_enrolled' => 2024,
                'student_id' => 705,
                'class_id' => 27,
            ),
            451 => 
            array (
                'sc_id' => 1452,
                'date_enrolled' => 2024,
                'student_id' => 438,
                'class_id' => 889,
            ),
            452 => 
            array (
                'sc_id' => 1453,
                'date_enrolled' => 2024,
                'student_id' => 811,
                'class_id' => 824,
            ),
            453 => 
            array (
                'sc_id' => 1454,
                'date_enrolled' => 2024,
                'student_id' => 883,
                'class_id' => 1257,
            ),
            454 => 
            array (
                'sc_id' => 1455,
                'date_enrolled' => 2024,
                'student_id' => 895,
                'class_id' => 512,
            ),
            455 => 
            array (
                'sc_id' => 1456,
                'date_enrolled' => 2024,
                'student_id' => 1565,
                'class_id' => 749,
            ),
            456 => 
            array (
                'sc_id' => 1457,
                'date_enrolled' => 2024,
                'student_id' => 359,
                'class_id' => 899,
            ),
            457 => 
            array (
                'sc_id' => 1458,
                'date_enrolled' => 2024,
                'student_id' => 225,
                'class_id' => 1508,
            ),
            458 => 
            array (
                'sc_id' => 1459,
                'date_enrolled' => 2024,
                'student_id' => 1350,
                'class_id' => 1068,
            ),
            459 => 
            array (
                'sc_id' => 1460,
                'date_enrolled' => 2024,
                'student_id' => 933,
                'class_id' => 1502,
            ),
            460 => 
            array (
                'sc_id' => 1461,
                'date_enrolled' => 2024,
                'student_id' => 525,
                'class_id' => 1241,
            ),
            461 => 
            array (
                'sc_id' => 1462,
                'date_enrolled' => 2024,
                'student_id' => 27,
                'class_id' => 197,
            ),
            462 => 
            array (
                'sc_id' => 1463,
                'date_enrolled' => 2024,
                'student_id' => 175,
                'class_id' => 1321,
            ),
            463 => 
            array (
                'sc_id' => 1464,
                'date_enrolled' => 2024,
                'student_id' => 844,
                'class_id' => 871,
            ),
            464 => 
            array (
                'sc_id' => 1465,
                'date_enrolled' => 2024,
                'student_id' => 22,
                'class_id' => 946,
            ),
            465 => 
            array (
                'sc_id' => 1466,
                'date_enrolled' => 2024,
                'student_id' => 824,
                'class_id' => 429,
            ),
            466 => 
            array (
                'sc_id' => 1467,
                'date_enrolled' => 2024,
                'student_id' => 981,
                'class_id' => 769,
            ),
            467 => 
            array (
                'sc_id' => 1468,
                'date_enrolled' => 2024,
                'student_id' => 604,
                'class_id' => 709,
            ),
            468 => 
            array (
                'sc_id' => 1469,
                'date_enrolled' => 2024,
                'student_id' => 267,
                'class_id' => 1175,
            ),
            469 => 
            array (
                'sc_id' => 1470,
                'date_enrolled' => 2024,
                'student_id' => 243,
                'class_id' => 868,
            ),
            470 => 
            array (
                'sc_id' => 1471,
                'date_enrolled' => 2024,
                'student_id' => 316,
                'class_id' => 363,
            ),
            471 => 
            array (
                'sc_id' => 1472,
                'date_enrolled' => 2024,
                'student_id' => 1512,
                'class_id' => 357,
            ),
            472 => 
            array (
                'sc_id' => 1473,
                'date_enrolled' => 2024,
                'student_id' => 414,
                'class_id' => 760,
            ),
            473 => 
            array (
                'sc_id' => 1474,
                'date_enrolled' => 2024,
                'student_id' => 1555,
                'class_id' => 112,
            ),
            474 => 
            array (
                'sc_id' => 1475,
                'date_enrolled' => 2024,
                'student_id' => 954,
                'class_id' => 1002,
            ),
            475 => 
            array (
                'sc_id' => 1476,
                'date_enrolled' => 2024,
                'student_id' => 882,
                'class_id' => 535,
            ),
            476 => 
            array (
                'sc_id' => 1477,
                'date_enrolled' => 2024,
                'student_id' => 19,
                'class_id' => 1406,
            ),
            477 => 
            array (
                'sc_id' => 1478,
                'date_enrolled' => 2024,
                'student_id' => 84,
                'class_id' => 356,
            ),
            478 => 
            array (
                'sc_id' => 1479,
                'date_enrolled' => 2024,
                'student_id' => 133,
                'class_id' => 161,
            ),
            479 => 
            array (
                'sc_id' => 1480,
                'date_enrolled' => 2024,
                'student_id' => 1582,
                'class_id' => 903,
            ),
            480 => 
            array (
                'sc_id' => 1481,
                'date_enrolled' => 2024,
                'student_id' => 878,
                'class_id' => 104,
            ),
            481 => 
            array (
                'sc_id' => 1482,
                'date_enrolled' => 2024,
                'student_id' => 1585,
                'class_id' => 600,
            ),
            482 => 
            array (
                'sc_id' => 1483,
                'date_enrolled' => 2024,
                'student_id' => 1043,
                'class_id' => 561,
            ),
            483 => 
            array (
                'sc_id' => 1484,
                'date_enrolled' => 2024,
                'student_id' => 1092,
                'class_id' => 403,
            ),
            484 => 
            array (
                'sc_id' => 1485,
                'date_enrolled' => 2024,
                'student_id' => 1178,
                'class_id' => 904,
            ),
            485 => 
            array (
                'sc_id' => 1486,
                'date_enrolled' => 2024,
                'student_id' => 290,
                'class_id' => 1348,
            ),
            486 => 
            array (
                'sc_id' => 1487,
                'date_enrolled' => 2024,
                'student_id' => 1563,
                'class_id' => 939,
            ),
            487 => 
            array (
                'sc_id' => 1488,
                'date_enrolled' => 2024,
                'student_id' => 502,
                'class_id' => 401,
            ),
            488 => 
            array (
                'sc_id' => 1489,
                'date_enrolled' => 2024,
                'student_id' => 557,
                'class_id' => 1288,
            ),
            489 => 
            array (
                'sc_id' => 1490,
                'date_enrolled' => 2024,
                'student_id' => 615,
                'class_id' => 990,
            ),
            490 => 
            array (
                'sc_id' => 1491,
                'date_enrolled' => 2024,
                'student_id' => 350,
                'class_id' => 1296,
            ),
            491 => 
            array (
                'sc_id' => 1492,
                'date_enrolled' => 2024,
                'student_id' => 646,
                'class_id' => 390,
            ),
            492 => 
            array (
                'sc_id' => 1493,
                'date_enrolled' => 2024,
                'student_id' => 1182,
                'class_id' => 157,
            ),
            493 => 
            array (
                'sc_id' => 1494,
                'date_enrolled' => 2024,
                'student_id' => 644,
                'class_id' => 1550,
            ),
            494 => 
            array (
                'sc_id' => 1495,
                'date_enrolled' => 2024,
                'student_id' => 357,
                'class_id' => 218,
            ),
            495 => 
            array (
                'sc_id' => 1496,
                'date_enrolled' => 2024,
                'student_id' => 709,
                'class_id' => 1543,
            ),
            496 => 
            array (
                'sc_id' => 1497,
                'date_enrolled' => 2024,
                'student_id' => 134,
                'class_id' => 154,
            ),
            497 => 
            array (
                'sc_id' => 1498,
                'date_enrolled' => 2024,
                'student_id' => 1162,
                'class_id' => 1597,
            ),
            498 => 
            array (
                'sc_id' => 1499,
                'date_enrolled' => 2024,
                'student_id' => 1411,
                'class_id' => 492,
            ),
            499 => 
            array (
                'sc_id' => 1500,
                'date_enrolled' => 2024,
                'student_id' => 999,
                'class_id' => 485,
            ),
        ));
        \DB::table('student_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 1501,
                'date_enrolled' => 2024,
                'student_id' => 512,
                'class_id' => 309,
            ),
            1 => 
            array (
                'sc_id' => 1502,
                'date_enrolled' => 2024,
                'student_id' => 1497,
                'class_id' => 199,
            ),
            2 => 
            array (
                'sc_id' => 1503,
                'date_enrolled' => 2024,
                'student_id' => 1462,
                'class_id' => 1452,
            ),
            3 => 
            array (
                'sc_id' => 1504,
                'date_enrolled' => 2024,
                'student_id' => 1278,
                'class_id' => 623,
            ),
            4 => 
            array (
                'sc_id' => 1505,
                'date_enrolled' => 2024,
                'student_id' => 1405,
                'class_id' => 798,
            ),
            5 => 
            array (
                'sc_id' => 1506,
                'date_enrolled' => 2024,
                'student_id' => 251,
                'class_id' => 753,
            ),
            6 => 
            array (
                'sc_id' => 1507,
                'date_enrolled' => 2024,
                'student_id' => 989,
                'class_id' => 155,
            ),
            7 => 
            array (
                'sc_id' => 1508,
                'date_enrolled' => 2024,
                'student_id' => 942,
                'class_id' => 1486,
            ),
            8 => 
            array (
                'sc_id' => 1509,
                'date_enrolled' => 2024,
                'student_id' => 333,
                'class_id' => 1592,
            ),
            9 => 
            array (
                'sc_id' => 1510,
                'date_enrolled' => 2024,
                'student_id' => 1360,
                'class_id' => 1086,
            ),
            10 => 
            array (
                'sc_id' => 1511,
                'date_enrolled' => 2024,
                'student_id' => 952,
                'class_id' => 229,
            ),
            11 => 
            array (
                'sc_id' => 1512,
                'date_enrolled' => 2024,
                'student_id' => 1238,
                'class_id' => 1290,
            ),
            12 => 
            array (
                'sc_id' => 1513,
                'date_enrolled' => 2024,
                'student_id' => 947,
                'class_id' => 1339,
            ),
            13 => 
            array (
                'sc_id' => 1514,
                'date_enrolled' => 2024,
                'student_id' => 1034,
                'class_id' => 1216,
            ),
            14 => 
            array (
                'sc_id' => 1515,
                'date_enrolled' => 2024,
                'student_id' => 1517,
                'class_id' => 701,
            ),
            15 => 
            array (
                'sc_id' => 1516,
                'date_enrolled' => 2024,
                'student_id' => 148,
                'class_id' => 1503,
            ),
            16 => 
            array (
                'sc_id' => 1517,
                'date_enrolled' => 2024,
                'student_id' => 840,
                'class_id' => 657,
            ),
            17 => 
            array (
                'sc_id' => 1518,
                'date_enrolled' => 2024,
                'student_id' => 547,
                'class_id' => 43,
            ),
            18 => 
            array (
                'sc_id' => 1519,
                'date_enrolled' => 2024,
                'student_id' => 931,
                'class_id' => 1574,
            ),
            19 => 
            array (
                'sc_id' => 1520,
                'date_enrolled' => 2024,
                'student_id' => 690,
                'class_id' => 681,
            ),
            20 => 
            array (
                'sc_id' => 1521,
                'date_enrolled' => 2024,
                'student_id' => 853,
                'class_id' => 699,
            ),
            21 => 
            array (
                'sc_id' => 1522,
                'date_enrolled' => 2024,
                'student_id' => 827,
                'class_id' => 1079,
            ),
            22 => 
            array (
                'sc_id' => 1523,
                'date_enrolled' => 2024,
                'student_id' => 562,
                'class_id' => 111,
            ),
            23 => 
            array (
                'sc_id' => 1524,
                'date_enrolled' => 2024,
                'student_id' => 905,
                'class_id' => 24,
            ),
            24 => 
            array (
                'sc_id' => 1525,
                'date_enrolled' => 2024,
                'student_id' => 1308,
                'class_id' => 1584,
            ),
            25 => 
            array (
                'sc_id' => 1526,
                'date_enrolled' => 2024,
                'student_id' => 657,
                'class_id' => 1551,
            ),
            26 => 
            array (
                'sc_id' => 1527,
                'date_enrolled' => 2024,
                'student_id' => 972,
                'class_id' => 723,
            ),
            27 => 
            array (
                'sc_id' => 1528,
                'date_enrolled' => 2024,
                'student_id' => 601,
                'class_id' => 690,
            ),
            28 => 
            array (
                'sc_id' => 1529,
                'date_enrolled' => 2024,
                'student_id' => 1033,
                'class_id' => 246,
            ),
            29 => 
            array (
                'sc_id' => 1530,
                'date_enrolled' => 2024,
                'student_id' => 1234,
                'class_id' => 765,
            ),
            30 => 
            array (
                'sc_id' => 1531,
                'date_enrolled' => 2024,
                'student_id' => 482,
                'class_id' => 641,
            ),
            31 => 
            array (
                'sc_id' => 1532,
                'date_enrolled' => 2024,
                'student_id' => 826,
                'class_id' => 4,
            ),
            32 => 
            array (
                'sc_id' => 1533,
                'date_enrolled' => 2024,
                'student_id' => 1595,
                'class_id' => 359,
            ),
            33 => 
            array (
                'sc_id' => 1534,
                'date_enrolled' => 2024,
                'student_id' => 1129,
                'class_id' => 125,
            ),
            34 => 
            array (
                'sc_id' => 1535,
                'date_enrolled' => 2024,
                'student_id' => 578,
                'class_id' => 402,
            ),
            35 => 
            array (
                'sc_id' => 1536,
                'date_enrolled' => 2024,
                'student_id' => 1598,
                'class_id' => 906,
            ),
            36 => 
            array (
                'sc_id' => 1537,
                'date_enrolled' => 2024,
                'student_id' => 1531,
                'class_id' => 1405,
            ),
            37 => 
            array (
                'sc_id' => 1538,
                'date_enrolled' => 2024,
                'student_id' => 1335,
                'class_id' => 1013,
            ),
            38 => 
            array (
                'sc_id' => 1539,
                'date_enrolled' => 2024,
                'student_id' => 661,
                'class_id' => 109,
            ),
            39 => 
            array (
                'sc_id' => 1540,
                'date_enrolled' => 2024,
                'student_id' => 1044,
                'class_id' => 637,
            ),
            40 => 
            array (
                'sc_id' => 1541,
                'date_enrolled' => 2024,
                'student_id' => 1428,
                'class_id' => 1573,
            ),
            41 => 
            array (
                'sc_id' => 1542,
                'date_enrolled' => 2024,
                'student_id' => 940,
                'class_id' => 1191,
            ),
            42 => 
            array (
                'sc_id' => 1543,
                'date_enrolled' => 2024,
                'student_id' => 715,
                'class_id' => 1301,
            ),
            43 => 
            array (
                'sc_id' => 1544,
                'date_enrolled' => 2024,
                'student_id' => 1309,
                'class_id' => 921,
            ),
            44 => 
            array (
                'sc_id' => 1545,
                'date_enrolled' => 2024,
                'student_id' => 891,
                'class_id' => 1116,
            ),
            45 => 
            array (
                'sc_id' => 1546,
                'date_enrolled' => 2024,
                'student_id' => 1286,
                'class_id' => 721,
            ),
            46 => 
            array (
                'sc_id' => 1547,
                'date_enrolled' => 2024,
                'student_id' => 198,
                'class_id' => 1133,
            ),
            47 => 
            array (
                'sc_id' => 1548,
                'date_enrolled' => 2024,
                'student_id' => 1319,
                'class_id' => 609,
            ),
            48 => 
            array (
                'sc_id' => 1549,
                'date_enrolled' => 2024,
                'student_id' => 1119,
                'class_id' => 1345,
            ),
            49 => 
            array (
                'sc_id' => 1550,
                'date_enrolled' => 2024,
                'student_id' => 1062,
                'class_id' => 466,
            ),
            50 => 
            array (
                'sc_id' => 1551,
                'date_enrolled' => 2024,
                'student_id' => 1161,
                'class_id' => 464,
            ),
            51 => 
            array (
                'sc_id' => 1552,
                'date_enrolled' => 2024,
                'student_id' => 616,
                'class_id' => 1335,
            ),
            52 => 
            array (
                'sc_id' => 1553,
                'date_enrolled' => 2024,
                'student_id' => 922,
                'class_id' => 213,
            ),
            53 => 
            array (
                'sc_id' => 1554,
                'date_enrolled' => 2024,
                'student_id' => 36,
                'class_id' => 216,
            ),
            54 => 
            array (
                'sc_id' => 1555,
                'date_enrolled' => 2024,
                'student_id' => 1558,
                'class_id' => 204,
            ),
            55 => 
            array (
                'sc_id' => 1556,
                'date_enrolled' => 2024,
                'student_id' => 1290,
                'class_id' => 1125,
            ),
            56 => 
            array (
                'sc_id' => 1557,
                'date_enrolled' => 2024,
                'student_id' => 1311,
                'class_id' => 329,
            ),
            57 => 
            array (
                'sc_id' => 1558,
                'date_enrolled' => 2024,
                'student_id' => 1301,
                'class_id' => 172,
            ),
            58 => 
            array (
                'sc_id' => 1559,
                'date_enrolled' => 2024,
                'student_id' => 1116,
                'class_id' => 864,
            ),
            59 => 
            array (
                'sc_id' => 1560,
                'date_enrolled' => 2024,
                'student_id' => 1287,
                'class_id' => 278,
            ),
            60 => 
            array (
                'sc_id' => 1561,
                'date_enrolled' => 2024,
                'student_id' => 1236,
                'class_id' => 73,
            ),
            61 => 
            array (
                'sc_id' => 1562,
                'date_enrolled' => 2024,
                'student_id' => 1564,
                'class_id' => 1587,
            ),
            62 => 
            array (
                'sc_id' => 1563,
                'date_enrolled' => 2024,
                'student_id' => 950,
                'class_id' => 932,
            ),
            63 => 
            array (
                'sc_id' => 1564,
                'date_enrolled' => 2024,
                'student_id' => 1220,
                'class_id' => 1353,
            ),
            64 => 
            array (
                'sc_id' => 1565,
                'date_enrolled' => 2024,
                'student_id' => 575,
                'class_id' => 120,
            ),
            65 => 
            array (
                'sc_id' => 1566,
                'date_enrolled' => 2024,
                'student_id' => 189,
                'class_id' => 270,
            ),
            66 => 
            array (
                'sc_id' => 1567,
                'date_enrolled' => 2024,
                'student_id' => 100,
                'class_id' => 907,
            ),
            67 => 
            array (
                'sc_id' => 1568,
                'date_enrolled' => 2024,
                'student_id' => 1108,
                'class_id' => 92,
            ),
            68 => 
            array (
                'sc_id' => 1569,
                'date_enrolled' => 2024,
                'student_id' => 698,
                'class_id' => 326,
            ),
            69 => 
            array (
                'sc_id' => 1570,
                'date_enrolled' => 2024,
                'student_id' => 1012,
                'class_id' => 286,
            ),
            70 => 
            array (
                'sc_id' => 1571,
                'date_enrolled' => 2024,
                'student_id' => 1382,
                'class_id' => 126,
            ),
            71 => 
            array (
                'sc_id' => 1572,
                'date_enrolled' => 2024,
                'student_id' => 301,
                'class_id' => 656,
            ),
            72 => 
            array (
                'sc_id' => 1573,
                'date_enrolled' => 2024,
                'student_id' => 1271,
                'class_id' => 330,
            ),
            73 => 
            array (
                'sc_id' => 1574,
                'date_enrolled' => 2024,
                'student_id' => 325,
                'class_id' => 1170,
            ),
            74 => 
            array (
                'sc_id' => 1575,
                'date_enrolled' => 2024,
                'student_id' => 1459,
                'class_id' => 294,
            ),
            75 => 
            array (
                'sc_id' => 1576,
                'date_enrolled' => 2024,
                'student_id' => 420,
                'class_id' => 189,
            ),
            76 => 
            array (
                'sc_id' => 1577,
                'date_enrolled' => 2024,
                'student_id' => 1372,
                'class_id' => 646,
            ),
            77 => 
            array (
                'sc_id' => 1578,
                'date_enrolled' => 2024,
                'student_id' => 309,
                'class_id' => 370,
            ),
            78 => 
            array (
                'sc_id' => 1579,
                'date_enrolled' => 2024,
                'student_id' => 592,
                'class_id' => 636,
            ),
            79 => 
            array (
                'sc_id' => 1580,
                'date_enrolled' => 2024,
                'student_id' => 898,
                'class_id' => 1300,
            ),
            80 => 
            array (
                'sc_id' => 1581,
                'date_enrolled' => 2024,
                'student_id' => 415,
                'class_id' => 1129,
            ),
            81 => 
            array (
                'sc_id' => 1582,
                'date_enrolled' => 2024,
                'student_id' => 35,
                'class_id' => 945,
            ),
            82 => 
            array (
                'sc_id' => 1583,
                'date_enrolled' => 2024,
                'student_id' => 1511,
                'class_id' => 284,
            ),
            83 => 
            array (
                'sc_id' => 1584,
                'date_enrolled' => 2024,
                'student_id' => 858,
                'class_id' => 1005,
            ),
            84 => 
            array (
                'sc_id' => 1585,
                'date_enrolled' => 2024,
                'student_id' => 1069,
                'class_id' => 404,
            ),
            85 => 
            array (
                'sc_id' => 1586,
                'date_enrolled' => 2024,
                'student_id' => 1065,
                'class_id' => 173,
            ),
            86 => 
            array (
                'sc_id' => 1587,
                'date_enrolled' => 2024,
                'student_id' => 918,
                'class_id' => 486,
            ),
            87 => 
            array (
                'sc_id' => 1588,
                'date_enrolled' => 2024,
                'student_id' => 505,
                'class_id' => 1160,
            ),
            88 => 
            array (
                'sc_id' => 1589,
                'date_enrolled' => 2024,
                'student_id' => 1368,
                'class_id' => 820,
            ),
            89 => 
            array (
                'sc_id' => 1590,
                'date_enrolled' => 2024,
                'student_id' => 1114,
                'class_id' => 725,
            ),
            90 => 
            array (
                'sc_id' => 1591,
                'date_enrolled' => 2024,
                'student_id' => 580,
                'class_id' => 299,
            ),
            91 => 
            array (
                'sc_id' => 1592,
                'date_enrolled' => 2024,
                'student_id' => 677,
                'class_id' => 1255,
            ),
            92 => 
            array (
                'sc_id' => 1593,
                'date_enrolled' => 2024,
                'student_id' => 204,
                'class_id' => 259,
            ),
            93 => 
            array (
                'sc_id' => 1594,
                'date_enrolled' => 2024,
                'student_id' => 336,
                'class_id' => 453,
            ),
            94 => 
            array (
                'sc_id' => 1595,
                'date_enrolled' => 2024,
                'student_id' => 521,
                'class_id' => 1186,
            ),
            95 => 
            array (
                'sc_id' => 1596,
                'date_enrolled' => 2024,
                'student_id' => 800,
                'class_id' => 773,
            ),
            96 => 
            array (
                'sc_id' => 1597,
                'date_enrolled' => 2024,
                'student_id' => 483,
                'class_id' => 978,
            ),
            97 => 
            array (
                'sc_id' => 1598,
                'date_enrolled' => 2024,
                'student_id' => 732,
                'class_id' => 1238,
            ),
            98 => 
            array (
                'sc_id' => 1599,
                'date_enrolled' => 2024,
                'student_id' => 913,
                'class_id' => 267,
            ),
            99 => 
            array (
                'sc_id' => 1600,
                'date_enrolled' => 2024,
                'student_id' => 462,
                'class_id' => 1453,
            ),
        ));
        
        
    }
}