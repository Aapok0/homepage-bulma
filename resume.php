<?php
$pageTitle = 'Resume';
$pageDescription = 'Education, work experience, certifications, and references for Aapo Kokko.';
include(dirname(__FILE__).'/components/header.php')
?>

<?php
include(dirname(__FILE__).'/components/navbar.php')
?>

<!-- Hero banner and resume in two columns -->
<section class='hero is-fullheight has-background'>
  <img class='hero-background' src='img/background-3.jpg' alt='Background image of Pältsan'>

  <!-- Hero box start -->
  <div class='hero-body'>
    <div class='container hero-text box background-2 is-transparent'>
      <h1 class='title is-size-2 is-size-3-mobile is-family-code has-text-centered'>Resume</h1>

      <!-- Resume in two columns with nested titles -->
      <!-- Columns start -->
      <div class='columns'>
        <!-- First column start -->
        <div class='column background-2'>

          <!-- Education start -->
          <div class='box mb-5 background-1'>
            <h1 class='title is-size-3 is-size-4-mobile is-family-code'>Education</h1>
            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-1 mb-0 resume-subtitle'>Bachelor of Engineering</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Metropolia University of Applied Sciences</li>
              <li class='ml-4 resume-item'>2020 - 2022</li>
              <li class='ml-4 resume-item'>Programme: Information Technology</li>
              <li class='ml-4 resume-item'>Major: Health and Well-being Technology</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Bachelor of Ecience in Technology</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Aalto University</li>
              <li class='ml-4 resume-item'>2012 - 2016</li>
              <li class='ml-4 resume-item'>Programme: Electrical and Electronics Engineering</li>
              <li class='ml-4 resume-item'>Major: Bionics</li>
              <li class='ml-4 resume-item'>Minor: Information Technology</li>
            </ul>
          </div>
          <!-- Education end -->

          <!-- Certifications start -->
          <div class='box mb-5 background-1'>
            <h1 class='title is-size-3 is-size-4-mobile is-family-code'>Certifications</h1>
            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-1 mb-0 resume-subtitle'>Microsoft Azure</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'><a href='https://learn.microsoft.com/api/credentials/share/en-us/AapoKokko-3945/48DD3F6B53D95961'>AZ-104 - Azure Administrator Associate</a></li>
              <li class='ml-4 resume-item'>Valid: 7.2023 - 7.2024</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'><a href='https://learn.microsoft.com/api/credentials/share/en-us/AapoKokko-3945/24E4077128CDE29A?sharingId=34159981622366F0'>AZ-305 - Azure Solutions Architect Expert</a></li>
              <li class='ml-4 resume-item'>Valid: 9.2023 - 9.2024</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>GitHub</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'><a href='https://www.credly.com/badges/cabb7c10-0082-44cd-b9af-a937bd556e65/public_url'>GitHub Actions</a></li>
              <li class='ml-4 resume-item'>Valid: 11.2022 - 11.2024</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'><a href='https://www.credly.com/badges/265736dc-7dbc-47a7-b16a-ee58c2ec9300/public_ur'>GitHub Administration</a></li>
              <li class='ml-4 resume-item'>Valid: 1.2023 - 1.2025</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'><a href='https://www.credly.com/badges/3efe6d1c-67e6-42c5-9507-daaa5b1bf230/public_url'>GitHub Advanced Security</a></li>
              <li class='ml-4 resume-item'>Valid: 1.2023 - 1.2025</li>
            </ul>
          </div>
          <!-- Certifications end -->

          <!-- Voluntary work start -->
          <div class='box background-1'>
            <h1 class='title is-size-3 is-size-4-mobile is-family-code'>Voluntary work</h1>
            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-1 mb-0 resume-subtitle'>Aalto University's Guild of Electrical Engineering</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Student Member in University's Administrative Committee</li>
              <li class='ml-4 resume-item'>2016 - 2017 and 2017 - 2018</li>
              <li class='ml-4 resume-item'>Multiple committees</li>
              <li class='ml-4 resume-item'>Participated in meetings and voted for proposals</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Council Member</li>
              <li class='ml-4 resume-item'>2014 - 2015, 2015 - 2016 and 2017 - 2018</li>
              <li class='ml-4 resume-item'>The guild council has the highest decision making power in the guild and it's members are chosen by the guild members in an election.</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Writing and Graphic Layout</li>
              <li class='ml-4 resume-item'>2017 - 2018</li>
              <li class='ml-4 resume-item'>Writing and graphic layout for the guild's magazine Sössö</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Tutor for Freshmen</li>
              <li class='ml-4 resume-item'>2013 - 2014 and 2016 - 2017</li>
              <li class='ml-4 resume-item'>Guidance to studies, general student life and guild activities</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Chairman of the Studies Committee and a Member of the Guild Board</li>
              <li class='ml-4 resume-item'>2016 - 2017</li>
              <li class='ml-4 resume-item'>In addition to general guild board duties, I was in charge of the student advocacy of the guild members and electrical engineering students in general.</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Member of the Studies Committee</li>
              <li class='ml-4 resume-item'>2015 - 2016</li>
              <li class='ml-4 resume-item'>Participated in the student advocacy of the guild members and electrical engineering students in general.</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Member of the Corporate Relations Committee</li>
              <li class='ml-4 resume-item'>2014 - 2015</li>
              <li class='ml-4 resume-item'>Participated in building corporate relationships, organizing related events and gathering sponsors.</li>
            </ul>
          </div>
          <!-- Voluntary work end -->
        </div>
        <!-- First column end -->

        <!-- Second column start -->
        <div class='column background-2'>
          <!-- Work experience start -->
          <div class='box mb-5 background-1'>
            <h1 class='title is-size-3 is-size-4-mobile is-family-code'>Work experience</h1>
            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-1 mb-0 resume-subtitle'>Junior DevOps Engineer</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Eficode Oy</li>
              <li class='ml-4 resume-item'>5.2023 -</li>
              <li class='ml-4 resume-item'>Doing system administration and operations, service setup, management and updates, monitoring and problem solving.</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Trainee Consultant</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Eficode Oy</li>
              <li class='ml-4 resume-item'>11.2022 - 5.2023</li>
              <li class='ml-4 resume-item'>Studying for and earning Github certificates during the first two months. Doing system administration and operations, service setup, management and updates, monitoring and problem solving.</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Student assistant</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Metropolia University of Applied Sciences</li>
              <li class='ml-4 resume-item'>9.2021 - 12.2021</li>
              <li class='ml-4 resume-item'>Organizing a mathematics and physics workshop for first year student to work on course assignments.</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Office Secretary</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Insurance Court of Finland</li>
              <li class='ml-4 resume-item'> 6.-7.2019, 2.-8.2020 and 9.-12.2020</li>
              <li class='ml-4 resume-item'>Doing general IT support and office work and helping with the deployment, training and support of new software.</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Documentation Specialist (Trainee)</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Gemalto Oy (Thales Group)</li>
              <li class='ml-4 resume-item'>8.2019 - 2.2020</li>
              <li class='ml-4 resume-item'>Reading through existing company documentation and supplier documentation and rewriting them into a new platform (Confluence).</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Newspaper Delivery</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Posti Group Oyj</li>
              <li class='ml-4 resume-item'>4.-5.2011, 4.-8.2012 and 6.-8.2013</li>
              <li class='ml-4 resume-item'>Delivering newspapers during the night using a delivery bicycle.</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>ICT Technician</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Elan IT Resource Oyj</li>
              <li class='ml-4 resume-item'>3.2012</li>
              <li class='ml-4 resume-item'>Searching channels for digiboxes, and if needed, updating them during a cable network update and answering any questions customers had about it.</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Mover</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Muuttohaukat Ky</li>
              <li class='ml-4 resume-item'>6.2009 - 3.2010</li>
              <li class='ml-4 resume-item'>Moving people's stuff to new homes and moving furniture inside larger buildings like a school or a company (or out of it).</li>
            </ul>
          </div>
          <!-- Work experience end -->

          <!-- References start -->
          <div class='box background-1'>
            <h1 class='title is-size-3 is-size-4-mobile is-family-code'>References</h1>
            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Metropolia University of Applied Sciences</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Juha Havukumpu</li>
              <li class='ml-4 resume-item'>Phone: +358 505004877</li>
              <li class='ml-4 resume-item'>Email: juha.havukumpu@metropolia.fi</li>
            </ul>

            <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code mt-5 mb-0 resume-subtitle'>Gemalto Oy (Thales Group)</h2>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Eduardo Hofmann</li>
              <li class='ml-4 resume-item'>Phone: +358 505641231</li>
              <li class='ml-4 resume-item'>Email: eduardo.hofmann@thalesgroup.com</li>
            </ul>
            <ul class='is-size-5-widescreen is-size-6-desktop is-size-7-mobile'>
              <li class='pt-4 is-family-code resume-item'>Olli Rautiainen</li>
              <li class='ml-4 resume-item'>Phone: +358 989414456</li>
              <li class='ml-4 resume-item'>Email: olli.rautiainen@thalesgroup.com</li>
            </ul>
          </div>
          <!-- References end -->

        </div>
        <!-- Second column end -->
      </div>
      <!-- Columns end -->

      <!-- Button to resume -->
      <div class='block has-text-centered'>
        <a href='skills.php'><button class='button is-link is-size-6 is-size-7-mobile has-text-weight-semibold'>Check my skills</button></a>
      </div>

    </div>
  </div>
  <!-- Hero box end -->
</section>

<?php
include(dirname(__FILE__).'/components/footer.php')
?>
