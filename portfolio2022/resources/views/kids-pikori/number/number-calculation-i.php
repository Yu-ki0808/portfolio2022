<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>足し算・引き算学習</title>

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
                          <tr class="number-title">
                              <th scope="col" colspan="12">
                                  <h2 class="fs-3 fw-bold">数字プログラム</h2>
                                  <h3>足し算・引き算</h3>
                                  <form name="faceForm">
                                  <div id="text">
                                      <img src="../img/number/<?php echo $random ?>.png" width="200px">
                                      <img src="../img/number/<?php echo $random1 ?>.png" width="200px">
                                  </div>
                                  <div>
                                  <button class=" btn btn-<?php echo $color ?> btn-lg fs-3 me-3"><?php echo $random ?></button>
                                  +
                                  <button class=" btn btn-<?php echo $color1 ?> btn-lg fs-3 me-3"><?php echo $random1 ?></button>
                                  =
                                      <input type="text" class="fs-3 text-center btn cal-input" size="2"  maxlength="2" name="face" id="answer" >
                                  </div>
                                      <div class="d-flex justify-content-between answer-contents">
                                          <button class="btn btn-outline-dark btn-lg fs-3 " type="reset">リセット！</button>
                                  </form>

                                  <a href="../controllers/number-calculation-i_controller.php" class="btn btn-primary fs-3">次へ</a>
                                  </form>
                                </div>
                </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($onelines as $key => $oneline) :?>
                        <th> 
                                        <input type="button" onClick="addTF(this.value)" class="btn btn-outline-primary btn-lg fs-5" value="<?php echo $oneline ?>">
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
