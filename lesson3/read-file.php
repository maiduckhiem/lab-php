<?php
$myfile = fopen("products.txt", 'r');
$data = [];
while(!feof($myfile)) {
    $line = fgets($myfile);
    $data[] = explode('|', $line);
}
fclose($myfile);
?>
<table border="1">
    <label for="">
        <input type="text">
        <button>tìm kiếm</button>
    </label>
    <thead>
        <th>tên cột</th>
        <th>so sánh</th>
        <th>giá trị</th>
    </thead>
    <body>
        <tr>
            <td><select name="" id=""></select></td>
        </tr>
    </body>
</table>
<table border="1">
    <thead>
        <th>STT</th>
        <th>Tên</th>
        <th>Anh</th>
        <th>MSSV</th>
    </thead>
    <tbody>
    <?php foreach ($data as $line):?>
        <tr>
            <td><?= $line[0] ?></td>
            <td><?= $line[1] ?></td>
            <td><img src="<?= $line[2] ?>" alt=""></td>
            <td><?= $line[2] ?></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>