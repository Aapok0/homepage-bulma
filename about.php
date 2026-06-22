<?php
$pageTitle = 'About';
$pageDescription = 'About Aapo Kokko — DevOps engineer at Finago Oy, background and career goals.';
$heroBackground = 'img/background-2.jpg';
include __DIR__ . '/components/layout-start.php';
?>

      <img class="portrait" src="img/portrait.jpg" alt="Portrait">
      <h1 class='title is-size-3 is-size-4-mobile is-family-code'>About me</h1>
      <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Current work</h2>
      <p class='block is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
        I'm a DevOps Engineer at Finago Oy, doing internal DevOps for our own development, staging and production environments. Before that I spent a year and a half at Eficode in a similar role on the consultancy side — first as a trainee, then as a junior engineer.
      </p>
      <p class='block is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
        The work mostly revolves around maintenance, troubleshooting, monitoring, and improving the platforms teams build on. I enjoy the mix of planned improvement and unplanned problem solving — figuring out why something broke, fixing it properly, and leaving things in a better state than before.
      </p>

      <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Personal development</h2>
      <p class='block is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
        On top of learning while doing my job, I hold Microsoft Azure Administrator (AZ-104) and Solutions Architect Expert (AZ-305) certifications and renew them annually. On my free time I work on development skills through courses and projects that interest me. I'm not trying to move too fast, since I want to learn why I'm supposed to do things I'm taught. I want to know what happens behind the scenes to see the bigger picture, which obviously also helps with my current profession.
      </p>
      <p class='block is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
        I'm currently working on refreshing my Python skills, learning fullstack development with React as the main frontend library and making my Linux workflow better. Much of that work can be seen from my <a href='https://github.com/Aapok0'>GitHub profile</a>. I'm also trying to find any excuses to create more Bash scripts. Though I do want them to have a real purpose so I'm not doing them just for the sake of it. I think what fascinates me with both system administration and development, is the problem solving aspect.
      </p>

      <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Why I enjoy problem solving</h2>
      <p class='block is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
        I've begun to find the reasons why I enjoy problem solving so much, whether it be with programming, math, system administration, networking or any other avenue for it. To me problem solving feels like working as a detective. I'm given a certain set of clues and background information and then sent on a hunt for evidence and a culprit. It can of course be frustrating sometimes and you might end up banging your head against the wall for a while, but cracking a case is an amazing feeling even when it's something small.
      </p>

      <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>What I want from the future</h2>
      <p class='block is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
        Right now I'm looking to build on my current technological expertise and slowly move towards seniority. I see multiple paths my career could take (ops, devops, development or any combination) and I am somewhat agnostic as to, which one is realized. After reaching a level of seniority, I would like to start moving towards a management role. To read more about my interests outside work, you can visit <a href='interests'>here</a>.
      </p>

      <?php
      $pageCta = ['href' => 'resume', 'label' => 'See my resume'];
      include __DIR__ . '/components/page-cta.php';
      ?>

<?php include __DIR__ . '/components/layout-end.php'; ?>
