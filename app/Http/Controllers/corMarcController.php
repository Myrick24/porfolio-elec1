<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class corMarcController extends Controller
{
    public function index(){
        $courseInfo = [
            [
                'courseCode' => 'ALM_IPT 101',
                'courseTitle' => 'Intergrated Programming and Technologies',
                'units' => '2/1',
                'room' => ['N/A','N/A','N/A','N/A'],
                'day' => ['M','T','TH','F'],
                'time' => ['08:00am - 09:00am', '02:30pm - 04:00pm', '08:00am - 09:30am', '01:00pm - 02:30pm'],
                'instructor' => 'RODOLFO RABORAR'
            ],
            [
                'courseCode' => 'ALM_ELEC1',
                'courseTitle' => 'Elective 1 (Web Systems and Technologies 2)',
                'units' => '2/1',
                'room' => ['N/A','N/A','N/A'],
                'day' => ['M,T','W','TH'],
                'time' => ['04:00pm - 05:00pm', '02:30pm - 04:00pm', '02:30pm - 04:00pm'],
                'instructor' => 'Instructor IT'
            ],
            [
                'courseCode' => 'ALM_IAS 101',
                'courseTitle' => 'Information Assurance and Security 1',
                'units' => '2/1',
                'room' => ['N/A','COMLAB 2','N/A'],
                'day' => ['M,T','TH', 'F'],
                'time' => [ '10:00am - 11:30am', '09:00am - 10:00am', '08:00am - 09:00am'],
                'instructor' => 'Instructor IT'
            ],
            [
                'courseCode' => 'ALM_GE 8',
                'courseTitle' => 'Ethics',
                'units' => '3',
                'room' => ['N/A'],
                'day' => ['T,TH'],
                'time' => ['01:00pm - 02:30pm'],
                'instructor' => 'JEROME ABELLERA'
            ],
            [
                'courseCode' => 'ALM_CAP 101',
                'courseTitle' => 'Capstone Project 1',
                'units' => '3',
                'room' => ['N/A', 'N/A'],
                'day' => ['M', 'W'],
                'time' => ['01:00pm - 02:30pm', '09:00am - 10:30am'],
                'instructor' => 'CARLO GENSTER CAMPOSAGRADO'
            ],
            [
                'courseCode' => 'ALM_TECH 101',
                'courseTitle' => 'Technoprenuership',
                'units' => '3',
                'room' => ['N/A'],
                'day' => ['M,F'],
                'time' => ['02:30pm - 04:00pm'],
                'instructor' => 'Instructor IT'
            ],
            [
                'courseCode' => 'ALM_IC 1',
                'courseTitle' => 'Personality Development',
                'units' => '3',
                'room' => ['N/A','N/A'],
                'day' => ['T', 'W,F'],
                'time' => ['08:00am - 09:00am','04:00pm - 05:00pm'],
                'instructor' => 'DANIELLE MADERO'
            ],
            [
                'courseCode' => 'ALM_ELEC 2',
                'courseTitle' => 'Elective 2 (Mobile Application Development 2)',
                'units' => '2/1',
                'room' => ['N/A','N/A','N/A','N/A'],
                'day' => ['W','TH','TH','F'],
                'time' => ['01:00pm - 02:30pm', '11:00am - 12:30pm', '04:00pm - 05:00pm', '11:00am - 12:00pm'],
                'instructor' => 'Instructor IT'
            ]

        ];

        return view('elec1.corMarc',
        [
            'courseInfo' => $courseInfo
        ]
        );
    }
}
