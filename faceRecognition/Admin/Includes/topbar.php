
<?php
$fullName = ""; 
if (isset($_SESSION['userId'])) {
    $userId = $conn->real_escape_string($_SESSION['userId']);

    $query = "SELECT * FROM tbladmin WHERE Id = $userId";

    $rs = $conn->query($query);

    if ($rs) {
        $num = $rs->num_rows;

        if ($num > 0) {
            $row = $rs->fetch_assoc();

            $fullName = $row['firstName'] . " " . $row['lastName'];
            
                } else {
            echo "Admin not found";
        }
    } else {
        echo "Error: " . $conn->error;
    }
} else {
 header('location: ../index.php');
}


?>
<section class="header">
    <div class="logo">
        <i class="ri-menu-line icon icon-0 menu"></i>
        <h2>Project.</h2>
    </div>
    <div class="search--notification--profile">
        <div id="searchInput" class="search">
            <input type="text" id="searchText" placeholder="Search .....">
            <button onclick="searchItems()"><i class="ri-search-2-line"></i></button>
        </div>

    </div>
</section>



<script>
    function searchItems() {
        var input = document.getElementById('searchText').value.toLowerCase();
        var rows = document.querySelectorAll('table tr'); 

        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td'); 
            var found = false;

            cells.forEach(function(cell) {
                if (cell.innerText.toLowerCase().includes(input)) { 
                    found = true;
                }
            });

            if (found) {
                row.style.display = ''; 
            } else {
                row.style.display = 'none'; 
            }
        });
    }
</script>
