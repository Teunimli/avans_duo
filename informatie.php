<?php
@include('header.html');
?>

<h1 class="beroepen">Beroepen</h1>
<div class="container">
  <div class="row">
    <div class="col-md-4">
    <h3>Beroep 1</h3>
      1 of 3 (invullen van beroepen hier)
    </div>
    <div class="col-md-4">
      2 of 3 
    </div>
    <div class="col-md-4">
      3 of 3
    </div>
  </div>
  </div>
</div>

<h1 class="beroepen">Vakkenoverzicht</h1>
<div class="container">
<div class="tab">
 <button class="tablinks" onclick="openTab(event, 'eerste')" id="defaultOpen">Eerste leerjaar</button>
  <button class="tablinks" onclick="openTab(event, 'tweede'); ">Tweede leerjaar</button>
  <button class="tablinks" onclick="openTab(event, 'derde'); ">Derde leerjaar</button>
  <button class="tablinks" onclick="openTab(event, 'vierde'); ">Vierde leerjaar</button>
</div>
</div>
<div id="eerste" class="tabcontent">
  <h3 class="beroepen">Eerste leerjaar</h3>
  <p>Informatie over het leerjaar.</p>
</div>

<div id="tweede" class="tabcontent">
  <h3 class="beroepen">Tweede leerjaar</h3>
  <p>Informatie over het leerjaar.</p> 
</div>

<div id="derde" class="tabcontent">
  <h3 class="beroepen">Derde leerjaar</h3>
  <p>Informatie over het leerjaar.</p> 
</div>

<div id="vierde" class="tabcontent">
  <h3 class="beroepen">Vierde leerjaar</h3>
  <p>Informatie over het vierde leerjaar.</p>
</div>

<h1 class="beroepen">Extra informatie</h1>
<p class="tekst">Tekst</p>


<?php 
@include('footer.html');
?>
