<?php
/**
 * Template Name: Jeu
 */
get_header()
?>

<main>
    <section class="cd-jeu-all">
        <div class="cd-lvl">
            <div class="lvl" data-lvl="1">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 1</h3>
            </div>
            <div class="lvl" data-lvl="2">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 2</h3>
            </div>
            <div class="lvl" data-lvl="3">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 3</h3>
            </div>
            <div class="lvl" data-lvl="4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 4</h3>
            </div>
            <div class="lvl" data-lvl="5">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 5</h3>
            </div>
            <div class="lvl" data-lvl="6">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 6</h3>
            </div>
            <div class="lvl" data-lvl="7">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 7</h3>
            </div>
            <div class="lvl" data-lvl="8">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 8</h3>
            </div>
            <div class="lvl" data-lvl="1">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 9</h3>
            </div>
            <div class="lvl" data-lvl="2">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 10</h3>
            </div>
            <div class="lvl" data-lvl="3">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 11</h3>
            </div>
            <div class="lvl" data-lvl="4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 12</h3>
            </div>
            <div class="lvl" data-lvl="5">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 13</h3>
            </div>
            <div class="lvl" data-lvl="6">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 14</h3>
            </div>
            <div class="lvl" data-lvl="7">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 15</h3>
            </div>
            <div class="lvl" data-lvl="8">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 16</h3>
            </div>
            <div class="lvl" data-lvl="1">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 17</h3>
            </div>
            <div class="lvl" data-lvl="2">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 18</h3>
            </div>
            <div class="lvl" data-lvl="3">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 19</h3>
            </div>
            <div class="lvl" data-lvl="4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 20</h3>
            </div>
            <div class="lvl" data-lvl="5">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 21</h3>
            </div>
            <div class="lvl" data-lvl="6">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 22</h3>
            </div>
            <div class="lvl" data-lvl="7">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 23</h3>
            </div>
            <div class="lvl" data-lvl="8">
                <img src="<?= get_template_directory_uri() ?>/assets/images/png/miniature-lvl.png" alt="Miniature level">
                <h3>Level 24</h3>
            </div>
        </div>
        <div id="container_jeu"></div>
        <div class="modal_jeu">
            <form action="#" method="post">
            <input type="hidden" name="credit" value="0" id="credit">
            <input type="submit" value="débloquer votre case du calendrier" name="envoyer">
        </form>
        </div>
    </section>
    
</main>


<?php get_footer() ?>
<?php
        $result = $wpdb->get_results( "SELECT user_value, user_id FROM `wp_prflxtrflds_user_field_data`");
        $credit = $result[0]->user_value;
        $user_id = $result[0]->user_id;
        if (isset($_POST['envoyer'])) {
            $credit_lvl = $_POST['credit'];
            if ($credit < $credit_lvl) {
                $table = 'wp_prflxtrflds_user_field_data';
                $data = array('user_value'=>$credit_lvl);
                $where = array('user_id'=>$user_id);
                $wpdb->update( $table, $data, $where);
            }
            echo '<script>', 'window.location.href = "http://localhost:10004/calendrier/"', '</script>';
        }
    ?>