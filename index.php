<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>
    <?php
    include_once ("libs/dbconnect.php");
    $link = dbconn();
    selectdb($link, "ADexport");
    ?>
  </head>

	<body>
    <?php
        include_once ("libs/replacespecialchar.php");
    $string = "Ich häbe Hünger!";
    //sonderzeichen($string);
    echo sonderzeichen($string);
    ?>
    <h2>Bitte Wählen Sie den Upload für den Active Directory Export</h2>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="datei"><br>
		<input type="submit" value="Hochladen">
		</form>
  </br></br>
    <h2>Bitte Wählen Sie den Upload für den Kaschuso Export für GIBS</h2>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="datei"><br>
    <input type="submit" value="Hochladen">
    <input type="hidden" name="Teilschule" value="gibsol">
    <?php
    include_once 'libs/teilschulabfrage.php';
    $Teilschule = "gibsol";
    teilschulabfrage($Teilschule);
    ?>
    </form>
    <h2>Bitte Wählen Sie den Upload für den Kaschuso Export für KBS</h2>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="datei"><br>
    <input type="submit" value="Hochladen">
    <input type="hidden" name="Teilschule" value="kbsol">
    <?php
    $Teilschule = "kbsol";
    teilschulabfrage($Teilschule);
    ?>
    </form>
    <h2>Bitte Wählen Sie den Upload für den Kaschuso Export für EBZ</h2>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="datei"><br>
    <input type="submit" value="Hochladen">
    <input type="hidden" name="Teilschule" value="ebzol">
    <?php
    $Teilschule = "ebzol";
    teilschulabfrage($Teilschule);
    ?>
    </form>
    <h2>Bitte Wählen Sie den Upload für den Kaschuso Export für BZGS GB</h2>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="datei"><br>
    <input type="submit" value="Hochladen">
    <input type="hidden" name="Teilschule" value="bzgsolgb">
    <?php
    $Teilschule = "bzgsolgb";
    teilschulabfrage($Teilschule);
    ?>
    </form>
    <h2>Bitte Wählen Sie den Upload für den Kaschuso Export für BZGS HF</h2>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="datei"><br>
    <input type="submit" value="Hochladen">
    <input type="hidden" name="Teilschule" value="bzgsolhf">
    <?php
    $Teilschule = "bzgsolhf";
    teilschulabfrage($Teilschule);
    ?>
    </form>
    <form action="funktionwahl.php" mehtod="post" enctype="multipart/form-data">
      <input type="submit" value="Weiter">
    </form>
	</body>
</html>
