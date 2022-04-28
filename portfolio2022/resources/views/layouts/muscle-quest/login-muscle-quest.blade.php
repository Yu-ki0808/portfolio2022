<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Google-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap5 css&js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="{{secure_asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/css/app1024.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/css/app599.css')}}">
</head>

<!-- 体重Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{route('weight.create')}}" method="POST">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">体重を入力</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center modal-input">
          <label for="" class="me-2">体重</label>
          <input type="number" step="0.1" class="w-25" name="weight_record">
          <span class="fw-bold fs-5">Kg</span><br>
          <label for="" class="me-2">筋肉量</label>
          <input type="number" step="0.1" class="w-25" name="muscle_mass">
          <span class="fw-bold fs-5">Kg</span><br>
          <label for="" class="me-2">体脂肪</label>
          <input type="number" step="0.1" class="w-25" name="body_fat">
          <span class="fw-bold fs-5">%</span><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        <input type="submit" class="btn btn-primary">
      </form>
      </div>
    </div>
  </div>
</div>





