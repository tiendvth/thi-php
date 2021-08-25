<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <header class="col-12" style="height: 70px;display: flex;justify-content: center;margin-top: 10px">
        <a href="form.html" class="btn btn-primary" style="height: 40px">add product</a>
    </header>
    <hr>
    <div class="content row">
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded',function (){
        $.ajax({
            url:'http://localhost:8000/',
            type:'GET',
            success:function (data){
                $('.content').html('')
                console.log(data)
                var result = data
                for (let i = 0; i < result.length; i++) {
                    $('.content').append(`<div class="col-4" style="padding: 5px ; border: 1px #c6c6c6 solid">
            <img src="${result[i].thumbnail}" alt="" style="height: 250px;width: 100%;object-fit: cover">
            <br>
            <h2>${result[i].name}</h2>
            <p style="color: red;font-size: 25px">price : $ ${result[i].price} </p>
            <button class="btn btn-primary" style="width: 130px">Buy</button>
        </div>`)
                }
            },
            error:function (){
                alert('Không tìm thấy cơ sở dữ liệu!')
            }
        })
    })
</script>
</body>
</html>
