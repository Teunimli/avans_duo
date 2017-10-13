<?php
@include('header.html');
?>

<div class="container informatie">
    <h1 class="beroepen">Beroepen</h1>
    <div class="row">
          <div class="col-md-4">
        <h3>Software ontwikkelaar</h3>
          <p>1 of 3 (invullen van beroepen hier)</p>
        </div>
        <div class="col-md-4">
            <h3>App Developer</h3>
            <p>1 of 3 (invullen van beroepen hier)</p>
        </div>
        <div class="col-md-4">
            <h3>Informatie analist</h3>
            <p>1 of 3 (invullen van beroepen hier)</p>
        </div>
    </div>

    <h1 class="beroepen">Vakkenoverzicht</h1>
    <div class="tab">
     <button class="tablinks" onclick="openTab(event, 'eerste')" id="defaultOpen">Eerste leerjaar</button>
      <button class="tablinks" onclick="openTab(event, 'tweede'); ">Tweede leerjaar</button>
      <button class="tablinks" onclick="openTab(event, 'derde'); ">Derde leerjaar</button>
      <button class="tablinks" onclick="openTab(event, 'vierde'); ">Vierde leerjaar</button>
    </div>

<div id="eerste" class="tabcontent">
  <h3 class="beroepen">Eerste leerjaar</h3>
  <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
  <table class="table table-striped new-table">
    <thead>
      <tr>
        <th class="lesson">Vakken</th>
        <th class="lesson">Blok 1</th>
        <th class="lesson">Blok 2</th>
        <th class="lesson">Blok 3</th>
        <th class="lesson">Blok 4</th>
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


<div id="tweede" class="tabcontent">
  <h3 class="beroepen">Tweede leerjaar</h3>
  <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
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

<div id="derde" class="tabcontent">
  <h3 class="beroepen">Derde leerjaar</h3>
  <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
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

<div id="vierde" class="tabcontent">
  <h3 class="beroepen">Vierde leerjaar</h3>
 <p>Elk leerjaar is ingedeeld in vier blokken. Het kan zijn dat er vakken verdwijnen als je een nieuw blok ingaat of er komen juist nieuwe vakken aan bod.</p>
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

<h1 class="beroepen">Toelating tot de studie informatica</h1>
<p class="tekst">Om te kunnen starten met de opleiding informatie is het van belang dat vooropleiding voldoende is. Hieronder een overzicht met welke vooropleidingen je de studie informatica mag starten.</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="lesson">Profiel</th>
        <th class="lesson">Toelating</th>
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

</div>
<?php 
@include('footer.html');
?>
