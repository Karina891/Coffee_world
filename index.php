<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Coffee World | Etusivu</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
  <h1>Coffee World</h1>
  <nav>
    <a href="index.php">Etusivu</a>
    <a href="valikoima.html">Valikoima</a>
    <a href="tietoa.html">Tietoa meistä</a>
    <a href="yhteystiedot.html">Yhteystiedot</a>
  </nav>
</header>

<section class="why">
  <div class="section-title">Miksi Coffee World?</div>
  <div class="section-lead">
    Emme myy vain kahvia – jaamme tarinoita, makuja ja elämyksiä eri puolilta maailmaa.
  </div>

  <div class="why-grid">
    <div class="why-card">
      <h3>🌍 Alkuperä</h3>
      <p>
        Kahvimme tulevat suoraan tunnetuilta kahvialueilta kuten
        Brasiliasta, Kolumbiasta ja Etiopiasta. Jokainen papu kertoo oman tarinansa.
      </p>
    </div>

    <div class="why-card">
      <h3>☕ Laatu</h3>
      <p>
        Valikoimme kahvit huolella ja keskitymme tasapainoisiin,
        puhtaisiin makuprofiileihin – niin suodatinkahville kuin espressolle.
      </p>
    </div>

    <div class="why-card">
      <h3>🤝 Vastuullisuus</h3>
      <p>
        Teemme yhteistyötä vastuullisten tuottajien kanssa ja
        arvostamme kestävää viljelyä sekä reilua kauppaa.
      </p>
    </div>
  </div>
</section>

<main>
  <section class="hero">
    <h2>Löydä täydellinen kahvihetki</h2>
    <p>
      Coffee World tuo yhteen huolella valittuja kahveja eri puolilta maailmaa.
      Valikoimamme keskittyy erityisesti alkuperään, makuprofiileihin ja laatuun –
      jotta löydät helposti uuden suosikin arkeen tai lahjaksi.
    </p>

    <div class="hero-actions">
      <a class="btn" href="valikoima.html">Siirry valikoimaan</a>
      <a class="btn secondary" href="tietoa.html">Lue lisää meistä</a>
    </div>
  </section>

  <section class="section">
    <div class="section-title">Mistä kahvimme tulevat?</div>
    <div class="section-lead">
      Teemme yhteistyötä tuottajien ja paahtimoiden kanssa eri mantereilla.
      Kahvit valitaan niin, että maku ja tyyli vaihtelevat hedelmäisestä ja kukkaisesta
      pähkinäiseen ja suklaiseen.
    </div>

    <div class="map-block">
      <!-- Если хочешь другую картинку: просто замени ссылку ниже -->
      <img
        src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1600&q=80"
        alt="World map"
      />
      <div class="country-tags">
        <span class="tag">Brasil</span>
        <span class="tag">Kolumbia</span>
        <span class="tag">Etiopia</span>
        <span class="tag">Kenia</span>
        <span class="tag">Guatemala</span>
        <span class="tag">Indonesia</span>
      </div>
    </div>
  </section>
</main>
<section class="section">
  <div class="section-title">Uusimmat uutiset</div>

  <ul>
    <?php
    include "asetukset.php";

    $sql = "SELECT title FROM news ORDER BY date DESC LIMIT 3";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo "<li>" . $row["title"] . "</li>";
    }
    ?>
  </ul>
</section>
<footer>
  © 2026 Coffee World
</footer>

</body>
</html>
