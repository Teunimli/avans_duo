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
  <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
  <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Vakken</th>
        <th>Blok 1</th>
        <th>Blok 2</th>
        <th>Blok 3</th>
        <th>Blok 4</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bedrijfsprocessen</td>
        <td>X</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Beroepsorientatie</td>
         <td>X</td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
        <td>Nederlands</td>
         <td>X</td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
        <td>Programmeren in Java en Android	</td>
         <td>X</td>
         <td>X</td>	
         <td>X</td>
         <td>X</td>
      </tr>
      <tr>
      	<td>Relationele Databases</td>
      	 <td>X</td>
      	 <td>X</td>
      	 <td>X</td>
      	 <td></td>
      </tr>
      <tr>
      	<td>Studievaardigheden</td>
      	 <td>X</td>
      	 <td></td>
      	 <td></td>
      	 <td></td>
      </tr>
      <tr>
      	<td>Webdesign</td>
      	 <td>X</td>
      	 <td></td>
      	 <td></td>
      	 <td></td>
      </tr>   
      <tr>
      	<td>English</td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      	<td></td>
      </tr>
      <tr>
      	<td>Duurzame Ontwikkeling</td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      	<td>X</td>
      </tr>
      <tr>
      	<td>Professionele Vaardigheden</td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      	<td>X</td>
      </tr>      
      <tr>
      	<td>Requirements Engineering</td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      	<td></td>
      </tr>
      <tr>
      	<td>Onderzoeksvaardigheden</td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      </tr>
      <tr>
      	<td>Project Management & Software Engineering</td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      </tr>
      <tr>
      	<td>Softwareontwerp & -architectuur</td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      	<td></td>
      </tr>
      <tr>
      	<td>Computernetwerken</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      </tr>
      <tr>
      	<td>Scrum project</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td>X</td>
    </tbody>
  </table>
 		<h3 class="beroepen">Toelichting vakkenoverzicht</h3>
 			<p>Voor het vak programmeren in het eerste jaar gebruiken we de taal Java en voor het ontwerpen UML. Bij databases leer je hoe je op een goede gestructureerde manier een database opzet en met SQL de data op kunt vragen en bewerken. In het tweede jaar komen bij de ontwikkeling van webapplicaties ASP.net/C# en javascript-frameworks aan bod.</p>
</div>
</div>


<div id="tweede" class="tabcontent">
  <h3 class="beroepen">Tweede leerjaar</h3>
  <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
   <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Vakken</th>
        <th>Blok 1</th>
        <th>Blok 2</th>
        <th>Blok 3</th>
        <th>Blok 4</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>User Experience</td>
        <td>X</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Scrum Project</td>
         <td>X</td>
         <td>X</td>
         <td></td>
         <td></td>
      </tr>
      <tr>
        <td>Server-side webdevelopment (ASP.net)</td>
         <td>X</td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
        <td>Algoritmen & Datastructuren</td>
         <td></td>
         <td>X</td>	
         <td></td>
         <td></td>
      </tr>
      <tr>
      	<td>Client-side webdevelopment (javaScript)</td>
      	 <td></td>
      	 <td>X</td>
      	 <td></td>
      	 <td></td>
      </tr>
      <tr>
      	<td>Big data/machine learning</td>
      	 <td></td>
      	 <td></td>
      	 <td>X</td>
      	 <td></td>
      </tr>
      <tr>
      	<td>Business intelligence</td>
      	 <td></td>
      	 <td></td>
      	 <td>X</td>
      	 <td></td>
      </tr>   
      <tr>
      	<td>Business intelligence</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      </tr>
      <tr>
      	<td>Computernetwerken</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      </tr>
      <tr>
      	<td>Professionele Vaardigheden</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      </tr>      
      <tr>
      </tbody>
      </table>
     	 <h3 class="beroepen">Toelichting vakkenoverzicht</h3>
 			<p>Voor het vak programmeren in het eerste jaar gebruiken we de taal Java en voor het ontwerpen UML. Bij databases leer je hoe je op een goede gestructureerde manier een database opzet en met SQL de data op kunt vragen en bewerken. In het tweede jaar komen bij de ontwikkeling van webapplicaties ASP.net/C# en javascript-frameworks aan bod.</p>
</div>
</div>

<div id="derde" class="tabcontent">
  <h3 class="beroepen">Derde leerjaar</h3>
  <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
   <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Vakken</th>
        <th>Blok 1</th>
        <th>Blok 2</th>
        <th>Blok 3</th>
        <th>Blok 4</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Praktijkstage</td>
        <td>X</td>
        <td>X</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Professionele vaardigheden (ethiek)</td>
         <td></td>
         <td></td>
         <td>X</td>
         <td></td>
      </tr>
      <tr>
        <td>Security</td>
         <td></td>
         <td></td>
         <td>X</td>
         <td></td>
      </tr>
      <tr>
        <td>Software architectuur</td>
         <td></td>
         <td></td>	
         <td>X</td>
         <td></td>
      </tr>
      <tr>
      	<td>Artificial Intelligence</td>
      	 <td></td>
      	 <td></td>
      	 <td></td>
      	 <td>X</td>
      </tr>
      <tr>
      	<td>Serious gaming</td>
      	 <td></td>
      	 <td></td>
      	 <td></td>
      	 <td>X</td>
      </tr>
      <tr>
      	<td>Solution architecture</td>
      	 <td></td>
      	 <td></td>
      	 <td></td>
      	 <td>X</td>
      </tr>   
      <tr>
      	<td>User Experience</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td>X</td>
      </tr>
      </tbody>
      </table>
     	 <h3 class="beroepen">Toelichting vakkenoverzicht</h3>
 			<p>Voor het vak programmeren in het eerste jaar gebruiken we de taal Java en voor het ontwerpen UML. Bij databases leer je hoe je op een goede gestructureerde manier een database opzet en met SQL de data op kunt vragen en bewerken. In het tweede jaar komen bij de ontwikkeling van webapplicaties ASP.net/C# en javascript-frameworks aan bod.</p>
</div>
</div>
</div>

<div id="vierde" class="tabcontent">
  <h3 class="beroepen">Vierde leerjaar</h3>
 <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
   <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Vakken</th>
        <th>Blok 1</th>
        <th>Blok 2</th>
        <th>Blok 3</th>
        <th>Blok 4</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Minor</td>
        <td>X</td>
        <td>X</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Afstudeerstage</td>
         <td></td>
         <td></td>
         <td>X</td>
         <td>X</td>
      </tr>
      </tbody>
      </table>
     	 <h3 class="beroepen">Toelichting vakkenoverzicht</h3>
 			<p>Voor het vak programmeren in het eerste jaar gebruiken we de taal Java en voor het ontwerpen UML. Bij databases leer je hoe je op een goede gestructureerde manier een database opzet en met SQL de data op kunt vragen en bewerken. In het tweede jaar komen bij de ontwikkeling van webapplicaties ASP.net/C# en javascript-frameworks aan bod.</p>
</div>
</div>
</div>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<h1 class="beroepen">Toelating tot de studie informatica</h1>
<p class="tekst">Om te kunnen starten met de opleiding informatie is het van belang dat vooropleiding voldoende is. Hieronder een overzicht met welke vooropleidingen je de studie informatica mag starten.</p>
 <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Profiel</th>
        <th>Toelating</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>havo C&M</td>
        <td>X</td>
      </tr>
      <tr>
        <td>havo E&M</td>
         <td>X</td>
      </tr>	
        <td>havo N&G</td>
        <td>X</td>
      </tr>
      <tr>
        <td>havo N&T</td>
         <td>X</td>
      </tr>	
        <td>vwo C&M</td>
        <td>X</td>
      </tr>
      <tr>
        <td>vwo E&M</td>
         <td>X</td>
      </tr>	
      <tr>
      	<td>vwo N&G</td>
      	<td>X</td>
      </tr>
      <tr>
      	<td>vwo N&T</td>
      	<td>X</td>
      </tr>
      <tr>
      	<td>mbo-niveau 4</td>
      	<td>Alleen als je mbo-opleiding voldoende aansluit, ben je automatisch toelaatbaar voor deze opleiding. Lees meer over de doorstroom van mbo naar hbo.</td>		
      </tr>

      </tbody>
      </table>


<?php 
@include('footer.html');
?>
