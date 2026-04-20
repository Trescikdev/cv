<?php
session_start();

// Check if a language is set in the URL, otherwise check session, default to English
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en';
}

$translations = [
    'en' => [
        'title' => 'Samuel Šútora CV',
        'summary' => 'Professional Summary',
        'experience' => 'Work Experience',
        'skills' => 'Technical Skills',
        'contact' => 'Contact Me',
        'present' => 'present',
        'website_maintenance' => 'website maintenance',
        'occasional_php_development' => 'occasional PHP development',
        'more_info' => 'more info v',
        'education' => 'Education',
        'links' => 'Important links',
        'about_me' => 'About me',
        'study_programme' => 'Programming and app development',
        'degree' => ' (Bachelor\'s degree)',
        'last_updated' => 'last updated: ',
        'high_school_summary' => 'Main focus: languages, mathematics, IT',
        'job_title_1' => 'Youth floorball coach',
        'job_summary_1' => 'Coaching of children (5-12) - floorball and related sports activities',
        'english' => 'English - C1',
        'hobbies_title' => 'Hobbies and free time',
        'about_me_desc' => 'I am a 21 year old CS student looking for na internship
                            or a part time job. I am keen on meeting new people, 
                            which comes naturally to me thanks to my flexibility
                            and friendly nature. I am very comfortable working in a
                            team and communication is a priority for me. Hoping to 
                            become a productive developer by the time I finish my studies.',
        'hobbies_desc' => 'Every day, I try to find time for sports, such as floorball, 
                            basketball, running, or working out. I enjoy quizzes and puzzles,
                            as well as board or computer games. However, my biggest passion is
                            traveling, especially through Nordic countries. I also love listening
                            to good music or watching a well-made movie or series.',
        'residence' => 'Žilina, Slovakia & Brno, Czechia',
        'more_info_title' => 'Project Details',
        'more_info_content' => 'Here is some additional information about my work at Hulman.sk...',
        'more_info_webadmin' => 'A small company based in Žilina that provides website development and administration to various businesses. Stack consists mainly of HTML, CSS, PHP and Javascript. I have learned much about how different frameworks work and communication with the client here. I am working on small basic tasks and trying to advance to the next level by discovering how the system works as a whole in a professional environment.'

    ],
    'sk' => [
        'title' => 'Samuel Šútora CV',
        'summary' => 'Profesijný profil',
        'experience' => 'Pracovné skúsenosti',
        'skills' => 'Technické zručnosti',
        'contact' => 'Kontaktujte ma',
        'present' => 'Súčasnosť',
        'website_maintenance' => 'údržba webstránok',
        'occasional_php_development' => 'Občasný vývoj v PHP',
        'more_info' => 'viac info v',
        'education' => 'Vzdelanie',
        'links' => 'dôležité odkazy & kontakt',
        'about_me' => 'O mne',
        'study_programme' => 'Programovanie a vývoj aplikácií',
        'degree' => ' (Bakalársky titul)',
        'last_updated' => 'naposledy upravené: ',
        'high_school_summary' => 'Hlavné zameranie: jazyky, matematika, IT',
        'job_title_1' => 'Tréner detí',
        'job_summary_1' => 'Tréner detí (5-12) - flórbal a s tým spojené športové aktivity',
        'english' => 'Angličtina - C1',
        'hobbies_title' => 'Voľnočasové aktivity',
        'about_me_desc' => 'Som 21-ročný študent informatiky, ktorý si hľadá stáž alebo
                            prácu na čiastočný úväzok. Rád spoznávam nových ľudí, čo mi 
                            vďaka mojej flexibilite a priateľskej povahe ide prirodzene.
                            Veľmi dobre sa mi pracuje v tíme a komunikácia je pre mňa 
                            prioritou. Verím, že do konca štúdia sa zo mňa stane produktívny
                            vývojár.',
        'hobbies_desc' => 'Každý deň sa snažím nájsť si chvíľu na šport ako napríklad flórbal, basketbal, behanie či posilovanie. Bavia ma kvízy a hádanky alebo stolné či počítačové hry. Moja najväčšia záľuba je však cestovanie, hlavne po severských krajinách. Vždy si rád pustím dobrú hudbu alebo pozriem podarený film/seriál.',
        'residence' => 'Žilina/Brno',
        'more_info_title' => 'Podrobnosti o projekte',
        'more_info_content' => 'Tu sú ďalšie informácie o mojej práci v Hulman.sk...',
        'more_info_webadmin'=> 'Malá firma so sídlom v Žiline, ktorá poskytuje vývoj a správu webových stránok pre rôzne podniky. Tech stack pozostáva hlavne z HTML, CSS, PHP a JavaScriptu. Naučil som sa tu veľa o fungovaní rôznych frameworkov a o komunikácii s klientom. Pracujem na menších, základných úlohách a snažím sa posunúť na vyššiu úroveň tým, že spoznávam, ako systém funguje ako celok v profesionálnom prostredí.'
        ]
];

// Define a shorthand for the current language
$texts = $translations[$lang];
?>
