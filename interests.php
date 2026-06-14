<?php
include(dirname(__FILE__).'/components/header.php')
?>

<?php
include(dirname(__FILE__).'/components/navbar.php')
?>

<!-- Hero banner and interests section -->
<section class='hero is-fullheight has-background'>
  <img class='hero-background' src='img/background-5.jpg' alt='Background image of Pältsan'>

  <!-- Hero box start -->
  <div class='hero-body'>
    <div class='container hero-text box has-text-centered background-1 is-transparent'>
      <h1 class='title is-size-3 is-size-4-mobile is-family-code'>Interests</h1>

      <!-- Development/IT -->
      <div class='interest-flex-reverse'>
        <div class='interest-item mb-3'>
          <img src='img/development.jpg' alt='Terminal screen'>
        </div>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Development/IT</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>I'm exploring many things in the area that include programming, web development, scripting, IaC and DevOps.</li>
            <li>I've been transitioning towards neovim with tmux for session management, but still use VS Code for certain things.</li>
            <li>Current projects and courses I'm working through:
              <ul class='ml-4' style='list-style-type: square'>
                <li>Tweaking this website</li>
                <li>Writing Terraforms for Azure and Ansibles for the vm to move this website to Azure using IaC and a CI/CD pipeline.</li>
                <li>Helsinki Open University course Full Stack open</li>
                <li>Udemy course 100 days of Python</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <!-- Exercise and self-care -->
      <div class='interest-flex'>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Exercise and self-care</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>My routine currently includes lifting weights, bodyweight exercises and learning some calisthenics and the olympic lifts.</li>
            <li>The various projects to improve myself include:
              <ul class='ml-4' style='list-style-type: square'>
                <li>Cultivating more nose breathing</li>
                <li>Improving shoulder stability and mobility</li>
                <li>Opening up chronically tight hips</li>
                <li>Reversing damage from using too narrow toebox shoes</li>
                <li>Maximizing sleep quality</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class='interest-item mb-3'>
          <img src='img/exercise.jpg' alt='Bouldering in a gym'>
        </div>
      </div>

      <!-- Hiking -->
      <div class='interest-flex-reverse'>
        <div class='interest-item mb-3'>
          <img src='img/hiking.jpg' alt='Korvatunturi'>
        </div>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Hiking</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>I Love walking in general and usually get over 10 000 steps every day. Usually listen to podcasts on daily walks like Distractible and StarTalk.</li>
            <li>I've tried to do a longer hike every year since 2018, but haven't been able to schedule it every time. I've done the following hikes so far:
              <ul class='ml-4' style='list-style-type: square'>
                <li>2018: Kilpisjärvi - Barras - Pältsan</li>
                <li>2020: Lemmenjoki</li>
                <li>2021: Urho Kekkonen National Park</li>
                <li>Very soon... Kevo Canyon</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <!-- Cooking -->
      <div class='interest-flex'>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Cooking (and bit of baking)</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>I think what fascinates with cooking and baking, is the science behind it and mysterious ways, that flavors can be combined.</li>
            <li>My speciality is slow cooked foods that include:
              <ul class='ml-4' style='list-style-type: square'>
                <li>Beef Bourguignon</li>
                <li>Bolognese</li>
                <li>Chili</li>
                <li>Red pepper sauce</li>
              </ul>
            </li>
            <li>I've done less baking lately, since gluten doesn't really suit my stomach. I do still eat wheat somewhat, since you know.. pizza exists and haven't found any decent gluten free bread.</li>
          </ul>
        </div>
        <div class='interest-item mb-3'>
          <img src='img/cooking.jpg' alt='Pizza'>
        </div>
      </div>

      <!-- Music -->
      <div class='interest-flex-reverse'>
        <div class='interest-item mb-3'>
          <img src='img/music.jpg' alt='Playing bass'>
        </div>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Music</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>I don't really have any limits to what genres I listen to. Almost anything between classical and death metal goes, but recently I've been listening to a lot of fusion jazz.</li>
            <li>Some of my favorite bands and artists include:
              <ul class='ml-4' style='list-style-type: square'>
                <li>Snarky Puppy</li>
                <li>Opeth</li>
                <li>Elliott Smith</li>
                <li>Dave Matthews Band</li>
              </ul>
            </li>
            <li>I used to play bass and guitar and had band, but it was about a decade ago. I'm now sort of relearning to play and trying to get back into it.</li>
          </ul>
        </div>
      </div>

      <!-- Reading -->
      <div class='interest-flex'>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Reading</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>Even though I don't read books that often, I feel that nothing really hooks or pulls you in like a good book.</li>
            <li>Some of my favorite books are:
              <ul class='ml-4' style='list-style-type: square'>
                <li>The Wind-up Bird Chronicle by Haruki Murakami</li>
                <li>Roadside Picnic by Arkadi and Boris Strugatsky</li>
                <li>The Master and Margarita by Mikhail Bulgakov</li>
                <li>No Longer Human by Osamu Dazai</li>
              </ul>
            </li>
            <li>I also read non-fiction, manga/manhwa and random wikis about anything that pops into my head.</li>
          </ul>
        </div>
        <div class='interest-item mb-3'>
          <img src='img/reading.jpg' alt='Bookshelf'>
        </div>
      </div>

      <!-- Video games -->
      <div class='interest-flex-reverse'>
        <div class='interest-item mb-3'>
          <img src='img/video-games.jpg' alt='Video games consoles'>
        </div>
        <div class='interest-item mb-3'>
          <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'>Video games</h2>
          <ul class='ml-3 is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left' style='list-style-type: circle'>
            <li>I've been enjoying video games ever since I got my Nintendo 64 as a Christmas present, when I was 5. I still have it. Thought I had to replace the controller.</li>
            <li>When I find the time, I mostly play with a computer these days. However, once I fix my Switch's Joy-Cons, I'll switch to that again. Portability is so nice.</li>
            <li>Some of my favorite games include:
              <ul class='ml-4' style='list-style-type: square'>
                <li>Legend of Zelda Ocarina of Time</li>
                <li>Resident Evil 4</li>
                <li>Knights of Honor</li>
                <li>Dark Souls 3</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <!-- Hero box end -->
</section>

<?php
include(dirname(__FILE__).'/components/footer.php')
?>
