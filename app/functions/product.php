<?php

function fetch_products($mysqli) {

	// perfumesのDBを選択する
	 $query = "SELECT
					 product_id,
					 product_name,
					 product_description
	 			FROM
	 				perfumes";

	$result = $mysqli->query($query);

	if( !$result ) {
		// エラーが発生した場合
		exit;
	} else {
		// カテゴリーが存在しない場合
		if( mysqli_num_rows($result) == 0 ){
			exit;
		}else {
			// エラーがない場合
			// 連想配列にデータを格納する
			$product_data = array();
			while ($row = $result->fetch_assoc()) {
				$product_data[] = $row;
			}

			return $product_data;
		}
	}

}