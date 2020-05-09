<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\fonts\all.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="pedagog_js.php"></script>
 
    <title>Document</title>
    <script type="text/javascript">
    function GenerateTable() {
        //Build an array containing Customer records.
        var students = new Array();
        students.push(["Nr.", "Emer Mbiemri Studenti", "Nota"]);
        students.push([1, "Megi Menalla", " "]);
        students.push([2, " filan fisteku", " "]);
        students.push([3, "Suzanne ", " "]);
        students.push([4, "Robert ", " "]);
        students.push([1, "John ", " "]);
        students.push([2, "Mudassar ", " "]);
        students.push([3, "Suzanne ", " "]);
        students.push([4, "Robert ", " "]);
        students.push([1, "John ", " "]);
        students.push([2, "Mudassar ", " "]);
        students.push([3, "Suzanne ", " "]);
        students.push([4, "Robert ", " "]);        
        students.push([1, "John ", " "]);
        students.push([2, "Mudassar ", " "]);
        students.push([3, "Suzanne ", " "]);
        students.push([4, "Robert ", " "]);
        //Create a HTML Table element.
        var table = document.createElement("TABLE");
        table.border = "1";
 
        //Get the count of columns.
        var columnCount = students[0].length;
 
        //Add the header row.
        var row = table.insertRow(-1);
        for (var i = 0; i < columnCount; i++) {
            var headerCell = document.createElement("TH");
            headerCell.innerHTML = students[0][i];
            row.appendChild(headerCell);
        }
 
        //Add the data rows.
        for (var i = 1; i < students.length; i++) {
            row = table.insertRow(-1);
            for (var j = 0; j < columnCount; j++) {
                var cell = row.insertCell(-1);
                cell.innerHTML = students[i][j];
            }
        }
 
        var dvTable = document.getElementById("dvTable");
        dvTable.innerHTML = "";
        dvTable.appendChild(table);
    }



    function GenerateTable1() {
        //Build an array containing Customer records.
        var students = new Array();
        students.push(["Nr.", "Emer Mbiemer Studenti", "Nota  "]);
        students.push([1, "Megi Menalla", "5 "]);
        students.push([2, "Mudassar ", " 5"]);
        students.push([3, "Suzanne ", "5 "]);
        students.push([4, "filan fisteku", "5 "]);
        students.push([1, "John ", " 5"]);
        students.push([2, "Mudassar ", "5 "]);
        students.push([3, "Suzanne ", "5 "]);
        students.push([4, "Robert ", " 5"]);
        students.push([1, "John ", " 5"]);
        students.push([2, "Mudassar ", " 5"]);
        students.push([3, "Suzanne ", "5 "]);
        students.push([4, "Robert ", " 5"]);        
        students.push([1, "John ", "5 "]);
        students.push([2, "Mudassar ", " 5"]);
        students.push([3, "Suzanne ", "5 "]);
        students.push([4, "Robert ", " 5"]);
        //Create a HTML Table element.
        var table = document.createElement("TABLE");
        table.border = "1";
 
        //Get the count of columns.
        var columnCount = students[0].length;
 
        //Add the header row.
        var row = table.insertRow(-1);
        for (var i = 0; i < columnCount; i++) {
            var headerCell = document.createElement("TH");
            headerCell.innerHTML = students[0][i];
            row.appendChild(headerCell);
        }
 
        //Add the data rows.
        for (var i = 1; i < students.length; i++) {
            row = table.insertRow(-1);
            for (var j = 0; j < columnCount; j++) {
                var cell = row.insertCell(-1);
                cell.innerHTML = students[i][j];
            }
        }
 
        var dvTable1 = document.getElementById("dvTable1");
        dvTable1.innerHTML = "";
        dvTable1.appendChild(table);
    }
</script>
</head>
<body >

<div class="container mt-lg-4"> 
    <div class="row">
        <div class="col-2">
            <div class="dropdown ">
                        <button type="button" class="btn btn btn-outline-danger dropdown-toggle pl-3 pr-3 " data-toggle="dropdown">
                        Zgjidh vitin
                        </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">viti 1</a>
                    <a class="dropdown-item" href="#">viti 2</a>
                    <a class="dropdown-item" href="#">viti 3</a>
                    </div>
                </div> 
            </div>
        <div class="col-2">
            <div class="dropdown">
                    <button type="button" class="btn btn btn-outline-danger dropdown-toggle pl-3 pr-3" data-toggle="dropdown">
                    Zgjidh lenden
                    </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Lenda 1</a>
                        <a class="dropdown-item" href="#">Lenda 2</a>
                        <a class="dropdown-item" href="#">Lenda 3</a>
                        </div>
                </div>
            </div>       
        

    
            <div class="col-4">
                <button type="button"  onclick="GenerateTable()" class="btn btn btn-outline-dark">
                    Gjenero tabele
                    </button>
                        
                <button type="button" class="btn btn btn-outline-danger ml-5" >
                        Shto Nota
                        </button>
                <hr />
                <div id="dvTable"></div>
            </div>

            <div class="col-4">
            <button type="button"  onclick="GenerateTable1()" class="btn btn btn-outline-dark">
                    Shiko Nota
                    </button>
                <hr />
                <div id="dvTable1"></div>            
            </div>   
        </div>
    </div>
</div>
</body>
</html>