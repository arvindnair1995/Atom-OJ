<?php
session_start();
?>

<span style="font-size: 30px;color: #33334d;font-weight: 600"><hr>#Problem Set<hr></span>
<table class="table table-hover">
    <tr>
        <th>Sl.No</th>
        <th>Problem</th>
        <th>Status</th>
    </tr>
    <?php
    include_once 'connect.php';
    $cwid = $_SESSION['cw_id'];
    $regno = $_SESSION['regno'];
    $sql = "select Problem_Id from PSET where Cw_Id='$cwid';";
    $res = $conn->query($sql);
    $rows = $res->fetch_assoc();
    print_r($rows);
    $sql2 = "select Status from LAB_GDPTS WHERE Reg_No = '$regno' and Cw_Id ='$cwid';";
    $res = $conn->query($sql2);
    $r = $res->fetch_array();
    $statusString = str_split($r['Status']);
    print_r($statusString);
    $index = 0;

    foreach ($rows as $row) {
        echo "loop";
        $sql = "select P_Name from PROBLEMS where Problem_Id ='$row';";
        $p = $conn->query($sql);
        $pn = $p->fetch_assoc();
        $pnme = $pn['P_Name'];
        switch($statusString[$index]) {
            case 0: echo "<tr class='not_tried'>".
                            "<td>".$index."</td>".
                            "<td><a href='#' id='".$row."'>".$pnme."</td>".
                            "<td>Not Tried Yet!</td>";
                            break;
            case 1: echo "<tr class='wrong'>".
                "<td>".$index."</td>".
                "<td><a href='#' id='".$row."'>".$pnme."</td>".
                "<td>Wrong Algorithm!</td>";
                break;
            case 2: echo "<tr class='accepted'>".
                "<td>".$index."</td>".
                "<td><a href='#' id='".$row."'>".$pnme."</td>".
                "<td>Algorithm Correct, try the program</td>";
                break;
            case 3: echo "<tr class='wrong'>".
                "<td>".$index."</td>".
                "<td><a href='#' id='".$row."'>".$pnme."</td>".
                "<td>Worng Program!</td>";
                break;
            case 4: echo "<tr class='accepted'>".
                "<td>".$index."</td>".
                "<td><a href='#' id='".$row."'>".$pnme."</td>".
                "<td>Solution Accepted</td>";
                break;
        }
        $index++;
    }
    ?>
</table>

<div id="msgs" >
    <table class="table table-hover" id="m">
        <tr>
            <th>Messages</th>
        </tr>
        <tr>
            <td><p>Message 1mmmmmmmm   mmmmm mmmm mmmmm</p></td>
        </tr>
    </table>
</div>