</html>
</body>
<h1>Funktion auswählen</h1>
<form action="ergebniss.php" method="post" enctype="multipart/form-data">
<select name="Option">
  <option value="Neueschüler">Neue Schüler</option>
  <option value="Austritte">Austritte</option>
  <option value="Neuohnemail">Neueintritte ohne Email</option>
<input type="submit" value="Auswählen">
</form>
<h2>Bitte Wählen Sie den Upload für den Active Directory Emailadressen Export</h2>
<form action="libs/upload3.php" method="post" enctype="multipart/form-data">
<input type="file" name="datei"><br>
<input type="submit" value="Hochladen">
</form>
</br></br>
<h2>Bitte Wählen Sie den Upload für den Export von den Neuen Schülern</h2>
<form action="libs/upload4.php" method="post" enctype="multipart/form-data">
<input type="file" name="datei"><br>
<input type="submit" value="Hochladen">
</form>

<form action="funktionwahl.php" mehtod="post" enctype="multipart/form-data">
  <input type="submit" value="Weiter">
</form>
</body>
</html>
