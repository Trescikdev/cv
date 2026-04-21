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
        'more_info_webadmin' => 'A small company based in Žilina that provides website development and administration to various businesses. Stack consists mainly of HTML, CSS, PHP and Javascript. I have learned much about how different frameworks work and communication with the client here. I am working on small basic tasks and trying to advance to the next level by discovering how the system works as a whole in a professional environment.',
        'more_info_uni' => 'I am currently in my second year of studies in Brno. While my degree primarily focuses on programming and algorithms, we cover a broad spectrum of IT fields. My current academic priorities are my internship/practical training and my bachelor\'s thesis. Through rigorous coursework and constant deadlines, I have acquired the majority of my programming skills. After completing my Bachelor\'s degree, I plan to pursue a Master\'s degree at the same faculty.',
        'more_info_floorball' => 'Alongside my long-term involvement with FBC Grasshoppers, I decided to contribute to the club as a coach. I worked with children aged 5-12, focusing on floorball as well as various athletic activities such as gymnastics and basketball. My role was to develop their quick decision-making on the court and foster a love for sports from an early age. While I found the work deeply fulfilling and meaningful, I eventually had to step down to focus on my high school studies, as balancing both became too demanding.',
        'more_info_highschool' => 'After completing my Maturita exams in Informatics and Mathematics, I graduated from the 8-year Gymnasium on Varšavská cesta in Žilina. Despite the school\'s focus on languages, the quality of education in Mathematics exceeded my expectations and prepared me thoroughly for university. It also gave me the core English skills that allowed me to become self-taught through online media. Consistently ranked as one of the top 10 secondary schools in the country during my time there, it instilled in me a versatile academic background that remains incredibly useful in my daily life.'
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
        'more_info_webadmin'=> 'Malá firma so sídlom v Žiline, ktorá poskytuje vývoj a správu webových stránok pre rôzne podniky. Tech stack pozostáva hlavne z HTML, CSS, PHP a JavaScriptu. Naučil som sa tu veľa o fungovaní rôznych frameworkov a o komunikácii s klientom. Pracujem na menších, základných úlohách a snažím sa posunúť na vyššiu úroveň tým, že spoznávam, ako systém funguje ako celok v profesionálnom prostredí.',
        'more_info_uni' => 'Aktuálne som v druhom ročníku štúdia v Brne. Najväčšie zameranie môjho odboru je programovanie a algoritmizácia, no zaoberáme sa aj ostatnými odvetviami IT. Moje momentálne najväčšie akademické priority sú prax a bakalárska práca na ktorých pracujem. Na škole som sa naučil väčšinu programovacích schopností, ktoré mám vďaka neustálym úlohám a deadlineom. Po skončení bakalára mám v pláne pokračovať na mojej fakulte v magisterskom štúdiu.',
        'more_info_floorball' => 'Popri mojom dlhoročnom pôsobení v FBC Grasshoppers som sa rozhodol zapojiť do fungovania klubu ako tréner. Učil som deti vo veku 5-12 rokov a to hlavne flórbal no aj rôzne iné športové aktivity ako gymnastika alebo basketbal. Mojou úlohou bolo rozvíjať ich rýchle myslenie pri hre a lásku pre šport v čo najnižšom veku. Práca ma bavila a videl som v nej zmysel, bol by som pokračoval no vyžadovala si odo mňa príliš veľa energie čo som popri strednej škole nestíhal.',
        'more_info_highschool' => '8 ročné gymnázium na Varšavskej ceste v Žiline som vyštudoval po úspešnej maturite z Informatiky a Matematiky. Škola ma pripravila na vysokoškolskú matematiku lepšie ako som čakal keďže je hlavne zameraná na jazyky. Položila silné základy pre moje ovládanie angličtiny, na ktoré som vďaka internetu a médiám staval samostatne. V čase môjho štúdia išlo o top 10 gymnázium na SK a verím, že to bola aj pravda. Priniesla mi všeobecné vzdelanie, ktoré sa je v každodennom živote na nezaplatenie.'
        ]
];

$texts = $translations[$lang];
?>
