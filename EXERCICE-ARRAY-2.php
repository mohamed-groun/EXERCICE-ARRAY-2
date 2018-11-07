

<table border="3">
    <th> Nom constant</th>
    <th>valeur</th>

    <?php
    $tabConstant=get_defined_constants();
foreach ($tabConstant as $item=> $value) { ?>
    <tr>
        <td> <?php  echo $item  ?> </td>
        <td> <?php  echo $value ?></td>
    </tr>
    <?php
}
?>
