<?php
/* Template Name: Horraires et tarifs */
get_header();

?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Adultes</th>
                <th>Jeunes et compétiteurs</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Mardi</td>
            <td><?= get_field('adultes_mardi') ?></td>
            <td><?= get_field('jeunes_mardi') ?></td>
        </tr>
        <tr>
            <td>Mercredi</td>
            <td><?= get_field('adultes_mercredi') ?></td>
            <td><?= get_field('jeunes_mercredi') ?></td>
        </tr>
        <tr>
            <td>Jeudi</td>
            <td><?= get_field('adultes_jeudi') ?></td>
            <td><?= get_field('jeunes_jeudi') ?></td>
        </tr>
        <tr>
            <td>Vendredi</td>
            <td><?= get_field('adultes_vendredi') ?></td>
            <td><?= get_field('jeunes_vendredi') ?></td>
        </tr>
        <tr>
            <td>Samedi</td>
            <td><?= get_field('adultes_samedi') ?></td>
            <td><?= get_field('jeunes_samedi') ?></td>
        </tr>
        <tr>
            <td>Dimanche</td>
            <td><?= get_field('adultes_dimanche') ?></td>
            <td><?= get_field('jeunes_dimanche') ?></td>
        </tr>
        </tbody>
    </table>
</div>


<?php
    get_footer();
?>