<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Foto</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">


                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center"><b>Input Foto Guru</b> </h3>
                    <style type="text/css">
                        body{
                            background-image: url('images/bckgrnd1.png');
                        }
                        
                        h3{
                            font-size: 50px;
                            color: #839e6f;
                            font-weight: bold;
                            text-shadow: 2px 2px 0 rgb(255, 252, 252), 2px -2px 0 rgb(255, 255, 255), -2px -2px 0 rgb(255, 255, 255), -2px 2px 0 rgb(255, 255, 255);
                        }
                    </style>
				    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input type="text" name="title" class="form-control m-2" placeholder="Nama Guru">
        				 <input type="text" name="author" class="form-control m-2" placeholder="NIP">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="Jabatan"></Textarea>
                         <label class="m-2">Silahkan masukan foto guru berposisi potrait.</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                        <button href="{{ url('/index')}}"button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>









