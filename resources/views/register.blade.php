<!DOCTYPE html>
<html>
  <head>
    <title>from.html</title>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up From</h3>
  </head>
<from>
    <p><label for="fname">First name:</label><br /></p>
    <input type="text" id="fname" name="fname" /><br />
    <p><label for="lname">Last name:</label><br /></p>
    <input type="text" id="lname" name="lname" />
</from>

  <p>Gender</p>

<form>
    <input type="radio" id="Male" name="fav_language" value="Male" />
    <label for="Male">Male</label><br />
    <input type="radio" id="Famele" name="fav_language" value="Famele" />
    <label for="Famele">Famele</label><br />
    <input type="radio" id="Other" name="fav_language" value="Other" />
    <label for="Other">Other</label><br />
</form>
  <p>Nationality:</p>
</form>
<tr>
  <td>bahasa</td>
  <td>:</td>
  <td><select name="bahasa">
      <option value="indonesia"> indonesia</option>
      <option value="English">English</option>
  </select></td>
</tr>
<p>Language Spoken</p>
  <form>
    <input type="checkbox"id="vehicle2"name="vehicle2"value="Bahasa indonesia"/>
    <label for="vehicle1"> Bahasa indonesia</label><br />
    <input type="checkbox" id="vehicle2" name="vehicle2" value="English" />
    <label for="vehicle2"> English</label><br />
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Other" />
    <label for="vehicle3"> Other</label>
</form>
<p>Bio:</p>
<br>
<textarea name="bio" rows="6" cols="25"></textarea>
<br>
<br>
<a href="/welcome" class="submit"><button>Sign Up</button></a>
  </body>
</html>
