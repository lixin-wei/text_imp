<?php
	require_once("../lib/mylib/db_info.php");


	$review_id = 0;
	if (isset($_POST['review_id'])) {
		$review_id = intval($_POST['review_id']);
	}
	// echo $review_id;

	$cut_words = "";
	if (isset($_POST['cut_words'])) {
		$cut_words = $_POST['cut_words'];
	}

	$words = explode(',',$cut_words);

    $label = 0;
    if(isset($_POST['label'])) {
        $label = intval($_POST['label']);
    }

    $sentiment = 0;
    if (isset($_POST['sentiment'])) {
        $sentiment = intval($_POST['sentiment']);
    }

	$sql = "DELETE FROM cut_word WHERE review_id='$review_id'";
	$db->query($sql);

	foreach ($words as $word) {
		// echo $word;
		$sql = "INSERT INTO cut_word(word, review_id) VALUES ('$word', '$review_id')";
		$db->query($sql);
	}

	$sql = "UPDATE review SET sentiment_id = $sentiment, label_id = $label WHERE review_id = $review_id";
	//var_dump($sql); die();
	$db->query($sql);
?>

<script>
	window.history.go(-1);
</script>
