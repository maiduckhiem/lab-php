<?php
$arr = [
    // 'name'=>'nguyen van a',
    // 'age' => 20,
    // ['dhaj' => 'trịnh văn bô', => 'ha' =>21 ,'address' => 'ha tay'],
    ['name' => 'trịnh văn bô','age' => 333, 'address' => 'ha nam'],
    ['name' => 'trịnh văn bô','age' => 333, 'address' => 'ha nam'],
    ['name' => 'trịnh văn bô','age' => 333, 'address' => 'ha nam'],

];
?>
 <table border="1">
    <thead>
                <th>name</th>
                <th>so</th>
                <th>dia chi</th>
    </thead>

    <?php foreach($arr as $key => $value)?>
        <tr>
            <td><?= $value['name']?></td>
            <td><?= $value['age']?></td>
            <td><?= $value['address']?></td>
        </tr>
    <?php endforeach ?> 
 </table>




<!-- <ul>
<!-- <?php foreach($arr as $key => $value) :?>
        <table border="1">
                <!-- <li>
                <!-- <?= $value['name']?>-<?= $value ['ha']?>-<?= $value ['address']?> -->
                    
                </li> -->
                    <tr>    
                           <td><?= $value ['name']?></td>
                            <td><?= $value ['age']?></td>
                            <td><?= $value ['address']?></td>
                    </tr>
        </table>
<?php endforeach ?> -->
</ul> -->