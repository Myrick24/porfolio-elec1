<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gradeMarcController extends Controller
{
    public function index() {

        $firstYearFirstSem = [
    ["grade" => "1.75", "completion" => "", "code" => "ALM_CC 101", "description" => "Introduction to Computing", "units" => "3.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_CC 102", "description" => "Fundamentals of Programming", "units" => "3.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_GE 5", "description" => "Contemporary World", "units" => "3.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.25", "completion" => "", "code" => "ALM_GE 6", "description" => "Science Technology and Society", "units" => "3.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_GE 7", "description" => "Mathematics in the Modern World", "units" => "3.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_NSTP 1", "description" => "CWTS 1/ ROTC 1", "units" => "3.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_PE 1", "description" => "Movement Enhancement", "units" => "2.00", "term" => "1S of 2022", "prerequisite" => "", "remarks" => "Passed"]

        ];

$firstYearSecondSem = [
    ["grade" => "1.50", "completion" => "", "code" => "ALM_CC 103", "description" => "Intermediate Programming", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_CC 101", "description" => "Computer Organization", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_GE 1", "description" => "Understanding the Self and Personality Development", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_GE 2", "description" => "Readings in Philippine History", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_GE 3", "description" => "Art Appreciation", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_GE 3", "description" => "Reading Visual Arts", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_MS 101", "description" => "Discrete Mathematics", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_NSTP 2", "description" => "CWTS 2 / ROTC 2", "units" => "3.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_PE 2", "description" => "Physical Exercise", "units" => "2.00", "term" => "2S of 2022", "prerequisite" => "", "remarks" => "Passed"],
];

$secondYearFirstSem = [
    ["grade" => "2.00", "completion" => "", "code" => "ALM_CC 104", "description" => "Data Structures and Algorithm", "units" => "3.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_GE 4", "description" => "Purposive Communication", "units" => "3.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_GEE 1", "description" => "Living in the IT Era", "units" => "3.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_GEE 4", "description" => "Global Citizenship", "units" => "3.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_HCI 101", "description" => "Human Computer Interaction", "units" => "3.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_OOP 101", "description" => "Object-Oriented Programming", "units" => "3.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_PE 3", "description" => "Physical Activity Towards Health and Fitness 3", "units" => "2.00", "term" => "1S of 2023", "prerequisite" => "", "remarks" => "Passed"],
];

$secondYearSecondSem = [
    ["grade" => "NG", "completion" => "", "code" => "ALM_CC 105", "description" => "Information Management 1 (Fundamentals of Database)", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_GE 9", "description" => "The Life and Works of Rizal", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "2.00", "completion" => "", "code" => "ALM_HCI 102", "description" => "Human Computer Interaction 2", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_MT 101", "description" => "Multimedia Technologies", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_NET 101", "description" => "Networking 1 (Fundamentals of Networking)", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "", "completion" => "", "code" => "ALM_PE 4", "description" => "Physical Activity Towards Health and Fitness 4", "units" => "2.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => ""],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_SAD 101", "description" => "System Analysis and Design", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_WD 101", "description" => "Web Development 1", "units" => "3.00", "term" => "2S of 2023", "prerequisite" => "", "remarks" => "Subject Taken"],
];

$thirdYearFirstSem = [
    ["grade" => "1.75", "completion" => "", "code" => "ALM_CC 106", "description" => "Application Development and Emerging Technologies", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_GEE 2", "description" => "The Entrepreneurial Mind", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_IM 102", "description" => "Information Management 2 (Advance Database System)", "units" => "3.00", "term" => "SM of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.25", "completion" => "", "code" => "ALM_MD 101", "description" => "Mobile Application Development 1", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_MS 102", "description" => "Quantitative Methods", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_NET 102", "description" => "Networking 2 (Advance Networking)", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.75", "completion" => "", "code" => "ALM_OS 101", "description" => "Operating Systems and Application", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_SP 101", "description" => "Social and Professional Issues", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
    ["grade" => "1.50", "completion" => "", "code" => "ALM_WS 101", "description" => "Web System and Technologies 1", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => "Passed"],
];

$thirdYearSecondSem = [
    ["grade" => "NG", "completion" => "", "code" => "ALM_CAP 101", "description" => "Capstone Project 1", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_ELEC 1", "description" => "Elective 1 (Web Systems and Technologies 2)", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_ELEC 2", "description" => "Elective 2 (Mobile Application Development 2)", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_GE 8", "description" => "Ethics", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_JAS 101", "description" => "Information Assurance and Security 1", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_IC 1", "description" => "Personality Development", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_IPT 101", "description" => "Integrated Programming and Technologies", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
    ["grade" => "NG", "completion" => "", "code" => "ALM_TECH 101", "description" => "Technopreneurship", "units" => "3.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => "Subject Taken"],
];


$fourthYearFirstSem = [
    ["grade" => "", "completion" => "", "code" => "ALM_CAP 102", "description" => "Capstone Project 2", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => ""],
    ["grade" => "", "completion" => "", "code" => "ALM_ELEC 3", "description" => "Elective 3 (Special Topics on Web and Mobile 1)", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => ""],
    ["grade" => "", "completion" => "", "code" => "ALM_ELEC 4", "description" => "Elective 4 (Special Topics on Web and Mobile 2)", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => ""],
    ["grade" => "", "completion" => "", "code" => "ALM_IAS 102", "description" => "Information Assurance and Security 2", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => ""],
    ["grade" => "", "completion" => "", "code" => "ALM_SA 101", "description" => "System Administration and Maintenance", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => ""],
    ["grade" => "", "completion" => "", "code" => "ALM_SIA 101", "description" => "System Integration and Architecture", "units" => "3.00", "term" => "1S of 2024", "prerequisite" => "", "remarks" => ""]
];

$fourthYearSecondSem = [
    ["grade" => "", "completion" => "", "code" => "ALM_INTERN 101", "description" => "Internship/OJT/Practicum (at least 486 hours)", "units" => "6.00", "term" => "2S of 2024", "prerequisite" => "", "remarks" => ""]
];







        return view('elec1.gradeMarc', [
            'firstYearFirstSem' => $firstYearFirstSem,
            'firstYearSecondSem' => $firstYearSecondSem,
            'secondYearFirstSem' => $secondYearFirstSem,
            'secondYearSecondSem' => $secondYearSecondSem,
            'thirdYearFirstSem' => $thirdYearFirstSem,
            'thirdYearSecondSem' => $thirdYearSecondSem,
            'fourthYearFirstSem' => $fourthYearFirstSem,
            'fourthYearSecondSem' => $fourthYearSecondSem

        ]);



    }
}
