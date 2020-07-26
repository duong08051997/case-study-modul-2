
<div class="container" >

    <div class="pt-3"></div>
    <div class="row" >
        <div class=" col-sm-6 " id="detail">

            <table class="table "  >
                <thead class=" ">
                <?php if (empty($studentss)) : ?>
                    <tr>
                        <td>No data</td>
                    </tr>
                <?php else: ?>

                <tr>
                    <td style="border: none"> <img  src="<?php echo $studentss[0][0] ?>" width="150" height="150"  class="rounded-circle" alt=""> </td>
                </tr>
                <tr>
                    <td style="border: none"> Student Name: <?php echo $studentss[0][1] ?> </td>
                </tr>
                <tr>
                    <td style="border: none"> Class: <?php echo $studentss[0][2] ?> </td>
                </tr>
                <tr>
                    <td style="border: none"> Age: <?php echo $studentss[0][3] ?> </td>
                </tr>
                <tr>
                    <td style="border: none">Gender: <?php echo $studentss[0][4] ?></td>
                </tr>
                <tr>
                    <td style="border: none">Address: <?php echo $studentss[0][5] ?> </td>
                </tr>
                <?php endif; ?>
                </thead>

            </table>
            <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">BACK</button>
        </div>
        <div class="pt-3"></div>
        <div class=" col-sm-6 " id="detail">
            <table class="table table-hover " style="margin-top: 200px">
                <thead >
                <?php if (empty($studentss)) : ?>
                    <tr>
                        <td>No data</td>
                    </tr>
                <?php else: ?>
                <tr>
                    <th>Subject Name</th>
                    <th>Score</th>
                </tr>
                <?php foreach ($studentss as $key => $student): ?>

                    <tr>
                        <td style="border: none"><?php echo $student[6] ?></td>
                        <td style="border: none"><?php echo $student["score"] ?></td>
                    </tr>
                <?php endforeach; ?>

                <?php endif; ?>
                </thead>

            </table>
        </div>
    </div>
</div>