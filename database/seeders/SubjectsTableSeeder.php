<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'subject_id' => 1,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            1 => 
            array (
                'subject_id' => 2,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            2 => 
            array (
                'subject_id' => 3,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            3 => 
            array (
                'subject_id' => 4,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            4 => 
            array (
                'subject_id' => 5,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            5 => 
            array (
                'subject_id' => 6,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            6 => 
            array (
                'subject_id' => 7,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            7 => 
            array (
                'subject_id' => 8,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            8 => 
            array (
                'subject_id' => 9,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            9 => 
            array (
                'subject_id' => 10,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            10 => 
            array (
                'subject_id' => 11,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            11 => 
            array (
                'subject_id' => 12,
                'name' => 'Literature',
                'department' => 'English',
            ),
            12 => 
            array (
                'subject_id' => 13,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            13 => 
            array (
                'subject_id' => 14,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            14 => 
            array (
                'subject_id' => 15,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            15 => 
            array (
                'subject_id' => 16,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            16 => 
            array (
                'subject_id' => 17,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            17 => 
            array (
                'subject_id' => 18,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            18 => 
            array (
                'subject_id' => 19,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            19 => 
            array (
                'subject_id' => 20,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            20 => 
            array (
                'subject_id' => 21,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            21 => 
            array (
                'subject_id' => 22,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            22 => 
            array (
                'subject_id' => 23,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            23 => 
            array (
                'subject_id' => 24,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            24 => 
            array (
                'subject_id' => 25,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            25 => 
            array (
                'subject_id' => 26,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            26 => 
            array (
                'subject_id' => 27,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            27 => 
            array (
                'subject_id' => 28,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            28 => 
            array (
                'subject_id' => 29,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            29 => 
            array (
                'subject_id' => 30,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            30 => 
            array (
                'subject_id' => 31,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            31 => 
            array (
                'subject_id' => 32,
                'name' => 'World History',
                'department' => 'History',
            ),
            32 => 
            array (
                'subject_id' => 33,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            33 => 
            array (
                'subject_id' => 34,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            34 => 
            array (
                'subject_id' => 35,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            35 => 
            array (
                'subject_id' => 36,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            36 => 
            array (
                'subject_id' => 37,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            37 => 
            array (
                'subject_id' => 38,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            38 => 
            array (
                'subject_id' => 39,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            39 => 
            array (
                'subject_id' => 40,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            40 => 
            array (
                'subject_id' => 41,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            41 => 
            array (
                'subject_id' => 42,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            42 => 
            array (
                'subject_id' => 43,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            43 => 
            array (
                'subject_id' => 44,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            44 => 
            array (
                'subject_id' => 45,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            45 => 
            array (
                'subject_id' => 46,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            46 => 
            array (
                'subject_id' => 47,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            47 => 
            array (
                'subject_id' => 48,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            48 => 
            array (
                'subject_id' => 49,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            49 => 
            array (
                'subject_id' => 50,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            50 => 
            array (
                'subject_id' => 51,
                'name' => 'Literature',
                'department' => 'English',
            ),
            51 => 
            array (
                'subject_id' => 52,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            52 => 
            array (
                'subject_id' => 53,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            53 => 
            array (
                'subject_id' => 54,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            54 => 
            array (
                'subject_id' => 55,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            55 => 
            array (
                'subject_id' => 56,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            56 => 
            array (
                'subject_id' => 57,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            57 => 
            array (
                'subject_id' => 58,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            58 => 
            array (
                'subject_id' => 59,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            59 => 
            array (
                'subject_id' => 60,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            60 => 
            array (
                'subject_id' => 61,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            61 => 
            array (
                'subject_id' => 62,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            62 => 
            array (
                'subject_id' => 63,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            63 => 
            array (
                'subject_id' => 64,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            64 => 
            array (
                'subject_id' => 65,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            65 => 
            array (
                'subject_id' => 66,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            66 => 
            array (
                'subject_id' => 67,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            67 => 
            array (
                'subject_id' => 68,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            68 => 
            array (
                'subject_id' => 69,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            69 => 
            array (
                'subject_id' => 70,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            70 => 
            array (
                'subject_id' => 71,
                'name' => 'World History',
                'department' => 'History',
            ),
            71 => 
            array (
                'subject_id' => 72,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            72 => 
            array (
                'subject_id' => 73,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            73 => 
            array (
                'subject_id' => 74,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            74 => 
            array (
                'subject_id' => 75,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            75 => 
            array (
                'subject_id' => 76,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            76 => 
            array (
                'subject_id' => 77,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            77 => 
            array (
                'subject_id' => 78,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            78 => 
            array (
                'subject_id' => 79,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            79 => 
            array (
                'subject_id' => 80,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            80 => 
            array (
                'subject_id' => 81,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            81 => 
            array (
                'subject_id' => 82,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            82 => 
            array (
                'subject_id' => 83,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            83 => 
            array (
                'subject_id' => 84,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            84 => 
            array (
                'subject_id' => 85,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            85 => 
            array (
                'subject_id' => 86,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            86 => 
            array (
                'subject_id' => 87,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            87 => 
            array (
                'subject_id' => 88,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            88 => 
            array (
                'subject_id' => 89,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            89 => 
            array (
                'subject_id' => 90,
                'name' => 'Literature',
                'department' => 'English',
            ),
            90 => 
            array (
                'subject_id' => 91,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            91 => 
            array (
                'subject_id' => 92,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            92 => 
            array (
                'subject_id' => 93,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            93 => 
            array (
                'subject_id' => 94,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            94 => 
            array (
                'subject_id' => 95,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            95 => 
            array (
                'subject_id' => 96,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            96 => 
            array (
                'subject_id' => 97,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            97 => 
            array (
                'subject_id' => 98,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            98 => 
            array (
                'subject_id' => 99,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            99 => 
            array (
                'subject_id' => 100,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            100 => 
            array (
                'subject_id' => 101,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            101 => 
            array (
                'subject_id' => 102,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            102 => 
            array (
                'subject_id' => 103,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            103 => 
            array (
                'subject_id' => 104,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            104 => 
            array (
                'subject_id' => 105,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            105 => 
            array (
                'subject_id' => 106,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            106 => 
            array (
                'subject_id' => 107,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            107 => 
            array (
                'subject_id' => 108,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            108 => 
            array (
                'subject_id' => 109,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            109 => 
            array (
                'subject_id' => 110,
                'name' => 'World History',
                'department' => 'History',
            ),
            110 => 
            array (
                'subject_id' => 111,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            111 => 
            array (
                'subject_id' => 112,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            112 => 
            array (
                'subject_id' => 113,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            113 => 
            array (
                'subject_id' => 114,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            114 => 
            array (
                'subject_id' => 115,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            115 => 
            array (
                'subject_id' => 116,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            116 => 
            array (
                'subject_id' => 117,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            117 => 
            array (
                'subject_id' => 118,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            118 => 
            array (
                'subject_id' => 119,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            119 => 
            array (
                'subject_id' => 120,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            120 => 
            array (
                'subject_id' => 121,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            121 => 
            array (
                'subject_id' => 122,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            122 => 
            array (
                'subject_id' => 123,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            123 => 
            array (
                'subject_id' => 124,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            124 => 
            array (
                'subject_id' => 125,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            125 => 
            array (
                'subject_id' => 126,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            126 => 
            array (
                'subject_id' => 127,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            127 => 
            array (
                'subject_id' => 128,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            128 => 
            array (
                'subject_id' => 129,
                'name' => 'Literature',
                'department' => 'English',
            ),
            129 => 
            array (
                'subject_id' => 130,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            130 => 
            array (
                'subject_id' => 131,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            131 => 
            array (
                'subject_id' => 132,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            132 => 
            array (
                'subject_id' => 133,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            133 => 
            array (
                'subject_id' => 134,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            134 => 
            array (
                'subject_id' => 135,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            135 => 
            array (
                'subject_id' => 136,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            136 => 
            array (
                'subject_id' => 137,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            137 => 
            array (
                'subject_id' => 138,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            138 => 
            array (
                'subject_id' => 139,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            139 => 
            array (
                'subject_id' => 140,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            140 => 
            array (
                'subject_id' => 141,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            141 => 
            array (
                'subject_id' => 142,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            142 => 
            array (
                'subject_id' => 143,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            143 => 
            array (
                'subject_id' => 144,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            144 => 
            array (
                'subject_id' => 145,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            145 => 
            array (
                'subject_id' => 146,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            146 => 
            array (
                'subject_id' => 147,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            147 => 
            array (
                'subject_id' => 148,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            148 => 
            array (
                'subject_id' => 149,
                'name' => 'World History',
                'department' => 'History',
            ),
            149 => 
            array (
                'subject_id' => 150,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            150 => 
            array (
                'subject_id' => 151,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            151 => 
            array (
                'subject_id' => 152,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            152 => 
            array (
                'subject_id' => 153,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            153 => 
            array (
                'subject_id' => 154,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            154 => 
            array (
                'subject_id' => 155,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            155 => 
            array (
                'subject_id' => 156,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            156 => 
            array (
                'subject_id' => 157,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            157 => 
            array (
                'subject_id' => 158,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            158 => 
            array (
                'subject_id' => 159,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            159 => 
            array (
                'subject_id' => 160,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            160 => 
            array (
                'subject_id' => 161,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            161 => 
            array (
                'subject_id' => 162,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            162 => 
            array (
                'subject_id' => 163,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            163 => 
            array (
                'subject_id' => 164,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            164 => 
            array (
                'subject_id' => 165,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            165 => 
            array (
                'subject_id' => 166,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            166 => 
            array (
                'subject_id' => 167,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            167 => 
            array (
                'subject_id' => 168,
                'name' => 'Literature',
                'department' => 'English',
            ),
            168 => 
            array (
                'subject_id' => 169,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            169 => 
            array (
                'subject_id' => 170,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            170 => 
            array (
                'subject_id' => 171,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            171 => 
            array (
                'subject_id' => 172,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            172 => 
            array (
                'subject_id' => 173,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            173 => 
            array (
                'subject_id' => 174,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            174 => 
            array (
                'subject_id' => 175,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            175 => 
            array (
                'subject_id' => 176,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            176 => 
            array (
                'subject_id' => 177,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            177 => 
            array (
                'subject_id' => 178,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            178 => 
            array (
                'subject_id' => 179,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            179 => 
            array (
                'subject_id' => 180,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            180 => 
            array (
                'subject_id' => 181,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            181 => 
            array (
                'subject_id' => 182,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            182 => 
            array (
                'subject_id' => 183,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            183 => 
            array (
                'subject_id' => 184,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            184 => 
            array (
                'subject_id' => 185,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            185 => 
            array (
                'subject_id' => 186,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            186 => 
            array (
                'subject_id' => 187,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            187 => 
            array (
                'subject_id' => 188,
                'name' => 'World History',
                'department' => 'History',
            ),
            188 => 
            array (
                'subject_id' => 189,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            189 => 
            array (
                'subject_id' => 190,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            190 => 
            array (
                'subject_id' => 191,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            191 => 
            array (
                'subject_id' => 192,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            192 => 
            array (
                'subject_id' => 193,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            193 => 
            array (
                'subject_id' => 194,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            194 => 
            array (
                'subject_id' => 195,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            195 => 
            array (
                'subject_id' => 196,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            196 => 
            array (
                'subject_id' => 197,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            197 => 
            array (
                'subject_id' => 198,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            198 => 
            array (
                'subject_id' => 199,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            199 => 
            array (
                'subject_id' => 200,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            200 => 
            array (
                'subject_id' => 201,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            201 => 
            array (
                'subject_id' => 202,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            202 => 
            array (
                'subject_id' => 203,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            203 => 
            array (
                'subject_id' => 204,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            204 => 
            array (
                'subject_id' => 205,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            205 => 
            array (
                'subject_id' => 206,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            206 => 
            array (
                'subject_id' => 207,
                'name' => 'Literature',
                'department' => 'English',
            ),
            207 => 
            array (
                'subject_id' => 208,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            208 => 
            array (
                'subject_id' => 209,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            209 => 
            array (
                'subject_id' => 210,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            210 => 
            array (
                'subject_id' => 211,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            211 => 
            array (
                'subject_id' => 212,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            212 => 
            array (
                'subject_id' => 213,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            213 => 
            array (
                'subject_id' => 214,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            214 => 
            array (
                'subject_id' => 215,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            215 => 
            array (
                'subject_id' => 216,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            216 => 
            array (
                'subject_id' => 217,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            217 => 
            array (
                'subject_id' => 218,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            218 => 
            array (
                'subject_id' => 219,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            219 => 
            array (
                'subject_id' => 220,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            220 => 
            array (
                'subject_id' => 221,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            221 => 
            array (
                'subject_id' => 222,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            222 => 
            array (
                'subject_id' => 223,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            223 => 
            array (
                'subject_id' => 224,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            224 => 
            array (
                'subject_id' => 225,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            225 => 
            array (
                'subject_id' => 226,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            226 => 
            array (
                'subject_id' => 227,
                'name' => 'World History',
                'department' => 'History',
            ),
            227 => 
            array (
                'subject_id' => 228,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            228 => 
            array (
                'subject_id' => 229,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            229 => 
            array (
                'subject_id' => 230,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            230 => 
            array (
                'subject_id' => 231,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            231 => 
            array (
                'subject_id' => 232,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            232 => 
            array (
                'subject_id' => 233,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            233 => 
            array (
                'subject_id' => 234,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            234 => 
            array (
                'subject_id' => 235,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            235 => 
            array (
                'subject_id' => 236,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            236 => 
            array (
                'subject_id' => 237,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            237 => 
            array (
                'subject_id' => 238,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            238 => 
            array (
                'subject_id' => 239,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            239 => 
            array (
                'subject_id' => 240,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            240 => 
            array (
                'subject_id' => 241,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            241 => 
            array (
                'subject_id' => 242,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            242 => 
            array (
                'subject_id' => 243,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            243 => 
            array (
                'subject_id' => 244,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            244 => 
            array (
                'subject_id' => 245,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            245 => 
            array (
                'subject_id' => 246,
                'name' => 'Literature',
                'department' => 'English',
            ),
            246 => 
            array (
                'subject_id' => 247,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            247 => 
            array (
                'subject_id' => 248,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            248 => 
            array (
                'subject_id' => 249,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            249 => 
            array (
                'subject_id' => 250,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            250 => 
            array (
                'subject_id' => 251,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            251 => 
            array (
                'subject_id' => 252,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            252 => 
            array (
                'subject_id' => 253,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            253 => 
            array (
                'subject_id' => 254,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            254 => 
            array (
                'subject_id' => 255,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            255 => 
            array (
                'subject_id' => 256,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            256 => 
            array (
                'subject_id' => 257,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            257 => 
            array (
                'subject_id' => 258,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            258 => 
            array (
                'subject_id' => 259,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            259 => 
            array (
                'subject_id' => 260,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            260 => 
            array (
                'subject_id' => 261,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            261 => 
            array (
                'subject_id' => 262,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            262 => 
            array (
                'subject_id' => 263,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            263 => 
            array (
                'subject_id' => 264,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            264 => 
            array (
                'subject_id' => 265,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            265 => 
            array (
                'subject_id' => 266,
                'name' => 'World History',
                'department' => 'History',
            ),
            266 => 
            array (
                'subject_id' => 267,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            267 => 
            array (
                'subject_id' => 268,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            268 => 
            array (
                'subject_id' => 269,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            269 => 
            array (
                'subject_id' => 270,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            270 => 
            array (
                'subject_id' => 271,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            271 => 
            array (
                'subject_id' => 272,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            272 => 
            array (
                'subject_id' => 273,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            273 => 
            array (
                'subject_id' => 274,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            274 => 
            array (
                'subject_id' => 275,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            275 => 
            array (
                'subject_id' => 276,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            276 => 
            array (
                'subject_id' => 277,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            277 => 
            array (
                'subject_id' => 278,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            278 => 
            array (
                'subject_id' => 279,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            279 => 
            array (
                'subject_id' => 280,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            280 => 
            array (
                'subject_id' => 281,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            281 => 
            array (
                'subject_id' => 282,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            282 => 
            array (
                'subject_id' => 283,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            283 => 
            array (
                'subject_id' => 284,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            284 => 
            array (
                'subject_id' => 285,
                'name' => 'Literature',
                'department' => 'English',
            ),
            285 => 
            array (
                'subject_id' => 286,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            286 => 
            array (
                'subject_id' => 287,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            287 => 
            array (
                'subject_id' => 288,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            288 => 
            array (
                'subject_id' => 289,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            289 => 
            array (
                'subject_id' => 290,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            290 => 
            array (
                'subject_id' => 291,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            291 => 
            array (
                'subject_id' => 292,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            292 => 
            array (
                'subject_id' => 293,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            293 => 
            array (
                'subject_id' => 294,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            294 => 
            array (
                'subject_id' => 295,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            295 => 
            array (
                'subject_id' => 296,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            296 => 
            array (
                'subject_id' => 297,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            297 => 
            array (
                'subject_id' => 298,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            298 => 
            array (
                'subject_id' => 299,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            299 => 
            array (
                'subject_id' => 300,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            300 => 
            array (
                'subject_id' => 301,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            301 => 
            array (
                'subject_id' => 302,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            302 => 
            array (
                'subject_id' => 303,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            303 => 
            array (
                'subject_id' => 304,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            304 => 
            array (
                'subject_id' => 305,
                'name' => 'World History',
                'department' => 'History',
            ),
            305 => 
            array (
                'subject_id' => 306,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            306 => 
            array (
                'subject_id' => 307,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            307 => 
            array (
                'subject_id' => 308,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            308 => 
            array (
                'subject_id' => 309,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            309 => 
            array (
                'subject_id' => 310,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            310 => 
            array (
                'subject_id' => 311,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            311 => 
            array (
                'subject_id' => 312,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            312 => 
            array (
                'subject_id' => 313,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            313 => 
            array (
                'subject_id' => 314,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            314 => 
            array (
                'subject_id' => 315,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            315 => 
            array (
                'subject_id' => 316,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            316 => 
            array (
                'subject_id' => 317,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            317 => 
            array (
                'subject_id' => 318,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            318 => 
            array (
                'subject_id' => 319,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            319 => 
            array (
                'subject_id' => 320,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            320 => 
            array (
                'subject_id' => 321,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            321 => 
            array (
                'subject_id' => 322,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            322 => 
            array (
                'subject_id' => 323,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            323 => 
            array (
                'subject_id' => 324,
                'name' => 'Literature',
                'department' => 'English',
            ),
            324 => 
            array (
                'subject_id' => 325,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            325 => 
            array (
                'subject_id' => 326,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            326 => 
            array (
                'subject_id' => 327,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            327 => 
            array (
                'subject_id' => 328,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            328 => 
            array (
                'subject_id' => 329,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            329 => 
            array (
                'subject_id' => 330,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            330 => 
            array (
                'subject_id' => 331,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            331 => 
            array (
                'subject_id' => 332,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            332 => 
            array (
                'subject_id' => 333,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            333 => 
            array (
                'subject_id' => 334,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            334 => 
            array (
                'subject_id' => 335,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            335 => 
            array (
                'subject_id' => 336,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            336 => 
            array (
                'subject_id' => 337,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            337 => 
            array (
                'subject_id' => 338,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            338 => 
            array (
                'subject_id' => 339,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            339 => 
            array (
                'subject_id' => 340,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            340 => 
            array (
                'subject_id' => 341,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            341 => 
            array (
                'subject_id' => 342,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            342 => 
            array (
                'subject_id' => 343,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            343 => 
            array (
                'subject_id' => 344,
                'name' => 'World History',
                'department' => 'History',
            ),
            344 => 
            array (
                'subject_id' => 345,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            345 => 
            array (
                'subject_id' => 346,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            346 => 
            array (
                'subject_id' => 347,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            347 => 
            array (
                'subject_id' => 348,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            348 => 
            array (
                'subject_id' => 349,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            349 => 
            array (
                'subject_id' => 350,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            350 => 
            array (
                'subject_id' => 351,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            351 => 
            array (
                'subject_id' => 352,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            352 => 
            array (
                'subject_id' => 353,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            353 => 
            array (
                'subject_id' => 354,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            354 => 
            array (
                'subject_id' => 355,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            355 => 
            array (
                'subject_id' => 356,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            356 => 
            array (
                'subject_id' => 357,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            357 => 
            array (
                'subject_id' => 358,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            358 => 
            array (
                'subject_id' => 359,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            359 => 
            array (
                'subject_id' => 360,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            360 => 
            array (
                'subject_id' => 361,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
            361 => 
            array (
                'subject_id' => 362,
                'name' => 'Sining ng Komunikasyon',
                'department' => 'Filipino',
            ),
            362 => 
            array (
                'subject_id' => 363,
                'name' => 'Literature',
                'department' => 'English',
            ),
            363 => 
            array (
                'subject_id' => 364,
                'name' => 'Writing and Composition',
                'department' => 'English',
            ),
            364 => 
            array (
                'subject_id' => 365,
                'name' => 'Physical Education',
                'department' => 'MAPEH',
            ),
            365 => 
            array (
                'subject_id' => 366,
            'name' => 'Artificial Intelligence (AI) and Machine Learning (ML):',
                'department' => 'Computer',
            ),
            366 => 
            array (
                'subject_id' => 367,
                'name' => 'Grammar and Linguistics',
                'department' => 'English',
            ),
            367 => 
            array (
                'subject_id' => 368,
                'name' => 'Algorithms and Data Structures:',
                'department' => 'Computer',
            ),
            368 => 
            array (
                'subject_id' => 369,
                'name' => 'Geometry',
                'department' => 'Mathematics',
            ),
            369 => 
            array (
                'subject_id' => 370,
                'name' => 'Political Science',
                'department' => 'Social Science',
            ),
            370 => 
            array (
                'subject_id' => 371,
                'name' => 'Geology',
                'department' => 'Science',
            ),
            371 => 
            array (
                'subject_id' => 372,
                'name' => 'Physical Education and Health',
                'department' => 'MAPEH',
            ),
            372 => 
            array (
                'subject_id' => 373,
                'name' => 'Panitikan',
                'department' => 'Filipino',
            ),
            373 => 
            array (
                'subject_id' => 374,
                'name' => 'Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            374 => 
            array (
                'subject_id' => 375,
                'name' => 'History',
                'department' => 'Social Science',
            ),
            375 => 
            array (
                'subject_id' => 376,
                'name' => 'Komunikasyon at Pananaliksik',
                'department' => 'Filipino',
            ),
            376 => 
            array (
                'subject_id' => 377,
                'name' => 'Economics',
                'department' => 'Social Science',
            ),
            377 => 
            array (
                'subject_id' => 378,
                'name' => 'Chemistry',
                'department' => 'Science',
            ),
            378 => 
            array (
                'subject_id' => 379,
                'name' => 'Biology',
                'department' => 'Science',
            ),
            379 => 
            array (
                'subject_id' => 380,
                'name' => 'Creative Writing',
                'department' => 'English',
            ),
            380 => 
            array (
                'subject_id' => 381,
                'name' => 'Arts',
                'department' => 'MAPEH',
            ),
            381 => 
            array (
                'subject_id' => 382,
                'name' => 'Asian History and Civilization',
                'department' => 'History',
            ),
            382 => 
            array (
                'subject_id' => 383,
                'name' => 'World History',
                'department' => 'History',
            ),
            383 => 
            array (
                'subject_id' => 384,
            'name' => 'Database Management Systems (DBMS):',
                'department' => 'Computer',
            ),
            384 => 
            array (
                'subject_id' => 385,
                'name' => 'Statistics and Probability',
                'department' => 'Mathematics',
            ),
            385 => 
            array (
                'subject_id' => 386,
                'name' => 'Wika',
                'department' => 'Filipino',
            ),
            386 => 
            array (
                'subject_id' => 387,
                'name' => 'Philippine History',
                'department' => 'History',
            ),
            387 => 
            array (
                'subject_id' => 388,
                'name' => 'Number Theory',
                'department' => 'Mathematics',
            ),
            388 => 
            array (
                'subject_id' => 389,
                'name' => 'Psychology',
                'department' => 'Social Science',
            ),
            389 => 
            array (
                'subject_id' => 390,
                'name' => 'Algebra',
                'department' => 'Mathematics',
            ),
            390 => 
            array (
                'subject_id' => 391,
                'name' => 'Rhetoric and Communication',
                'department' => 'English',
            ),
            391 => 
            array (
                'subject_id' => 392,
                'name' => 'Music',
                'department' => 'MAPEH',
            ),
            392 => 
            array (
                'subject_id' => 393,
                'name' => 'Rizal',
                'department' => 'History',
            ),
            393 => 
            array (
                'subject_id' => 394,
                'name' => 'Operating Systems:',
                'department' => 'Computer',
            ),
            394 => 
            array (
                'subject_id' => 395,
                'name' => 'Sociology',
                'department' => 'Social Science',
            ),
            395 => 
            array (
                'subject_id' => 396,
                'name' => 'Physics',
                'department' => 'Science',
            ),
            396 => 
            array (
                'subject_id' => 397,
                'name' => 'Social Studies',
                'department' => 'History',
            ),
            397 => 
            array (
                'subject_id' => 398,
                'name' => 'Computer Networks:',
                'department' => 'Computer',
            ),
            398 => 
            array (
                'subject_id' => 399,
                'name' => 'Calculus',
                'department' => 'Mathematics',
            ),
            399 => 
            array (
                'subject_id' => 400,
                'name' => 'Astronomy',
                'department' => 'Science',
            ),
        ));
        
        
    }
}