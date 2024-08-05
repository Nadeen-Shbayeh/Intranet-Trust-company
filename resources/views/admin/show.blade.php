<!DOCTYPE html>
<html>
<head>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
/* Reset some default browser styling */
body, h1, h2, p, ul {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
  
}

.container {
 
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
}

.profile-picture img {

    width: 50%;
    border-bottom: 5px solid #008CBA;
}

.bio {
    padding: 20px;
}

h1 {
    font-size: 2.5rem;
    color: #333;
}

h2 {
    font-size: 1.5rem;
    color: #008CBA;
    margin-bottom: 10px;
}

p {
    font-size: 1rem;
    line-height: 1.6;
    color: #666;
   
}

.contact-info {
    list-style-type: none;
}

.contact-info li {
    font-size: 1rem;
    color: #444;
    margin: 5px 0;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="profile-picture">
            <img src="{{ url('storage/img/'. $user->file)      }}" alt="Profile Picture">
        </div>
        <div class="bio">
            <h1>Full Name : {{ $user->name }}</h1>
            <h2>Employee ID : {{ $user->emp_id }}</h2>
            <p class="card-text">ID Number : {{ $user->user_id }}</p>
            <p class="card-text">Department : {{ $user->department }}</p>
            <p class="card-text">Branch : {{ $user->branch }}</p>
            <p class="card-text">Employee ID : {{ $user->emp_id }}</p>
            <ul class="contact-info">
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Phone:</strong> {{ $user->mobile_num }}</li>
                <li><strong>Location:</strong> {{ $user->address }}</li>
                <p class="card-text">Gender : {{ $user->gender }}</p>
                <p class="card-text">User Type : {{ $user->usertype }}</p>
                <p class="card-text">creation date : {{ $user->created_at }}</p>
        <p class="card-text">Last update : {{ $user->updated_at }}</p>
        <p class="card-text">User account status : {{ $user->status }}</p>
            </ul>
            <button onclick="window.print()">Print this page</button>
        </div>
    </div>
   
  
</body>
</html>


  
  </div>
</div>