<?php

$db = 
[
    //اول عنصر بالمصفوفه 
    'about_me' => 
    [
        'name' => 'Mohammed',
        'age' => 25,
        'title' => 'My Profile',
        'occupation' => 'Software and Back-end ',
        'city' => 'Abyan',
        'country' => 'Yemen',
        'experience' => '2+ years',
        'description' => 'I am passionate about software development, back-end development, and I love learning new technologies. I am also a freelance web developer and have worked on various projects.'
    ],

    // ثاني عنصر بالمصفوفة
    'skills' => 
    [
        'first_skill' => 
        [
            'name'=> 'HTML',
            'percentage' => '90%',
            'description' =>'I have mastered 90% of HTML, including the core structure and advanced elements. Now, I\'ll focus on completing the rest by improving accessibility, optimizing performance, exploring HTML5 APIs, and implementing SEO techniques.'
        ],
        'second_skill' => 
        [
            'name'=> 'CSS',
            'percentage' => '80%',
            'description' =>'I have mastered 80% of CSS, covering basic styling, layout techniques, and responsive design. To advance further, I\'ll focus on mastering CSS Grid and Flexbox, improving my understanding of animations, and learning best practices for cross-browser compatibility and optimization.'
        ],
        'third_skill' => 
        [
            'name'=> 'JavaScript',
            'percentage' => '65%',
            'description' =>'I have mastered 65% of JavaScript, covering basic syntax, variables, and simple functions. To improve further, I\'ll focus on understanding DOM manipulation, asynchronous programming, working with APIs, and exploring modern frameworks like React or Vue.js.'
        ],
        'fourth_skill' =>
        [
            'name'=> 'PHP',
            'percentage' => '95%',
            'description' =>'I have mastered 95% of PHP, including basic syntax, variables, and simple functions. To advance further, I\'ll focus on understanding form handling, working with databases, session management, error handling, and exploring object-oriented programming in PHP to build more dynamic and secure web applications.'
        ],
        'fifth_skill' =>
        [
            'name'=> 'MySQL',
            'percentage' => '90%',
            'description' =>'I have mastered 90% of MySQL, including basic SQL queries, table creation, and simple data retrieval. To progress further, I\'ll focus on mastering joins, subqueries, indexing, database normalization, and advanced data manipulation techniques to optimize database performance and ensure data integrity.'
        ]
    ],
    // ثالث عنصر بالمصفوفة
    'myservices' => 
    [
        'first_service' => 'Web Development',
        'description1' => 'I specialize in creating high-quality websites using HTML, CSS, JavaScript, PHP and MYSQL.',
        'description2' => ' I also help with back-end development using PHP and MySQL.',
        'secound_service' => 'Mobile App Development',
        'description_sec_1' => 'I create cross-platform mobile apps using React Native and Flutter.',
        'description_sec_2' => ' I also help with native Android and iOS apps development.',
        'third_service' => 'E-commerce Design',
        'description_third_1' => 'I design e-commerce websites using HTML, CSS, and JavaScript.',
        'description_third_2' => ' I also help with back-end development using PHP and MySQL.'
        
    ],
    // رابع عنصر بالمصفوفة
    'contact' => 
    [
        'phone' => '+967772252496',
        'email' => 'balgaam38@gmail.com',
        'instgram' => '',
        'linkedin' => '',
        'github' => '',
        'twitter' => '',
        'youtube' => ''
    ],
    'companies' =>
    [
        'aden' => 
        [
        'name' => 'Aden company',
        'address' => 'Aden, Yemen',
        'from_date' => '2023-01-01',
        'to_date' => '2023-12-31',
        'phone' => '+967772252497',
        'website' => 'adencompany.com'
        ],

        'abyan' => 
        [
        'name' => 'Abyan company',
        'address' => 'Abyan, Yemen',
        'from_date' => '2024-01-01',
        'to_date' => '2024-12-31',
        'phone' => '+967772252497',
        'website' => 'Abyancompany.com'
        ]

    ]
];

// echo $db['skills']['first_skill']['percentage'];
?>