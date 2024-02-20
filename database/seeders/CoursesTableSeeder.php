<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => NULL,
            ),
            1 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => NULL,
            ),
            2 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => NULL,
            ),
            3 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1,
            ),
            4 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 2,
            ),
            5 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 3,
            ),
            6 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 4,
            ),
            7 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 5,
            ),
            8 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 6,
            ),
            9 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 7,
            ),
            10 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 8,
            ),
            11 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 9,
            ),
            12 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 10,
            ),
            13 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 11,
            ),
            14 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 12,
            ),
            15 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 13,
            ),
            16 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 14,
            ),
            17 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 15,
            ),
            18 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 16,
            ),
            19 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 17,
            ),
            20 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 18,
            ),
            21 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 19,
            ),
            22 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 20,
            ),
            23 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 21,
            ),
            24 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 22,
            ),
            25 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 23,
            ),
            26 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 24,
            ),
            27 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 25,
            ),
            28 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 26,
            ),
            29 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 27,
            ),
            30 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 28,
            ),
            31 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 29,
            ),
            32 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 30,
            ),
            33 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 31,
            ),
            34 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 32,
            ),
            35 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 33,
            ),
            36 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 34,
            ),
            37 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 35,
            ),
            38 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 36,
            ),
            39 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 37,
            ),
            40 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 38,
            ),
            41 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 39,
            ),
            42 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 40,
            ),
            43 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 41,
            ),
            44 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 42,
            ),
            45 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 43,
            ),
            46 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 44,
            ),
            47 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 45,
            ),
            48 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 46,
            ),
            49 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 47,
            ),
            50 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 48,
            ),
            51 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 49,
            ),
            52 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 50,
            ),
            53 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 51,
            ),
            54 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 52,
            ),
            55 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 53,
            ),
            56 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 54,
            ),
            57 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 55,
            ),
            58 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 56,
            ),
            59 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 57,
            ),
            60 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 58,
            ),
            61 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 59,
            ),
            62 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 60,
            ),
            63 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 61,
            ),
            64 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 62,
            ),
            65 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 63,
            ),
            66 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 64,
            ),
            67 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 65,
            ),
            68 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 66,
            ),
            69 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 67,
            ),
            70 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 68,
            ),
            71 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 69,
            ),
            72 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 70,
            ),
            73 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 71,
            ),
            74 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 72,
            ),
            75 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 73,
            ),
            76 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 74,
            ),
            77 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 75,
            ),
            78 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 76,
            ),
            79 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 77,
            ),
            80 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 78,
            ),
            81 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 79,
            ),
            82 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 80,
            ),
            83 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 81,
            ),
            84 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 82,
            ),
            85 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 83,
            ),
            86 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 84,
            ),
            87 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 85,
            ),
            88 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 86,
            ),
            89 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 87,
            ),
            90 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 88,
            ),
            91 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 89,
            ),
            92 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 90,
            ),
            93 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 91,
            ),
            94 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 92,
            ),
            95 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 93,
            ),
            96 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 94,
            ),
            97 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 95,
            ),
            98 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 96,
            ),
            99 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 97,
            ),
            100 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 98,
            ),
            101 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 99,
            ),
            102 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 100,
            ),
            103 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 101,
            ),
            104 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 102,
            ),
            105 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 103,
            ),
            106 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 104,
            ),
            107 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 105,
            ),
            108 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 106,
            ),
            109 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 107,
            ),
            110 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 108,
            ),
            111 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 109,
            ),
            112 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 110,
            ),
            113 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 111,
            ),
            114 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 112,
            ),
            115 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 113,
            ),
            116 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 114,
            ),
            117 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 115,
            ),
            118 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 116,
            ),
            119 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 117,
            ),
            120 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 118,
            ),
            121 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 119,
            ),
            122 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 120,
            ),
            123 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 121,
            ),
            124 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 122,
            ),
            125 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 123,
            ),
            126 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 124,
            ),
            127 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 125,
            ),
            128 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 126,
            ),
            129 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 127,
            ),
            130 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 128,
            ),
            131 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 129,
            ),
            132 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 130,
            ),
            133 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 131,
            ),
            134 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 132,
            ),
            135 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 133,
            ),
            136 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 134,
            ),
            137 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 135,
            ),
            138 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 136,
            ),
            139 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 137,
            ),
            140 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 138,
            ),
            141 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 139,
            ),
            142 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 140,
            ),
            143 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 141,
            ),
            144 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 142,
            ),
            145 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 143,
            ),
            146 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 144,
            ),
            147 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 145,
            ),
            148 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 146,
            ),
            149 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 147,
            ),
            150 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 148,
            ),
            151 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 149,
            ),
            152 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 150,
            ),
            153 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 151,
            ),
            154 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 152,
            ),
            155 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 153,
            ),
            156 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 154,
            ),
            157 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 155,
            ),
            158 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 156,
            ),
            159 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 157,
            ),
            160 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 158,
            ),
            161 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 159,
            ),
            162 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 160,
            ),
            163 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 161,
            ),
            164 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 162,
            ),
            165 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 163,
            ),
            166 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 164,
            ),
            167 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 165,
            ),
            168 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 166,
            ),
            169 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 167,
            ),
            170 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 168,
            ),
            171 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 169,
            ),
            172 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 170,
            ),
            173 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 171,
            ),
            174 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 172,
            ),
            175 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 173,
            ),
            176 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 174,
            ),
            177 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 175,
            ),
            178 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 176,
            ),
            179 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 177,
            ),
            180 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 178,
            ),
            181 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 179,
            ),
            182 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 180,
            ),
            183 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 181,
            ),
            184 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 182,
            ),
            185 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 183,
            ),
            186 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 184,
            ),
            187 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 185,
            ),
            188 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 186,
            ),
            189 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 187,
            ),
            190 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 188,
            ),
            191 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 189,
            ),
            192 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 190,
            ),
            193 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 191,
            ),
            194 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 192,
            ),
            195 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 193,
            ),
            196 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 194,
            ),
            197 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 195,
            ),
            198 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 196,
            ),
            199 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 197,
            ),
            200 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 198,
            ),
            201 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 199,
            ),
            202 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 200,
            ),
            203 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 201,
            ),
            204 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 202,
            ),
            205 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 203,
            ),
            206 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 204,
            ),
            207 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 205,
            ),
            208 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 206,
            ),
            209 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 207,
            ),
            210 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 208,
            ),
            211 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 209,
            ),
            212 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 210,
            ),
            213 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 211,
            ),
            214 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 212,
            ),
            215 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 213,
            ),
            216 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 214,
            ),
            217 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 215,
            ),
            218 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 216,
            ),
            219 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 217,
            ),
            220 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 218,
            ),
            221 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 219,
            ),
            222 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 220,
            ),
            223 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 221,
            ),
            224 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 222,
            ),
            225 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 223,
            ),
            226 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 224,
            ),
            227 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 225,
            ),
            228 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 226,
            ),
            229 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 227,
            ),
            230 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 228,
            ),
            231 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 229,
            ),
            232 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 230,
            ),
            233 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 231,
            ),
            234 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 232,
            ),
            235 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 233,
            ),
            236 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 234,
            ),
            237 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 235,
            ),
            238 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 236,
            ),
            239 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 237,
            ),
            240 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 238,
            ),
            241 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 239,
            ),
            242 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 240,
            ),
            243 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 241,
            ),
            244 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 242,
            ),
            245 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 243,
            ),
            246 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 244,
            ),
            247 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 245,
            ),
            248 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 246,
            ),
            249 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 247,
            ),
            250 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 248,
            ),
            251 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 249,
            ),
            252 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 250,
            ),
            253 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 251,
            ),
            254 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 252,
            ),
            255 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 253,
            ),
            256 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 254,
            ),
            257 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 255,
            ),
            258 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 256,
            ),
            259 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 257,
            ),
            260 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 258,
            ),
            261 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 259,
            ),
            262 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 260,
            ),
            263 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 261,
            ),
            264 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 262,
            ),
            265 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 263,
            ),
            266 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 264,
            ),
            267 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 265,
            ),
            268 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 266,
            ),
            269 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 267,
            ),
            270 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 268,
            ),
            271 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 269,
            ),
            272 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 270,
            ),
            273 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 271,
            ),
            274 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 272,
            ),
            275 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 273,
            ),
            276 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 274,
            ),
            277 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 275,
            ),
            278 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 276,
            ),
            279 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 277,
            ),
            280 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 278,
            ),
            281 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 279,
            ),
            282 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 280,
            ),
            283 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 281,
            ),
            284 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 282,
            ),
            285 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 283,
            ),
            286 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 284,
            ),
            287 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 285,
            ),
            288 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 286,
            ),
            289 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 287,
            ),
            290 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 288,
            ),
            291 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 289,
            ),
            292 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 290,
            ),
            293 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 291,
            ),
            294 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 292,
            ),
            295 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 293,
            ),
            296 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 294,
            ),
            297 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 295,
            ),
            298 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 296,
            ),
            299 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 297,
            ),
            300 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 298,
            ),
            301 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 299,
            ),
            302 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 300,
            ),
            303 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 301,
            ),
            304 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 302,
            ),
            305 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 303,
            ),
            306 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 304,
            ),
            307 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 305,
            ),
            308 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 306,
            ),
            309 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 307,
            ),
            310 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 308,
            ),
            311 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 309,
            ),
            312 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 310,
            ),
            313 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 311,
            ),
            314 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 312,
            ),
            315 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 313,
            ),
            316 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 314,
            ),
            317 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 315,
            ),
            318 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 316,
            ),
            319 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 317,
            ),
            320 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 318,
            ),
            321 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 319,
            ),
            322 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 320,
            ),
            323 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 321,
            ),
            324 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 322,
            ),
            325 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 323,
            ),
            326 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 324,
            ),
            327 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 325,
            ),
            328 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 326,
            ),
            329 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 327,
            ),
            330 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 328,
            ),
            331 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 329,
            ),
            332 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 330,
            ),
            333 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 331,
            ),
            334 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 332,
            ),
            335 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 333,
            ),
            336 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 334,
            ),
            337 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 335,
            ),
            338 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 336,
            ),
            339 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 337,
            ),
            340 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 338,
            ),
            341 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 339,
            ),
            342 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 340,
            ),
            343 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 341,
            ),
            344 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 342,
            ),
            345 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 343,
            ),
            346 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 344,
            ),
            347 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 345,
            ),
            348 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 346,
            ),
            349 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 347,
            ),
            350 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 348,
            ),
            351 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 349,
            ),
            352 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 350,
            ),
            353 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 351,
            ),
            354 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 352,
            ),
            355 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 353,
            ),
            356 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 354,
            ),
            357 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 355,
            ),
            358 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 356,
            ),
            359 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 357,
            ),
            360 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 358,
            ),
            361 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 359,
            ),
            362 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 360,
            ),
            363 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 361,
            ),
            364 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 362,
            ),
            365 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 363,
            ),
            366 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 364,
            ),
            367 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 365,
            ),
            368 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 366,
            ),
            369 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 367,
            ),
            370 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 368,
            ),
            371 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 369,
            ),
            372 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 370,
            ),
            373 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 371,
            ),
            374 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 372,
            ),
            375 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 373,
            ),
            376 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 374,
            ),
            377 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 375,
            ),
            378 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 376,
            ),
            379 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 377,
            ),
            380 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 378,
            ),
            381 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 379,
            ),
            382 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 380,
            ),
            383 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 381,
            ),
            384 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 382,
            ),
            385 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 383,
            ),
            386 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 384,
            ),
            387 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 385,
            ),
            388 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 386,
            ),
            389 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 387,
            ),
            390 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 388,
            ),
            391 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 389,
            ),
            392 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 390,
            ),
            393 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 391,
            ),
            394 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 392,
            ),
            395 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 393,
            ),
            396 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 394,
            ),
            397 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 395,
            ),
            398 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 396,
            ),
            399 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 397,
            ),
            400 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 398,
            ),
            401 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 399,
            ),
            402 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 400,
            ),
            403 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 401,
            ),
            404 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 402,
            ),
            405 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 403,
            ),
            406 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 404,
            ),
            407 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 405,
            ),
            408 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 406,
            ),
            409 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 407,
            ),
            410 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 408,
            ),
            411 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 409,
            ),
            412 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 410,
            ),
            413 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 411,
            ),
            414 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 412,
            ),
            415 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 413,
            ),
            416 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 414,
            ),
            417 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 415,
            ),
            418 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 416,
            ),
            419 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 417,
            ),
            420 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 418,
            ),
            421 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 419,
            ),
            422 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 420,
            ),
            423 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 421,
            ),
            424 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 422,
            ),
            425 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 423,
            ),
            426 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 424,
            ),
            427 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 425,
            ),
            428 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 426,
            ),
            429 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 427,
            ),
            430 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 428,
            ),
            431 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 429,
            ),
            432 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 430,
            ),
            433 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 431,
            ),
            434 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 432,
            ),
            435 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 433,
            ),
            436 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 434,
            ),
            437 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 435,
            ),
            438 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 436,
            ),
            439 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 437,
            ),
            440 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 438,
            ),
            441 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 439,
            ),
            442 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 440,
            ),
            443 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 441,
            ),
            444 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 442,
            ),
            445 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 443,
            ),
            446 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 444,
            ),
            447 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 445,
            ),
            448 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 446,
            ),
            449 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 447,
            ),
            450 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 448,
            ),
            451 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 449,
            ),
            452 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 450,
            ),
            453 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 451,
            ),
            454 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 452,
            ),
            455 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 453,
            ),
            456 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 454,
            ),
            457 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 455,
            ),
            458 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 456,
            ),
            459 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 457,
            ),
            460 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 458,
            ),
            461 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 459,
            ),
            462 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 460,
            ),
            463 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 461,
            ),
            464 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 462,
            ),
            465 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 463,
            ),
            466 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 464,
            ),
            467 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 465,
            ),
            468 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 466,
            ),
            469 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 467,
            ),
            470 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 468,
            ),
            471 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 469,
            ),
            472 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 470,
            ),
            473 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 471,
            ),
            474 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 472,
            ),
            475 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 473,
            ),
            476 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 474,
            ),
            477 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 475,
            ),
            478 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 476,
            ),
            479 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 477,
            ),
            480 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 478,
            ),
            481 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 479,
            ),
            482 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 480,
            ),
            483 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 481,
            ),
            484 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 482,
            ),
            485 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 483,
            ),
            486 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 484,
            ),
            487 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 485,
            ),
            488 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 486,
            ),
            489 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 487,
            ),
            490 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 488,
            ),
            491 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 489,
            ),
            492 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 490,
            ),
            493 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 491,
            ),
            494 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 492,
            ),
            495 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 493,
            ),
            496 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 494,
            ),
            497 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 495,
            ),
            498 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 496,
            ),
            499 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 497,
            ),
        ));
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 498,
            ),
            1 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 499,
            ),
            2 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 500,
            ),
            3 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 501,
            ),
            4 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 502,
            ),
            5 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 503,
            ),
            6 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 504,
            ),
            7 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 505,
            ),
            8 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 506,
            ),
            9 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 507,
            ),
            10 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 508,
            ),
            11 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 509,
            ),
            12 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 510,
            ),
            13 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 511,
            ),
            14 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 512,
            ),
            15 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 513,
            ),
            16 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 514,
            ),
            17 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 515,
            ),
            18 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 516,
            ),
            19 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 517,
            ),
            20 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 518,
            ),
            21 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 519,
            ),
            22 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 520,
            ),
            23 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 521,
            ),
            24 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 522,
            ),
            25 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 523,
            ),
            26 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 524,
            ),
            27 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 525,
            ),
            28 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 526,
            ),
            29 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 527,
            ),
            30 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 528,
            ),
            31 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 529,
            ),
            32 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 530,
            ),
            33 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 531,
            ),
            34 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 532,
            ),
            35 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 533,
            ),
            36 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 534,
            ),
            37 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 535,
            ),
            38 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 536,
            ),
            39 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 537,
            ),
            40 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 538,
            ),
            41 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 539,
            ),
            42 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 540,
            ),
            43 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 541,
            ),
            44 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 542,
            ),
            45 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 543,
            ),
            46 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 544,
            ),
            47 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 545,
            ),
            48 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 546,
            ),
            49 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 547,
            ),
            50 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 548,
            ),
            51 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 549,
            ),
            52 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 550,
            ),
            53 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 551,
            ),
            54 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 552,
            ),
            55 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 553,
            ),
            56 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 554,
            ),
            57 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 555,
            ),
            58 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 556,
            ),
            59 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 557,
            ),
            60 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 558,
            ),
            61 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 559,
            ),
            62 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 560,
            ),
            63 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 561,
            ),
            64 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 562,
            ),
            65 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 563,
            ),
            66 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 564,
            ),
            67 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 565,
            ),
            68 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 566,
            ),
            69 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 567,
            ),
            70 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 568,
            ),
            71 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 569,
            ),
            72 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 570,
            ),
            73 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 571,
            ),
            74 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 572,
            ),
            75 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 573,
            ),
            76 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 574,
            ),
            77 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 575,
            ),
            78 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 576,
            ),
            79 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 577,
            ),
            80 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 578,
            ),
            81 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 579,
            ),
            82 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 580,
            ),
            83 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 581,
            ),
            84 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 582,
            ),
            85 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 583,
            ),
            86 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 584,
            ),
            87 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 585,
            ),
            88 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 586,
            ),
            89 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 587,
            ),
            90 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 588,
            ),
            91 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 589,
            ),
            92 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 590,
            ),
            93 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 591,
            ),
            94 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 592,
            ),
            95 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 593,
            ),
            96 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 594,
            ),
            97 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 595,
            ),
            98 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 596,
            ),
            99 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 597,
            ),
            100 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 598,
            ),
            101 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 599,
            ),
            102 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 600,
            ),
            103 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 601,
            ),
            104 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 602,
            ),
            105 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 603,
            ),
            106 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 604,
            ),
            107 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 605,
            ),
            108 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 606,
            ),
            109 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 607,
            ),
            110 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 608,
            ),
            111 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 609,
            ),
            112 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 610,
            ),
            113 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 611,
            ),
            114 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 612,
            ),
            115 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 613,
            ),
            116 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 614,
            ),
            117 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 615,
            ),
            118 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 616,
            ),
            119 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 617,
            ),
            120 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 618,
            ),
            121 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 619,
            ),
            122 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 620,
            ),
            123 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 621,
            ),
            124 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 622,
            ),
            125 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 623,
            ),
            126 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 624,
            ),
            127 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 625,
            ),
            128 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 626,
            ),
            129 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 627,
            ),
            130 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 628,
            ),
            131 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 629,
            ),
            132 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 630,
            ),
            133 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 631,
            ),
            134 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 632,
            ),
            135 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 633,
            ),
            136 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 634,
            ),
            137 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 635,
            ),
            138 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 636,
            ),
            139 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 637,
            ),
            140 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 638,
            ),
            141 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 639,
            ),
            142 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 640,
            ),
            143 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 641,
            ),
            144 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 642,
            ),
            145 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 643,
            ),
            146 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 644,
            ),
            147 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 645,
            ),
            148 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 646,
            ),
            149 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 647,
            ),
            150 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 648,
            ),
            151 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 649,
            ),
            152 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 650,
            ),
            153 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 651,
            ),
            154 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 652,
            ),
            155 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 653,
            ),
            156 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 654,
            ),
            157 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 655,
            ),
            158 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 656,
            ),
            159 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 657,
            ),
            160 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 658,
            ),
            161 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 659,
            ),
            162 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 660,
            ),
            163 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 661,
            ),
            164 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 662,
            ),
            165 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 663,
            ),
            166 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 664,
            ),
            167 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 665,
            ),
            168 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 666,
            ),
            169 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 667,
            ),
            170 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 668,
            ),
            171 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 669,
            ),
            172 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 670,
            ),
            173 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 671,
            ),
            174 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 672,
            ),
            175 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 673,
            ),
            176 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 674,
            ),
            177 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 675,
            ),
            178 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 676,
            ),
            179 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 677,
            ),
            180 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 678,
            ),
            181 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 679,
            ),
            182 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 680,
            ),
            183 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 681,
            ),
            184 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 682,
            ),
            185 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 683,
            ),
            186 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 684,
            ),
            187 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 685,
            ),
            188 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 686,
            ),
            189 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 687,
            ),
            190 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 688,
            ),
            191 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 689,
            ),
            192 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 690,
            ),
            193 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 691,
            ),
            194 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 692,
            ),
            195 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 693,
            ),
            196 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 694,
            ),
            197 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 695,
            ),
            198 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 696,
            ),
            199 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 697,
            ),
            200 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 698,
            ),
            201 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 699,
            ),
            202 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 700,
            ),
            203 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 701,
            ),
            204 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 702,
            ),
            205 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 703,
            ),
            206 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 704,
            ),
            207 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 705,
            ),
            208 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 706,
            ),
            209 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 707,
            ),
            210 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 708,
            ),
            211 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 709,
            ),
            212 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 710,
            ),
            213 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 711,
            ),
            214 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 712,
            ),
            215 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 713,
            ),
            216 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 714,
            ),
            217 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 715,
            ),
            218 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 716,
            ),
            219 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 717,
            ),
            220 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 718,
            ),
            221 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 719,
            ),
            222 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 720,
            ),
            223 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 721,
            ),
            224 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 722,
            ),
            225 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 723,
            ),
            226 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 724,
            ),
            227 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 725,
            ),
            228 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 726,
            ),
            229 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 727,
            ),
            230 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 728,
            ),
            231 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 729,
            ),
            232 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 730,
            ),
            233 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 731,
            ),
            234 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 732,
            ),
            235 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 733,
            ),
            236 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 734,
            ),
            237 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 735,
            ),
            238 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 736,
            ),
            239 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 737,
            ),
            240 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 738,
            ),
            241 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 739,
            ),
            242 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 740,
            ),
            243 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 741,
            ),
            244 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 742,
            ),
            245 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 743,
            ),
            246 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 744,
            ),
            247 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 745,
            ),
            248 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 746,
            ),
            249 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 747,
            ),
            250 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 748,
            ),
            251 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 749,
            ),
            252 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 750,
            ),
            253 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 751,
            ),
            254 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 752,
            ),
            255 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 753,
            ),
            256 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 754,
            ),
            257 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 755,
            ),
            258 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 756,
            ),
            259 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 757,
            ),
            260 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 758,
            ),
            261 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 759,
            ),
            262 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 760,
            ),
            263 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 761,
            ),
            264 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 762,
            ),
            265 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 763,
            ),
            266 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 764,
            ),
            267 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 765,
            ),
            268 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 766,
            ),
            269 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 767,
            ),
            270 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 768,
            ),
            271 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 769,
            ),
            272 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 770,
            ),
            273 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 771,
            ),
            274 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 772,
            ),
            275 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 773,
            ),
            276 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 774,
            ),
            277 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 775,
            ),
            278 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 776,
            ),
            279 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 777,
            ),
            280 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 778,
            ),
            281 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 779,
            ),
            282 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 780,
            ),
            283 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 781,
            ),
            284 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 782,
            ),
            285 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 783,
            ),
            286 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 784,
            ),
            287 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 785,
            ),
            288 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 786,
            ),
            289 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 787,
            ),
            290 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 788,
            ),
            291 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 789,
            ),
            292 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 790,
            ),
            293 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 791,
            ),
            294 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 792,
            ),
            295 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 793,
            ),
            296 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 794,
            ),
            297 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 795,
            ),
            298 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 796,
            ),
            299 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 797,
            ),
            300 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 798,
            ),
            301 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 799,
            ),
            302 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 800,
            ),
            303 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 801,
            ),
            304 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 802,
            ),
            305 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 803,
            ),
            306 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 804,
            ),
            307 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 805,
            ),
            308 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 806,
            ),
            309 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 807,
            ),
            310 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 808,
            ),
            311 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 809,
            ),
            312 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 810,
            ),
            313 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 811,
            ),
            314 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 812,
            ),
            315 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 813,
            ),
            316 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 814,
            ),
            317 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 815,
            ),
            318 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 816,
            ),
            319 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 817,
            ),
            320 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 818,
            ),
            321 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 819,
            ),
            322 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 820,
            ),
            323 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 821,
            ),
            324 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 822,
            ),
            325 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 823,
            ),
            326 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 824,
            ),
            327 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 825,
            ),
            328 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 826,
            ),
            329 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 827,
            ),
            330 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 828,
            ),
            331 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 829,
            ),
            332 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 830,
            ),
            333 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 831,
            ),
            334 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 832,
            ),
            335 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 833,
            ),
            336 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 834,
            ),
            337 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 835,
            ),
            338 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 836,
            ),
            339 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 837,
            ),
            340 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 838,
            ),
            341 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 839,
            ),
            342 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 840,
            ),
            343 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 841,
            ),
            344 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 842,
            ),
            345 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 843,
            ),
            346 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 844,
            ),
            347 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 845,
            ),
            348 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 846,
            ),
            349 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 847,
            ),
            350 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 848,
            ),
            351 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 849,
            ),
            352 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 850,
            ),
            353 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 851,
            ),
            354 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 852,
            ),
            355 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 853,
            ),
            356 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 854,
            ),
            357 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 855,
            ),
            358 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 856,
            ),
            359 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 857,
            ),
            360 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 858,
            ),
            361 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 859,
            ),
            362 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 860,
            ),
            363 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 861,
            ),
            364 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 862,
            ),
            365 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 863,
            ),
            366 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 864,
            ),
            367 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 865,
            ),
            368 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 866,
            ),
            369 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 867,
            ),
            370 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 868,
            ),
            371 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 869,
            ),
            372 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 870,
            ),
            373 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 871,
            ),
            374 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 872,
            ),
            375 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 873,
            ),
            376 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 874,
            ),
            377 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 875,
            ),
            378 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 876,
            ),
            379 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 877,
            ),
            380 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 878,
            ),
            381 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 879,
            ),
            382 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 880,
            ),
            383 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 881,
            ),
            384 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 882,
            ),
            385 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 883,
            ),
            386 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 884,
            ),
            387 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 885,
            ),
            388 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 886,
            ),
            389 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 887,
            ),
            390 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 888,
            ),
            391 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 889,
            ),
            392 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 890,
            ),
            393 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 891,
            ),
            394 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 892,
            ),
            395 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 893,
            ),
            396 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 894,
            ),
            397 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 895,
            ),
            398 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 896,
            ),
            399 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 897,
            ),
            400 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 898,
            ),
            401 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 899,
            ),
            402 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 900,
            ),
            403 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 901,
            ),
            404 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 902,
            ),
            405 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 903,
            ),
            406 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 904,
            ),
            407 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 905,
            ),
            408 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 906,
            ),
            409 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 907,
            ),
            410 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 908,
            ),
            411 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 909,
            ),
            412 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 910,
            ),
            413 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 911,
            ),
            414 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 912,
            ),
            415 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 913,
            ),
            416 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 914,
            ),
            417 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 915,
            ),
            418 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 916,
            ),
            419 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 917,
            ),
            420 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 918,
            ),
            421 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 919,
            ),
            422 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 920,
            ),
            423 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 921,
            ),
            424 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 922,
            ),
            425 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 923,
            ),
            426 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 924,
            ),
            427 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 925,
            ),
            428 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 926,
            ),
            429 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 927,
            ),
            430 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 928,
            ),
            431 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 929,
            ),
            432 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 930,
            ),
            433 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 931,
            ),
            434 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 932,
            ),
            435 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 933,
            ),
            436 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 934,
            ),
            437 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 935,
            ),
            438 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 936,
            ),
            439 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 937,
            ),
            440 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 938,
            ),
            441 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 939,
            ),
            442 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 940,
            ),
            443 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 941,
            ),
            444 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 942,
            ),
            445 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 943,
            ),
            446 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 944,
            ),
            447 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 945,
            ),
            448 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 946,
            ),
            449 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 947,
            ),
            450 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 948,
            ),
            451 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 949,
            ),
            452 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 950,
            ),
            453 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 951,
            ),
            454 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 952,
            ),
            455 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 953,
            ),
            456 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 954,
            ),
            457 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 955,
            ),
            458 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 956,
            ),
            459 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 957,
            ),
            460 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 958,
            ),
            461 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 959,
            ),
            462 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 960,
            ),
            463 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 961,
            ),
            464 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 962,
            ),
            465 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 963,
            ),
            466 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 964,
            ),
            467 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 965,
            ),
            468 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 966,
            ),
            469 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 967,
            ),
            470 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 968,
            ),
            471 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 969,
            ),
            472 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 970,
            ),
            473 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 971,
            ),
            474 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 972,
            ),
            475 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 973,
            ),
            476 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 974,
            ),
            477 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 975,
            ),
            478 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 976,
            ),
            479 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 977,
            ),
            480 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 978,
            ),
            481 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 979,
            ),
            482 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 980,
            ),
            483 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 981,
            ),
            484 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 982,
            ),
            485 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 983,
            ),
            486 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 984,
            ),
            487 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 985,
            ),
            488 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 986,
            ),
            489 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 987,
            ),
            490 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 988,
            ),
            491 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 989,
            ),
            492 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 990,
            ),
            493 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 991,
            ),
            494 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 992,
            ),
            495 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 993,
            ),
            496 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 994,
            ),
            497 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 995,
            ),
            498 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 996,
            ),
            499 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 997,
            ),
        ));
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 998,
            ),
            1 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 999,
            ),
            2 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1000,
            ),
            3 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1001,
            ),
            4 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1002,
            ),
            5 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1003,
            ),
            6 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1004,
            ),
            7 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1005,
            ),
            8 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1006,
            ),
            9 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1007,
            ),
            10 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1008,
            ),
            11 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1009,
            ),
            12 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1010,
            ),
            13 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1011,
            ),
            14 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1012,
            ),
            15 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1013,
            ),
            16 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1014,
            ),
            17 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1015,
            ),
            18 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1016,
            ),
            19 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1017,
            ),
            20 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1018,
            ),
            21 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1019,
            ),
            22 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1020,
            ),
            23 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1021,
            ),
            24 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1022,
            ),
            25 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1023,
            ),
            26 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1024,
            ),
            27 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1025,
            ),
            28 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1026,
            ),
            29 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1027,
            ),
            30 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1028,
            ),
            31 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1029,
            ),
            32 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1030,
            ),
            33 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1031,
            ),
            34 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1032,
            ),
            35 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1033,
            ),
            36 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1034,
            ),
            37 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1035,
            ),
            38 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1036,
            ),
            39 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1037,
            ),
            40 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1038,
            ),
            41 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1039,
            ),
            42 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1040,
            ),
            43 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1041,
            ),
            44 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1042,
            ),
            45 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1043,
            ),
            46 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1044,
            ),
            47 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1045,
            ),
            48 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1046,
            ),
            49 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1047,
            ),
            50 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1048,
            ),
            51 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1049,
            ),
            52 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1050,
            ),
            53 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1051,
            ),
            54 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1052,
            ),
            55 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1053,
            ),
            56 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1054,
            ),
            57 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1055,
            ),
            58 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1056,
            ),
            59 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1057,
            ),
            60 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1058,
            ),
            61 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1059,
            ),
            62 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1060,
            ),
            63 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1061,
            ),
            64 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1062,
            ),
            65 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1063,
            ),
            66 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1064,
            ),
            67 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1065,
            ),
            68 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1066,
            ),
            69 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1067,
            ),
            70 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1068,
            ),
            71 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1069,
            ),
            72 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1070,
            ),
            73 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1071,
            ),
            74 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1072,
            ),
            75 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1073,
            ),
            76 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1074,
            ),
            77 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1075,
            ),
            78 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1076,
            ),
            79 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1077,
            ),
            80 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1078,
            ),
            81 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1079,
            ),
            82 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1080,
            ),
            83 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1081,
            ),
            84 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1082,
            ),
            85 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1083,
            ),
            86 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1084,
            ),
            87 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1085,
            ),
            88 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1086,
            ),
            89 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1087,
            ),
            90 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1088,
            ),
            91 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1089,
            ),
            92 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1090,
            ),
            93 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1091,
            ),
            94 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1092,
            ),
            95 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1093,
            ),
            96 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1094,
            ),
            97 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1095,
            ),
            98 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1096,
            ),
            99 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1097,
            ),
            100 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1098,
            ),
            101 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1099,
            ),
            102 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1100,
            ),
            103 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1101,
            ),
            104 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1102,
            ),
            105 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1103,
            ),
            106 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1104,
            ),
            107 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1105,
            ),
            108 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1106,
            ),
            109 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1107,
            ),
            110 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1108,
            ),
            111 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1109,
            ),
            112 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1110,
            ),
            113 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1111,
            ),
            114 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1112,
            ),
            115 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1113,
            ),
            116 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1114,
            ),
            117 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1115,
            ),
            118 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1116,
            ),
            119 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1117,
            ),
            120 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1118,
            ),
            121 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1119,
            ),
            122 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1120,
            ),
            123 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1121,
            ),
            124 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1122,
            ),
            125 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1123,
            ),
            126 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1124,
            ),
            127 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1125,
            ),
            128 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1126,
            ),
            129 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1127,
            ),
            130 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1128,
            ),
            131 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1129,
            ),
            132 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1130,
            ),
            133 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1131,
            ),
            134 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1132,
            ),
            135 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1133,
            ),
            136 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1134,
            ),
            137 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1135,
            ),
            138 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1136,
            ),
            139 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1137,
            ),
            140 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1138,
            ),
            141 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1139,
            ),
            142 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1140,
            ),
            143 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1141,
            ),
            144 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1142,
            ),
            145 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1143,
            ),
            146 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1144,
            ),
            147 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1145,
            ),
            148 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1146,
            ),
            149 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1147,
            ),
            150 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1148,
            ),
            151 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1149,
            ),
            152 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1150,
            ),
            153 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1151,
            ),
            154 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1152,
            ),
            155 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1153,
            ),
            156 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1154,
            ),
            157 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1155,
            ),
            158 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1156,
            ),
            159 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1157,
            ),
            160 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1158,
            ),
            161 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1159,
            ),
            162 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1160,
            ),
            163 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1161,
            ),
            164 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1162,
            ),
            165 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1163,
            ),
            166 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1164,
            ),
            167 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1165,
            ),
            168 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1166,
            ),
            169 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1167,
            ),
            170 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1168,
            ),
            171 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1169,
            ),
            172 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1170,
            ),
            173 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1171,
            ),
            174 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1172,
            ),
            175 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1173,
            ),
            176 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1174,
            ),
            177 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1175,
            ),
            178 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1176,
            ),
            179 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1177,
            ),
            180 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1178,
            ),
            181 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1179,
            ),
            182 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1180,
            ),
            183 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1181,
            ),
            184 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1182,
            ),
            185 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1183,
            ),
            186 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1184,
            ),
            187 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1185,
            ),
            188 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1186,
            ),
            189 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1187,
            ),
            190 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1188,
            ),
            191 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1189,
            ),
            192 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1190,
            ),
            193 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1191,
            ),
            194 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1192,
            ),
            195 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1193,
            ),
            196 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1194,
            ),
            197 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1195,
            ),
            198 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1196,
            ),
            199 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1197,
            ),
            200 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1198,
            ),
            201 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1199,
            ),
            202 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1200,
            ),
            203 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1201,
            ),
            204 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1202,
            ),
            205 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1203,
            ),
            206 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1204,
            ),
            207 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1205,
            ),
            208 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1206,
            ),
            209 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1207,
            ),
            210 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1208,
            ),
            211 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1209,
            ),
            212 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1210,
            ),
            213 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1211,
            ),
            214 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1212,
            ),
            215 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1213,
            ),
            216 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1214,
            ),
            217 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1215,
            ),
            218 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1216,
            ),
            219 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1217,
            ),
            220 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1218,
            ),
            221 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1219,
            ),
            222 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1220,
            ),
            223 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1221,
            ),
            224 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1222,
            ),
            225 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1223,
            ),
            226 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1224,
            ),
            227 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1225,
            ),
            228 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1226,
            ),
            229 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1227,
            ),
            230 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1228,
            ),
            231 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1229,
            ),
            232 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1230,
            ),
            233 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1231,
            ),
            234 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1232,
            ),
            235 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1233,
            ),
            236 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1234,
            ),
            237 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1235,
            ),
            238 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1236,
            ),
            239 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1237,
            ),
            240 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1238,
            ),
            241 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1239,
            ),
            242 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1240,
            ),
            243 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1241,
            ),
            244 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1242,
            ),
            245 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1243,
            ),
            246 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1244,
            ),
            247 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1245,
            ),
            248 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1246,
            ),
            249 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1247,
            ),
            250 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1248,
            ),
            251 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1249,
            ),
            252 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1250,
            ),
            253 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1251,
            ),
            254 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1252,
            ),
            255 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1253,
            ),
            256 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1254,
            ),
            257 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1255,
            ),
            258 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1256,
            ),
            259 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1257,
            ),
            260 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1258,
            ),
            261 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1259,
            ),
            262 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1260,
            ),
            263 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1261,
            ),
            264 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1262,
            ),
            265 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1263,
            ),
            266 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1264,
            ),
            267 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1265,
            ),
            268 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1266,
            ),
            269 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1267,
            ),
            270 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1268,
            ),
            271 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1269,
            ),
            272 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1270,
            ),
            273 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1271,
            ),
            274 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1272,
            ),
            275 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1273,
            ),
            276 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1274,
            ),
            277 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1275,
            ),
            278 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1276,
            ),
            279 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1277,
            ),
            280 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1278,
            ),
            281 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1279,
            ),
            282 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1280,
            ),
            283 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1281,
            ),
            284 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1282,
            ),
            285 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1283,
            ),
            286 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1284,
            ),
            287 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1285,
            ),
            288 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1286,
            ),
            289 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1287,
            ),
            290 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1288,
            ),
            291 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1289,
            ),
            292 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1290,
            ),
            293 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1291,
            ),
            294 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1292,
            ),
            295 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1293,
            ),
            296 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1294,
            ),
            297 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1295,
            ),
            298 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1296,
            ),
            299 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1297,
            ),
            300 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1298,
            ),
            301 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1299,
            ),
            302 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1300,
            ),
            303 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1301,
            ),
            304 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1302,
            ),
            305 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1303,
            ),
            306 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1304,
            ),
            307 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1305,
            ),
            308 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1306,
            ),
            309 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1307,
            ),
            310 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1308,
            ),
            311 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1309,
            ),
            312 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1310,
            ),
            313 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1311,
            ),
            314 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1312,
            ),
            315 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1313,
            ),
            316 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1314,
            ),
            317 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1315,
            ),
            318 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1316,
            ),
            319 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1317,
            ),
            320 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1318,
            ),
            321 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1319,
            ),
            322 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1320,
            ),
            323 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1321,
            ),
            324 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1322,
            ),
            325 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1323,
            ),
            326 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1324,
            ),
            327 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1325,
            ),
            328 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1326,
            ),
            329 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1327,
            ),
            330 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1328,
            ),
            331 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1329,
            ),
            332 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1330,
            ),
            333 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1331,
            ),
            334 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1332,
            ),
            335 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1333,
            ),
            336 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1334,
            ),
            337 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1335,
            ),
            338 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1336,
            ),
            339 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1337,
            ),
            340 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1338,
            ),
            341 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1339,
            ),
            342 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1340,
            ),
            343 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1341,
            ),
            344 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1342,
            ),
            345 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1343,
            ),
            346 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1344,
            ),
            347 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1345,
            ),
            348 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1346,
            ),
            349 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1347,
            ),
            350 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1348,
            ),
            351 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1349,
            ),
            352 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1350,
            ),
            353 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1351,
            ),
            354 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1352,
            ),
            355 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1353,
            ),
            356 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1354,
            ),
            357 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1355,
            ),
            358 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1356,
            ),
            359 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1357,
            ),
            360 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1358,
            ),
            361 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1359,
            ),
            362 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1360,
            ),
            363 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1361,
            ),
            364 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1362,
            ),
            365 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1363,
            ),
            366 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1364,
            ),
            367 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1365,
            ),
            368 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1366,
            ),
            369 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1367,
            ),
            370 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1368,
            ),
            371 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1369,
            ),
            372 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1370,
            ),
            373 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1371,
            ),
            374 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1372,
            ),
            375 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1373,
            ),
            376 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1374,
            ),
            377 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1375,
            ),
            378 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1376,
            ),
            379 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1377,
            ),
            380 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1378,
            ),
            381 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1379,
            ),
            382 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1380,
            ),
            383 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1381,
            ),
            384 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1382,
            ),
            385 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1383,
            ),
            386 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1384,
            ),
            387 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1385,
            ),
            388 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1386,
            ),
            389 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1387,
            ),
            390 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1388,
            ),
            391 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1389,
            ),
            392 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1390,
            ),
            393 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1391,
            ),
            394 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1392,
            ),
            395 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1393,
            ),
            396 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1394,
            ),
            397 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1395,
            ),
            398 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1396,
            ),
            399 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1397,
            ),
            400 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1398,
            ),
            401 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1399,
            ),
            402 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1400,
            ),
            403 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1401,
            ),
            404 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1402,
            ),
            405 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1403,
            ),
            406 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1404,
            ),
            407 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1405,
            ),
            408 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1406,
            ),
            409 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1407,
            ),
            410 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1408,
            ),
            411 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1409,
            ),
            412 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1410,
            ),
            413 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1411,
            ),
            414 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1412,
            ),
            415 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1413,
            ),
            416 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1414,
            ),
            417 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1415,
            ),
            418 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1416,
            ),
            419 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1417,
            ),
            420 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1418,
            ),
            421 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1419,
            ),
            422 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1420,
            ),
            423 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1421,
            ),
            424 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1422,
            ),
            425 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1423,
            ),
            426 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1424,
            ),
            427 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1425,
            ),
            428 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1426,
            ),
            429 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1427,
            ),
            430 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1428,
            ),
            431 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1429,
            ),
            432 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1430,
            ),
            433 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1431,
            ),
            434 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1432,
            ),
            435 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1433,
            ),
            436 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1434,
            ),
            437 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1435,
            ),
            438 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1436,
            ),
            439 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1437,
            ),
            440 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1438,
            ),
            441 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1439,
            ),
            442 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1440,
            ),
            443 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1441,
            ),
            444 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1442,
            ),
            445 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1443,
            ),
            446 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1444,
            ),
            447 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1445,
            ),
            448 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1446,
            ),
            449 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1447,
            ),
            450 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1448,
            ),
            451 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1449,
            ),
            452 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1450,
            ),
            453 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1451,
            ),
            454 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1452,
            ),
            455 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1453,
            ),
            456 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1454,
            ),
            457 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1455,
            ),
            458 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1456,
            ),
            459 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1457,
            ),
            460 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1458,
            ),
            461 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1459,
            ),
            462 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1460,
            ),
            463 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1461,
            ),
            464 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1462,
            ),
            465 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1463,
            ),
            466 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1464,
            ),
            467 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1465,
            ),
            468 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1466,
            ),
            469 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1467,
            ),
            470 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1468,
            ),
            471 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1469,
            ),
            472 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1470,
            ),
            473 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1471,
            ),
            474 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1472,
            ),
            475 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1473,
            ),
            476 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1474,
            ),
            477 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1475,
            ),
            478 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1476,
            ),
            479 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1477,
            ),
            480 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1478,
            ),
            481 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1479,
            ),
            482 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1480,
            ),
            483 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1481,
            ),
            484 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1482,
            ),
            485 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1483,
            ),
            486 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1484,
            ),
            487 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1485,
            ),
            488 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1486,
            ),
            489 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1487,
            ),
            490 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1488,
            ),
            491 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1489,
            ),
            492 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1490,
            ),
            493 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1491,
            ),
            494 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1492,
            ),
            495 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1493,
            ),
            496 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1494,
            ),
            497 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1495,
            ),
            498 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1496,
            ),
            499 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1497,
            ),
        ));
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1498,
            ),
            1 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1499,
            ),
            2 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1500,
            ),
            3 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1501,
            ),
            4 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1502,
            ),
            5 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1503,
            ),
            6 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1504,
            ),
            7 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1505,
            ),
            8 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1506,
            ),
            9 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1507,
            ),
            10 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1508,
            ),
            11 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1509,
            ),
            12 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1510,
            ),
            13 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1511,
            ),
            14 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1512,
            ),
            15 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1513,
            ),
            16 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1514,
            ),
            17 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1515,
            ),
            18 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1516,
            ),
            19 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1517,
            ),
            20 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1518,
            ),
            21 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1519,
            ),
            22 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1520,
            ),
            23 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1521,
            ),
            24 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1522,
            ),
            25 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1523,
            ),
            26 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1524,
            ),
            27 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1525,
            ),
            28 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1526,
            ),
            29 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1527,
            ),
            30 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1528,
            ),
            31 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1529,
            ),
            32 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1530,
            ),
            33 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1531,
            ),
            34 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1532,
            ),
            35 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1533,
            ),
            36 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1534,
            ),
            37 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1535,
            ),
            38 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1536,
            ),
            39 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1537,
            ),
            40 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1538,
            ),
            41 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1539,
            ),
            42 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1540,
            ),
            43 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1541,
            ),
            44 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1542,
            ),
            45 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1543,
            ),
            46 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1544,
            ),
            47 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1545,
            ),
            48 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1546,
            ),
            49 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1547,
            ),
            50 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1548,
            ),
            51 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1549,
            ),
            52 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1550,
            ),
            53 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1551,
            ),
            54 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1552,
            ),
            55 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1553,
            ),
            56 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1554,
            ),
            57 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1555,
            ),
            58 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1556,
            ),
            59 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1557,
            ),
            60 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1558,
            ),
            61 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1559,
            ),
            62 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1560,
            ),
            63 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1561,
            ),
            64 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1562,
            ),
            65 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1563,
            ),
            66 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1564,
            ),
            67 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1565,
            ),
            68 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1566,
            ),
            69 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1567,
            ),
            70 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1568,
            ),
            71 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1569,
            ),
            72 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1570,
            ),
            73 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1571,
            ),
            74 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1572,
            ),
            75 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1573,
            ),
            76 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1574,
            ),
            77 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1575,
            ),
            78 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1576,
            ),
            79 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1577,
            ),
            80 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1578,
            ),
            81 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1579,
            ),
            82 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1580,
            ),
            83 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1581,
            ),
            84 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1582,
            ),
            85 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1583,
            ),
            86 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1584,
            ),
            87 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1585,
            ),
            88 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1586,
            ),
            89 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1587,
            ),
            90 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1588,
            ),
            91 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1589,
            ),
            92 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1590,
            ),
            93 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1591,
            ),
            94 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1592,
            ),
            95 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1593,
            ),
            96 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1594,
            ),
            97 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1595,
            ),
            98 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1596,
            ),
            99 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1597,
            ),
            100 => 
            array (
                'course_name' => 'Computer Engineering',
                'sc_id' => 1598,
            ),
            101 => 
            array (
                'course_name' => 'Business Administration',
                'sc_id' => 1599,
            ),
            102 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1600,
            ),
            103 => 
            array (
                'course_name' => 'Computer Science',
                'sc_id' => 1601,
            ),
        ));
        
        
    }
}