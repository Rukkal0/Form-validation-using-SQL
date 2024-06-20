<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-6">
                <div class="text-success text-center mb-4">
                    <h1>Student Registration Form:</h1>
                </div>
                <form action="../config/add_user.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Student's Name.</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="address" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Address.</label>
                    </div>
                    <div class="row mt-3 g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" name="age" class="form-control" id="floatingInputGrid" placeholder="age">
                                <label for="floatingInputGrid">Age</label>
                            </div>
                        </div>
                        <div class="col-md mb-3">
                            <div class="form-floating">
                                <select class="form-select" name="class" id="floatingSelectGrid" aria-label="Floating label select example">
                                    <option selected>Class</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <label for="floatingSelectGrid">Select your respective class.</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="contact" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contact Number.</label>
                    </div>
                    <button class="btn-primary rounded" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>