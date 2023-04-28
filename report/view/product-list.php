<html>

<head>
    <link rel="icon" href="" type="image/icon type">
    <title>Task Management Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./view/css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="table-container">
        <?php
        if (!empty($productResult)) {
        ?>
            <table align="center">
                <tr>
                    <td width="5%">
                        <a href="" class="custom-logo-link" rel="">
                            <img src="" class="custom-logo" alt="" decoding="async" srcset="" />
                        </a>
                    </td>
                    <td width="90%">
                        <h2 align="center"> </h2>
                        <h3 align="center">All Task Management Record</h3>
                    </td>
                </tr>
            </table>
            <br><br>
            <table id="tab" align="center">
                <thead>
                    <tr align="center">
                        <th align="center" nowrap>Name</th>
                        <th align="center" nowrap>Address</th>
                        <th align="center" nowrap>Salary</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($productResult as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $productResult[$key]["name"]; ?></td>
                            <td><?php echo $productResult[$key]["address"]; ?></td>
                            <td><?php echo $productResult[$key]["salary"]; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <div class="btn">
                <form action="" method="post">
                    <button type="submit" id="btnExport" name='export' value="Export to Excel" class="btn btn-info">Export
                        to Excel</button>

                       <!-- &nbsp; &nbsp; &nbsp;
                                <a href="">
                                <button type="" id="btnHome" name='' value="" class="btn btn-primary">Home</button>
                                </a> -->
                </form>
            </div>
        <?php
        } else {
        ?>
            <div class="empty-table">
                <div class="svg-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                        <circle cx="12" cy="19" r="2" />
                        <path d="M10 3h4v12h-4z" />
                        <path fill="none" d="M0 0h24v24H0z" />
                    </svg>
                </div>
                No records found
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>