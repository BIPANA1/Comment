<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>


</head>

<body>


    <div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                <h2>Edit Comment</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/edit-comment/{{$comment->id}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <h4 style="color: white;">Leave a comment</h4>
                        <label for="message">Message</label>
                        <textarea name="message" msg cols="30" rows="5" class="form-control" style="background-color: white;">{{$comment->message}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$comment->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$comment->email}}">
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="date" class="form-control" value="{{$comment->date}}">
                    </div>

                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="post" class="btn" value="Post Comment">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


</body>

</html>