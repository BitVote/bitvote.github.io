 <!doctype html>
<?php include("bitvote.php") ?>
  
  
  <html>
      <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="chrome=1">
      <title>BitVote Demo</title>
  
      <link rel="stylesheet" href="stylesheets/styles.css">
      <link rel="stylesheet" href="stylesheets/pygment_trac.css">
      <link rel="stylesheet" href="stylesheets/bitvote.css">
      <link rel="stylesheet" href="stylesheets/other.css">

      <script src="javascripts/scale.fix.js"></script>
      <script src="javascripts/ajax.js"></script>
      <script> function get_user_ip() {var usr_id = document.getElementById('user_ip').value; return usr_id;}</script>
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  
      <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    <body>
      <input id='user_ip' type="hidden" value="<?php get_users_ip(); //get user ip to use as usr_id?>"> </input> 
      <div class="wrapper">
        <header>
          <h1>BitVote Demo</h1>
          <p>Protecting the Internet from Political Attacks</p>
          <p class="view"><a href="https://github.com/BitVote/BitVote.github.io/wiki">View GitHub <small>Wiki</small></a></p>
          <ul>
            <li class="single"><a href="https://github.com/BitVote/BitVote.github.io/wiki">View GitHub <strong>Wiki</strong></a></li>
          </ul>
        </header>
        <section>

<span id="registering_whole">
  <p style="text-align:center">
  <button style="tex-align:center" id="register_button" onclick="register()"><br><p>START HERE*</p><img src="/images/bitvote_logo_small.png" alt="logo" /><br><br><br></button>

  </p>
</span>

  <span id="voting_whole">
  
  <table>
  <tr><td rowspan="4"><br><img src="/images/bitvote_logo_smaller.png" alt="logo" /></td>
    <td></td>
    <td class="note">add</td> <td>CurrentTime:</td>      <td id="current_time"></td></tr>
  <tr style="border-bottom: 2px"><td></td>
    <td class="note">minus</td> <td>Registered Time:</td> <td id="register_time"></td></tr>
  <tr><td></td>
    <td class="note">minus</td> <td>Spent Vote-Time:</td>    <td id="spent_time"></td></tr>
  <tr><td></td>
    <td class="note">equals</td> <td>Available Vote-Time:</td>    <td id="power_time"></td></tr>
  </table>

  <table>
  <tr><td>Vote-Time:</td><td colspan="3">
      <button id="toggle_manual" onclick="toggle_manual();">&rarr;Manual</button>
      <input hidden type="number" id="spend_time" value="0" onkeyup="update_spend_time()" onchange="update_spend_time();">
      <span id="spend_time_show"></span>
      <br> <span id="increment_buttons"></span>
  </td><td id="amount_note"></td></tr>
  <br>
  <tr><td>http://</td><td colspan="3">
  <!-- Really we probably want a address input,
       that can do stuff like look at NameReg automatically.
       But also want to have it be an accepted votable.. -->
      <input type="text" id="spend_addr" onkeyup="update_spend_addr()" onchange="update_spend_addr()"></td><td id="spend_addr_note"></td></tr>
  </table> 
  
  
  <button id="button" onclick="spend_time_button();">VOTE HERE</button> 

  <br><br>
  
  <p id="progress"></p>
  <p id="passed"></p>
  </span>
  
  <script src="javascripts/bitvote_no_backend.js"></script>
  <script src="javascripts/bitvote.js"></script>
<br />  
*By clicking, I temporarily pledge not to troll, double-vote or sabotage bitvote at least until the december release. Learn more <a href="https://github.com/BitVote/bitvote.github.io/wiki/Pledge">here</a>
<br />
 <pre><code>VoteChain Demo TBR<a href="https://www.youtube.com/watch?v=9pSh0VAVYn4">*</a> (Centralized & on-the-honor-system version)
 <?php list_vote_chain(); ?>
<!--
00:01:00,http://iloveyou.AaronBale.com
00:01:00,http://stephan_go_get_my_coffee.com
00:01:00,http://jasper_im_not_your_minion.com
00:01:00,http://marmut_emancipation.com
00:01:00,http://focus_please_we_have_a_deadline.com
00:03:00,http://www.theatlantic.com/technology/archive/2013/06/animal-behaviorist-well-soon-have-devices-that-let-us-talk-with-our-pets/276532
00:05:00,http://animalrescuecorps.org
00:07:00,http://www.mayoclinic.org/diseases-conditions/trichotillomania/basics/definition/con-20030043
00:13:00,http://www.huffingtonpost.com/2014/06/06/obama-elizabeth-warren-st_n_5461988.html
00:01:00,http://nothing_is_serious.com
00:02:00,https://drive.google.com/file/d/0B5ir3iQlolAhdkU4Y0VEa1ZOcmc/edit?usp=sharing
00:01:00,http://www.healthplans.com/get-quotes/?CID=8814&SRC=hp_google&Sub_ID=obamacare&adposition=1t1&google_network=g&creativeid=42715799117&adposition=\{position\}&matchtype=e&mobile=&bw_keyword=obamacare&bw_brand=0&bw_state=0&utm_content=42715799117&kid=35346332410965&pdv=c&position=1t1
00:05:00,http://www.dailykos.com/story/2013/05/08/1207734/-Elizabeth-Warren-Students-should-get-the-same-loan-rate-as-big-nbsp-banks
00:11:00,https://docs.google.com/document/d/1lKrtSpq_1homVevAXYZY89OLNXcToODNlgUOdFFc4gc/edit?usp=sharing  
00:05:00,https://www.march-against-monsanto.com
00:04:00,http://en.wikipedia.org/wiki/Pharmaceutical_industry#Controversy_about_drug_marketing_and_lobbying
00:01:00,http://OrganicConsumers.org/Monsanto
00:01:00,http://coinculture.info
-->
  </code></pre>
<br />
  <iframe width="560" height="315" src="//www.youtube.com/embed/3iderhH6ttA" frameborder="0" allowfullscreen></iframe>

<br />
<img src="https://cloud.githubusercontent.com/assets/7649144/3344358/fb313458-f8a9-11e3-93c6-f4b160493f43.png" alt="plan" />
<br />
<br />
  <iframe width="560" height="315" src="//www.youtube.com/embed/z-BtgF3oqoA" frameborder="0" allowfullscreen></iframe>
  <br />
  <br />
 <br />
 <h3>What is BitVote?</h3>
<b>BitVote is a self-developing digital ecosystem powered by the VoteChain protocol that enables people to interpret and express themselves in measurable and comparable ways by providing codified units that represent actual minutes of their real life on earth which can be linked to bring any idea to life in a way that is impossible to dismiss. BitVote will protect Ethereum - as well as the entire Internet - from Social and Political Attacks by empowering people with a revolutionary yet deceptively simple mechanism to systematically allocate human resources towards the problem solving tactics best proven to work for maximum efficiency of social reform.
</b>  
<br />
<br />
  <br />
  <h3>
  <a name="the+inspiration" class="anchor" href="#The-Inspiration"><span class="octicon octicon-link"></span></a>The Inspiration</h3>
  
<b>Our project is inspired by the 2012 SOPA Blackout in which Internet users rose up and defeated political corruption. If the BitVote Protocol had been codified, one could think of that as 24 hours times 20 million voters equals 480 million voter-hours which is comparably 27,397 % bigger than the 2 year (17,520 hour) Senate term of SOPA creator Lamar Smith. With Ethereum as our platform, we can build a tool capable of duplicating the effect of the Blackout. 
</b>  <br />
  <br />
  <br />

  
  <h3><a name="authors-and-contributors" class="anchor" href="#authors-and-contributors"><span class="octicon octicon-link"></span></a>Authors and Contributors</h3>
  
  <p><b>Aaron Swartz (<a href="https://github.com/aaronsw" class="user-mention">@aaronsw</a>),
  Aaron Bale (<a href="https://github.com/arkbg1" class="user-mention">@arkbg1</a>), 
  Sven Swootleg (<a href="https://github.com/joepie91" class="user-mention">@joepie91</a>) 
  and Leah Chase (<a href="https://twitter.com/LeahxPearl" class="user-mention">@leahxpearl</a>) 
  founded BitVote in 2012 during the SOPA Blackout. 
  In 2014, BitVote began collaborating with 
  Jasper den Ouden (<a href="https://github.com/o-jasper" class="user-mention">@o-jasper</a>),
  Ethan Buchman (<a href="https://github.com/ebuchman" class="user-mention">@ebuchman</a>)
  Stephan Tual (<a href="https://github.com/stephantual" class="user-mention">@stephantual</a>) 
  and Vlad Zamfir (<a href="https://twitter.com/VladZamfir" class="user-mention">@vladzamfir</a>)
  of Ethereum.
  The project has been developing for over two years through the teamwork of an amoeba of 
  programers, activists, lawyers, advocates, politicians, artists and normal citizens around the world. 
  All the developers have one thing in common: a desire to have the voice of the people heard and heeded. 
  </b>
  </p>
  
  
<div class="bitcoin">
			<a href="bitcoin:1MRCGygu7547srSatp2Va1gqco1H5uRf8S">
				<table><tr><td><img src="/images/bitcoin_button.png">&nbsp;</td>
				    <td class="bitcoinlink">1MRCGygu7547srSatp2Va1gqco1H5uRf8S</td></tr></table>
			</a>
<!--(<a href="https://coinbase.com/checkouts/fa56e79c336269839e3f7f1391c88b90">coinbase</a>)-->
</div>

</div>

<footer>
<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
<img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a><br>
This work is licensed under a 
<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.
</footer>

<!--[if !IE]><script>fixScale(document);</script><![endif]-->
      
</body>
</html>
  
