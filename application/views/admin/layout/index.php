<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?php $this->load->view('user/layout/head'); ?>
    <body ng-app="lacaco" onload="autolocation()">
       
            <?php $this->load->view('user/layout/' . $header); ?>
            <?php $this->load->view('user/layout/main_view', $data); ?>
            <?php $this->load->view('user/layout/footer'); ?>
            <?php $this->load->view('user/layout/js'); ?>
        </div>
    </body>
</html>