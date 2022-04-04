<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>カタカナ単語3文字学習</title>

<script type="text/javascript">
function addTF(str)
{
	let value = document.faceForm.face.value += str;
    var answer = JSON.parse('<?php echo $answer_json; ?>'); //JSONデコード

    if(answer == value){
        console.log('answer');
        const text = document.getElementById('text');
      text.innerHTML = '<img src="../img/seikai.png" width="100px">';
      audio = new Audio();
    audio.src = "../sound/seikai.mp3";
    audio.play();
    }
}
        </script>
    
</head>      
    <div class="container text-center">
          <div class="d-flex justify-content-center">
              <div class="d-flex">
                  
                  <table class="table table-bordered">
                      <thead>
                          <tr class="katakana-title">
                              <th scope="col" colspan="12">
                                  <h2 class="fs-3 fw-bold">カタカナプログラム</h2>
                                  <h3>カタカナ単語<span class="fs-1">3</span>文字</h3>
                                  <button class="btn btn-info " id="text"><img src="../img/words3/<?php echo $random ?>.png" width="100px"></button>
                                  <form name="faceForm">
                                      <div class="d-flex justify-content-between answer-contents">
                                  <button class="btn btn-outline-dark btn-lg fs-3 " type="reset">リセット！</button>
                                  <input type="text" class="fs-3 text-center"  maxlength="2" name="face" id="answer" >
                                  <a href="../controllers/katakana-3_controller.php" class="btn btn-primary fs-3">次へ</a>
                                  </form>
                                </div>

                </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($oneLines as $key => $oneLine) :?>
                        <th> 
                                        <input type="button" onClick="addTF(this.value)" class="btn btn-outline-primary btn-lg fs-5" value="<?php echo $key ?>">
                            </th>
                        <?php endforeach ?>
                </tr>
                <?php foreach($twoLines as $key => $twoLine) :?>
                        <th> 
                            <?php if($twoLine == ""):?>
                                    <?php else : ?>
                                        <input type="button" onClick="addTF(this.value)" class="btn btn-outline-success btn-lg fs-5" value="<?php echo $key ?>">
                            <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
                </tr>
                <?php foreach($threeLines as $key => $threeLine) :?>
                        <th> 
                            <?php if($threeLine == ""):?>
                                    <?php else : ?>
                                        <input type="button" onClick="addTF(this.value)" class="btn btn-outline-warning btn-lg fs-5" value="<?php echo $key ?>">
                                <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
                </tr>
                <?php foreach($fourLines as $key => $fourLine) :?>
                        <th> 
                            <?php if($fourLine == ""):?>
                                    <?php else : ?>
                                        <input type="button" onClick="addTF(this.value)" class="btn btn-outline-danger btn-lg fs-5" value="<?php echo $key ?>">
                                <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
                </tr>
                <?php foreach($fiveLines as $key => $fiveLine) :?>
                        <th> 
                            <?php if($fiveLine == ""):?>
                                    <?php else : ?>
                                        <input type="button" onClick="addTF(this.value)" class="btn btn-outline-info btn-lg fs-5" value="<?php echo $key ?>">
                                <?php endif?>
                        </th>
                        <?php endforeach ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
        </div>

        <?php include('../views/layouts/contents-list.php'); ?>
        <?php include('../views/layouts/footer.php'); ?>
