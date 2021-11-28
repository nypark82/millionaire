<?php
  	$title1 = 'リンカーンは大統領になる前は何をしていたか？';

    $question1 = ['レスラー', 'プロ野球選手', '漁師', 'タクシー運転手'];
    
    $title2 = '日本で最初に販売されたアイスクリームの値段は?';
    
    $question2 = ['8000円', '3000円', '1000円', '500円'];
    
    $title3 = 'お坊さんが木魚を叩く意味は?';
  
    $question3 = ['眠くならないようにするため', '故人が天国に行けるため', 'お経にリズムをつけるため', '悪い霊を寄せ付けないため'];

    $answers = [$question1[0],$question2[0],$question3[0]];
  
    shuffle($question1);
  
    shuffle($question2);
  
    shuffle($question3);

    $questions = [$question1,$question2,$question3];
    $titles = [$title1,$title2,$title3];
?>