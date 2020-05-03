<html>

    <head>
        <title>
            ATG Submit Form
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

        body{
            margin:0;
            padding:0;
            text-align:center;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(26,98,98,1) 49%, rgba(152,103,236,1) 77%);
            background-size:cover;
            font-family:Century Gothic;
        }
        .header {
            margin-top:100px;
            color:#ff5527;
        }
        .header h1{
            font-size:48px;
            font-family:sanserif;
            line-height:10px;
        }
        .header h2{
            font-size:32px;
            line-height:10px;
        }

        form{
            margin-top:50px;

        }

        .form-control{
            width:600px;
            background:transparent;
            border:none;
            outline:none;
            border-bottom:1px solid grey;
            border-right:1px solid grey;
            border-radius:5px;
            color:#fff;
            font-size:18px;
            margin-bottom:16px;
        }

        input{
            height:45px;
            color:#fff;
        }
        form .submit{
            background-color:#ff5722;
            border-color:transparent;
            color:#fff;
            font-size:20px;
            letter-spacing:2px;
            height:50px;
            margin-top:20px;
            transition:0.4s ease;
            border-radius:2px;
        }

        form .submit:hover{
            background-color:#f44336
            cursor:pointer;
        }

        </style>
    </head>

    <body>

        <div class="header">
            <h1>ATG </h1>
            <h2>Across The Globe</h2>
        </div>
        <div class="form">
            @if($errors->any())
                @foreach($errors->all() as $error)
                {{$error}}
                @endforeach
            @endif
            <form method="POST", action="submit">
                @csrf
                <input type="text", class="form-control", name="name", placeholder="Name" ><br><br>
                <input type="text", class="form-control", name="email", placeholder="Email"><br><br>
                <input type="text", class="form-control", name="pincode", placeholder="Pincode" ><br><br>
                <button type= "submit", class="form-control submit",>Submit</button>
            </form>
        </div>

        <br><br>

        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
        </script>
    </body>

</html>
