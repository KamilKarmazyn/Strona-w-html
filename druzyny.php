<!DOCTYPE HTML>
<?php
define("ROW_PER_PAGE",8);
require_once('db.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
#keyword{border: #CCC 1px solid; border-radius: 4px; padding: 7px;background:url("demo-search-icon.png") no-repeat center right 7px;}
.btn-page{margin-right:10px;padding:5px 10px; border: #CCC 1px solid; background:#FFF; border-radius:4px;cursor:pointer;}
.btn-page:hover{background:#F0F0F0;}
.btn-page.current{background:#F0F0F0;}
</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Opis" content="Witaj na stronie poświęconej Polskiej Ekstraklasie">
    <meta name="Autor" content="Kamil Karmazyn">
    <title>NASZA PIŁKA</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
   <link href="./Blog Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap v5.0_files/css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap v5.0_files/blog.css" rel="stylesheet">
<body style="background-image: url('a.jpg');">
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center" style="background-color:rgb(59, 57, 57);color: cornsilk;">
          <h1>NASZA PIŁKA</h1>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          </a>
          <a class="btn btn-sm btn-outline-secondary" style="background-color: white;" href="login.php">Zaloguj się</a>
        </div>
      </div>
    </header>
  
    <div class="nav-scroller py-1 mb-2 ">
      <nav style="background-color:rgb(59, 57, 57);"
      class="nav d-flex justify-content-between back">
        <a style="color: honeydew;" class="p-1 link-secondary" href="index.php">Strona główna</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="Spotkania.php">Spotkania</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="druzyny.php">Drużyny</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="pilkarze.php">Piłkarze</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="trenerzy.php">Trenerzy</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="sedziowie.php">Sędziowie</a>
        <a style="color: honeydew;" class="p-1 link-secondary" href="stadion.php">Stadiony</a>
     </p>
      </nav>
    </div>
  </div> 
    
      <div class="container">   
      <?php	
	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = 'SELECT * FROM druzyny WHERE Nazwa LIKE :keyword OR Stadion_domowy LIKE :keyword ORDER BY ID DESC ';
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * ROW_PER_PAGE;
	}
	$limit=" limit " . $start . "," . ROW_PER_PAGE;
	$pagination_statement = $pdo_conn->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/ROW_PER_PAGE);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $pdo_conn->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<form name='frmSearch' action='' method='post'>
<div style='text-align:right;margin:20px 0px;' ><input placeholder="Szukaj" style="background-color: white;" type='text' name='search[keyword]' value="<?php echo $search_keyword; ?>" id='keyword' maxlength='25'></div>
<table class='tbl-qa'>
  <thead>
	<tr>
	  <th class='table-header' >Nazwa</th>
	  <th class='table-header' >Stadion Domowy</th>


	</tr>
  </thead>
  <tbody id='table-body'>
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class='table-row'>
		<td><?php echo $row['Nazwa']; ?></td>
		<td><?php echo $row['Stadion_domowy']; ?></td>

	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
<?php echo $per_page_html; ?>
<div class="pt-5">
</form>

</body>

</html>











