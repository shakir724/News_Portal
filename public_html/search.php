
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--      BOXICONS-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>

    <style>
        #searchbar {
            padding: 20px;
        }

        .search-container {
            display: flex;
        }

        .search-container .box {
            background: #e6e6e6;
            box-shadow: 1px 3px 8px #999999;
            width: 100%;
        }

        .search-container .box i {
            font-size: 20px;
            padding: 5px 0 0 5px;
        }

        .search-box {
            background: none;
            border: none;
            outline: none;
            width: 85%;
        }

        .search-container button {
            border: none;
            background: none;
            outline: none;
            font-weight: 500;
            font-size: 15px;
        }

        .filter-row {
            margin-top: 20px;
        }

        .filter-input {
            width: 100%;
            height: 30px;
            border-radius: 6px;
            border: 1px solid;
            margin-top: -4px;
        }

        .filter-label {
            font-size: 16px;
        }

        /*    ------postnews checkbox--------*/
        .selectBox,
        .selectBox1 {
            position: relative;
        }

        .selectBox select {
            width: 100%;
            margin-top: 5px;
            padding: 4px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            color: #4d4d4d;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkBoxes,
        #checkBoxes2 {
            display: none;
            border: 1px solid #d9d9d9;
            background: #fff;
        }

        #checkBoxes input[type=checkbox],
        #checkBoxes2 input[type=checkbox] {
            margin-left: 8px;
        }

        #checkBoxes label,
        #checkBoxes2 label {
            display: block;
            font-size: 12px;
        }

        #checkBoxes label:hover,
        #checkBoxes2 label:hover {
            background-color: #d9d9d9;
        }

        /*        ------------*/
        .filter {
            display: flex;
            margin-top: 20px;
        }

        .filter .filter-col {
            width: 38%;
        }

        .filter-label {
            font-size: 14px;
        }

        .card-date {
            margin-bottom: 0;
            font-size: 9px;
            color: #595959;
        }


        .card-title {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .card-p {
            font-size: 14px;
            text-align: justify;
            line-height: 1.4;
            margin-bottom: 0;
        }

        .card {
            padding: 8px;
            box-shadow: 0px 0px 8px #595959;
            margin-top: 20px;
        }

        .card-img {
            width: 100%;
            height: 120px;
            border-radius: 10px;
        }

        @media screen and (min-width: 780px) {
            body {
                padding: 0 32%;
            }
        }

        @media screen and (max-width: 360px) {
            .filter-label {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <section id="searchbar">
        <div class="search-container">
            <div class="box">
                <i class='bx bx-search' style='color:#f7a71e'></i>
                <input type="text" placeholder="Search" class="search-box">
            </div>
            <button>Cancel</button>
        </div>

        <div class="filter">
            <div class="filter-col">
                <label for="key" class="filter-label">Search by keyword</label>
                <input type="text" id="key" class="filter-input">
            </div>
            <div class="filter-col ml-3">
                <label class="filter-label">Filter by category</label>
                <div class="multipleSelection post-category-check" id="manualDrop1">
                    <div class="selectBox1" onclick="showCheckboxes()">
                        <select class="filter-input">
                        </select>
                        <div class="overSelect"></div>
                    </div>

                    <div id="checkBoxes" onchange="change_session()">
                        <label for="first">
                            <input type="checkbox" id="first" />
                            Category-1
                        </label>

                        <label for="second">
                            <input type="checkbox" id="second" />
                            Category-2
                        </label>
                        <label for="third">
                            <input type="checkbox" id="third" />
                            Category-3
                        </label>
                        <label for="fourth">
                            <input type="checkbox" id="fourth" />
                            Category-4
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a href="#" style="color: inherit; text-decoration: none;">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <p class="card-date">Posted on: 30/03/2019</p>
                            <h6 class="card-title">Lorem ipsum dolor sit amet</h6>
                            <p class="card-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="col-5">
                            <img src="search_1.jpg" class="card-img">
                        </div>
                    </div>
                </div>
            </a>

            <div class="card">
                <div class="row">
                    <div class="col">
                        <p class="card-date">Posted on: 30/03/2019</p>
                        <h6 class="card-title">Lorem ipsum dolor sit amet</h6>
                        <p class="card-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-5">
                        <img src="search_2.jpg" class="card-img">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="col">
                        <p class="card-date">Posted on: 30/03/2019</p>
                        <h6 class="card-title">Lorem ipsum dolor sit amet</h6>
                        <p class="card-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-5">
                        <img src="search_3.jpg" class="card-img">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="col">
                        <p class="card-date">Posted on: 30/03/2019</p>
                        <h6 class="card-title">Lorem ipsum dolor sit amet</h6>
                        <p class="card-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-5">
                        <img src="search_4.jpg" class="card-img">
                    </div>
                </div>
            </div>


        </div>



    </section>
    <script>
        var showCheckbox = true;

        function showCheckboxes() {
            var checkboxes =
                document.getElementById("checkBoxes");

            if (showCheckbox) {
                checkboxes.style.display = "block";
                showCheckbox = false;
            } else {
                checkboxes.style.display = "none";
                showCheckbox = true;
            }
        }
    </script>

</body></html>
