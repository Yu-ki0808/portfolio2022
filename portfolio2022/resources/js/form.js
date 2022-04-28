$(function () {
    //ハンバーガーメニュー


    // modalボタンにてメニュー名登録またはメニュー登録時のエラーの場合にmodalを開いてエラーを表示
    var input = document.getElementById('error_modal_open');
    var value = input.getAttribute('value');
    if (value == 1) {
        $('#menuAddModal').modal('show');
    } else if(value == 2){
        $('#regiserAddModal').modal('show');
    }

    var input = document.getElementById('level_up');
    var value = input.getAttribute('value');
    if (value == 1) {
        $('#levelModal').modal('show');

    }

    // ------------運動メニュー・運動登録フォームの内容変更------------------
    var products = sample;
    var noValue = $('#child').html(); //#childの最初の状態を保存
    $('#parent').on('change', function () {

        var cat = $(this).val(); //選択された項目のvalueを取得
        if (cat == '有酸素') {
            document.getElementById('set').style.display = "none";
            document.getElementById('target_unit').style.display = "block";
        } else {
            document.getElementById('target_unit').style.display = "none";
            document.getElementById('set').style.display = "block";
        }



        if (cat) { //valueに何か値が入っていた場合

            var item = products[cat]; //リストからカテゴリに登録された製品の配列を取得

            $('#child').html('');

            var option;

            for (var i = 0; i < item.length; i++) {

                option = '<option value="' + item[i] + '">' + item[i] + '</option>';

                $('#child').append(option);

            }

        } else { //valueに何も値が入っていない場合

            $('#child').html(noValue); //保存された最初の状態に戻す
        }

    });
});



//-----------日付取得スクリプト-----------------//
$(function () {
    // 現在の年月日を取得
    var time = new Date();
    var year = time.getFullYear();
    var month = time.getMonth() + 1;
    var date = time.getDate();

    // 選択された年月日を取得
    var selected_year = document.getElementById("year").value;
    var selected_month = document.getElementById("month").value;


    // 日(初期): 1~31 の値を設定
    for (var k = 1; k <= 31; k++) {
        $('#date').append('<option value="' + k + '">' + k + '日</option>');
    }


    // 日(変更)：選択された年・月に合わせて、適した日の値を選択肢にセットする
    $('#year,#month').change(function () {
        selected_year = $('#year').val();
        selected_month = $('#month').val();

        // 現在の年・月が選択された場合、日の選択肢は 1~現在の日付 に設定
        // それ以外の場合、各月ごとの最終日を判定し、1~最終日 に設定
        // if (selected_year == year && selected_month == month) {
        //     var last_date = date;
        // } else {
            // 2月：日の選択肢は1~28日に設定
            // ※ ただし、閏年の場合は29日に設定
            if (selected_month == 2) {
                if ((Math.floor(selected_year % 4 == 0)) && (Math.floor(selected_year % 100 != 0)) || (Math.floor(selected_year % 400 == 0))) {
                    last_date = 29;
                } else {
                    last_date = 28;
                }

                // 4, 6, 9, 11月：日の選択肢は1~30日に設定
            } else if (selected_month == 4 || selected_month == 6 || selected_month == 9 || selected_month == 11) {
                last_date = 30;

                // 1, 3, 5, 7, 8, 10, 12月：日の選択肢は1~31日に設定
            } else {
                last_date = 31;
            }
        // }

        $('#date').children('option').remove();
        $('#date').append('<option value="' + 0 + '"></option>');
        for (var m = 1; m <= last_date; m++) {
            $('#date').append('<option value="' + m + '">' + m + '日</option>');
        }
    });


});
