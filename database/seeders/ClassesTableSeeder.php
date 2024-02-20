<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('classes')->delete();
        
        \DB::table('classes')->insert(array (
            0 => 
            array (
                'class_id' => 1,
                'room' => '203',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 306,
                'faculty_id' => 306,
            ),
            1 => 
            array (
                'class_id' => 2,
                'room' => '401',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 280,
                'faculty_id' => 280,
            ),
            2 => 
            array (
                'class_id' => 3,
                'room' => '303',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 256,
                'faculty_id' => 256,
            ),
            3 => 
            array (
                'class_id' => 4,
                'room' => '402',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 368,
                'faculty_id' => 368,
            ),
            4 => 
            array (
                'class_id' => 5,
                'room' => '603',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 265,
                'faculty_id' => 265,
            ),
            5 => 
            array (
                'class_id' => 6,
                'room' => '503',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 32,
                'faculty_id' => 32,
            ),
            6 => 
            array (
                'class_id' => 7,
                'room' => '503',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 332,
                'faculty_id' => 332,
            ),
            7 => 
            array (
                'class_id' => 8,
                'room' => '302',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 365,
                'faculty_id' => 365,
            ),
            8 => 
            array (
                'class_id' => 9,
                'room' => '301',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 197,
                'faculty_id' => 197,
            ),
            9 => 
            array (
                'class_id' => 10,
                'room' => '302',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 255,
                'faculty_id' => 255,
            ),
            10 => 
            array (
                'class_id' => 11,
                'room' => '303',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 89,
                'faculty_id' => 89,
            ),
            11 => 
            array (
                'class_id' => 12,
                'room' => '601',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 206,
                'faculty_id' => 206,
            ),
            12 => 
            array (
                'class_id' => 13,
                'room' => '601',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 183,
                'faculty_id' => 183,
            ),
            13 => 
            array (
                'class_id' => 14,
                'room' => '101',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 301,
                'faculty_id' => 301,
            ),
            14 => 
            array (
                'class_id' => 15,
                'room' => '502',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 354,
                'faculty_id' => 354,
            ),
            15 => 
            array (
                'class_id' => 16,
                'room' => '403',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 52,
                'faculty_id' => 52,
            ),
            16 => 
            array (
                'class_id' => 17,
                'room' => '302',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 105,
                'faculty_id' => 105,
            ),
            17 => 
            array (
                'class_id' => 18,
                'room' => '701',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 399,
                'faculty_id' => 399,
            ),
            18 => 
            array (
                'class_id' => 19,
                'room' => '701',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 19,
                'faculty_id' => 19,
            ),
            19 => 
            array (
                'class_id' => 20,
                'room' => '502',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 244,
                'faculty_id' => 244,
            ),
            20 => 
            array (
                'class_id' => 21,
                'room' => '202',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 5,
                'faculty_id' => 5,
            ),
            21 => 
            array (
                'class_id' => 22,
                'room' => '603',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 138,
                'faculty_id' => 138,
            ),
            22 => 
            array (
                'class_id' => 23,
                'room' => '402',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 91,
                'faculty_id' => 91,
            ),
            23 => 
            array (
                'class_id' => 24,
                'room' => '201',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 4,
                'faculty_id' => 4,
            ),
            24 => 
            array (
                'class_id' => 25,
                'room' => '502',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 331,
                'faculty_id' => 331,
            ),
            25 => 
            array (
                'class_id' => 26,
                'room' => '202',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 45,
                'faculty_id' => 45,
            ),
            26 => 
            array (
                'class_id' => 27,
                'room' => '501',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 13,
                'faculty_id' => 13,
            ),
            27 => 
            array (
                'class_id' => 28,
                'room' => '601',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 316,
                'faculty_id' => 316,
            ),
            28 => 
            array (
                'class_id' => 29,
                'room' => '303',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 279,
                'faculty_id' => 279,
            ),
            29 => 
            array (
                'class_id' => 30,
                'room' => '503',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 245,
                'faculty_id' => 245,
            ),
            30 => 
            array (
                'class_id' => 31,
                'room' => '602',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 334,
                'faculty_id' => 334,
            ),
            31 => 
            array (
                'class_id' => 32,
                'room' => '502',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 204,
                'faculty_id' => 204,
            ),
            32 => 
            array (
                'class_id' => 33,
                'room' => '203',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 6,
                'faculty_id' => 6,
            ),
            33 => 
            array (
                'class_id' => 34,
                'room' => '403',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 312,
                'faculty_id' => 312,
            ),
            34 => 
            array (
                'class_id' => 35,
                'room' => '501',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 260,
                'faculty_id' => 260,
            ),
            35 => 
            array (
                'class_id' => 36,
                'room' => '502',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 261,
                'faculty_id' => 261,
            ),
            36 => 
            array (
                'class_id' => 37,
                'room' => '703',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 228,
                'faculty_id' => 228,
            ),
            37 => 
            array (
                'class_id' => 38,
                'room' => '802',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 120,
                'faculty_id' => 120,
            ),
            38 => 
            array (
                'class_id' => 39,
                'room' => '603',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 75,
                'faculty_id' => 75,
            ),
            39 => 
            array (
                'class_id' => 40,
                'room' => '303',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 349,
                'faculty_id' => 349,
            ),
            40 => 
            array (
                'class_id' => 41,
                'room' => '401',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 50,
                'faculty_id' => 50,
            ),
            41 => 
            array (
                'class_id' => 42,
                'room' => '303',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 389,
                'faculty_id' => 389,
            ),
            42 => 
            array (
                'class_id' => 43,
                'room' => '501',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 300,
                'faculty_id' => 300,
            ),
            43 => 
            array (
                'class_id' => 44,
                'room' => '201',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 321,
                'faculty_id' => 321,
            ),
            44 => 
            array (
                'class_id' => 45,
                'room' => '302',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 388,
                'faculty_id' => 388,
            ),
            45 => 
            array (
                'class_id' => 46,
                'room' => '702',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 267,
                'faculty_id' => 267,
            ),
            46 => 
            array (
                'class_id' => 47,
                'room' => '701',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 116,
                'faculty_id' => 116,
            ),
            47 => 
            array (
                'class_id' => 48,
                'room' => '301',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 24,
                'faculty_id' => 24,
            ),
            48 => 
            array (
                'class_id' => 49,
                'room' => '102',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 382,
                'faculty_id' => 382,
            ),
            49 => 
            array (
                'class_id' => 50,
                'room' => '102',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 232,
                'faculty_id' => 232,
            ),
            50 => 
            array (
                'class_id' => 51,
                'room' => '501',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 150,
                'faculty_id' => 150,
            ),
            51 => 
            array (
                'class_id' => 52,
                'room' => '201',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 291,
                'faculty_id' => 291,
            ),
            52 => 
            array (
                'class_id' => 53,
                'room' => '602',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 224,
                'faculty_id' => 224,
            ),
            53 => 
            array (
                'class_id' => 54,
                'room' => '702',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 377,
                'faculty_id' => 377,
            ),
            54 => 
            array (
                'class_id' => 55,
                'room' => '701',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 266,
                'faculty_id' => 266,
            ),
            55 => 
            array (
                'class_id' => 56,
                'room' => '401',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 147,
                'faculty_id' => 147,
            ),
            56 => 
            array (
                'class_id' => 57,
                'room' => '401',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 130,
                'faculty_id' => 130,
            ),
            57 => 
            array (
                'class_id' => 58,
                'room' => '203',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 173,
                'faculty_id' => 173,
            ),
            58 => 
            array (
                'class_id' => 59,
                'room' => '401',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 177,
                'faculty_id' => 177,
            ),
            59 => 
            array (
                'class_id' => 60,
                'room' => '201',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 141,
                'faculty_id' => 141,
            ),
            60 => 
            array (
                'class_id' => 61,
                'room' => '502',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 371,
                'faculty_id' => 371,
            ),
            61 => 
            array (
                'class_id' => 62,
                'room' => '403',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 109,
                'faculty_id' => 109,
            ),
            62 => 
            array (
                'class_id' => 63,
                'room' => '602',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 247,
                'faculty_id' => 247,
            ),
            63 => 
            array (
                'class_id' => 64,
                'room' => '502',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 394,
                'faculty_id' => 394,
            ),
            64 => 
            array (
                'class_id' => 65,
                'room' => '101',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 191,
                'faculty_id' => 191,
            ),
            65 => 
            array (
                'class_id' => 66,
                'room' => '203',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 386,
                'faculty_id' => 386,
            ),
            66 => 
            array (
                'class_id' => 67,
                'room' => '503',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 355,
                'faculty_id' => 355,
            ),
            67 => 
            array (
                'class_id' => 68,
                'room' => '402',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 281,
                'faculty_id' => 281,
            ),
            68 => 
            array (
                'class_id' => 69,
                'room' => '301',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 277,
                'faculty_id' => 277,
            ),
            69 => 
            array (
                'class_id' => 70,
                'room' => '403',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 219,
                'faculty_id' => 219,
            ),
            70 => 
            array (
                'class_id' => 71,
                'room' => '102',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 272,
                'faculty_id' => 272,
            ),
            71 => 
            array (
                'class_id' => 72,
                'room' => '801',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 119,
                'faculty_id' => 119,
            ),
            72 => 
            array (
                'class_id' => 73,
                'room' => '102',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 42,
                'faculty_id' => 42,
            ),
            73 => 
            array (
                'class_id' => 74,
                'room' => '302',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 308,
                'faculty_id' => 308,
            ),
            74 => 
            array (
                'class_id' => 75,
                'room' => '301',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 47,
                'faculty_id' => 47,
            ),
            75 => 
            array (
                'class_id' => 76,
                'room' => '102',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 2,
                'faculty_id' => 2,
            ),
            76 => 
            array (
                'class_id' => 77,
                'room' => '702',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 117,
                'faculty_id' => 117,
            ),
            77 => 
            array (
                'class_id' => 78,
                'room' => '502',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 31,
                'faculty_id' => 31,
            ),
            78 => 
            array (
                'class_id' => 79,
                'room' => '202',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 362,
                'faculty_id' => 362,
            ),
            79 => 
            array (
                'class_id' => 80,
                'room' => '102',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 82,
                'faculty_id' => 82,
            ),
            80 => 
            array (
                'class_id' => 81,
                'room' => '602',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 374,
                'faculty_id' => 374,
            ),
            81 => 
            array (
                'class_id' => 82,
                'room' => '601',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 223,
                'faculty_id' => 223,
            ),
            82 => 
            array (
                'class_id' => 83,
                'room' => '501',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 180,
                'faculty_id' => 180,
            ),
            83 => 
            array (
                'class_id' => 84,
                'room' => '602',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 317,
                'faculty_id' => 317,
            ),
            84 => 
            array (
                'class_id' => 85,
                'room' => '403',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 179,
                'faculty_id' => 179,
            ),
            85 => 
            array (
                'class_id' => 86,
                'room' => '201',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 154,
                'faculty_id' => 154,
            ),
            86 => 
            array (
                'class_id' => 87,
                'room' => '601',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 33,
                'faculty_id' => 33,
            ),
            87 => 
            array (
                'class_id' => 88,
                'room' => '501',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 93,
                'faculty_id' => 93,
            ),
            88 => 
            array (
                'class_id' => 89,
                'room' => '603',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 115,
                'faculty_id' => 115,
            ),
            89 => 
            array (
                'class_id' => 90,
                'room' => '101',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 151,
                'faculty_id' => 151,
            ),
            90 => 
            array (
                'class_id' => 91,
                'room' => '103',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 303,
                'faculty_id' => 303,
            ),
            91 => 
            array (
                'class_id' => 92,
                'room' => '501',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 353,
                'faculty_id' => 353,
            ),
            92 => 
            array (
                'class_id' => 93,
                'room' => '201',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 171,
                'faculty_id' => 171,
            ),
            93 => 
            array (
                'class_id' => 94,
                'room' => '201',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 101,
                'faculty_id' => 101,
            ),
            94 => 
            array (
                'class_id' => 95,
                'room' => '801',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 269,
                'faculty_id' => 269,
            ),
            95 => 
            array (
                'class_id' => 96,
                'room' => '203',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 46,
                'faculty_id' => 46,
            ),
            96 => 
            array (
                'class_id' => 97,
                'room' => '103',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 193,
                'faculty_id' => 193,
            ),
            97 => 
            array (
                'class_id' => 98,
                'room' => '203',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 63,
                'faculty_id' => 63,
            ),
            98 => 
            array (
                'class_id' => 99,
                'room' => '602',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 167,
                'faculty_id' => 167,
            ),
            99 => 
            array (
                'class_id' => 100,
                'room' => '501',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 203,
                'faculty_id' => 203,
            ),
            100 => 
            array (
                'class_id' => 101,
                'room' => '503',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 95,
                'faculty_id' => 95,
            ),
            101 => 
            array (
                'class_id' => 102,
                'room' => '502',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 111,
                'faculty_id' => 111,
            ),
            102 => 
            array (
                'class_id' => 103,
                'room' => '402',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 11,
                'faculty_id' => 11,
            ),
            103 => 
            array (
                'class_id' => 104,
                'room' => '503',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 395,
                'faculty_id' => 395,
            ),
            104 => 
            array (
                'class_id' => 105,
                'room' => '602',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 137,
                'faculty_id' => 137,
            ),
            105 => 
            array (
                'class_id' => 106,
                'room' => '201',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 124,
                'faculty_id' => 124,
            ),
            106 => 
            array (
                'class_id' => 107,
                'room' => '601',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 136,
                'faculty_id' => 136,
            ),
            107 => 
            array (
                'class_id' => 108,
                'room' => '601',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 373,
                'faculty_id' => 373,
            ),
            108 => 
            array (
                'class_id' => 109,
                'room' => '802',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 380,
                'faculty_id' => 380,
            ),
            109 => 
            array (
                'class_id' => 110,
                'room' => '203',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 213,
                'faculty_id' => 213,
            ),
            110 => 
            array (
                'class_id' => 111,
                'room' => '301',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 127,
                'faculty_id' => 127,
            ),
            111 => 
            array (
                'class_id' => 112,
                'room' => '303',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 326,
                'faculty_id' => 326,
            ),
            112 => 
            array (
                'class_id' => 113,
                'room' => '201',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 274,
                'faculty_id' => 274,
            ),
            113 => 
            array (
                'class_id' => 114,
                'room' => '503',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 135,
                'faculty_id' => 135,
            ),
            114 => 
            array (
                'class_id' => 115,
                'room' => '601',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 246,
                'faculty_id' => 246,
            ),
            115 => 
            array (
                'class_id' => 116,
                'room' => '202',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 252,
                'faculty_id' => 252,
            ),
            116 => 
            array (
                'class_id' => 117,
                'room' => '603',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 358,
                'faculty_id' => 358,
            ),
            117 => 
            array (
                'class_id' => 118,
                'room' => '702',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 100,
                'faculty_id' => 100,
            ),
            118 => 
            array (
                'class_id' => 119,
                'room' => '502',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 164,
                'faculty_id' => 164,
            ),
            119 => 
            array (
                'class_id' => 120,
                'room' => '203',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 23,
                'faculty_id' => 23,
            ),
            120 => 
            array (
                'class_id' => 121,
                'room' => '301',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 254,
                'faculty_id' => 254,
            ),
            121 => 
            array (
                'class_id' => 122,
                'room' => '301',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 364,
                'faculty_id' => 364,
            ),
            122 => 
            array (
                'class_id' => 123,
                'room' => '103',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 83,
                'faculty_id' => 83,
            ),
            123 => 
            array (
                'class_id' => 124,
                'room' => '601',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 286,
                'faculty_id' => 286,
            ),
            124 => 
            array (
                'class_id' => 125,
                'room' => '202',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 292,
                'faculty_id' => 292,
            ),
            125 => 
            array (
                'class_id' => 126,
                'room' => '603',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 248,
                'faculty_id' => 248,
            ),
            126 => 
            array (
                'class_id' => 127,
                'room' => '501',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 70,
                'faculty_id' => 70,
            ),
            127 => 
            array (
                'class_id' => 128,
                'room' => '602',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 207,
                'faculty_id' => 207,
            ),
            128 => 
            array (
                'class_id' => 129,
                'room' => '202',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 345,
                'faculty_id' => 345,
            ),
            129 => 
            array (
                'class_id' => 130,
                'room' => '301',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 104,
                'faculty_id' => 104,
            ),
            130 => 
            array (
                'class_id' => 131,
                'room' => '302',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 145,
                'faculty_id' => 145,
            ),
            131 => 
            array (
                'class_id' => 132,
                'room' => '603',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 288,
                'faculty_id' => 288,
            ),
            132 => 
            array (
                'class_id' => 133,
                'room' => '703',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 378,
                'faculty_id' => 378,
            ),
            133 => 
            array (
                'class_id' => 134,
                'room' => '102',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 152,
                'faculty_id' => 152,
            ),
            134 => 
            array (
                'class_id' => 135,
                'room' => '401',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 200,
                'faculty_id' => 200,
            ),
            135 => 
            array (
                'class_id' => 136,
                'room' => '201',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 384,
                'faculty_id' => 384,
            ),
            136 => 
            array (
                'class_id' => 137,
                'room' => '403',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 12,
                'faculty_id' => 12,
            ),
            137 => 
            array (
                'class_id' => 138,
                'room' => '603',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 335,
                'faculty_id' => 335,
            ),
            138 => 
            array (
                'class_id' => 139,
                'room' => '302',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 158,
                'faculty_id' => 158,
            ),
            139 => 
            array (
                'class_id' => 140,
                'room' => '202',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 322,
                'faculty_id' => 322,
            ),
            140 => 
            array (
                'class_id' => 141,
                'room' => '503',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 262,
                'faculty_id' => 262,
            ),
            141 => 
            array (
                'class_id' => 142,
                'room' => '401',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 67,
                'faculty_id' => 67,
            ),
            142 => 
            array (
                'class_id' => 143,
                'room' => '403',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 202,
                'faculty_id' => 202,
            ),
            143 => 
            array (
                'class_id' => 144,
                'room' => '301',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 237,
                'faculty_id' => 237,
            ),
            144 => 
            array (
                'class_id' => 145,
                'room' => '501',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 163,
                'faculty_id' => 163,
            ),
            145 => 
            array (
                'class_id' => 146,
                'room' => '301',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 294,
                'faculty_id' => 294,
            ),
            146 => 
            array (
                'class_id' => 147,
                'room' => '101',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 381,
                'faculty_id' => 381,
            ),
            147 => 
            array (
                'class_id' => 148,
                'room' => '702',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 320,
                'faculty_id' => 320,
            ),
            148 => 
            array (
                'class_id' => 149,
                'room' => '403',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 369,
                'faculty_id' => 369,
            ),
            149 => 
            array (
                'class_id' => 150,
                'room' => '501',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 110,
                'faculty_id' => 110,
            ),
            150 => 
            array (
                'class_id' => 151,
                'room' => '103',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 273,
                'faculty_id' => 273,
            ),
            151 => 
            array (
                'class_id' => 152,
                'room' => '303',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 199,
                'faculty_id' => 199,
            ),
            152 => 
            array (
                'class_id' => 153,
                'room' => '202',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 62,
                'faculty_id' => 62,
            ),
            153 => 
            array (
                'class_id' => 154,
                'room' => '402',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 351,
                'faculty_id' => 351,
            ),
            154 => 
            array (
                'class_id' => 155,
                'room' => '102',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 192,
                'faculty_id' => 192,
            ),
            155 => 
            array (
                'class_id' => 156,
                'room' => '601',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 263,
                'faculty_id' => 263,
            ),
            156 => 
            array (
                'class_id' => 157,
                'room' => '501',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 393,
                'faculty_id' => 393,
            ),
            157 => 
            array (
                'class_id' => 158,
                'room' => '203',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 143,
                'faculty_id' => 143,
            ),
            158 => 
            array (
                'class_id' => 159,
                'room' => '101',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 1,
                'faculty_id' => 1,
            ),
            159 => 
            array (
                'class_id' => 160,
                'room' => '403',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 242,
                'faculty_id' => 242,
            ),
            160 => 
            array (
                'class_id' => 161,
                'room' => '602',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 17,
                'faculty_id' => 17,
            ),
            161 => 
            array (
                'class_id' => 162,
                'room' => '101',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 121,
                'faculty_id' => 121,
            ),
            162 => 
            array (
                'class_id' => 163,
                'room' => '202',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 385,
                'faculty_id' => 385,
            ),
            163 => 
            array (
                'class_id' => 164,
                'room' => '301',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 157,
                'faculty_id' => 157,
            ),
            164 => 
            array (
                'class_id' => 165,
                'room' => '503',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 205,
                'faculty_id' => 205,
            ),
            165 => 
            array (
                'class_id' => 166,
                'room' => '502',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 284,
                'faculty_id' => 284,
            ),
            166 => 
            array (
                'class_id' => 167,
                'room' => '301',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 174,
                'faculty_id' => 174,
            ),
            167 => 
            array (
                'class_id' => 168,
                'room' => '101',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 341,
                'faculty_id' => 341,
            ),
            168 => 
            array (
                'class_id' => 169,
                'room' => '402',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 218,
                'faculty_id' => 218,
            ),
            169 => 
            array (
                'class_id' => 170,
                'room' => '402',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 148,
                'faculty_id' => 148,
            ),
            170 => 
            array (
                'class_id' => 171,
                'room' => '302',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 65,
                'faculty_id' => 65,
            ),
            171 => 
            array (
                'class_id' => 172,
                'room' => '601',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 356,
                'faculty_id' => 356,
            ),
            172 => 
            array (
                'class_id' => 173,
                'room' => '501',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 313,
                'faculty_id' => 313,
            ),
            173 => 
            array (
                'class_id' => 174,
                'room' => '702',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 210,
                'faculty_id' => 210,
            ),
            174 => 
            array (
                'class_id' => 175,
                'room' => '703',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 268,
                'faculty_id' => 268,
            ),
            175 => 
            array (
                'class_id' => 176,
                'room' => '701',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 289,
                'faculty_id' => 289,
            ),
            176 => 
            array (
                'class_id' => 177,
                'room' => '401',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 327,
                'faculty_id' => 327,
            ),
            177 => 
            array (
                'class_id' => 178,
                'room' => '602',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 397,
                'faculty_id' => 397,
            ),
            178 => 
            array (
                'class_id' => 179,
                'room' => '301',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 307,
                'faculty_id' => 307,
            ),
            179 => 
            array (
                'class_id' => 180,
                'room' => '702',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 187,
                'faculty_id' => 187,
            ),
            180 => 
            array (
                'class_id' => 181,
                'room' => '702',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 140,
                'faculty_id' => 140,
            ),
            181 => 
            array (
                'class_id' => 182,
                'room' => '702',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 337,
                'faculty_id' => 337,
            ),
            182 => 
            array (
                'class_id' => 183,
                'room' => '802',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 230,
                'faculty_id' => 230,
            ),
            183 => 
            array (
                'class_id' => 184,
                'room' => '203',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 156,
                'faculty_id' => 156,
            ),
            184 => 
            array (
                'class_id' => 185,
                'room' => '402',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 108,
                'faculty_id' => 108,
            ),
            185 => 
            array (
                'class_id' => 186,
                'room' => '403',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 352,
                'faculty_id' => 352,
            ),
            186 => 
            array (
                'class_id' => 187,
                'room' => '401',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 10,
                'faculty_id' => 10,
            ),
            187 => 
            array (
                'class_id' => 188,
                'room' => '602',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 97,
                'faculty_id' => 97,
            ),
            188 => 
            array (
                'class_id' => 189,
                'room' => '403',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 149,
                'faculty_id' => 149,
            ),
            189 => 
            array (
                'class_id' => 190,
                'room' => '701',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 319,
                'faculty_id' => 319,
            ),
            190 => 
            array (
                'class_id' => 191,
                'room' => '103',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 153,
                'faculty_id' => 153,
            ),
            191 => 
            array (
                'class_id' => 192,
                'room' => '701',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 376,
                'faculty_id' => 376,
            ),
            192 => 
            array (
                'class_id' => 193,
                'room' => '102',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 302,
                'faculty_id' => 302,
            ),
            193 => 
            array (
                'class_id' => 194,
                'room' => '203',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 293,
                'faculty_id' => 293,
            ),
            194 => 
            array (
                'class_id' => 195,
                'room' => '701',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 209,
                'faculty_id' => 209,
            ),
            195 => 
            array (
                'class_id' => 196,
                'room' => '401',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 257,
                'faculty_id' => 257,
            ),
            196 => 
            array (
                'class_id' => 197,
                'room' => '401',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 217,
                'faculty_id' => 217,
            ),
            197 => 
            array (
                'class_id' => 198,
                'room' => '603',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 225,
                'faculty_id' => 225,
            ),
            198 => 
            array (
                'class_id' => 199,
                'room' => '302',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 325,
                'faculty_id' => 325,
            ),
            199 => 
            array (
                'class_id' => 200,
                'room' => '603',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 208,
                'faculty_id' => 208,
            ),
            200 => 
            array (
                'class_id' => 201,
                'room' => '101',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 271,
                'faculty_id' => 271,
            ),
            201 => 
            array (
                'class_id' => 202,
                'room' => '301',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 347,
                'faculty_id' => 347,
            ),
            202 => 
            array (
                'class_id' => 203,
                'room' => '601',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 113,
                'faculty_id' => 113,
            ),
            203 => 
            array (
                'class_id' => 204,
                'room' => '603',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 375,
                'faculty_id' => 375,
            ),
            204 => 
            array (
                'class_id' => 205,
                'room' => '801',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 39,
                'faculty_id' => 39,
            ),
            205 => 
            array (
                'class_id' => 206,
                'room' => '702',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 77,
                'faculty_id' => 77,
            ),
            206 => 
            array (
                'class_id' => 207,
                'room' => '502',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 134,
                'faculty_id' => 134,
            ),
            207 => 
            array (
                'class_id' => 208,
                'room' => '603',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 318,
                'faculty_id' => 318,
            ),
            208 => 
            array (
                'class_id' => 209,
                'room' => '603',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 98,
                'faculty_id' => 98,
            ),
            209 => 
            array (
                'class_id' => 210,
                'room' => '301',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 7,
                'faculty_id' => 7,
            ),
            210 => 
            array (
                'class_id' => 211,
                'room' => '303',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 9,
                'faculty_id' => 9,
            ),
            211 => 
            array (
                'class_id' => 212,
                'room' => '202',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 102,
                'faculty_id' => 102,
            ),
            212 => 
            array (
                'class_id' => 213,
                'room' => '201',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 304,
                'faculty_id' => 304,
            ),
            213 => 
            array (
                'class_id' => 214,
                'room' => '203',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 363,
                'faculty_id' => 363,
            ),
            214 => 
            array (
                'class_id' => 215,
                'room' => '802',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 190,
                'faculty_id' => 190,
            ),
            215 => 
            array (
                'class_id' => 216,
                'room' => '203',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 253,
                'faculty_id' => 253,
            ),
            216 => 
            array (
                'class_id' => 217,
                'room' => '401',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 297,
                'faculty_id' => 297,
            ),
            217 => 
            array (
                'class_id' => 218,
                'room' => '301',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 214,
                'faculty_id' => 214,
            ),
            218 => 
            array (
                'class_id' => 219,
                'room' => '403',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 29,
                'faculty_id' => 29,
            ),
            219 => 
            array (
                'class_id' => 220,
                'room' => '802',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 80,
                'faculty_id' => 80,
            ),
            220 => 
            array (
                'class_id' => 221,
                'room' => '402',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 298,
                'faculty_id' => 298,
            ),
            221 => 
            array (
                'class_id' => 222,
                'room' => '201',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 21,
                'faculty_id' => 21,
            ),
            222 => 
            array (
                'class_id' => 223,
                'room' => '502',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 181,
                'faculty_id' => 181,
            ),
            223 => 
            array (
                'class_id' => 224,
                'room' => '401',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 367,
                'faculty_id' => 367,
            ),
            224 => 
            array (
                'class_id' => 225,
                'room' => '402',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 201,
                'faculty_id' => 201,
            ),
            225 => 
            array (
                'class_id' => 226,
                'room' => '701',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 139,
                'faculty_id' => 139,
            ),
            226 => 
            array (
                'class_id' => 227,
                'room' => '701',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 36,
                'faculty_id' => 36,
            ),
            227 => 
            array (
                'class_id' => 228,
                'room' => '601',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 16,
                'faculty_id' => 16,
            ),
            228 => 
            array (
                'class_id' => 229,
                'room' => '802',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 40,
                'faculty_id' => 40,
            ),
            229 => 
            array (
                'class_id' => 230,
                'room' => '401',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 160,
                'faculty_id' => 160,
            ),
            230 => 
            array (
                'class_id' => 231,
                'room' => '303',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 129,
                'faculty_id' => 129,
            ),
            231 => 
            array (
                'class_id' => 232,
                'room' => '103',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 3,
                'faculty_id' => 3,
            ),
            232 => 
            array (
                'class_id' => 233,
                'room' => '503',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 372,
                'faculty_id' => 372,
            ),
            233 => 
            array (
                'class_id' => 234,
                'room' => '602',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 264,
                'faculty_id' => 264,
            ),
            234 => 
            array (
                'class_id' => 235,
                'room' => '701',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 169,
                'faculty_id' => 169,
            ),
            235 => 
            array (
                'class_id' => 236,
                'room' => '202',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 155,
                'faculty_id' => 155,
            ),
            236 => 
            array (
                'class_id' => 237,
                'room' => '801',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 79,
                'faculty_id' => 79,
            ),
            237 => 
            array (
                'class_id' => 238,
                'room' => '401',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 27,
                'faculty_id' => 27,
            ),
            238 => 
            array (
                'class_id' => 239,
                'room' => '201',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 361,
                'faculty_id' => 361,
            ),
            239 => 
            array (
                'class_id' => 240,
                'room' => '403',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 299,
                'faculty_id' => 299,
            ),
            240 => 
            array (
                'class_id' => 241,
                'room' => '302',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 215,
                'faculty_id' => 215,
            ),
            241 => 
            array (
                'class_id' => 242,
                'room' => '702',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 37,
                'faculty_id' => 37,
            ),
            242 => 
            array (
                'class_id' => 243,
                'room' => '501',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 330,
                'faculty_id' => 330,
            ),
            243 => 
            array (
                'class_id' => 244,
                'room' => '603',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 168,
                'faculty_id' => 168,
            ),
            244 => 
            array (
                'class_id' => 245,
                'room' => '601',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 396,
                'faculty_id' => 396,
            ),
            245 => 
            array (
                'class_id' => 246,
                'room' => '402',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 28,
                'faculty_id' => 28,
            ),
            246 => 
            array (
                'class_id' => 247,
                'room' => '701',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 226,
                'faculty_id' => 226,
            ),
            247 => 
            array (
                'class_id' => 248,
                'room' => '802',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 340,
                'faculty_id' => 340,
            ),
            248 => 
            array (
                'class_id' => 249,
                'room' => '201',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 344,
                'faculty_id' => 344,
            ),
            249 => 
            array (
                'class_id' => 250,
                'room' => '301',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 144,
                'faculty_id' => 144,
            ),
            250 => 
            array (
                'class_id' => 251,
                'room' => '303',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 49,
                'faculty_id' => 49,
            ),
            251 => 
            array (
                'class_id' => 252,
                'room' => '502',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 94,
                'faculty_id' => 94,
            ),
            252 => 
            array (
                'class_id' => 253,
                'room' => '501',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 283,
                'faculty_id' => 283,
            ),
            253 => 
            array (
                'class_id' => 254,
                'room' => '501',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 30,
                'faculty_id' => 30,
            ),
            254 => 
            array (
                'class_id' => 255,
                'room' => '503',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 165,
                'faculty_id' => 165,
            ),
            255 => 
            array (
                'class_id' => 256,
                'room' => '402',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 311,
                'faculty_id' => 311,
            ),
            256 => 
            array (
                'class_id' => 257,
                'room' => '303',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 66,
                'faculty_id' => 66,
            ),
            257 => 
            array (
                'class_id' => 258,
                'room' => '303',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 26,
                'faculty_id' => 26,
            ),
            258 => 
            array (
                'class_id' => 259,
                'room' => '101',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 81,
                'faculty_id' => 81,
            ),
            259 => 
            array (
                'class_id' => 260,
                'room' => '603',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 185,
                'faculty_id' => 185,
            ),
            260 => 
            array (
                'class_id' => 261,
                'room' => '202',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 305,
                'faculty_id' => 305,
            ),
            261 => 
            array (
                'class_id' => 262,
                'room' => '302',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 175,
                'faculty_id' => 175,
            ),
            262 => 
            array (
                'class_id' => 263,
                'room' => '202',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 142,
                'faculty_id' => 142,
            ),
            263 => 
            array (
                'class_id' => 264,
                'room' => '203',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 103,
                'faculty_id' => 103,
            ),
            264 => 
            array (
                'class_id' => 265,
                'room' => '502',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 71,
                'faculty_id' => 71,
            ),
            265 => 
            array (
                'class_id' => 266,
                'room' => '602',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 114,
                'faculty_id' => 114,
            ),
            266 => 
            array (
                'class_id' => 267,
                'room' => '202',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 235,
                'faculty_id' => 235,
            ),
            267 => 
            array (
                'class_id' => 268,
                'room' => '403',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 392,
                'faculty_id' => 392,
            ),
            268 => 
            array (
                'class_id' => 269,
                'room' => '602',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 74,
                'faculty_id' => 74,
            ),
            269 => 
            array (
                'class_id' => 270,
                'room' => '701',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 336,
                'faculty_id' => 336,
            ),
            270 => 
            array (
                'class_id' => 271,
                'room' => '503',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 112,
                'faculty_id' => 112,
            ),
            271 => 
            array (
                'class_id' => 272,
                'room' => '402',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 178,
                'faculty_id' => 178,
            ),
            272 => 
            array (
                'class_id' => 273,
                'room' => '403',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 92,
                'faculty_id' => 92,
            ),
            273 => 
            array (
                'class_id' => 274,
                'room' => '203',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 323,
                'faculty_id' => 323,
            ),
            274 => 
            array (
                'class_id' => 275,
                'room' => '302',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 8,
                'faculty_id' => 8,
            ),
            275 => 
            array (
                'class_id' => 276,
                'room' => '403',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 329,
                'faculty_id' => 329,
            ),
            276 => 
            array (
                'class_id' => 277,
                'room' => '401',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 310,
                'faculty_id' => 310,
            ),
            277 => 
            array (
                'class_id' => 278,
                'room' => '603',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 18,
                'faculty_id' => 18,
            ),
            278 => 
            array (
                'class_id' => 279,
                'room' => '203',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 126,
                'faculty_id' => 126,
            ),
            279 => 
            array (
                'class_id' => 280,
                'room' => '201',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 234,
                'faculty_id' => 234,
            ),
            280 => 
            array (
                'class_id' => 281,
                'room' => '603',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 35,
                'faculty_id' => 35,
            ),
            281 => 
            array (
                'class_id' => 282,
                'room' => '401',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 90,
                'faculty_id' => 90,
            ),
            282 => 
            array (
                'class_id' => 283,
                'room' => '103',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 343,
                'faculty_id' => 343,
            ),
            283 => 
            array (
                'class_id' => 284,
                'room' => '701',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 99,
                'faculty_id' => 99,
            ),
            284 => 
            array (
                'class_id' => 285,
                'room' => '801',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 189,
                'faculty_id' => 189,
            ),
            285 => 
            array (
                'class_id' => 286,
                'room' => '303',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 309,
                'faculty_id' => 309,
            ),
            286 => 
            array (
                'class_id' => 287,
                'room' => '602',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 57,
                'faculty_id' => 57,
            ),
            287 => 
            array (
                'class_id' => 288,
                'room' => '702',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 360,
                'faculty_id' => 360,
            ),
            288 => 
            array (
                'class_id' => 289,
                'room' => '501',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 53,
                'faculty_id' => 53,
            ),
            289 => 
            array (
                'class_id' => 290,
                'room' => '703',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 78,
                'faculty_id' => 78,
            ),
            290 => 
            array (
                'class_id' => 291,
                'room' => '403',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 259,
                'faculty_id' => 259,
            ),
            291 => 
            array (
                'class_id' => 292,
                'room' => '503',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 15,
                'faculty_id' => 15,
            ),
            292 => 
            array (
                'class_id' => 293,
                'room' => '501',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 370,
                'faculty_id' => 370,
            ),
            293 => 
            array (
                'class_id' => 294,
                'room' => '402',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 51,
                'faculty_id' => 51,
            ),
            294 => 
            array (
                'class_id' => 295,
                'room' => '203',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 276,
                'faculty_id' => 276,
            ),
            295 => 
            array (
                'class_id' => 296,
                'room' => '601',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 73,
                'faculty_id' => 73,
            ),
            296 => 
            array (
                'class_id' => 297,
                'room' => '201',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 211,
                'faculty_id' => 211,
            ),
            297 => 
            array (
                'class_id' => 298,
                'room' => '403',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 282,
                'faculty_id' => 282,
            ),
            298 => 
            array (
                'class_id' => 299,
                'room' => '602',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 287,
                'faculty_id' => 287,
            ),
            299 => 
            array (
                'class_id' => 300,
                'room' => '302',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 198,
                'faculty_id' => 198,
            ),
            300 => 
            array (
                'class_id' => 301,
                'room' => '402',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 241,
                'faculty_id' => 241,
            ),
            301 => 
            array (
                'class_id' => 302,
                'room' => '801',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 229,
                'faculty_id' => 229,
            ),
            302 => 
            array (
                'class_id' => 303,
                'room' => '503',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 72,
                'faculty_id' => 72,
            ),
            303 => 
            array (
                'class_id' => 304,
                'room' => '301',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 64,
                'faculty_id' => 64,
            ),
            304 => 
            array (
                'class_id' => 305,
                'room' => '201',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 61,
                'faculty_id' => 61,
            ),
            305 => 
            array (
                'class_id' => 306,
                'room' => '502',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 54,
                'faculty_id' => 54,
            ),
            306 => 
            array (
                'class_id' => 307,
                'room' => '601',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 166,
                'faculty_id' => 166,
            ),
            307 => 
            array (
                'class_id' => 308,
                'room' => '402',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 131,
                'faculty_id' => 131,
            ),
            308 => 
            array (
                'class_id' => 309,
                'room' => '702',
                'schedule' => 'MWF 11:00 am - 12:00 pm',
                'subject_id' => 400,
                'faculty_id' => 400,
            ),
            309 => 
            array (
                'class_id' => 310,
                'room' => '603',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 58,
                'faculty_id' => 58,
            ),
            310 => 
            array (
                'class_id' => 311,
                'room' => '201',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 84,
                'faculty_id' => 84,
            ),
            311 => 
            array (
                'class_id' => 312,
                'room' => '801',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 339,
                'faculty_id' => 339,
            ),
            312 => 
            array (
                'class_id' => 313,
                'room' => '202',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 85,
                'faculty_id' => 85,
            ),
            313 => 
            array (
                'class_id' => 314,
                'room' => '503',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 285,
                'faculty_id' => 285,
            ),
            314 => 
            array (
                'class_id' => 315,
                'room' => '103',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 233,
                'faculty_id' => 233,
            ),
            315 => 
            array (
                'class_id' => 316,
                'room' => '801',
                'schedule' => 'MWF 5:00 pm - 6:00 pm',
                'subject_id' => 379,
                'faculty_id' => 379,
            ),
            316 => 
            array (
                'class_id' => 317,
                'room' => '601',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 333,
                'faculty_id' => 333,
            ),
            317 => 
            array (
                'class_id' => 318,
                'room' => '702',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 170,
                'faculty_id' => 170,
            ),
            318 => 
            array (
                'class_id' => 319,
                'room' => '403',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 132,
                'faculty_id' => 132,
            ),
            319 => 
            array (
                'class_id' => 320,
                'room' => '702',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 290,
                'faculty_id' => 290,
            ),
            320 => 
            array (
                'class_id' => 321,
                'room' => '403',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 162,
                'faculty_id' => 162,
            ),
            321 => 
            array (
                'class_id' => 322,
                'room' => '701',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 76,
                'faculty_id' => 76,
            ),
            322 => 
            array (
                'class_id' => 323,
                'room' => '302',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 295,
                'faculty_id' => 295,
            ),
            323 => 
            array (
                'class_id' => 324,
                'room' => '802',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 270,
                'faculty_id' => 270,
            ),
            324 => 
            array (
                'class_id' => 325,
                'room' => '602',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 184,
                'faculty_id' => 184,
            ),
            325 => 
            array (
                'class_id' => 326,
                'room' => '303',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 296,
                'faculty_id' => 296,
            ),
            326 => 
            array (
                'class_id' => 327,
                'room' => '402',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 161,
                'faculty_id' => 161,
            ),
            327 => 
            array (
                'class_id' => 328,
                'room' => '302',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 238,
                'faculty_id' => 238,
            ),
            328 => 
            array (
                'class_id' => 329,
                'room' => '402',
                'schedule' => 'MWF 8:00 am - 9:00 am',
                'subject_id' => 391,
                'faculty_id' => 391,
            ),
            329 => 
            array (
                'class_id' => 330,
                'room' => '503',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 55,
                'faculty_id' => 55,
            ),
            330 => 
            array (
                'class_id' => 331,
                'room' => '102',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 342,
                'faculty_id' => 342,
            ),
            331 => 
            array (
                'class_id' => 332,
                'room' => '502',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 221,
                'faculty_id' => 221,
            ),
            332 => 
            array (
                'class_id' => 333,
                'room' => '402',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 328,
                'faculty_id' => 328,
            ),
            333 => 
            array (
                'class_id' => 334,
                'room' => '102',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 122,
                'faculty_id' => 122,
            ),
            334 => 
            array (
                'class_id' => 335,
                'room' => '203',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 196,
                'faculty_id' => 196,
            ),
            335 => 
            array (
                'class_id' => 336,
                'room' => '703',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 338,
                'faculty_id' => 338,
            ),
            336 => 
            array (
                'class_id' => 337,
                'room' => '302',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 348,
                'faculty_id' => 348,
            ),
            337 => 
            array (
                'class_id' => 338,
                'room' => '302',
                'schedule' => 'MWF 8:00 pm - 9:00 pm',
                'subject_id' => 25,
                'faculty_id' => 25,
            ),
            338 => 
            array (
                'class_id' => 339,
                'room' => '303',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 176,
                'faculty_id' => 176,
            ),
            339 => 
            array (
                'class_id' => 340,
                'room' => '303',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 366,
                'faculty_id' => 366,
            ),
            340 => 
            array (
                'class_id' => 341,
                'room' => '602',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 357,
                'faculty_id' => 357,
            ),
            341 => 
            array (
                'class_id' => 342,
                'room' => '702',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 227,
                'faculty_id' => 227,
            ),
            342 => 
            array (
                'class_id' => 343,
                'room' => '201',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 194,
                'faculty_id' => 194,
            ),
            343 => 
            array (
                'class_id' => 344,
                'room' => '702',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 20,
                'faculty_id' => 20,
            ),
            344 => 
            array (
                'class_id' => 345,
                'room' => '301',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 87,
                'faculty_id' => 87,
            ),
            345 => 
            array (
                'class_id' => 346,
                'room' => '202',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 212,
                'faculty_id' => 212,
            ),
            346 => 
            array (
                'class_id' => 347,
                'room' => '303',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 146,
                'faculty_id' => 146,
            ),
            347 => 
            array (
                'class_id' => 348,
                'room' => '201',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 251,
                'faculty_id' => 251,
            ),
            348 => 
            array (
                'class_id' => 349,
                'room' => '301',
                'schedule' => 'MWF 9:00 pm - 10:00 pm',
                'subject_id' => 387,
                'faculty_id' => 387,
            ),
            349 => 
            array (
                'class_id' => 350,
                'room' => '503',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 315,
                'faculty_id' => 315,
            ),
            350 => 
            array (
                'class_id' => 351,
                'room' => '601',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 96,
                'faculty_id' => 96,
            ),
            351 => 
            array (
                'class_id' => 352,
                'room' => '401',
                'schedule' => 'MWF 4:00 pm - 5:00 pm',
                'subject_id' => 107,
                'faculty_id' => 107,
            ),
            352 => 
            array (
                'class_id' => 353,
                'room' => '101',
                'schedule' => 'MWF 1:00 pm - 2:00 pm',
                'subject_id' => 41,
                'faculty_id' => 41,
            ),
            353 => 
            array (
                'class_id' => 354,
                'room' => '402',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 68,
                'faculty_id' => 68,
            ),
            354 => 
            array (
                'class_id' => 355,
                'room' => '501',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 243,
                'faculty_id' => 243,
            ),
            355 => 
            array (
                'class_id' => 356,
                'room' => '203',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 236,
                'faculty_id' => 236,
            ),
            356 => 
            array (
                'class_id' => 357,
                'room' => '703',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 118,
                'faculty_id' => 118,
            ),
            357 => 
            array (
                'class_id' => 358,
                'room' => '501',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 133,
                'faculty_id' => 133,
            ),
            358 => 
            array (
                'class_id' => 359,
                'room' => '602',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 34,
                'faculty_id' => 34,
            ),
            359 => 
            array (
                'class_id' => 360,
                'room' => '503',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 182,
                'faculty_id' => 182,
            ),
            360 => 
            array (
                'class_id' => 361,
                'room' => '701',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 359,
                'faculty_id' => 359,
            ),
            361 => 
            array (
                'class_id' => 362,
                'room' => '502',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 314,
                'faculty_id' => 314,
            ),
            362 => 
            array (
                'class_id' => 363,
                'room' => '701',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 249,
                'faculty_id' => 249,
            ),
            363 => 
            array (
                'class_id' => 364,
                'room' => '303',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 159,
                'faculty_id' => 159,
            ),
            364 => 
            array (
                'class_id' => 365,
                'room' => '203',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 346,
                'faculty_id' => 346,
            ),
            365 => 
            array (
                'class_id' => 366,
                'room' => '103',
                'schedule' => 'MWF 9:00 am - 10:00 am',
                'subject_id' => 123,
                'faculty_id' => 123,
            ),
            366 => 
            array (
                'class_id' => 367,
                'room' => '702',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 60,
                'faculty_id' => 60,
            ),
            367 => 
            array (
                'class_id' => 368,
                'room' => '401',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 350,
                'faculty_id' => 350,
            ),
            368 => 
            array (
                'class_id' => 369,
                'room' => '601',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 56,
                'faculty_id' => 56,
            ),
            369 => 
            array (
                'class_id' => 370,
                'room' => '103',
                'schedule' => 'MWF 2:00 pm - 3:00 pm',
                'subject_id' => 43,
                'faculty_id' => 43,
            ),
            370 => 
            array (
                'class_id' => 371,
                'room' => '302',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 88,
                'faculty_id' => 88,
            ),
            371 => 
            array (
                'class_id' => 372,
                'room' => '201',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 44,
                'faculty_id' => 44,
            ),
            372 => 
            array (
                'class_id' => 373,
                'room' => '703',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 188,
                'faculty_id' => 188,
            ),
            373 => 
            array (
                'class_id' => 374,
                'room' => '703',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 38,
                'faculty_id' => 38,
            ),
            374 => 
            array (
                'class_id' => 375,
                'room' => '302',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 278,
                'faculty_id' => 278,
            ),
            375 => 
            array (
                'class_id' => 376,
                'room' => '401',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 390,
                'faculty_id' => 390,
            ),
            376 => 
            array (
                'class_id' => 377,
                'room' => '203',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 86,
                'faculty_id' => 86,
            ),
            377 => 
            array (
                'class_id' => 378,
                'room' => '301',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 324,
                'faculty_id' => 324,
            ),
            378 => 
            array (
                'class_id' => 379,
                'room' => '303',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 239,
                'faculty_id' => 239,
            ),
            379 => 
            array (
                'class_id' => 380,
                'room' => '402',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 258,
                'faculty_id' => 258,
            ),
            380 => 
            array (
                'class_id' => 381,
                'room' => '302',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 128,
                'faculty_id' => 128,
            ),
            381 => 
            array (
                'class_id' => 382,
                'room' => '401',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 240,
                'faculty_id' => 240,
            ),
            382 => 
            array (
                'class_id' => 383,
                'room' => '502',
                'schedule' => 'TTHS 5:00 pm - 6:30 pm',
                'subject_id' => 14,
                'faculty_id' => 14,
            ),
            383 => 
            array (
                'class_id' => 384,
                'room' => '501',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 220,
                'faculty_id' => 220,
            ),
            384 => 
            array (
                'class_id' => 385,
                'room' => '202',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 22,
                'faculty_id' => 22,
            ),
            385 => 
            array (
                'class_id' => 386,
                'room' => '202',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 172,
                'faculty_id' => 172,
            ),
            386 => 
            array (
                'class_id' => 387,
                'room' => '202',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 275,
                'faculty_id' => 275,
            ),
            387 => 
            array (
                'class_id' => 388,
                'room' => '202',
                'schedule' => 'MWF 3:00 pm - 4:00 pm',
                'subject_id' => 195,
                'faculty_id' => 195,
            ),
            388 => 
            array (
                'class_id' => 389,
                'room' => '103',
                'schedule' => 'MWF 7:00 pm - 8:00 pm',
                'subject_id' => 383,
                'faculty_id' => 383,
            ),
            389 => 
            array (
                'class_id' => 390,
                'room' => '503',
                'schedule' => 'TTHS 3:30 pm - 5:00 pm',
                'subject_id' => 222,
                'faculty_id' => 222,
            ),
            390 => 
            array (
                'class_id' => 391,
                'room' => '403',
                'schedule' => 'MWF 12:00 pm - 1:00 pm',
                'subject_id' => 69,
                'faculty_id' => 69,
            ),
            391 => 
            array (
                'class_id' => 392,
                'room' => '303',
                'schedule' => 'TTHS 8:00 am - 9:30 am',
                'subject_id' => 106,
                'faculty_id' => 106,
            ),
            392 => 
            array (
                'class_id' => 393,
                'room' => '303',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 216,
                'faculty_id' => 216,
            ),
            393 => 
            array (
                'class_id' => 394,
                'room' => '701',
                'schedule' => 'TTHS 11:00 am - 12:30 pm',
                'subject_id' => 186,
                'faculty_id' => 186,
            ),
            394 => 
            array (
                'class_id' => 395,
                'room' => '302',
                'schedule' => 'TTHS 9:30 am - 11:00 am',
                'subject_id' => 48,
                'faculty_id' => 48,
            ),
            395 => 
            array (
                'class_id' => 396,
                'room' => '702',
                'schedule' => 'TTHS 2:00 pm - 3:30 pm',
                'subject_id' => 250,
                'faculty_id' => 250,
            ),
            396 => 
            array (
                'class_id' => 397,
                'room' => '202',
                'schedule' => 'MWF 10:00 am - 11:00 am',
                'subject_id' => 125,
                'faculty_id' => 125,
            ),
            397 => 
            array (
                'class_id' => 398,
                'room' => '701',
                'schedule' => 'MWF 10:00 pm - 11:00 pm',
                'subject_id' => 59,
                'faculty_id' => 59,
            ),
            398 => 
            array (
                'class_id' => 399,
                'room' => '101',
                'schedule' => 'MWF 6:00 pm - 7:00 pm',
                'subject_id' => 231,
                'faculty_id' => 231,
            ),
            399 => 
            array (
                'class_id' => 400,
                'room' => '603',
                'schedule' => 'TTHS 12:30 pm - 2:00 pm',
                'subject_id' => 398,
                'faculty_id' => 398,
            ),
        ));
        
        
    }
}