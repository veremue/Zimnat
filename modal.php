<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>W3.CSS Modal</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        
        <div class="w3-container w3-default">
  <h2>CALL ME</h2>
</div>

<form class="w3-container" action="/callme_exec.php" name="form1">
  <p>
  <label>First Name</label>
  <input class="w3-input w3-border" type="text" name="firstname" required></p>
  <p>
  <label>Last Name</label>
  <input class="w3-input w3-border" type="text" name="lastname" required></p>
  <p>
  <label>Email</label>
  <input class="w3-input w3-border" type="email" name="email" required></p>

  <p><label for="country">Country</label>
    <select class="w3-input w3-border" type="text" id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select></p>
  <p><label>Phone Number</label>
  <input class="w3-input w3-border" type="tel" name="phone" required></p>

  <button class="w3-btn w3-blue">Submit....</button>
</form>

      </div>
    </div>
  </div>
</div>
            
</body>
</html>
