<?php
include(dirname(__FILE__).'/components/header.php')
?>

<?php
include(dirname(__FILE__).'/components/navbar.php')
?>

<!-- Hero banner and skills in two columns -->
<section class='hero is-fullheight has-background'>
  <img class='hero-background' src='img/background-4.jpg' alt='Background image of Pältsan'>

  <!-- Hero box start -->
  <div class='hero-body'>
    <div class='container hero-text box has-text-centered background-2 is-transparent'>
      <h1 class='title is-size-2 is-size-3-mobile is-family-code'>Skills</h1>

      <!-- Columns start -->
      <div class='columns box background-2'>
        <!-- First column start -->
        <div class='column m-1'>

          <!-- Development start -->
          <h2 class='title is-size-3 is-size-4-mobile is-family-code'>Development</h2>
          <div class='is-flex-direction-column background-1'>

            <!-- Web development start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>Web development</h3>
            <svg class='skillbar bar_web' viewbox='0 0 100 100' data-percent='60'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_web' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>60</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>HTML</h3>
              <progress class="progress is-warning" value="80" max="100">90%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>CSS</h3>
              <progress class="progress is-warning" value="75" max="100">75%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Javascript</h3>
              <progress class="progress is-warning" value="60" max="100">60%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>PHP</h3>
              <progress class="progress is-warning" value="10" max="100">10%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>React</h3>
              <progress class="progress is-warning" value="35" max="100">45%</progress>
            </div>
            <!-- Web development end -->

            <!-- Programming/scripting start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>Programming/scripting</h3>
            <svg class='skillbar bar_prog' viewbox='0 0 100 100' width='200' height='200' data-percent='50'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_prog' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>50</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>Python</h3>
              <progress class="progress is-warning" value="70" max="100">70%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>C</h3>
              <progress class="progress is-warning" value="25" max="100">25%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Shell script</h3>
              <progress class="progress is-warning" value="50" max="100">50%</progress>
            </div>
            <!-- Programming/scripting end -->

            <!-- IaC start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>Infrastructure as Code</h3>
            <svg class='skillbar bar_iac' viewbox='0 0 100 100' width='200' height='200' data-percent='65'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_iac' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>65</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>Ansible</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Terraform</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
            </div>
            <!-- IaC end -->

            <!-- UI/UX start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>UI/UX</h3>
            <svg class='skillbar bar_uiux' viewBox='0 0 100 100' width='200' height='200' data-percent='25'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_uiux' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>25</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>Qt</h3>
              <progress class="progress is-warning" value="35" max="100">35%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Figma</h3>
              <progress class="progress is-warning" value="25" max="100">15%</progress>
            </div>
            <!-- UI/UX end -->

          </div>
          <!-- Development end -->
        </div>
        <!-- First column end -->

        <!-- Second column start -->
        <div class='column m-1'>
          <!-- Services and tools start -->
          <h2 class='title is-size-3 is-size-4-mobile is-family-code'>Services and tools</h2>
          <div class='is-flex-direction-column background-1'>

            <!-- Cloud start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>Cloud</h3>
            <svg class='skillbar bar_cloud' viewbox='0 0 100 100' width='200' height='200' data-percent='55'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_cloud' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>55</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>Azure</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>AWS</h3>
              <progress class="progress is-warning" value="10" max="100">10%</progress>
            </div>
            <!-- Cloud end -->

            <!-- Services start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>Services</h3>
            <svg class='skillbar bar_services' viewBox='0 0 100 100' width='200' height='200' data-percent='35'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_services' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>35</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>Nginx</h3>
              <progress class="progress is-warning" value="45" max="100">45%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>GitHub</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>GitLab</h3>
              <progress class="progress is-warning" value="25" max="100">30%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Bitbucket</h3>
              <progress class="progress is-warning" value="35" max="100">40%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Jenkins</h3>
              <progress class="progress is-warning" value="10" max="100">10%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Artifactory</h3>
              <progress class="progress is-warning" value="40" max="100">40%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Hashicorp Vault</h3>
              <progress class="progress is-warning" value="35" max="100">35%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Jira</h3>
              <progress class="progress is-warning" value="20" max="100">20%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Confluence</h3>
              <progress class="progress is-warning" value="35" max="100">35%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Zabbix</h3>
              <progress class="progress is-warning" value="30" max="100">30%</progress>
            </div>
            <!-- Services end -->

            <!-- Tools start -->
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'>Terminal tools</h3>
            <svg class='skillbar bar_term' viewbox='0 0 100 100' width='200' height='200' data-percent='65'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_term' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'>65</text>
            </svg>

            <div class='box background-1'>
              <h3 class='is-size-5 is-size-6-mobile'>Git</h3>
              <progress class="progress is-warning" value="70" max="100">70%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>Vim/Neovim</h3>
              <progress class="progress is-warning" value="65" max="100">65%</progress>
              <h3 class='is-size-5 is-size-6-mobile'>tmux</h3>
              <progress class="progress is-warning" value="50" max="100">50%</progress>
            </div>
            <!-- Tools end -->

          </div>
          <!-- Services and tools end -->
        </div>
        <!-- Second column end -->
      </div>
      <!-- Columns end -->

      <!-- Button to resume -->
      <div class='block has-text-centered'>
        <a href='interests.php'><button class='button is-link is-size-6 is-size-7-mobile has-text-weight-semibold'>Read about my interests</button></a>
      </div>

    </div>
  </div>
  <!-- Hero box end -->
</section>

<script src='js/progressCircle.js'></script>
<script src='js/progressNumber.js'></script>

<?php
include(dirname(__FILE__).'/components/footer.php')
?>
