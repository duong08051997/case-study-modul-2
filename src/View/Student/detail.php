
<div class="pt-3"></div>
<div class=" col-lg-4" id="detail">

<table class="table  " >
    <thead class=" ">
    <?php if (empty($studentss)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>

        <tr>
            <td style="" > Student Name: <?php echo $studentss[0][0] ?> </td>
        </tr>
        <tr>
            <td> Class: <?php echo $studentss[0][1] ?> </td>
        </tr>
        <tr>
            <td> Age: <?php echo $studentss[0][2] ?> </td>
        </tr>
        <tr>
            <td>Gender: <?php echo $studentss[0][3] ?></td>
        </tr>
        <tr>
            <td>Address: <?php echo $studentss[0][4] ?> </td>
        </tr>
        </thead>
    </table>
             </div>
    <!--        --><?php //foreach ($   studentss as $key => $student): ?>
                          <!--            <tr>-->
        <!--                <td>--><?php //echo $student[5] ?><!--</td>-->
        <!--            </tr>-->
        <!--            <tr>-->
        <!--                <td>--><?php //echo $student["score"] ?><!--</td>-->
        <!--            </tr>-->
        <!--        --><?php //endforeach; ?>
        <!---->
    <?php endif; ?>
<!--    </thead>-->
<!--</table>-->
<!--                 </div>    -->