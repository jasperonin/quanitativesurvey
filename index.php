<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet"
      type = "text/css"
      href = "style.css" />
    <title></title>
  </head>
  <body>
    <h1 id="title">Survey Form</h1>
<div id="form-outer">
  <p id="description">
    Thank you for clicking on the Link
  </p>
  <form id="survey-form" method="post" action ="connect.php">
    <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="name">* Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name" required>
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label id="email-label" for="email">* Email: </label>
      </div>
      <div class="rightTab">
        <input type="email" name="email" id="email" class="input-field" required placeholder="Enter your Email">
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label id="number-label" for="age">* Age: </label>
      </div>
      <div class="rightTab">
        <input type="number" name="age" id="age" min="1" max="125" class="input-field" placeholder="Age">
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label for="currentPos" id="position" name="position">Are you currently a?</label>
      </div>
      <div class="rightTab">
        <select id="dropdown" name="position" class="dropdown"id="position">
      <option value>Select an option</option>
      <option>Student</option>
      <option>Employed</option>
      <option>Out of school</option>
      <option>Prefer not to say</option>
      <option value="other">Other</option>
    </select>
      </div>
    </div>
      <div class="rowTab">
        <div class="labels">
          <label for="currentPos">Are you currently using?</label>
        </div>
        <div class="rightTab">
          <select id="dropdown" name="carrier" class="dropdown" name ="carrier">
        <option  value>Select an option</option>
        <option>Globe</option>
        <option>Smart</option>
        <option>Prefer not to say</option>
        <option>Other</option>
      </select>
        </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label for="currentPos">How was your experience so far with your current network provider?</label>
      </div>
      <div class="rightTab">
        <select name="rating" class="dropdown" id="rating">
      <option value>Select an option</option>
      <option>I love it!</option>
      <option>I can manage.</option>
      <option>Not satisfied</option>
      <option>I prefer not to say</option>
    </select>
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label id="number-label" for="internet">* How many hours do you usually use the Internet? </label>
      </div>
      <div class="rightTab">
        <input type="number" name="hours" id="hours" min="1" max="125" class="input-field" placeholder="Hours">
      </div>
    </div>

    <div class="rowTab">
      <div class="labels">
        <label for="comments">Can you tell us more</label>
      </div>
      <div class="rightTab">
        <textarea id="comments" name= "comments"class="input-field" style="height:50px;resize:vertical;" name="comment" placeholder="Enter your comment here..."></textarea>
      </div>
    </div>
    <button id="submit" type="submit">Submit</button>
  </form>
</div>
  </body>
</html>
