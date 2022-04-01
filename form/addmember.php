<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/">
        <div class="banner">
          <h1>Add Member</h1>
        </div>
        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="name" placeholder="First" />
            <input type="text" name="name" placeholder="Last" />
          </div>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="email" name="email"/>
        </div>
        <div class="item">
          <p>Password</p>
          <input type="password" name="language"/>
        </div>
        <div class="item">
          <p>Phone</p>
          <input type="text" name="phone" placeholder="### ### ####"/>
        </div>
        
        <div class="question">
          <p>What is the best way to contact you?</p>
          <div class="question-answer">
            <div>
              <input type="checkbox" value="none" id="checkbox_1" name="contact1"/>
              <label for="checkbox_1" class="checkbox"><span>Phone</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_2" name="contact2"/>
              <label for="checkbox_2" class="checkbox"><span>Email</span></label>
            </div>
            <div>
              <input type="checkbox" value="none" id="checkbox_3" name="contact3"/>
              <label for="checkbox_3" class="checkbox"><span>Either</span></label>
            </div>
          </div>
        </div>
        
        
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
</body>
</html>