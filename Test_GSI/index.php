<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel="stylesheet" media="all" type="text/css" href="css/sudokuJS.css">
		<link rel="stylesheet" media="all" type="text/css" href="css/style.css">
		<style>
			* {
				margin:0; padding:0;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			.wrap {
				padding: 2em 1em;
				width: 400px;
				max-width: 100%;
				margin-left: auto;
				margin-right: auto;
			}

			@media(min-width: 30em){
				.wrap{
					width: 490px;
				}
				.sudoku-board input {
					font-size: 24px;
					font-size: 1.5rem;
				}
				.sudoku-board .candidates {
					font-size: .8em;
				}
			}

		</style>

		<title>Home</title>

		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="javascript/sudokuJS.js"></script>
	</head>

	<body>
	<div class="wrap">
		<h1 align="center" style="margin-bottom: 5px;" class="judul">Selamat Datang</h1>
		<div id="sudoku" class="sudoku-board">
		</div>
		<font class="text">Masukkan angka:</font> 
		<input class="input" type="text" name="generate">
		<input type="submit" name="generate" value="Generate" class="btn btn-primary btn-round text">
	</div>

	<script>
		var board = [
			 ,5, , , ,2,3,8,
			, ,1, , , ,4, , ,5
			, ,2, , ,5, , , ,
			,5, ,7,8, , ,2,1,
			,4,6, ,2,3,7, ,5,8
			, ,9,8, , ,5,4, ,7
			, , , , ,6, , ,4,
			,1, , ,9, , , ,6,
			, ,7,3,4, , , ,9,undefined
		]

		var mySudokuJS = $("#sudoku").sudokuJS({
			board: board
		});

		$(".js-solve-step-btn").on("click", mySudokuJS.solveStep);
		$(".js-solve-all-btn").on("click", mySudokuJS.solveAll);
	</script>
	</body>
</html>
