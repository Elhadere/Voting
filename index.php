<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting system | login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light text-center">
    <h1 class="text-info text-center my-3">Voting System</h1>
    <div class="bg-info text-dark">
      <h2 class="text center"> Log in</h2>
        <div class="container py-3">
        <form action="log.php" method="post">
            
                <div class="mb-3">
                <input type="text" name="username" placeholder="Enter a username" class="form-control w-50 m-auto" required>
            </div>
            <div class="mb-3">
                <input type="text" name="phone" placeholder="Enter yourmobile number" class="form-control w-50 m-auto" required >
            </div>                
            <div class="mb-3">
                <input type="text" name="password" placeholder="Enter your password" class="form-control w-50 m-auto" required>
            </div>
            <div class="mb-3 ">
                <select name="std" class="form-control w-50 m-auto" required>
                  <option value="Voter" > Voter</option>
                  <option value="group"> Group</option>
                </select>
                <button class="btn btn-dark mt-4">Log in</button>
                <p>Don't have an account ? <a href="../parts/register.php" class="text-light"> Register here</a></p>
          </div>
        </div>
        </form>
    </div>
  </body>
</html>