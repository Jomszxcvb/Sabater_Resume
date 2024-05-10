<?php
    $resume = [
        'Profile' => [
            'Name' => [
                'First' => 'Jommel Rowin',
                'Middle Name' => 'Sarmiento',
                'Last' => 'Sabater',
                ],
            'Picture' => 'profile-picture.jpg',
            'Job Title' => 'Software Developer',
            'Description' => 'As a driven second-year Computer Science student, I am committed to applying my proficiency in programming and problem-solving to real-world challenges. My academic journey has been marked by a passion for technology and a desire to innovate within the field.<br><br>I am seeking an internship that will allow me to contribute meaningfully while honing my technical skills. My goal is to collaborate on projects that make a lasting impact and to grow as a future leader in the tech industry.'
            ],
        'Contact' => [
            'Phone' => ['+63 976 3081 953', 'fa-solid fa-phone'],
            'Email' => ['sabaterjommelrowin@outlook.com', 'fa-solid fa-envelope'],
            'LinkedIn' => ['www.linkedin.com/in/jomszxc', 'fa-brands fa-linkedin'],
            'Location' => ['Manila City, Metro Manila, Philippines', 'fa-solid fa-location-dot'],
            ],
        'Skills' => [
            // 'Skill' => 'Proficiency (1-100)',
            'Python' => '80%',
            'Java' => '75%',
            'C++' => '65%',
            'JavaScript' => '50%',
            'HTML' => '50%',
            'CSS' => '45%',
            'PHP' => '55%',
            'SQL' => '65%',
            ],
        'Education' => [
                [
                    'School' => 'FEU Institute of Technology',
                    'Degree' => 'Bachelor of Science in Computer Science',
                    'Specialization' => 'Software Engineering',
                    'Start Year' => '2022',
                    'End Year' => 'Present'
                ],
                [
                    'School' => 'College of the Holy Spirit of Tarlac',
                    'Degree' => 'Senior High School',
                    'Specialization' => 'Science, Technology, Engineering, and Mathematics',
                    'Start Year' => '2020',
                    'End Year' => '2022'
                ],
            ],
        'Experience' => [
            [
                'Company' => 'FEU Tech ACM Student Chapter',
                'Position' => 'Director for Academics',
                'Start Year' => '2023',
                'End Year' => 'Present',
                'Description' => 'Leading the academic committee of the organization to provide academic support to the members and to promote academic excellence. Also, responsible for organizing academic-related events, activities, and competitions.'
            ],
            [
                'Company' => 'FEU Tech ACM Student Chapter',
                'Position' => 'Junior Officer for Academics',
                'Start Year' => '2022',
                'End Year' => '2023',
                'Description' => 'Assisting in academic-related activities, events, and competitions of the organization.'
            ],
            ],
        'Hobbies' => [
            'Reading' => 'fa-solid fa-book',
            'Gaming' => 'fa-solid fa-gamepad',
            'Digital Painting' => 'fa-solid fa-palette',
            'Listening to Music' => 'fa-solid fa-headphones',
            'Photography' => 'fa-solid fa-camera',
            'Puzzle Solving' => 'fa-solid fa-puzzle-piece',
            ],
    ];

    /**
     * Name (Format: Firstname M.I. Lastname)
     * Sample Output: Jommel Rowin S. Sabater
     */
    function getFullName($resume) {
        $fullName = $resume['Profile']['Name']['First'] . ' ' . substr($resume['Profile']['Name']['Middle Name'], 0, 1) . '. ' . $resume['Profile']['Name']['Last'];
        return $fullName;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOM'S RESUME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <div class="top">
            <h2> 
                <?php echo getFullName($resume); ?> </br>
                <span> <?php echo $resume['Profile']['Job Title']; ?> </span>
            </h2>
            <div class='group'>
                <div class='leftSide'>
                    <div class='imgBox'>
                        <img src="<?php echo $resume['Profile']['Picture']; ?>" alt="Profile Picture">
                    </div>
                </div>
                <div class='rightSide'>
                    <p> <?php echo $resume['Profile']['Description']; ?> </p>
                </div>
            </div>
        </div>
        <div class='bottom'>
            <div class='left_side'>
                <h4> Contact </h4>
                <ul class="contactInfo">
                    <?php
                        foreach ($resume['Contact'] as $key => $value) {
                            echo "<li> 
                                    <span class='icon'> <i class='$value[1]'></i> </span>
                                    <span class='text'> $value[0] </span>
                                </li>";
                        }
                    ?>
                </ul>
                <h4> Skills </h4>
                <ul class="skills">
                    <?php
                        foreach ($resume['Skills'] as $key => $value) {
                            echo "
                                <div class='skillsBox' style='--i:$value;'>
                                    <p> $key </p>
                                    <div class='value'> </div>
                                </div>
                                ";
                        }
                    ?>
                </ul>
            </div>
            <div class='rigth_side'>
                <h4 class='adjustMargin'> Education </h4>
                <div class="edu_group">
                    <?php
                        foreach ($resume['Education'] as $key => $value) {
                            echo "
                                <div class='edu_groupBox'>
                                    <p>" . $value['Start Year'] ."-" . $value['End Year'] . "</p>
                                    <div class='value'>
                                        <b> " . $value['Degree'] . "</b>" . 
                                        "<i>&emsp;" . $value['Specialization'] . 
                                        "</i><br><b><span>" . $value['School'] . "</span></b>
                                    </div>
                                </div>";
                        }
                    ?>
                </div>
                <h4 class='adjustMargin'> Experience </h4>
                <div class="edu_group">
                    <?php
                        foreach ($resume['Experience'] as $key => $value) {
                            echo "
                                <div class='edu_groupBox'>
                                    <p>" . $value['Start Year'] ."-" . $value['End Year'] . "</p>
                                    <div class='value'>
                                        <b> " . $value['Position'] , "<br><span>" . 
                                        $value['Company'] . "</span></b>
                                        <p>" . $value['Description'] . "</p>
                                    </div>
                                </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class='hobbies'>
            <h4 class='adjustMargin'> Hobbies </h4>
            <ul>
                <?php
                    foreach ($resume['Hobbies'] as $key => $value) {
                        echo "
                            <li>
                                <i class='$value'></i>
                                <p> $key </p>
                            </li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>