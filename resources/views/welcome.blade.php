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
    <!-- Main Body -->
    <section>
        <div class="container">
            <div class="d-flex flex-wrap mx-n2">
                <div class="row">
                    <div class="col-sm-5 col-md-6 col-12 pb-4">
                        <h1>Comments</h1>
                        @foreach($comments as $comment)

                        <div class="comment mt-4 text-justify float-left">
                            <img src="{{asset($comment->image)}}" alt="" class="rounded-circle" width="40" height="40">
                            <h4>{{$comment->name}}</h4>
                            <span>-{{$comment->date}} </span>
                            <br>
                            <p>{{$comment->message}}</p>
                        </div>
                        <div class="w3-row-padding w3-border-top w3-padding-8">
                            <a href="/edit/{{$comment->id}}" class="w3-button w3-left w3-xlarge"><i class="fa-solid fa-pen-to-square" style="color: #049175f7"></i></a>
                            <a href="/delete/{{$comment->id}}" class="w3-button w3-right w3-xlarge"><i class="fa-solid fa-trash" style="color: #b90707"></i></a>
                        </div>
                        @endforeach

                        <!-- end of for each loop here -->
                        <button class="w3-button w3-xxlarge w3- w3-orange bordergit branch -M main w3-round-large w3-display-bottomright w3-margin" onclick="document.getElementById('add').style.display='block'" style="position: fixed; right: 16px; bottom: 16px">
                            <i class="fa-sharp fa-solid fa-plus fa-beat-fade fa-xl" style="color: #0b120a"></i>
                        </button>



                        <!-- form -->
                        <div id="add" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
                                <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                                    <span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright">&times;</span>

                                    <form action="/create" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <h4 style="color: white;">Leave a comment</h4>
                                            <label for="message">Message</label>
                                            <textarea name="message" msg cols="30" rows="5" class="form-control" style="background-color: white;"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="date" class="form-control">
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



    </section>

</body>

</html>