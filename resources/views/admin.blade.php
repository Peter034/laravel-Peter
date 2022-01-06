<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/admin.css')}}">
    <script src="{{URL::asset('assets/js/admin.js')}}"></script>
</head>
<style>
    table { width: 200px; min-height: 25px; line-height: 25px; text-align: center; border-color:black; border-collapse: collapse;}
    table td{
        width:100px;
    }
</style>
<body>


<div class="container list">

    <!-- Category selection -->
    <label for="cars">Choose a category:</label>
    <select onchange="categorySelectChange(this)" id="categorySelection">

    </select>

    <!-- Price range selection -->
    <span>Price Range:</span>
    <select onchange="priceSelectChange(this)" id="productSelection">
        <option value="-1" id="range-1">All</option>
        <option value="0" id="range0">0 - 100</option>
        <option value="100" id="range100">100 - 200</option>
        <option value="200" id="range200">200 - 300</option>
        <option value="300" id="range300">300 - 400</option>
        <option value="400" id="range400">400 +</option>
    </select>

    <!-- do a sort by price ( either from most expansive to least or the other way) -->
    <span>Sort by price:</span>
    <select onchange="sortObj(this)" id="sortSelection">
        <option value="default" id="default">Default</option>
        <option value="ascend" id="ascend">from low to high</option>
        <option value="descend" id="descend">from high to low</option>
    </select>
    <br /> <br />

    <!-- search by title -->
    <input type="text" id="searchInput" onkeydown="searchEvent(event)" onchange="search()">
    <button onclick="search()">Search</button>
    <br /> <br />

    <div class="row" id="contentContainer">

    </div>
    <div class="row justify-content-center" id="pageBarContainer">

    </div>
</div>

<br/>

<div class="container">
    <div class="row justify-content-center" >
        <form id="form" method="post" action="api/product">
            <table  border="1" align="center">
                <tr>
                    <th>ProductName</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Operator</th>
                </tr>
                <tr>
                    <td><input type="text" name="title" /><br /></td>
                    <td><input type="text" name='price'/></td>
                    <td>
                        <select name="categoryId">
                            <option value="1">BALLOON & FLOWER STANDS</option>
                            <option value="2">CARTS</option>
                            <option value="3">PARTY HIRE</option>
                        </select>
                    </td>
                    <td><input type="submit" value="add"/></td>
                </tr>
            </table>
        </form>
    </div>
</div>


<script>

</script>
</body>
</html>
